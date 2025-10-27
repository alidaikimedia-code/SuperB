document.addEventListener('DOMContentLoaded', function() {
  const filterBar = document.querySelector('.filter-bar');
  const toggleBtn = document.getElementById('toggle-filter-btn');

  function isMobileTablet() {
    return window.innerWidth <= 900;
  }

  function updateFilterVisibility() {
    if (isMobileTablet()) {
      toggleBtn.style.display = 'block';
      filterBar.classList.remove('active');
    } else {
      toggleBtn.style.display = 'none';
      filterBar.classList.add('active'); // Always show on desktop
    }
  }

  toggleBtn.addEventListener('click', function() {
    if (filterBar.classList.contains('active')) {
      filterBar.classList.remove('active');
      toggleBtn.textContent = "Show Filters";
    } else {
      filterBar.classList.add('active');
      toggleBtn.textContent = "Hide Filters";
    }
  });

  window.addEventListener('resize', updateFilterVisibility);

  updateFilterVisibility(); // Run on load
});
// --- 0. Clean and Normalize Cup Values ---
function cleanCup(cup) {
  cup = (cup || '').replace(/real/gi, '').replace(/\s+/g, '').toUpperCase();
  // Already in form "32B", "34C+", etc
  if (/^\d{2}[B-E][+-]?$/.test(cup)) return cup;
  // Only single letter (optionally + or -)
  let match = cup.match(/^([B-E])([+-]?)$/);
  if (match) {
    let letter = match[1], sign = match[2] || '';
    switch (letter) {
      case 'B': return '32B' + sign;
      case 'C': return '34C' + sign;
      case 'D': return '36D' + sign;
      case 'E': return '36E' + sign;
      default: return letter + sign;
    }
  }
  // Fallback (for anything else)
  return cup;
}

// Run this ONCE after loading your models array!
models.forEach(model => {
  model.cup_cleaned = cleanCup(model.cup);
});

function getCleanNumber(value) {
  if (!value) return null;
  let n = String(value).replace(/[^\d.]/g, '');
  return n ? parseFloat(n) : null;
}
// Get unique cup letters (B/C/D...) from all models, ignore "REAL", numbers, etc.
function getUniqueCups(models) {
  const cupSet = new Set();
  models.forEach(m => {
    if (m.cup_cleaned) {
      // Always use first valid letter as cup filter
      let match = m.cup_cleaned.match(/([B-E])/);
      if (match) cupSet.add(match[1].toUpperCase());
    }
  });
  return Array.from(cupSet).sort();
}

// Get all unique tags from models
function getUniqueTags(models) {
  // const tagSet = new Set();
  // models.forEach(m => {
  //   if (Array.isArray(m.tags)) m.tags.forEach(tag => tagSet.add(tag));
  // });
  // return Array.from(tagSet).sort();
  return [
    "Big Booty",
    "Big Tits",
    "Energetic",
    "Flirty",
    "Charm Smile",
    "GFE",
    "KOL",
    "Long Legs",
    "Shyness",
    "Student",
    "Tattoos",
    "Tiny waist"
  ];
}

