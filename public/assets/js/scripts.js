const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

/**
 * Hàm tải template
 *
 * Cách dùng:
 * <div id="parent"></div>
 * <script>
 *  load("#parent", "./path-to-template.html");
 * </script>
 */
function load(selector, path) {
    const cached = localStorage.getItem(path);
    if (cached) {
        $(selector).innerHTML = cached;
    }
    
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        const myObj = JSON.parse(this.responseText);
        favQuantity = document.getElementsByName("favQuantity");
        for (i = 0; i < favQuantity.length; i++) {
            favQuantity[i].innerHTML = myObj.favQuantity;
        }
        cartQuantity = document.getElementsByName("cartQuantity");
        for (i = 0; i < cartQuantity.length; i++) {
            cartQuantity[i].innerHTML = myObj.cartQuantity;
        }
        document.getElementById("cartQuantityInfo").innerHTML = "You have " + myObj.cartQuantity + " item(s)"
        document.getElementById("favQuantityInfo").innerHTML = "You have " + myObj.favQuantity + " item(s)"
        for (i = 0; i < myObj.favProducts.length; i++) {
            col = document.createElement("div");
            col.setAttribute("class","col");
            col.innerHTML = `
            <article class="cart-preview-item">
                <div class="cart-preview-item__img-wrap">
                <img src="` + myObj.favProducts[i].img + `"
                    alt=""
                    class="cart-preview-item__thumb" />
                </div>
                <h3 class="cart-preview-item__title">
                    ` + myObj.favProducts[i].name + `
                </h3>
                <p class="cart-preview-item__price">
                    $` + myObj.favProducts[i].price + `
                </p>
            </article>
            `;
            document.getElementById("favProducts").appendChild(col);
        }
        cartTotalPrice = 0;
        for (i = 0; i < myObj.cartProducts.length; i++) {
            cartTotalPrice += myObj.cartProducts[i].quantity * myObj.cartProducts[i].price;
            col = document.createElement("div");
            col.setAttribute("class","col");
            col.innerHTML = `
            <article class="cart-preview-item">
                <div
                    class="cart-preview-item__img-wrap">
                    <img
                        src="` + myObj.cartProducts[i].img + `"
                        alt=""
                        class="cart-preview-item__thumb" />
                </div>
                <h3 class="cart-preview-item__title">
                    ` + myObj.cartProducts[i].name + `
                </h3>
                <p class="cart-preview-item__price">
                    $` + myObj.cartProducts[i].price + `
                </p>
            </article>
            `;
            document.getElementById("cartProducts").appendChild(col);
        }
        cartTotalPrices = document.getElementsByName("cartTotalPrice");
        for (i = 0; i < cartTotalPrices.length; i++) {
            cartTotalPrices[i].innerHTML = "$" + cartTotalPrice;
        }
    }
    xmlhttp.open("GET", "/BTL_LTW/LTWeb/header", true);
    
    fetch(path)
    .then(res => res.text())
    .then(html => {
        if (html !== cached) {
            $(selector).innerHTML = html;
            localStorage.setItem(path, html);
        }
        if (selector == "#footer") {
            xmlhttp.send();
        }
    })
        .finally(() => {
        window.dispatchEvent(new Event("template-loaded"));
    });
}

/**
 * Hàm kiểm tra một phần tử
 * có bị ẩn bởi display: none không
 */
function isHidden(element) {
    if (!element) return true;

    if (window.getComputedStyle(element).display === "none") {
        return true;
    }

    let parent = element.parentElement;
    while (parent) {
        if (window.getComputedStyle(parent).display === "none") {
            return true;
        }
        parent = parent.parentElement;
    }

    return false;
}

/**
 * Hàm buộc một hành động phải đợi
 * sau một khoảng thời gian mới được thực thi
 */
function debounce(func, timeout = 300) {
    let timer;
    return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => {
            func.apply(this, args);
        }, timeout);
    };
}

