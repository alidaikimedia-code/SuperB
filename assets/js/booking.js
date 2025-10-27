const data = {
  nationality: ['local', 'vietnam', 'china', 'korea', 'europe', 'japan'],
  location: ['kl', 'penang', 'jb'],
  cup: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
  age: ['18-20', '21-25', '26-30'],
  drink: ['1', '2', '3', '4', '5'],
  personality: [
    'funny', 'cute', 'sexy', 'student', 'mature', 'youngWife',
    'slim', 'beautyLegs', 'niceBoobs', 'bigBreast'
  ],
  package: [
    'partyOnly', 'directShot', 'partynShot','directOvernight', 'partyOvernight'
  ]
};

// Multi-select config
const multiSelectFields = {
  nationality: true,
  cup: true,
  age: true,
  personality: true,
  package: true
};

// Render button groups
function renderButtons(rowId, options, multi = false) {
  const row = document.getElementById(rowId);
  row.innerHTML = '';
  options.forEach(opt => {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.textContent = i18n?.[opt] || opt;
    btn.onclick = function () {
      if (multi) {
        btn.classList.toggle('active');
      } else {
        [...row.children].forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      }
      updatePreview();
    };
    row.appendChild(btn);
  });
}

// Render fields
renderButtons('nationalityRow', data.nationality, multiSelectFields.nationality);
renderButtons('locationRow', data.location, false);
renderButtons('cupRow', data.cup, multiSelectFields.cup);
renderButtons('ageRow', data.age, multiSelectFields.age);
renderButtons('drinkRow', data.drink, false);
renderButtons('personalityRow', data.personality, multiSelectFields.personality);
renderButtons('packageRow', data.package, multiSelectFields.package);

// Helper: Get selected value(s)
function getSelected(rowId, multi = false) {
  const btns = document.querySelectorAll(`#${rowId} .active`);
  if (multi) {
    return [...btns].map(b => b.textContent);
  }
  return btns.length ? btns[0].textContent : '';
}

// Format age ranges: merges continuous ranges
function formatAge(selectedAges) {
  if (!selectedAges || !selectedAges.length) return '';
  // Sort by min value
  const getMin = s => parseInt(s.split('-')[0]);
  const getMax = s => parseInt(s.split('-')[1]);
  const sorted = selectedAges.slice().sort((a, b) => getMin(a) - getMin(b));
  let merged = [sorted[0]];
  for (let i = 1; i < sorted.length; i++) {
    const prev = merged[merged.length - 1];
    if (getMax(prev) + 1 === getMin(sorted[i])) {
      // Merge prev and current
      merged[merged.length - 1] = prev.split('-')[0] + '-' + getMax(sorted[i]);
    } else {
      merged.push(sorted[i]);
    }
  }
  return merged.join(' & ');
}

// Preview update
function updatePreview() {
  const preview = document.getElementById('previewRow');
  // If you have modelName input, include it here
  // const modelName = document.getElementById('modelName').value.trim();
  const cup = getSelected('cupRow', true).join(', ');
  const nationality = getSelected('nationalityRow', true).join(', ');
  const location = getSelected('locationRow');
  const ageArr = getSelected('ageRow', true);
  const ageDisplay = formatAge(ageArr);
  const drink = getSelected('drinkRow');
  const personality = getSelected('personalityRow', true).join(', ');
  const pkg = getSelected('packageRow', true).join(', ');
  const more = document.getElementById('moreInput').value.trim();

  const vals = [
    cup && `${i18n.cup}: ${cup}`,
    nationality && `${i18n.nationality}: ${nationality}`,
    location && `${i18n.location}: ${location}`,
    ageDisplay && `${i18n.age}: ${ageDisplay}`,
    drink && `${i18n.drinkLvl}: ${drink}`,
    personality && `${i18n.personality}: ${personality}`,
    pkg && `${i18n.package}: ${pkg}`,
    more && `${i18n.more}: ${more}`
  ].filter(Boolean);

  preview.innerHTML = vals.length
    ? `<span style="color:#fff;"><b>${i18n.selected}:</b></span> ${vals.join(' | ')}`
    : `<span style="color:#888;">${i18n.nthselyet}</span>`;
}

// Live preview for More field
document.getElementById('moreInput').addEventListener('input', updatePreview);

updatePreview(); // Initial preview

// Reset button
document.getElementById('resetBtn').onclick = function() {
  // Uncomment if you have modelName input
  // document.getElementById('modelName').value = '';
  document.getElementById('moreInput').value = '';
  document.querySelectorAll('.btn-row button').forEach(btn => btn.classList.remove('active'));
  updatePreview();
};

// Book Now / Submit button
document.getElementById('submitBtn').onclick = function(e) {
  e.preventDefault();
  // const modelName = document.getElementById('modelName').value.trim();
  const cup = getSelected('cupRow', true);
  const nationality = getSelected('nationalityRow', true);
  const location = getSelected('locationRow');
  const ageArr = getSelected('ageRow', true);
  const ageDisplay = formatAge(ageArr);
  const drink = getSelected('drinkRow');
  const personality = getSelected('personalityRow', true).join(', ');
  const pkg = getSelected('packageRow', true);
  const more = document.getElementById('moreInput').value.trim();

  // Validate required fields
  if (!nationality.length || !location || !cup.length || !ageArr.length || !drink || !pkg.length) {
    alert(`${i18n.noselsubmit}`);
    return;
  }

  // Compose message
  let msg =
    // (modelName ? `Model: ${modelName}\n` : '') +
    `${i18n.bookingMsgTitle}\n` +
    `${i18n.nationality}: ${nationality.join(', ')}\n` +
    `${i18n.location}: ${location}\n` +
    `${i18n.cup}: ${cup.join(', ')}\n` +
    `${i18n.age}: ${ageDisplay}\n` +
    `${i18n.drinkLvl}: ${drink}\n` +
    (personality ? `${i18n.personality}: ${personality}\n` : '') +
    `${i18n.package}: ${pkg.join(', ')}\n`;
  if (more) msg += `${i18n.more}: ${more}\n`;

//   alert(msg); // For now, just show in alert
  // You can open Telegram, send to backend, etc.
  // Send to Telegram (edit to your Bot or chat link)
      const tgLink = (window.APP_CONFIG && window.APP_CONFIG.telegramLink) || '#';
      const encoded = encodeURIComponent(msg);
      const telegramURL = `${tgLink}?url=&text=${encoded}`;
      window.open(telegramURL, '_blank');
      
};
