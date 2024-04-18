document.addEventListener('DOMContentLoaded', function () {
    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const valueDisplay = document.getElementById('number');

    function updateValue(isIncrement) {
        let currentValue = parseInt(valueDisplay.textContent);

        if (isIncrement) {
            currentValue += 1;
        } else if (currentValue > 0) {
            currentValue -= 1;
        }

        valueDisplay.textContent = currentValue;
    }

    plusButton.addEventListener('click', function () {
        updateValue(true);
    });


    minusButton.addEventListener('click', function () {
        updateValue(false);
    });
});

// handle review for customer
document.addEventListener("DOMContentLoaded", function () {
    const reviewForm = document.getElementById('reviewForm');   
    const starList = reviewForm.querySelector('.review-card__star-list');
    const stars = starList.querySelectorAll('.review-card__star');
    const starImages = starList.querySelectorAll('img');
    const ratingInput=document.getElementById('rating');

    stars.forEach((star, index) => {
        star.addEventListener('mouseover', function () {
            starImages.forEach((image, i) => {
                if (i <= index) {
                    image.src = "/BTL_LTW/LTWeb/public/assets/icons/star.svg";
                } else {
                    image.src = "/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg";
                }
            });
        }); 
    });
    
    stars.forEach((star, index) => {
        star.addEventListener('click', function () {
            const starValue = parseInt(star.getAttribute('data-value'));
            console.log(starValue);
            starImages.forEach((image, i) => {
                if (i <= starValue-1) {
                    image.src = "/BTL_LTW/LTWeb/public/assets/icons/star.svg";
                } else {
                    image.src = "/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg";
                }
            });
            ratingInput.value=starValue;
        }); 
    });
    starList.addEventListener('mouseleave', function () {
        starImages.forEach((image, i) => {
            if (i <= ratingInput.value - 1) {
                image.src = "/BTL_LTW/LTWeb/public/assets/icons/star.svg";
            } else {
                image.src = "/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg";
            }
        });
    });
});