document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // modal variables
    const modal = document.querySelector('[data-modal]');
    const modalCloseBtn = document.querySelector('[data-modal-close]');
    const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

    // modal function
    const modalCloseFunc = () => {
        modal.classList.add('closed');
    }

    // modal eventListener
    if (modalCloseOverlay) {
        modalCloseOverlay.addEventListener('click', modalCloseFunc);
    }

    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', modalCloseFunc);
    }

    /* ==================
        NOTIFICATION TOAST
    ==================  */

    // notification toast variables
    const notificationToast = document.querySelector('[data-toast]');
    const toastCloseBtn = document.querySelector('[data-toast-close]');

    // notification toast eventListener
    if (toastCloseBtn) {
        toastCloseBtn.addEventListener('click', () => {
            notificationToast.classList.add('closed');
        });
    }

    /* ==================
            HEADER
    =================  */

    // mobile menu variables 
    const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
    const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
    const mobileMenCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
    const overlay = document.querySelector('[data-overlay]');

    for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

        // mobile menu function
        const mobileMenuCloseFunc = () => {
            mobileMenu[i].classList.remove('active');
            overlay.classList.remove('active');
        }

        mobileMenuOpenBtn[i].addEventListener('click', () => {
            mobileMenu[i].classList.add('active');
            overlay.classList.add('active');
        });

        mobileMenCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
        overlay.addEventListener('click', mobileMenuCloseFunc);
    }

    // ========== ACCORDION SCRIPTS ==========

    // accordion variables
    const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
    const accordion = document.querySelectorAll('[data-accordion]');

    for (let i = 0; i < accordionBtn.length; i++) {

        accordionBtn[i].addEventListener('click', function () {
            
            const clickedBtn = this.nextElementSibling.classList.contains('active');

            for (let i = 0; i < accordion.length; i++) {

                if (clickedBtn) break;

                if (accordion[i].classList.contains('active')) {

                    accordion[i].classList.remove('active');
                    accordionBtn[i].classList.remove('active');
                }
            }

            this.nextElementSibling.classList.toggle('active');
            this.classList.toggle('active');
        });
    }

    /* ==================
            PRODUCT
    =================  */

    const productSizeBtns = document.querySelectorAll('.countdown-content');

    const sizeBtn = (e) => {
        document.getElementById('toggleElement').classList.toggle('color1');
        document.getElementById('toggleElement').classList.toggle('color2');
    }

    productSizeBtns.forEach(btn => {
        btn.addEventListener('click', sizeBtn);
    });



    /* ==================
            CART PAGE
    =================  */

    document.addEventListener('DOMContentLoaded', function() {
        const productContainers = document.querySelectorAll('.main-container');
        const subtotalElement = document.getElementById('subtotal');
    
        function updateSubtotal() {
            let subtotal = 0;
            productContainers.forEach(container => {
                const priceElement = container.querySelector('.p-price p');
                const quantityElement = container.querySelector('.p-num input');
                const price = parseFloat(priceElement.textContent.replace('Ksh. ', '').replace(',', ''));
                const quantity = parseInt(quantityElement.value);
                subtotal += price * quantity;
            });
            subtotalElement.textContent = `Ksh. ${subtotal.toFixed(2)}`;
        }
    
        productContainers.forEach(container => {
            const quantityElement = container.querySelector('.p-num input');
            const deleteIcon = container.querySelector('.delete-icon ion-icon');
    
            quantityElement.addEventListener('change', updateSubtotal);
            deleteIcon.addEventListener('click', function() {
                container.remove();
                updateSubtotal();
            });
        });
    
        updateSubtotal(); // Initial calculation
    });
    

});


