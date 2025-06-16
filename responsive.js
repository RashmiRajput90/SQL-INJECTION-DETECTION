// Responsive Navbar Toggle
document.addEventListener('DOMContentLoaded', () => {
  const toggler = document.getElementById('toggler');
  const navbar = document.querySelector('.navbar');

  toggler.addEventListener('change', () => {
      if (toggler.checked) {
          navbar.style.display = 'block';
      } else {
          navbar.style.display = 'none';
      }
  });

  // Adjust navbar display on window resize
  window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
          navbar.style.display = 'flex';
      } else if (!toggler.checked) {
          navbar.style.display = 'none';
      }
  });
});

// Smooth Scrolling for Anchor Links
const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
smoothScrollLinks.forEach(link => {
  link.addEventListener('click', event => {
      event.preventDefault();
      const targetId = link.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
          window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
          });
      }
  });
});

// Dynamic Adjustment for Cards
const adjustCardHeights = () => {
  const cards = document.querySelectorAll('.card_container .card');
  let maxCardHeight = 0;

  // Reset heights
  cards.forEach(card => (card.style.height = 'auto'));

  // Find max height
  cards.forEach(card => {
      const cardHeight = card.offsetHeight;
      if (cardHeight > maxCardHeight) maxCardHeight = cardHeight;
  });

  // Apply max height
  cards.forEach(card => (card.style.height = `${maxCardHeight}px`));
};

// Adjust card heights on load and resize
window.addEventListener('load', adjustCardHeights);
window.addEventListener('resize', adjustCardHeights);
