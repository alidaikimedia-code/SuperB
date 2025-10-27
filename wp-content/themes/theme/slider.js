const sliderContainer = document.querySelector('.slider-container');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
let totalCards = sliderContainer.children.length;
let autoSwipeInterval;

// Dynamically calculate the card width
function getCardWidth() {
  return sliderContainer.children[0].offsetWidth; // Get width of first card
}

function updateSlider() {
  const cardWidth = getCardWidth();
  const offset = -currentIndex * cardWidth;
  sliderContainer.style.transform = `translateX(${offset}px)`;
}

// Function to move to the next slide automatically
function autoSwipe() {
  autoSwipeInterval = setInterval(() => {
    if (currentIndex < totalCards - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Loop back to the first slide
    }
    updateSlider();
  }, 2000); // Change slide every 3 seconds
}

// Function to reset autoSwipe when user interacts
function resetAutoSwipe() {
  clearInterval(autoSwipeInterval);
  autoSwipe(); // Restart the interval
}

// Button Event Listeners
prevBtn.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = totalCards - 1; // Loop back to the last slide
  }
  updateSlider();
  resetAutoSwipe();
});

nextBtn.addEventListener('click', () => {
  if (currentIndex < totalCards - 1) {
    currentIndex++;
  } else {
    currentIndex = 0; // Loop back to the first slide
  }
  updateSlider();
  resetAutoSwipe();
});

// Touch Gesture Handling
let touchStartX = 0;
let touchEndX = 0;

sliderContainer.addEventListener('touchstart', (e) => {
  touchStartX = e.touches[0].clientX; // Get starting X position
  clearInterval(autoSwipeInterval); // Pause auto-swipe
});

sliderContainer.addEventListener('touchend', (e) => {
  touchEndX = e.changedTouches[0].clientX; // Get ending X position
  handleGesture();
  resetAutoSwipe(); // Resume auto-swipe
});

function handleGesture() {
  const swipeThreshold = 50; // Minimum distance to trigger a swipe

  if (touchEndX < touchStartX - swipeThreshold && currentIndex < totalCards - 1) {
    // Swipe Left
    currentIndex++;
  } else if (touchEndX > touchStartX + swipeThreshold && currentIndex > 0) {
    // Swipe Right
    currentIndex--;
  } else if (touchEndX > touchStartX + swipeThreshold) {
    // If at the first slide, loop to the last slide
    currentIndex = totalCards - 1;
  } else if (touchEndX < touchStartX - swipeThreshold) {
    // If at the last slide, loop back to the first slide
    currentIndex = 0;
  }
  updateSlider();
}

// Handle window resize
window.addEventListener('resize', updateSlider);

// Initialize slider and start auto-swiping
updateSlider();
autoSwipe();
