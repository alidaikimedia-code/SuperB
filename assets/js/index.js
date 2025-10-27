// 1. 先加 cleanCup 函数（建议放最上面）
function cleanCup(cup) {
  cup = (cup || '').replace(/real/gi, '').replace(/\s+/g, '').toUpperCase();
  if (/^\d{2}[B-E][+-]?$/.test(cup)) return cup;
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
  return cup;
}

//const top10Order = ["A02", "A29", "B33", "B22", "A63", "A70", "A38", "B05", "A04", "A07"];
const top10Order = ["J16", "J03", "J10", "J19", "J08", "J01", "J21", "J05", "J11", "J09"];
const altTags = "Party Girl Model"; // Or use your altTags logic if needed
//const originClass = "my"; // Or logic based on your use case
const originClass = "jp"; // Or logic based on your use case
const isMobileTablet = window.innerWidth <= 900;
const container = document.getElementById('top10-wrapper');
const top10 = top10Order
  //.map(id => (models.local.data || []).find(m => m.id === id))
  .map(id => (models.japan.data || []).find(m => m.id === id))
  .filter(Boolean);

// 2. 赋值 cup_cleaned（重点！加在这里就够）
top10.forEach(model => {
  model.cup_cleaned = cleanCup(model.cup);
});

function toTagKey(tag) {
  if (tag.toUpperCase() === tag) {
    return tag.toLowerCase();
  }
  return tag
    .replace(/[\s-_]+/g, '')
    .replace(/^([A-Z])/, m => m.toLowerCase());
}



container.innerHTML = top10.map(model => {
    const featureClass = (model.featureClass && model.featureClass.trim() !== '') ? model.featureClass : model.type;
    const tgLink = (window.APP_CONFIG && window.APP_CONFIG.telegramLink) || '#';
    const link = `${tgLink}?text= ${i18nModels.bookingMsg} ${encodeURIComponent(model.id + ' - ' + model.name)}`;
    const cardHTML = `
    <article class="card-standard">
        <div class="productCard-mainPic">
        <img 
            alt="${altTags}" 
            src="${model.image}" 
            data-imgsrc="${model.image}" 
            style="object-fit:cover;"
            onerror="this.onerror=null;
            this.src='/wp-content/uploads/2024/12/Party-Girl-Logo-01.png';
            this.style.objectFit='contain';"
            ${isMobileTablet ? '' : `onclick="if(this.hasAttribute('data-imgsrc')) showImgPreview(this.getAttribute('data-imgsrc'))"`}
        >
        <div class="productCard-featureClass-${originClass}">${featureClass}</div>
        </div>
        <div class="model-wrapper">
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
        </div>
        <div class="model-tags">
            ${(model.tags || []).map(tag => {
                const key = toTagKey(tag);
                return `<span class="tag" data-tag="${key}">${i18nModels[key] || tag}</span>`;
            }).join('')}
        </div>
        </div>
        <div class="model-actions">
            ${isMobileTablet ? '' : `<a href="${link}" class="book-now-btn" target="_blank">${i18nCommon.book_now}!</a>`}
            ${model.link ? `<a href="${model.link}" class="view-more-btn">View More</a>` : ''}
            ${model.chineseLink ? `<a href="${model.chineseLink}" class="view-more-btn-chinese">查看更多</a>` : ''}
        </div>
    </article>
    `;

    // If mobile/tablet, wrap with <a>
    if (isMobileTablet) {
    return `
        <div class="swiper-slide col-xl-3 col-lg-4 col-md-4 col-6">
        <a href="${link}" target="_blank" style="text-decoration:none;color:inherit;">
            ${cardHTML}
        </a>
        </div>
    `;
    } else {
    return `
        <div class="swiper-slide col-xl-3 col-lg-4 col-md-4 col-6">
        ${cardHTML}
        </div>
    `;
    }
    }).join('');

// Swiper init
const topswiper = new Swiper('.top10-swiper', {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 0,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  breakpoints: {
    320: { slidesPerView: 2 },
    500: { slidesPerView: 3 },
    768: { slidesPerView: 4 },
    1024: { slidesPerView: 5 }
  }
});