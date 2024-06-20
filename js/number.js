const countEl = document.querySelector('.count');

let count = 0;
const speed = 100; // скорость увеличения счетчика

const updateCount = () => {
    const target = +countEl.getAttribute('data-target');
    const increment = target / speed;

    if (count < target) {
        count += increment;
        countEl.innerText = Math.ceil(count);
        requestAnimationFrame(updateCount);
    } else {
        countEl.innerText = target;
        count = target;
        countEl.style.animation = 'count 0.5s ease-in-out';
    }
}

updateCount();

const countEll = document.querySelector('.counts');

let counts = 0;
const speeds = 100; // скорость увеличения счетчика

const updateCounts = () => {
    const target = +countEll.getAttribute('data-target');
    const increment = target / speeds;

    if (counts < target) {
        counts += increment;
        countEll.innerText = Math.ceil(counts);
        requestAnimationFrame(updateCounts);
    } else {
        countEll.innerText = target;
        counts = target;
        countEll.style.animation = 'counts 0.5s ease-in-out';
    }
}

updateCounts();


