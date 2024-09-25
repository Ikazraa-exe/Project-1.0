/**
* Template Name: UpConstruction
* Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
* Updated: May 18 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 30 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  document.addEventListener("DOMContentLoaded", function() {
    const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');
  
    function mobileNavToogle() {
      document.querySelector('body').classList.toggle('mobile-nav-active');
      mobileNavToggleBtn.classList.toggle('bi-list');
      mobileNavToggleBtn.classList.toggle('bi-x');
    }
  
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  
    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll('.navmenu a').forEach(navLink => {
      navLink.addEventListener('click', function(e) {
        const parent = this.parentElement;
        if (parent.classList.contains('dropdown')) {
          // Prevent closing the menu for dropdown links
          e.preventDefault();
          parent.classList.toggle('active');
          const dropdownMenu = parent.querySelector('ul');
          if (dropdownMenu) {
            dropdownMenu.classList.toggle('dropdown-active');
          }
        } else {
          // Close the menu for non-dropdown links
          if (document.querySelector('body').classList.contains('mobile-nav-active')) {
            mobileNavToogle();
          }
        }
      });
    });
  
    /**
     * Toggle mobile nav dropdowns
     */
    document.querySelectorAll('.navmenu .toggle-dropdown').forEach(toggle => {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const parent = this.closest('li');
        parent.classList.toggle('active');
        const dropdownMenu = parent.querySelector('ul');
        const icon = this;
  
        // Update the icon direction
        if (parent.classList.contains('active')) {
          icon.classList.remove('bi-chevron-right');
          icon.classList.add('bi-chevron-down');
        } else {
          icon.classList.remove('bi-chevron-down');
          icon.classList.add('bi-chevron-right');
        }
  
        if (dropdownMenu) {
          dropdownMenu.classList.toggle('dropdown-active');
        }
  
        e.stopImmediatePropagation();
      });
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
      let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
      new Swiper(swiper, config);
    });
  }
  window.addEventListener('load', initSwiper);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

})();

document.addEventListener('DOMContentLoaded', function() {
  // Load Google Translate widget
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  
  // Handle button click to toggle the translate menu
  const translateBtn = document.getElementById('translate-btn');
  const translateMenu = document.getElementById('translate-menu');
  
  translateBtn.addEventListener('click', function() {
      if (translateMenu.style.display === 'block') {
          translateMenu.style.display = 'none';
      } else {
          translateMenu.style.display = 'block';
      }
  });

  // Close the menu if clicked outside
  document.addEventListener('click', function(event) {
      if (!translateBtn.contains(event.target) && !translateMenu.contains(event.target)) {
          translateMenu.style.display = 'none';
      }
  });
});

