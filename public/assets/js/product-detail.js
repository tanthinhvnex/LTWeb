var quantity=0;
var selectedPrice=0;
var discount=0;
document.addEventListener('DOMContentLoaded', function () {

    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const valueDisplay = document.getElementById('number');
    const addToCartButton=document.getElementsByClassName('prod-info__add-to-cart')[0];
    function updateValue(isIncrement) {
        
        let currentValue = parseInt(valueDisplay.textContent);

        if (isIncrement) {
            currentValue += 1;
        } else if (currentValue > 0) {
            currentValue -= 1;
        }

        valueDisplay.textContent = currentValue;
        quantityElement.dispatchEvent(new Event('change'));
    }

    plusButton.addEventListener('click', function () {
        updateValue(true);
    });


    minusButton.addEventListener('click', function () {
        updateValue(false);
    });
    var quantityElement = document.getElementById("number");
    quantityElement.addEventListener("change", function() {
        updatePrices(selectedPrice,discount);
    });
    addToCartButton.addEventListener('click',function(e){
        e.preventDefault();
        var urlParams = new URLSearchParams(window.location.search);
        var PID= urlParams.get('id');
        var selectedSize = document.querySelector('input[name="size"]:checked');
        var quantityElement = document.getElementById("number");
        if (!selectedSize){
            alert("please select size");
            return;
        }
        if (!quantityElement){
            alert("please choose quantity");
            return;
        }
        var selectedSizeValue = selectedSize.value;
        var quantity = parseInt(quantityElement.innerText);
        if (!isNaN(quantity) && PID && quantity > 0) { // Check if quantity is a valid number, PID is not null, and quantity is greater than 0
            var data = {
                size: selectedSizeValue,
                quantity: quantity,
                PID: PID
            };
        }else{
            alert('please choose quantity');
            return;
        }
       
        var xhr=new XMLHttpRequest();
        xhr.open('POST','/BTL_LTW/LTWeb/detail/add_to_cart',true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange=function(){
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {

                   alert(xhr.responseText); 
                } else {

                    alert('Request error: ' + xhr.status);
                }
            }
        }
        xhr.send(JSON.stringify(data));
    })
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
// document.addEventListener('DOMContentLoaded', function () {
//     const thumbImages = document.querySelectorAll('.prod-preview__thumb-img');
//     thumbImages.forEach(function (img) {
//         img.addEventListener('click', function () {
//             // Remove current class from all thumb images
//             thumbImages.forEach(function (thumb) {
//                 thumb.classList.remove('prod-preview__thumb-img--current');
//             });
//             // Add current class to the clicked thumb image
//             this.classList.add('prod-preview__thumb-img--current');

//             // Get the index of the clicked image
//             const index = this.getAttribute('data-index');
//             // Set the corresponding image in the list as current
//             const listImage = document.querySelector('.prod-preview__list .prod-preview__item:nth-child(' + (parseInt(index) + 1) + ') img');
//             listImage.classList.add('prod-preview__img--current');
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    const thumbnails = document.querySelectorAll('.prod-preview__thumb-img');
    const mainImage = document.getElementsByClassName('prod-preview__item')[0];

    thumbnails.forEach(function (thumbnail) {
        thumbnail.addEventListener('click', function () {
            thumbnails.forEach(function (thumb) {
                thumb.classList.remove('prod-preview__thumb-img--current');
            });

            this.classList.add('prod-preview__thumb-img--current');
            console.log(this);
            mainImage.src = "<?php echo $productImgs[0]; ?>"; // Change this to your PHP variable holding the base URL + filename
        });
    });

});