/**
 * Hàm tính toán vị trí arrow cho dropdown
 *
 * Cách dùng:
 * 1. Thêm class "js-dropdown-list" vào thẻ ul cấp 1
 * 2. CSS "left" cho arrow qua biến "--arrow-left-pos"
 */
const calArrowPos = debounce(() => {
    if (isHidden($(".js-dropdown-list"))) return;

    const items = $$(".js-dropdown-list > li");

    items.forEach(item => {
        const arrowPos = item.offsetLeft + item.offsetWidth / 2;
        item.style.setProperty("--arrow-left-pos", `${arrowPos}px`);
    });
});

// Tính toán lại vị trí arrow khi resize trình duyệt
window.addEventListener("resize", calArrowPos);

// Tính toán lại vị trí arrow sau khi tải template
window.addEventListener("template-loaded", calArrowPos);

/**
 * Giữ active menu khi hover
 *
 * Cách dùng:
 * 1. Thêm class "js-menu-list" vào thẻ ul menu chính
 * 2. Thêm class "js-dropdown" vào class "dropdown" hiện tại
 *  nếu muốn reset lại item active khi ẩn menu
 */
window.addEventListener("template-loaded", handleActiveMenu);

function handleActiveMenu() {
    const dropdowns = $$(".js-dropdown");
    const menus = $$(".js-menu-list");
    const activeClass = "menu-column__item--active";

    const removeActive = menu => {
        menu.querySelector(`.${activeClass}`)?.classList.remove(activeClass);
    };

    const init = () => {
        menus.forEach(menu => {
            const items = menu.children;
            if (!items.length) return;

            removeActive(menu);
            if (window.innerWidth > 991) items[0].classList.add(activeClass);

            Array.from(items).forEach(item => {
                item.onmouseenter = () => {
                    if (window.innerWidth <= 991) return;
                    removeActive(menu);
                    item.classList.add(activeClass);
                };
                item.onclick = () => {
                    if (window.innerWidth > 991) return;
                    removeActive(menu);
                    item.classList.add(activeClass);
                    item.scrollIntoView();
                };
            });
        });
    };

    init();

    dropdowns.forEach(dropdown => {
        dropdown.onmouseleave = () => init();
    });
}

/**
 * JS toggle
 *
 * Cách dùng:
 * <button class="js-toggle" toggle-target="#box">Click</button>
 * <div id="box">Content show/hide</div>
 */
window.addEventListener("template-loaded", initJsToggle);

function initJsToggle() {
    $$(".js-toggle").forEach(button => {
        const target = button.getAttribute("toggle-target");
        if (!target) {
            document.body.innerText = `Cần thêm toggle-target cho: ${button.outerHTML}`;
        }
        button.onclick = e => {
            e.preventDefault();

            if (!$(target)) {
                return (document.body.innerText = `Không tìm thấy phần tử "${target}"`);
            }
            const isHidden = $(target).classList.contains("hide");

            requestAnimationFrame(() => {
                $(target).classList.toggle("hide", !isHidden);
                $(target).classList.toggle("show", isHidden);
            });
        };
    });
}

window.addEventListener("template-loaded", () => {
    const links = $$(".js-dropdown-list > li > a");

    links.forEach(link => {
        link.onclick = () => {
            if (window.innerWidth > 991) return;
            const item = link.closest("li");
            item.classList.toggle("navbar__item--active");
        };
    });
});

window.addEventListener("template-loaded", () => {
    const tabsSelector = "prod-tab__item";
    const contentsSelector = "prod-tab__content";

    const tabActive = `${tabsSelector}--current`;
    const contentActive = `${contentsSelector}--current`;

    const tabContainers = $$(".js-tabs");
    tabContainers.forEach(tabContainer => {
        const tabs = tabContainer.querySelectorAll(`.${tabsSelector}`);
        const contents = tabContainer.querySelectorAll(`.${contentsSelector}`);
        tabs.forEach((tab, index) => {
            tab.onclick = () => {
                tabContainer
                    .querySelector(`.${tabActive}`)
                    ?.classList.remove(tabActive);
                tabContainer
                    .querySelector(`.${contentActive}`)
                    ?.classList.remove(contentActive);
                tab.classList.add(tabActive);
                contents[index].classList.add(contentActive);
            };
        });
    });
});

