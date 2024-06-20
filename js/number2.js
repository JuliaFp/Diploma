const countElement = document.querySelector('.countes');

let countes = 0;
const speedes = 100; // скорость увеличения счетчика

const updateCountes = () => {
    const target = +countElement.getAttribute('data-target');
    const increment = target / speedes;

    if (countes < target) {
        countes += increment;
        countElement.innerText = Math.ceil(countes);
        requestAnimationFrame(updateCountes);
    } else {
        countElement.innerText = target;
        countes = target;
        countElement.style.animation = 'countes 0.5s ease-in-out';
    }
}

updateCountes();