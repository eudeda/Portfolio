const radioButtons = document.querySelectorAll('input[name="radio-btn"]');
let currentIndex = 0;

const updateSlide = () => radioButtons[currentIndex].checked = true;

document.querySelector('.arrow-left').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + radioButtons.length) % radioButtons.length;
    updateSlide();
});

document.querySelector('.arrow-right').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % radioButtons.length;
    updateSlide();
});