window.addEventListener("template-loaded", () => {
    const switchBtn = document.querySelector("#switch-theme-btn");
    if (switchBtn) {
        switchBtn.onclick = function () {
            const isDark = localStorage.dark === "true";
            document.querySelector("html").classList.toggle("dark", !isDark);
            localStorage.setItem("dark", !isDark);
        };
    }
});

const isDark = localStorage.dark === "true";
document.querySelector("html").classList.toggle("dark", isDark);

document.addEventListener("DOMContentLoaded", function () {
    // Dùng để lấy dữ liệu, tạo một đối tượng JSON, gọi API
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector(".filter__form");
        const minPriceInput = form.querySelector(
            '.filter__form-text-input--small input[placeholder="Min"]'
        );
        const maxPriceInput = form.querySelector(
            '.filter__form-text-input--small input[placeholder="Max"]'
        );
        const sizeRadioInputs = form.querySelectorAll('input[name="size"]');

        form.addEventListener("submit", function (event) {
            event.preventDefault();

            const data = {
                minPrice: minPriceInput.value,
                maxPrice: maxPriceInput.value,
                size: Array.from(sizeRadioInputs).find(input => input.checked)
                    .value,
            };

            // Gửi dữ liệu với fetch
            fetch("url_cua_api", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error("Network response was not ok.");
                })
                .then(data => {
                    var productArray = data.map(function (product) {
                        return `
                        <div class="col">
                            <article class="product-card">
                                <div class="product-card__img-wrap">
                                    <a href="./product-detail.html">
                                        <img
                                            src="./assets/img/product/${product.title}"
                                            alt=""
                                            class="product-card__thumb"
                                        />
                                    </a>
                                    <button class="like-btn like-btn--liked product-card__like-btn">
                                        <img
                                            src="./assets/icons/heart.svg"
                                            alt=""
                                            class="like-btn__icon icon"
                                        />
                                        <img
                                            src="./assets/icons/heart-red.svg"
                                            alt=""
                                            class="like-btn__icon"
                                        />
                                    </button>
                                </div>
                                <h3 class="product-card__title">
                                    <a href="./product-detail.html">
                                        ${product.name}
                                    </a>
                                </h3>
                                <div class="product-card__row">
                                    <span class="product-card__price">
                                        ${product.price}
                                    </span>
                                    <img
                                        src="./assets/icons/star.svg"
                                        alt=""
                                        class="product-card__star"
                                    />
                                    <span class="product-card__score">
                                        ${product.ranking}
                                    </span>
                                </div>
                            </article>
                        </div>
                    `;
                    });
                    productAns = productArray.join("");
                    document.getElementById("productList").innerHTML =
                        productAns;
                })
                .catch(error => {
                    console.error(
                        "There was a problem with the fetch operation:",
                        error
                    );
                });
        });
    });
    // Hình trái tim
    var likeButtons = document.querySelectorAll(
        ".like-btn.prod-info__like-btn, .like-btn.product-card__like-btn"
    );
    // Hàm để toggle class 'like-btn--liked'
    function toggleLike(event) {
        event.preventDefault();
        this.classList.toggle("like-btn--liked");
    }

    // Thêm sự kiện click cho mỗi button
    likeButtons.forEach(function (button) {
        button.addEventListener("click", toggleLike);
    });
});

