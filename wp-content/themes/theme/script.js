// JavaScript for toggling the burger menu
const mobileMenu = document.getElementById("mobile-menu");
const navLinks = document.querySelector(".nav-links");

mobileMenu.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  mobileMenu.classList.toggle("open"); // Change color of bars when open
});

function toggleNav() {
  const navLinks = document.querySelector("mobile-menu");
  if (navLinks.style.display === 'flex') {
    navLinks.style.display = 'none'; // Hide links
  } else {
    navLinks.style.display = 'flex'; // Show links
  }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// Updated mapping of old links to new redirect destinations
/* const linkRedirects = {
  "https://superbpartygirl.com/models/my/": "https://superbpartygirl.com/models/local-party-girl/",
  "https://superbpartygirl.com/models/cn/": "https://superbpartygirl.com/models/chinese-party-girl/",
  "https://superbpartygirl.com/models/vn/": "https://superbpartygirl.com/models/vietnam-party-girl/",
  "https://superbpartygirl.com/models/kr/": "https://superbpartygirl.com/models/korea-party-girl/",
  "https://superbpartygirl.com/models/jp/": "https://superbpartygirl.com/models/japan-party-girl/",
  "https://superbpartygirl.com/models/eu/": "https://superbpartygirl.com/models/europe-party-girl/"
};

// Attach event listeners to links with the class "redirect"
document.querySelectorAll('a.redirect').forEach(link => {
  link.addEventListener('click', function (event) {
    // Prevent the default behavior of the link
    event.preventDefault();

    // Get the original href of the clicked link
    const originalHref = link.getAttribute('href');

    // Check if a redirect URL exists for the original href
    if (linkRedirects[originalHref]) {
      // Redirect to the new URL
      window.location.href = linkRedirects[originalHref];
    }
  });
}); */