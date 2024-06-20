const modal = document.getElementById('modal');
const proxima = document.querySelector('.proxima');
const closeBtn = document.querySelector('.close');

proxima.addEventListener('click', () => {
    modal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    modals.style.display = 'none';
});


window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
    
});


const modals = document.getElementById('modals');
const mars = document.querySelector('.mars');
const closeBt = document.querySelector('.closes');

mars.addEventListener('click', () => {
    modals.style.display = 'block';
});

closeBt.addEventListener('click', () => {
    modals.style.display = 'none';
});


window.addEventListener('click', (e) => {
    if (e.target === modals) {
        modals.style.display = 'none';
    }
    
});

const modalt = document.getElementById('modalt');
const earth = document.querySelector('.earth');
const closeBT = document.querySelector('.closet');

earth.addEventListener('click', () => {
    modalt.style.display = 'block';
});

closeBT.addEventListener('click', () => {
    modalt.style.display = 'none';
});


window.addEventListener('click', (e) => {
    if (e.target === modalt) {
        modalt.style.display = 'none';
    }
    
});