document.addEventListener('DOMContentLoaded', function () {
    var reviews = [];
    var totalPages;
    var reviewsPerPage = 3;
    var currentPage = 1;
    
    function fetchReviews() {
        console.log('fetch review');
        var xhr = new XMLHttpRequest();
        var urlParams = new URLSearchParams(window.location.search);
        var PID= urlParams.get('id');
        
        xhr.open('GET', '/BTL_LTW/LTWeb/detail/reviews?id='+PID, true); // Replace '/path/to/endpoint' with the actual endpoint URL
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Request successful, parse response and update reviews container
                    reviews = JSON.parse(xhr.responseText);
                    totalPages = Math.ceil(reviews.length / reviewsPerPage);
                    displayReviews(currentPage);
                    generatePaginationLinks();
                } else {
                    // Error handling
                    console.error('Failed to fetch reviews: ' + xhr.status);
                }
            }
        };
        xhr.send();
    }
    
    
    
    
    fetchReviews();
    
    

    // Function to display reviews for a specific page
    function displayReviews(page) {
        var startIndex = (page - 1) * reviewsPerPage;
        var endIndex = Math.min(startIndex + reviewsPerPage, reviews.length);
        var reviewsHtml = '';
        var colClass = '';
        if (endIndex - startIndex === 1) {
            colClass = 'col-4'; // Use full width if only one review
        } else if (endIndex - startIndex === 2) {
            colClass = 'col-md-6'; // Use half width for two reviews
        } else {
            colClass = 'col'; // Use default width for more than two reviews
        }

        for (var i = startIndex; i < endIndex; i++) {
            var review = reviews[i];
            // HTML template for each review card
            var reviewHtml = `
                <div class="${colClass}"> <!-- Adjust grid class here -->
                    <div class="review-card">
                        <div class="review-card__content">
                            <img src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-1.png" alt="" class="review-card__avatar" />
                            <div class="review-card__info">
                                <h4 class="review-card__title">${review.fullname}</h4>
                                <p class="review-card__desc">${review.content}</p>
                            </div>
                        </div>
                        <div class="review-card__rating">
                            <div class="review-card__star-list">
                                <!-- Star icons will be added here -->
                            </div>
                            <span class="review-card__rating-title">(${review.star})</span>
                        </div>
                    </div>
                </div>`;
            
            // Create a div element for the star list
            const starListDiv = document.createElement('div');
            starListDiv.classList.add('review-card__star-list');
            
            // Loop to create and append star images
            for (let j = 1; j <= review.star; j++) {
                const starImg = document.createElement('img');
                starImg.src = "/BTL_LTW/LTWeb/public/assets/icons/star.svg";
                starImg.alt = "";
                starImg.classList.add('review-card__star');
                starListDiv.appendChild(starImg);
            }
            
            // Append the star list div to the review card
            reviewHtml = reviewHtml.replace('<!-- Star icons will be added here -->', starListDiv.outerHTML);
            
            reviewsHtml += reviewHtml;
        }

        // Update reviews container with new reviews HTML
        document.getElementById('reviews-container').innerHTML = reviewsHtml;

        // Regenerate pagination links after updating reviews
        generatePaginationLinks();
    }

    // Function to generate pagination links
    function generatePaginationLinks() {
        var paginationContainer = document.querySelector('.pagination');

        // Clear any existing pagination links
        paginationContainer.innerHTML = '';

        // Create "Previous" button
        var prevButton = document.createElement('li');
        prevButton.innerHTML = `<a href="">&laquo; Previous</a>`;
        prevButton.classList.add('disabled'); // Initially disable the "Previous" button
        if (currentPage > 1) {
            prevButton.classList.remove('disabled'); // Enable "Previous" button if not on first page
            prevButton.querySelector('a').addEventListener('click', function(e) {
                e.preventDefault()
                handlePaginationClick(currentPage - 1); // Call handlePaginationClick with previous page number
            });
        }
        paginationContainer.appendChild(prevButton);

        // Loop to generate page number links
        for (var i = Math.max(1, currentPage - 1); i <= Math.min(currentPage + 1, totalPages); i++) {
            var pageButton = document.createElement('li');
            pageButton.innerHTML = `<a href="#">${i}</a>`;
            if (i === currentPage) {
                pageButton.classList.add('active'); // Highlight the current page
            }
            pageButton.querySelector('a').addEventListener('click', function() {
                handlePaginationClick(parseInt(this.textContent)); // Call handlePaginationClick with clicked page number
            });
            paginationContainer.appendChild(pageButton);
        }

        // Create "Next" button
        var nextButton = document.createElement('li');
        nextButton.innerHTML = `<a href="#">Next &raquo;</a>`;
        if (currentPage < totalPages) {
            nextButton.querySelector('a').addEventListener('click', function(e) {
                e.preventDefault()
                handlePaginationClick(currentPage + 1); // Call handlePaginationClick with next page number
            });
        }
        paginationContainer.appendChild(nextButton);
    }

    // Function to handle click on pagination links
    function handlePaginationClick(pageNumber) {
        event.preventDefault();
        // Change the value of currentPage before calling displayReviews
        currentPage = pageNumber;
        displayReviews(currentPage);
    }

    // Initially display reviews for the first page and generate pagination links
    displayReviews(currentPage);

    
    var reviewForm = document.getElementById('reviewForm');

    reviewForm.addEventListener('submit', function (event) {

        event.preventDefault();

        var rating = document.getElementById('rating').value;
        if (rating==="0"){
            alert('please rating it');
            return;
        }

        var comment = document.getElementById('comment').value;
        var urlParams = new URLSearchParams(window.location.search);
        var PID= urlParams.get('id');

        var data = {
            star: rating,
            content: comment,
            PID:PID
        };


        sendDataToServer(data);
    });
    function sendDataToServer(data) {

        var xhr = new XMLHttpRequest();

        // Configure the request
        xhr.open('POST', '/BTL_LTW/LTWeb/detail/send_review', true); 
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange=function(){
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {

                   alert(xhr.responseText); 
                   fetchReviews();
                } else {

                    alert('Request error: ' + xhr.status);
                }
            }
        }

        var jsonData = JSON.stringify(data);


        xhr.send(jsonData);
    }
});



function updatePrices(newSelectedPrice, newDiscount) {
    console.log(24121);
    quantity = parseInt(document.getElementById("number").innerText);
    selectedPrice = parseFloat(newSelectedPrice);
    discount = parseFloat(newDiscount);
    updateTotal();
    





}
function updateTotal(){
    console.log(selectedPrice);
    var discountedPrice = selectedPrice*quantity * (100 - discount) / 100;


    var taxRate = discount / 100; 

    var productPriceElement = document.querySelector('.prod-info__price');
    var taxElement = document.querySelector('.prod-info__tax');
    var totalPriceElement = document.querySelector('.prod-info__total-price');

    productPriceElement.textContent = '$' + (selectedPrice*quantity).toFixed(2);
    taxElement.textContent = (taxRate * 100) + '%';
    totalPriceElement.textContent = '$' + discountedPrice.toFixed(2);
}
document.addEventListener('DOMContentLoaded', function () {
    const thumbnails = document.querySelectorAll('.prod-preview__thumb-img');
    const mainImage = document.getElementsByClassName('prod-preview__img')[0];

    thumbnails.forEach(function (thumbnail) {
        thumbnail.addEventListener('click', function () {
            thumbnails.forEach(function (thumb) {
                thumb.classList.remove('prod-preview__thumb-img--current');
            });

            this.classList.add('prod-preview__thumb-img--current');
            mainImage.src = this.src;
        });
    });
});
document.addEventListener('DOMContentLoaded',function(){
    
})