// --- 2. Render Filter Buttons ---
function renderFilters(models) {
  // Type (cat-group)
  const catGroup = document.getElementById('cat-group');
  catGroup.innerHTML = `
    <button data-cat="all" class="active">All</button>
    <button data-cat="p">Party Only</button>
    <button data-cat="pns">Party + Short</button>
    <button data-cat="s">Short Only</button>
  `;
// Cup
  const cupGroup = document.getElementById('cup-group');
  const cups = getUniqueCups(models);
  cupGroup.innerHTML = `<button data-cup="all" class="active">All</button>` +
    cups.map(cup => `<button data-cup="${cup}">${cup}</button>`).join('');
// const cupGroup = document.getElementById('cup-group');
// const cups = getUniqueCups(models); // returns array like ["B", "C", "D", "E"]

// function renderCupButtons() {
//   const isMobileTablet = window.innerWidth <= 900;
//   let html = '';

//   if (!isMobileTablet) {
//     // --- Desktop: first row "All" & "B", second row rest ---
//     let firstRow = `<button data-cup="all" class="active">All</button>`;
//     if (cups[0]) firstRow += `<button data-cup="${cups[0]}">${cups[0]}</button>`;

//     let secondRow = '';
//     if (cups.length > 1) {
//       secondRow = `<div class="row-2">` +
//         cups.slice(1).map(cup => `<button data-cup="${cup}">${cup}</button>`).join('') +
//         `</div>`;
//     }

//     html = `
//       <div class="btn-cup">
//         ${firstRow}
//         ${secondRow}
//       </div>
//     `;
//   } else {
//     // --- Mobile/Tablet: flat, all in .btn-group-cup ---
//     html = `<div class="btn-cup">` +
//       [`<button data-cup="all" class="active">All</button>`]
//         .concat(cups.map(cup => `<button data-cup="${cup}">${cup}</button>`))
//         .join('') +
//       `</div>`;
//   }

//   cupGroup.innerHTML = html;
// }

// // Call once at start
// renderCupButtons();

// // Optionally, auto-update on resize
// window.addEventListener('resize', () => {
//   renderCupButtons();
// });

// Height (multi-select)
  document.getElementById('height-group').innerHTML = `
    <button data-height="all" class="active">All</button>
    <button data-height="lt160">Below 160cm</button>
    <button data-height="160-170">160-170cm</button>
    <button data-height="gt170">Above 170cm</button>
  `;

  // Weight (multi-select)
  document.getElementById('weight-group').innerHTML = `
    <button data-weight="all" class="active">All</button>
    <button data-weight="lt50">Below 50kg</button>
    <button data-weight="50-60">50-60kg</button>
  `;
  // <button data-weight="gt60">Above 60kg</button>
  // Tags
  const tagsList = document.getElementById('tags-list');
  const tags = getUniqueTags(models);
  tagsList.innerHTML = tags.map(tag =>
    `<button class="tag-btn" data-tag="${tag}">${tag}</button>`
  ).join('');
}

// --- 3. Filtering Logic ---
let filter = {
  cat: 'all',
  cups: [],
  heights: [],
  weights: [],
  ageStart: 18,
  ageEnd: 26,
  tags: []
};

function filterModels(models) {
  return models.filter(m => {
    // Category
    if (filter.cat !== 'all' && m.cat !== filter.cat) return false;

    // Cup 多选
    if (filter.cups.length) {
      let match = (m.cup_cleaned || '').match(/([B-E])/);
      let cupLetter = match ? match[1].toUpperCase() : '';
      if (!filter.cups.includes(cupLetter)) return false;
    } else {
    // Age
      let ageNum = parseInt(String(m.age).replace(/\D+/g, ''), 10); // works for 28+, " 29 ", etc
      if (!isNaN(ageNum)) {
        if (filter.ageEnd === 28) {
          if (ageNum < filter.ageStart) return false; // only min limited
        } else {
          if (ageNum < filter.ageStart || ageNum > filter.ageEnd) return false;
        }
      }
    }
    // Height (multi)
    if (filter.heights.length) {
      let h = getCleanNumber(m.height);
      if (!h) return false;
      let pass = false;
      for (let opt of filter.heights) {
        if (opt === 'lt160' && h < 160) pass = true;
        if (opt === '160-170' && h >= 160 && h <= 170) pass = true;
        if (opt === 'gt170' && h > 170) pass = true;
      }
      if (!pass) return false;
    }

    // Weight (multi)
    if (filter.weights.length) {
      let w = getCleanNumber(m.weight);
      if (!w) return false;
      let pass = false;
      for (let opt of filter.weights) {
        if (opt === 'lt50' && w < 50) pass = true;
        if (opt === '50-60' && w >= 50 && w <= 60) pass = true;
        // if (opt === 'gt60' && w > 60) pass = true;
      }
      if (!pass) return false;
    }

    // Tags (all selected tags must be in model's tags)
    if (filter.tags.length) {
      if (!filter.tags.every(tag => (m.tags || []).includes(tag))) return false;
    }
    return true;
  });
}

