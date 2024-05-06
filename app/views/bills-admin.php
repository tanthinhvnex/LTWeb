<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/BTL_LTW/LTWeb/public/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/BTL_LTW/LTWeb/public/assets/favicon/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Fonts -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/fonts/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/css/main.css" />
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/css/layout/index-admin.css">

    <!-- JS -->
    <script src="/BTL_LTW/LTWeb/public/assets/js/scripts.js"></script>
</head>

<body>

    <!-- Header -->
    <header id="header" class="header"></header>
    <script>
        load("#header", "/BTL_LTW/LTWeb/app/views/components/header-admin.php");
    </script>
    <div class="container" style="overflow-x: auto; margin-top: 40px">
        <table id="productTable">
        </table>
        <div style="display: flex; justify-content: center">
            <div id="tableLoader" class=" loading-spinner"></div>
        </div>

        <!-- See Product Modal -->
        <div id="editProductModal" class="modal-admin hide">
            <div class="modal-content">
                <span id="close-edit-modal" onclick="editModal()" class="close-btn js-toggle" toggle-target="#editProductModal">&times;</span>
                <form id="editProductForm" style="display: flex; flex-direction: column; flex-grow: 1">
                    <!-- Inside the editProductForm -->
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-id" class="form__label">ID</label>
                            <input type="number" id="edit-id" class="form__input" placeholder="">
                        </div>
                        <div class="form__group">
                            <label for="edit-total-price" class="form__label">$ Total Price</label>
                            <input type="number" id="edit-total-price" class="form__input" placeholder="">
                        </div>
                        <div class="form__group">
                            <label for="edit-shipping-fee" class="form__label">$ Shipping Fee</label>
                            <input type="number" id="edit-shipping-fee" class="form__input" placeholder="">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-created-at" class="form__label">Created At</label>
                            <input type="text" id="edit-created-at" class="form__input" placeholder="">
                        </div>
                        <div class="form__group">
                            <label for="edit-credit_card-number" class="form__label">Credit Card Number</label>
                            <input type="number" id="edit-credit-card-number" class="form__input" placeholder="">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-reciever-name" class="form__label">Reciever Name</label>
                            <input type="text" id="edit-reciever-name" class="form__input" placeholder="">
                        </div>
                        <div class="form__group">
                            <label for="edit-reciever-phone" class="form__label">Reciever Phone</label>
                            <input type="text" id="edit-reciever-phone" class="form__input" placeholder="">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-city-district-town" class="form__label">City/District/Town</label>
                            <input type="text" id="edit-city-district-town" class="form__input" placeholder="">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-addtional-address-info" class="form__label">Additional Address Info</label>
                            <input type="text" id="edit-addtional-address-info" class="form__input" placeholder="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
        load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
    </script>
    <script>
        function displayProductAdmin(bills) {
            const table = document.getElementById("productTable");

            // Clear existing rows except the header
            table.innerHTML = `<tr class="table">
                <th class="id-column">ID</th>
                <th class="name-column">Created At</th>
                <th class="size-column">$ Total Price</th>
                <th class="description-column">$ Shipping Fee</th>
                <th class="quantity-column">Credit Card Number</th>
                <th class="actions-column">Actions</th>
                </tr>`;
            // Append new rows for each product
            bills.forEach((bill) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                <td class="id-column">${bill.id}</td>
                <td class="name-column">${bill.created_at}</td>
                    <td class="size-column">${bill.total_price}</td>
                    <td class="description-column">${bill.shipping_fee}</td>
                    <td class="quantity-column">${bill.credit_card_number}</td>
                    <td class="actions-column">
                        <div class="btn-wrap">
                            <button class="js-toggle btn-primary btn btn-admin--small" toggle-target="#editProductModal">See Detail</button>
                        </div>
                    </td>
                `;
                table.appendChild(row);
            });
            initJsToggle()
        }

        function sortProductsByIdDescending(bill) {
            // Sắp xếp mảng sản phẩm theo thứ tự ID từ cao đến thấp
            return bill.sort((a, b) => b.id - a.id);
        }

        fetchProducts();
        async function fetchProducts() {
            try {
                // Hiển thị spinner
                document.getElementById("tableLoader").style.display = "block";
                const response = await fetch("http://localhost/BTL_LTW/LTWeb/admin/get_all_bills");
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                let bills = await response.json();
                // Sắp xếp sản phẩm theo thứ tự ID từ cao đến thấp
                bills = sortProductsByIdDescending(bills);

                // Lưu vào localStorage
                localStorage.setItem("bills", JSON.stringify(bills));
                displayProductAdmin(bills);
            } catch (error) {
                console.log("Fetch error: " + error.message);
            } finally {
                // Ẩn spinner khi dữ liệu đã tải xong
                document.getElementById("tableLoader").style.display = "none";
            }
        }

        function getBillIdFromRow(button) {
            const row = button.closest('tr');
            if (row) {
                return parseInt(row.querySelector('.id-column').textContent, 10);
            }
            return null;
        }

        document.getElementById('productTable').addEventListener('click', function (event) {
            const target = event.target;
            if (target.classList.contains('btn-primary') && target.textContent === "See Detail") {
                const billId = getBillIdFromRow(target);
                if (billId) {
                    displayEditProductModal(billId);
                }
            }
        });

        function displayEditProductModal(billId) {
            const bills = JSON.parse(localStorage.getItem('bills'));
            const bill = bills.find(b => b.id == billId);
            if (bill) {
                document.getElementById('edit-id').value = bill.id;
                document.getElementById('edit-created-at').value = bill.created_at;
                document.getElementById('edit-total-price').value = bill.total_price;
                document.getElementById('edit-shipping-fee').value = bill.shipping_fee;
                document.getElementById('edit-credit-card-number').value = bill.credit_card_number;
                document.getElementById('edit-reciever-name').value = bill.shippingAddressInfos.reciever_name;
                document.getElementById('edit-reciever-phone').value = bill.shippingAddressInfos.reciever_phone;
                document.getElementById('edit-city-district-town').value = bill.shippingAddressInfos.city_district_town;
                document.getElementById('edit-addtional-address-info').value = bill.shippingAddressInfos.additional_address_info;

                form = document.getElementById('editProductForm');
                for (i = 0; i < bill.productInfos.length; i++) {
                    formRow = document.createElement('div');
                    formRow.setAttribute('class','form__row');
                    formRow.innerHTML =
                    `
                    <div class="form__group">
                        <label for="edit-product-name-` + i +`" class="form__label">Product Name</label>
                        <input type="text" id="edit-product-name-` + i + `" class="form__input" placeholder="" value="` + bill.productInfos[i].name + `">
                    </div>
                    <div class="form__group">
                        <label for="edit-product-size-` + i + `" class="form__label">Product Size</label>
                        <input type="text" id="edit-product-size-` + i + `" class="form__input" placeholder="" value="` + bill.productInfos[i].size + `">
                    </div>
                    <div class="form__group">
                        <label for="edit-product-quantity-` + i + `" class="form__label">Quantity</label>
                        <input type="text" id="edit-product-quantity-` + i + `" class="form__input" placeholder="" value="` + bill.productInfos[i].quantity + `">
                    </div>
                    `
                    form.appendChild(formRow);
                }

                const editModal = document.getElementById('editProductModal');
                editModal.classList.remove('hide');
                editModal.classList.add('show');
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const createProductForm = document.getElementById("close-edit-modal");
            createProductForm.addEventListener("click", function (event) {
                const editForm = document.getElementById('editProductForm');
                editForm.innerHTML =
                    `
                        <div class="form__row">
                            <div class="form__group">
                                <label for="edit-id" class="form__label">ID</label>
                                <input type="number" id="edit-id" class="form__input" placeholder="">
                            </div>
                            <div class="form__group">
                                <label for="edit-total-price" class="form__label">$ Total Price</label>
                                <input type="number" id="edit-total-price" class="form__input" placeholder="">
                            </div>
                            <div class="form__group">
                                <label for="edit-shipping-fee" class="form__label">$ Shipping Fee</label>
                                <input type="number" id="edit-shipping-fee" class="form__input" placeholder="">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="edit-created-at" class="form__label">Created At</label>
                                <input type="text" id="edit-created-at" class="form__input" placeholder="">
                            </div>
                            <div class="form__group">
                                <label for="edit-credit_card-number" class="form__label">Credit Card Number</label>
                                <input type="number" id="edit-credit-card-number" class="form__input" placeholder="">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="edit-reciever-name" class="form__label">Reciever Name</label>
                                <input type="text" id="edit-reciever-name" class="form__input" placeholder="">
                            </div>
                            <div class="form__group">
                                <label for="edit-reciever-phone" class="form__label">Reciever Phone</label>
                                <input type="text" id="edit-reciever-phone" class="form__input" placeholder="">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="edit-city-district-town" class="form__label">City/District/Town</label>
                                <input type="text" id="edit-city-district-town" class="form__input" placeholder="">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="edit-addtional-address-info" class="form__label">Additional Address Info</label>
                                <input type="text" id="edit-addtional-address-info" class="form__input" placeholder="">
                            </div>
                        </div>
                    `
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.btn');

            buttons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault(); // Ngăn hành vi mặc định
                });
            });
        });
    </script>

    <script src="/BTL_LTW/LTWeb/public/assets/js/scripts-admin.js"></script>
</body>

</html>