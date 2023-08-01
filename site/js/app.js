window.addEventListener('load', function () {
    const sliderMain = this.document.querySelector('.slider_main')
    const sliderItems = this.document.querySelectorAll('.slider_item')
    const sliderItemWidth = sliderItems[0].offsetWidth
    const sliderLenght = sliderItems.length
    let index = 0

    // Tự động chuyển slide sau mỗi 3 giây
    function autoSlide() {
        index = (index + 1) % sliderLenght
        sliderMain.style.transform = `translateX(-${index * sliderItemWidth}px)`
    }

    setInterval(autoSlide, 3000)
})

// favourite product
const heartIcons = document.querySelectorAll('.heart-icon')

function toggleHeart(event) {
    const emptyHeart = event.target.classList.contains('heart')
    const filledHeart = event.target.classList.contains('heartRed')

    if (emptyHeart) {
        event.target.style.display = 'none'
        event.target.nextElementSibling.style.display = 'block'
    } else if (filledHeart) {
        event.target.style.display = 'none'
        event.target.previousElementSibling.style.display = 'block'
    }
}

heartIcons.forEach((heartIcon) => {
    heartIcon.addEventListener('click', toggleHeart);
});

//show box modal (tìm đúng kích thước)
const modalSize = document.querySelector('#modal-size')
const overlayModal = document.querySelector('#overlay')
const closeIcon = document.querySelector('#close-icon')
const boxModal = document.querySelector('#box-size')

modalSize.addEventListener('click', () => {
    overlayModal.style.display = 'flex'
})

closeIcon.addEventListener('click', () => {
    overlayModal.style.display = 'none'
})

overlayModal.addEventListener('click', () => {
    overlayModal.style.display = 'none'
})
boxModal.addEventListener('click', (e) => {
    e.stopPropagation();
})