// --- 4. Display Models ---
function displayModels(models) {
  const container = document.getElementById('models-list');
  container.innerHTML = '';
  const isMobileTablet = window.innerWidth <= 900;
  models.forEach(model => {
    const bookText = encodeURIComponent(`Hi, I want to book ${model.name} - ${model.id}`);
    const link = `https://t.me/m/PY3Xovo4N2Vl?text=${bookText}`;
    let featureClass = (model.featureClass && model.featureClass.trim() !== '') ? model.featureClass : model.type;

    // Card HTML
    const cardHTML = `
      <article class="card-standard">
        <div class="productCard-mainPic">
          <img 
            alt="${model.name}" 
            src="${model.image}" 
            data-imgsrc="${model.image}" 
            onerror="this.onerror=null;this.src='/wp-content/uploads/2024/12/Party-Girl-Logo-01.png';this.removeAttribute('data-imgsrc');"
            ${isMobileTablet ? '' : `onclick="if(this.hasAttribute('data-imgsrc')) showImgPreview(this.getAttribute('data-imgsrc'))"`}
          >
          <div class="productCard-featureClass-my">${featureClass}</div>
        </div>
        <div class="model-info">
          <div class="model-details">
            <div class="main-desc">
              <div class="model-id">${model.id}</div>
              <div class="model-name">${model.name}</div>
            </div>
            <div class="short-desc">
              <div class="model-cup">${model.cup_cleaned || ''}</div>
              <div class="model-hw">${model.age} /${model.heightWeight}</div>
            </div>
          </div>
          <div class="model-tags">
            ${(model.tags || []).map(tag => `<span class="tag">${tag}</span>`).join('')}
          </div>
        </div>
        ${isMobileTablet ? '' : `<a href="${link}" class="book-now-btn" target="_blank">Book Now!</a>`}
      </article>
    `;

    // If mobile/tablet, wrap with <a>
    if (isMobileTablet) {
      container.innerHTML += `
        <div class="col-xl-3 col-lg-4 col-md-4 col-6">
          <a href="${link}" target="_blank" style="text-decoration:none;color:inherit;">
            ${cardHTML}
          </a>
        </div>
      `;
    } else {
      container.innerHTML += `
        <div class="col-xl-3 col-lg-4 col-md-4 col-6">
          ${cardHTML}
        </div>
      `;
    }
  });
}


// --- 5. Filter Event Handlers ---
function setupFilterHandlers(models) {
  // Type
  document.getElementById('cat-group').onclick = function(e) {
    if (e.target.dataset.cat !== undefined) {
      filter.cat = e.target.dataset.cat;
      [...this.children].forEach(btn => btn.classList.remove('active'));
      e.target.classList.add('active');
      displayModels(filterModels(models));
    }
  };

  // Cup
  document.getElementById('cup-group').onclick = function(e) {
  if (e.target.dataset.cup !== undefined) {
    const cup = e.target.dataset.cup;
    const btns = this.querySelectorAll('button[data-cup]');
    if (cup === 'all') {
      // Clear cups, activate only All, remove active from others
      filter.cups = [];
      btns.forEach(btn => btn.classList.remove('active'));
      e.target.classList.add('active');
    } else {
      e.target.classList.toggle('active');
      if (e.target.classList.contains('active')) {
        filter.cups.push(cup);
        // Remove All active if any other is chosen
        this.querySelector('[data-cup="all"]').classList.remove('active');
      } else {
        filter.cups = filter.cups.filter(c => c !== cup);
        // If nothing is selected, activate All
        if (filter.cups.length === 0) {
          this.querySelector('[data-cup="all"]').classList.add('active');
        }
      }
      // Always deactivate All if any cup is selected
      if (filter.cups.length) {
        this.querySelector('[data-cup="all"]').classList.remove('active');
      }
    }
    displayModels(filterModels(models));
  }
};


  // Height (multi)
  document.getElementById('height-group').onclick = function(e) {
    if (e.target.dataset.height !== undefined) {
      const val = e.target.dataset.height;
      if (val === 'all') {
        filter.heights = [];
        [...this.children].forEach(btn => btn.classList.remove('active'));
        e.target.classList.add('active');
      } else {
        e.target.classList.toggle('active');
        if (e.target.classList.contains('active')) {
          filter.heights.push(val);
          this.querySelector('[data-height="all"]').classList.remove('active');
        } else {
          filter.heights = filter.heights.filter(v => v !== val);
          if (filter.heights.length === 0) {
            this.querySelector('[data-height="all"]').classList.add('active');
          }
        }
      }
    displayModels(filterModels(models));
  }
  };

  // Weight (multi)
  document.getElementById('weight-group').onclick = function(e) {
    if (e.target.dataset.weight !== undefined) {
      const val = e.target.dataset.weight;
      if (val === 'all') {
        filter.weights = [];
        [...this.children].forEach(btn => btn.classList.remove('active'));
        e.target.classList.add('active');
      } else {
        e.target.classList.toggle('active');
        if (e.target.classList.contains('active')) {
          filter.weights.push(val);
          this.querySelector('[data-weight="all"]').classList.remove('active');
        } else {
          filter.weights = filter.weights.filter(v => v !== val);
          if (filter.weights.length === 0) {
            this.querySelector('[data-weight="all"]').classList.add('active');
          }
        }
      }
      displayModels(filterModels(models));
    }
  };

  // Tags (multi)
  document.getElementById('tags-list').onclick = function(e) {
    if (e.target.classList.contains('tag-btn')) {
      const tag = e.target.dataset.tag;
      e.target.classList.toggle('active');
      if (e.target.classList.contains('active')) {
        filter.tags.push(tag);
      } else {
        filter.tags = filter.tags.filter(t => t !== tag);
      }
      displayModels(filterModels(models));
    }
  };
}

