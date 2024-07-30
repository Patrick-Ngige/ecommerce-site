'use strict';


                        /* ==============
                        MAIN - SECTION
                        ============== */

//modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function

const modalCloseFunc = () => {
    modal.classList.add('closed');
}

//modal eventListerner
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);



                        /* ==================
                        NOTIFICATION TOAST
                        ==================  */

// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

//notification toast eventListener
toastCloseBtn.addEventListener('click', () => {
    notificationToast.classList.add('closed');
})