//check vào ô check-all thì mấy ô kia cũng được check
function checkAll() {
    checkItems = document.getElementsByName("check-item");
    isChecked = document.getElementById("check-all").checked;
    for (var i = 0; i < checkItems.length; i++) {
        checkItems[i].checked = isChecked;
        checkItems[i].dispatchEvent(new Event('change'));
    }
    //update nội dung 2 nút selected delete/checkout ứng với số item được check
    var selectedDeleteButton = document.querySelector('.selected-delete');
    var selectedCheckoutButton = document.querySelector('.selected-checkout');
    //disable nút khi không có item nào được check
    selectedDeleteButton.disabled = !isChecked;
    if (isChecked) {
        selectedDeleteButton.innerHTML = "Delete (" + checkItems.length + ")";
        var modalText = document.querySelector('.selected-modal__text');
        modalText.textContent = "Do you want to remove " + ((checkItems.length > 1) ? checkItems.length + " items" : 1 + " item") + " from favourite list?";
    }
    else {
        selectedDeleteButton.innerHTML = "Delete (0)";
    }
    if (selectedCheckoutButton) {
        if (isChecked) {
            selectedCheckoutButton.innerHTML = "Checkout (" + checkItems.length + ")";
        }
        else {
            selectedCheckoutButton.innerHTML = "Checkout (0)";
        }
        //disable nút khi không có item nào được check
        selectedCheckoutButton.disabled = !isChecked;
    }

    
}
function handleCheck() {
    var checkItems = document.getElementsByName("check-item");
    var checkedCount = Array.from(checkItems).filter(item => item.checked).length;

    var selectedDeleteButton = document.querySelector('.selected-delete');
    var selectedCheckoutButton = document.querySelector('.selected-checkout');
    selectedDeleteButton.innerHTML = "Delete (" + checkedCount + ")";

    if (selectedCheckoutButton) selectedCheckoutButton.innerHTML = "Checkout (" + checkedCount + ")";
    
    
    var atLeastOneChecked = Array.from(checkItems).some(item => item.checked);
    if (atLeastOneChecked) {
        if (checkedCount == 3) document.getElementById("check-all").checked = true;
        else document.getElementById("check-all").checked = false;
        
        var modalText = document.querySelector('.selected-modal__text');
        modalText.textContent = "Do you want to remove " + ((checkedCount > 1) ? checkedCount + " items" : 1 + " item") + " from favourite list?";

        selectedDeleteButton.disabled = false;
        if (selectedCheckoutButton) selectedCheckoutButton.disabled = false;
    } else {
        selectedDeleteButton.disabled = true;
        if (selectedCheckoutButton) selectedCheckoutButton.disabled = true;
    }
}

//validate input của quantity
function handleQuantityInput(id) {
    quantity = document.getElementById("quantity" + id);
    if (quantity.value < 1 || quantity.value == "") {
        quantity.value = 1;
    }
}

//tăng/giảm quantity khi ấn + -
function descreaseQuantity(id) {
    quantity = document.getElementById("quantity" + id);
    if (quantity.value > 1) {
        quantity.value--;
    }
}
function increaseQuantity(id) {
    quantity = document.getElementById("quantity" + id);
    quantity.value++;
}

function showSpinner() {
    document.getElementById('spinner').style.display = 'flex';
}

function hideSpinner() {
    document.getElementById('spinner').style.display = 'none';
}

function checkLogOut() {
    logOut = document.getElementById("logout")
    logOut.addEventListener("click", function () {
        localStorage.removeItem("user")
    })
}

// let cartNotification
function updateCartNotification() {
    cartNotification = document.querySelector(".cart-notification")
    cart = JSON.parse(localStorage.getItem("cart"))
    cartNotification.innerHTML = cart.length
    cartPrice = document.querySelector(".cart-price")
    price = 0
    for (let i = 0; i < cart.length; i++) {
        if (cart[i].quantity != null) {
            price += parseInt(cart[i].price) * parseInt(cart[i].quantity)
        }
    }
    cartPrice.innerHTML = `$ ${price}`
}