// --- 6. Age slider logic helper (modular, can be above or below) ---
function setupAgeSlider(onChange) {
  const minAge = 18;
  const maxAge = 28;
  const rangeYears = 5;
  let minValue = 18;
  let maxValue = 26;

  // Thumb size and offset
  const THUMB_SIZE = 15; // px
  const THUMB_OFFSET = THUMB_SIZE / 2;

  const slider = document.getElementById('slider');
  const track = slider.querySelector('.slider-track');
  const range = slider.querySelector('.slider-range');
  const thumbMin = document.getElementById('thumbMin');
  const thumbMax = document.getElementById('thumbMax');
  const thumbMinVal = document.getElementById('thumbMinVal');
  const thumbMaxVal = document.getElementById('thumbMaxVal');

  function getPercent(age) {
    return (age - minAge) / (maxAge - minAge);
  }

  function updateUI(activeDrag, dragValue) {
  let minPct = getPercent(minValue);
  let maxPct = getPercent(maxValue);

  // Thumb position: needs - offset to center
  if (activeDrag === 'min' && typeof dragValue === 'number') {
    minPct = getPercent(dragValue);
    thumbMin.style.left = `calc(${minPct * 100}% - 7.5px)`;
    thumbMinVal.textContent = Math.round(dragValue);
    // Value bubble: just X%
    thumbMinVal.style.left = `${minPct * 100}%`;
    thumbMinVal.style.transform = 'translateX(-50%)';
  } else {
    thumbMin.style.left = `calc(${minPct * 100}% - 7.5px)`;
    thumbMinVal.textContent = minValue;
    thumbMinVal.style.left = `${minPct * 100}%`;
    thumbMinVal.style.transform = 'translateX(-50%)';
  }

  if (activeDrag === 'max' && typeof dragValue === 'number') {
    maxPct = getPercent(dragValue);
    thumbMax.style.left = `calc(${maxPct * 100}% - 7.5px)`;
    thumbMaxVal.textContent = dragValue === maxAge ? "28+" : Math.round(dragValue);
    thumbMaxVal.style.left = `${maxPct * 100}%`;
    thumbMaxVal.style.transform = 'translateX(-50%)';
  } else {
    thumbMax.style.left = `calc(${maxPct * 100}% - 7.5px)`;
    thumbMaxVal.textContent = maxValue === maxAge ? "28+" : maxValue;
    thumbMaxVal.style.left = `${maxPct * 100}%`;
    thumbMaxVal.style.transform = 'translateX(-50%)';
  }

  // Range bar
  range.style.left = (minPct * 100) + "%";
  range.style.width = ((maxPct - minPct) * 100) + "%";
}


  updateUI();

  let drag = null;

  function onThumbDown(e, which) {
    e.preventDefault();
    drag = {which, startX: (e.touches ? e.touches[0].clientX : e.clientX)};
    document.body.style.userSelect = "none";
    document.body.style.touchAction = "none";
  }
  function onThumbMove(e) {
    if (!drag) return;
    if (e.cancelable) e.preventDefault();

    let x = e.touches ? e.touches[0].clientX : e.clientX;
    let rect = track.getBoundingClientRect();
    let percent = Math.max(0, Math.min(1, (x - rect.left) / rect.width));
    let age = percent * (maxAge - minAge) + minAge;

    if (drag.which === 'min') {
      let dragMin = Math.max(minAge, Math.min(age, maxAge - rangeYears));
      let minAllowedMax = dragMin === 18 ? 22 : dragMin + rangeYears;
      let displayMax = Math.max(minAllowedMax, maxValue);
      if (displayMax > maxAge) displayMax = maxAge;
      if (dragMin > displayMax - rangeYears && dragMin > 18) dragMin = displayMax - rangeYears;
      updateUI('min', dragMin);
      drag.lastValue = Math.round(dragMin);
    } else {
      let minMax = (minValue === 18) ? 22 : minValue + rangeYears;
      let dragMax = Math.min(maxAge, Math.max(age, minMax));
      let displayMin = Math.min(dragMax - rangeYears, minValue);
      if (displayMin < minAge) displayMin = minAge;
      if (dragMax < displayMin + rangeYears && minValue > 18) dragMax = displayMin + rangeYears;
      updateUI('max', dragMax);
      drag.lastValue = Math.round(dragMax);
    }
  }
  function onThumbUp(e) {
    if (!drag) return;
    if (drag.which === 'min') {
      minValue = drag.lastValue;
      if (minValue === 18) {
        maxValue = Math.max(maxValue, 22);
        if (maxValue < 22) maxValue = 22;
      } else {
        maxValue = Math.max(minValue + rangeYears, maxValue);
        if (maxValue > maxAge) maxValue = maxAge;
        if (minValue > maxValue - rangeYears) minValue = maxValue - rangeYears;
      }
    } else {
      if (minValue === 18) {
        maxValue = drag.lastValue;
        if (maxValue < 22) maxValue = 22;
      } else {
        maxValue = drag.lastValue;
        minValue = Math.min(maxValue - rangeYears, minValue);
        if (minValue < minAge) minValue = minAge;
        if (maxValue < minValue + rangeYears) maxValue = minValue + rangeYears;
      }
    }
    drag = null;
    document.body.style.userSelect = "";
    document.body.style.touchAction = "";
    updateUI();
    onChange(minValue, maxValue);
  }

  thumbMin.addEventListener('mousedown', e => onThumbDown(e, 'min'));
  thumbMax.addEventListener('mousedown', e => onThumbDown(e, 'max'));
  thumbMin.addEventListener('touchstart', e => onThumbDown(e, 'min'), {passive:false});
  thumbMax.addEventListener('touchstart', e => onThumbDown(e, 'max'), {passive:false});
  window.addEventListener('mousemove', onThumbMove);
  window.addEventListener('touchmove', onThumbMove, {passive:false});
  window.addEventListener('mouseup', onThumbUp);
  window.addEventListener('touchend', onThumbUp);

  updateUI();
}

