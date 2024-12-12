let images = document.querySelectorAll('.image-container img');
let popupImage = document.querySelector('.popup-image');
let popupImgElement = popupImage.querySelector('img');
let currentIndex = 0;

function showImage(index) {
    popupImage.style.display = 'flex';
    popupImgElement.style.opacity = 0;
    setTimeout(() => {
        popupImgElement.src = images[index].getAttribute('src');
        popupImgElement.onload = () => {
            popupImgElement.style.opacity = 1;
        };
        currentIndex = index;
    }, 200);
}

images.forEach((image, index) => {
    image.onclick = () => {
        showImage(index);
    };
});

document.querySelector('.popup-image span').onclick = () => {
    popupImage.style.display = 'none';
};

document.querySelector('.popup-image .next').onclick = () => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
};

document.querySelector('.popup-image .prev').onclick = () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
};
