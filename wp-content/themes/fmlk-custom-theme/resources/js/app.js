import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('mobileMenuButton');
  const menu = document.getElementById('mobileMenu');
  const hamburger = document.getElementById('hamburgerIcon');
  const closeIcon = document.getElementById('closeIcon');

  btn.addEventListener('click', () => {
    const isMenuHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
});