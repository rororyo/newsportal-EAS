const carouselItems = document.querySelectorAll('.news-card');


carouselItems.forEach(item => {
    item.addEventListener('mouseover', () => {

        carouselItems.forEach(i => i.classList.remove('selected'));


        item.classList.add('selected');
    });
});