// --- 7. Image Preview Function ---
function showImgPreview(imgSrc) {
  // Remove any existing modal first
  let old = document.getElementById('imgPreviewModal');
  if (old) old.remove();

  // Create modal overlay
  let modal = document.createElement('div');
  modal.id = 'imgPreviewModal';
  modal.style.cssText = `
    position:fixed;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.85);
    display:flex;align-items:center;justify-content:center;z-index:10000;
  `;

  // Create close button
  let closeBtn = document.createElement('button');
  closeBtn.innerHTML = '&times;';
  closeBtn.style.cssText = `
    position:absolute;top:32px;right:32px;
    font-size:36px;background:none;border:none;color:white;cursor:pointer;z-index:10001;
    width:48px;height:48px;display:flex;align-items:center;justify-content:center;
    border-radius:24px;transition:background 0.2s;
  `;
  closeBtn.onmouseenter = () => { closeBtn.style.background = 'rgba(255,255,255,0.1)'; };
  closeBtn.onmouseleave = () => { closeBtn.style.background = 'none'; };
  closeBtn.onclick = e => {
    e.stopPropagation();
    modal.remove();
  };

  // Modal closes when clicking background (but not the image or button)
  modal.onclick = function(e) {
    if (e.target === modal) modal.remove();
  };

  // The preview image
  const img = document.createElement('img');
  img.src = imgSrc;
  img.style.maxWidth = '90vw';
  img.style.maxHeight = '90vh';
  img.style.boxShadow = '0 4px 32px 0 rgba(0,0,0,0.45)';
  img.onclick = e => e.stopPropagation();

  modal.appendChild(closeBtn);
  modal.appendChild(img);
  document.body.appendChild(modal);
}



// --- 8. Initialize Filter System ---
renderFilters(models);
setupFilterHandlers(models);
displayModels(models);
setupAgeSlider(function(minVal, maxVal) {
  filter.ageStart = minVal;
  filter.ageEnd = (maxVal >= 28) ? 28 : maxVal; // always just 28 if 28+
  displayModels(filterModels(models));
});
