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
        <div class="container" style="overflow-x: auto;">
        <button style="margin-top: 20px;" class="btn btn-primary js-toggle" toggle-target="#createProductModal">Create New Product</button>
        <table id="productTable"></table>
        <div style="display: flex; justify-content: center">
            <div id="tableLoader" class=" loading-spinner"></div>
        </div>

        <!-- Create New Product Modal -->
        <div id="createProductModal" class="modal-admin hide">
            <div class="modal-content">
                <span class="close-btn js-toggle" toggle-target="#createProductModal">&times;</span>
                <form method="post" action="/BTL_LTW/LTWeb/admin" id="createProductForm" style="display: flex; flex-direction: column; flex-grow: 1">
                    <div class="form__row">
                        <div class="form__group">
                            <label for="product-name" class="form__label">Product Name:</label>
                            <input required name="name" type="text" id="product-name" class="form__input" placeholder="Enter product name">
                            <div class="form__error">Error message</div>
                        </div>
                        <div class="form__group">
                            <label for="price" class="form__label">Price ($):</label>
                            <input required name="price" type="number" id="price" class="form__input" placeholder="Enter price">
                            <div class="form__error">Error message</div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="quantity" class="form__label">Quantity:</label>
                            <input required name="quantity" type="number" id="quantity" class="form__input" placeholder="Enter quantity">
                            <div class="form__error">Error message</div>
                        </div>
                        <div class="form__group">
                            <label for="discount" class="form__label">Discount (%):</label>
                            <input required name="discount" type="number" id="discount" class="form__input"
                                placeholder="Enter discount percentage">
                            <div class="form__error">Error message</div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="similar" class="form__label">Similar Products:</label>
                            <input name="similar" type="text" id="similar" class="form__input"
                                placeholder="Enter similar product IDs separated by commas: 1,2,3,4">
                            <div id="similarError" class="form__error">Nhập các ID cách nhau bởi dấu phẩy hoặc để trống</div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="img-link" class="form__label">Image Links:</label>
                            <input required name="image" type="url" id="img-link" class="form__input" placeholder="URL">
                            <div class="form__error">Error message</div>
                        </div>
                    </div>
                    <div class="form__group">
                        <label for="img-link" class="form__label">Size:</label>
                        <input required name="size" type="text" id="size" class="form__input" placeholder="Enter size">
                        <div class="form__error">Error message</div>
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label">Description:</label>
                        <textarea name="description" id="description" class="form__input wysiwyg-editor"
                            placeholder="Enter description"></textarea>
                    </div>

                    <div class="form__group" style="display: flex; justify-content: right;">
                        <button id="createSubmit" type="submit" class="btn btn-primary form__submit-btn">Create</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Edit Product Modal -->
        <div id="editProductModal" class="modal-admin hide">
            <div class="modal-content">
                <span class="close-btn js-toggle" toggle-target="#editProductModal">&times;</span>
                <form id="editProductForm" style="display: flex; flex-direction: column; flex-grow: 1">
                    <!-- Inside the editProductForm -->
                    <input required type="hidden" id="edit-product-id" name="product-id">
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-product-name" class="form__label">Product Name:</label>
                            <input required type="text" id="edit-product-name" class="form__input"
                                placeholder="Enter product name">
                        </div>
                        <div class="form__group">
                            <label for="edit-price" class="form__label">Price:</label>
                            <input required type="number" id="edit-price" class="form__input" placeholder="Enter price">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-quantity" class="form__label">Quantity:</label>
                            <input required type="number" id="edit-quantity" class="form__input" placeholder="Enter quantity">
                        </div>
                        <div class="form__group">
                            <label for="edit-discount" class="form__label">Discount (%):</label>
                            <input required type="number" id="edit-discount" class="form__input"
                                placeholder="Enter discount percentage">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-similar" class="form__label">Similar Products:</label>
                            <input type="text" id="edit-similar" class="form__input"
                                placeholder="Enter similar product IDs separated by commas: 1,2,3,4">
                            <div id="similarError" class="form__error">Nhập các ID cách nhau bởi dấu phẩy hoặc để trống</div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <label for="edit-img-link" class="form__label">Image Links:</label>
                            <input required type="url" id="edit-img-link" class="form__input" placeholder="URL">
                        </div>
                    </div>
                    <div class="form__group">
                        <label for="edit-size" class="form__label">Size:</label>
                        <input required type="text" id="edit-size" class="form__input" placeholder="Enter size">
                        <div class="form__error">Error message</div>
                    </div>
                    <div class="form__group">
                        <label for="edit-description" class="form__label">Description:</label>
                        <textarea id="edit-description" class="form__input wysiwyg-editor"
                            placeholder="Enter description"></textarea>
                    </div>
                    <div class="form__group" style="display: flex; justify-content: right;">
                        <button type="submit" class="btn btn-primary form__submit-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Delete Product Modal -->
        <div id="deleteProductModal" class="modal-admin hide modal-overlay">
            <div class="modal-content">
                <div class="confirm-group">
                    <p>Are you sure you want to delete this product?</p>
                    <div class="btn-wrap">
                        <button id="deleteConfirm" class="js-toggle btn btn-danger"
                            toggle-target="#deleteProductModal">Delete</button>
                        <button class="js-toggle btn btn-secondary btn--no-margin"
                            toggle-target="#deleteProductModal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
        load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
    </script>

    <script>
        // const xmlhttp = new XMLHttpRequest();
        // xmlhttp.onload = function() {
        //     const myObj = JSON.parse(this.responseText);
        //     console.log(myObj);
        //     const table = document.getElementById("productTable");
        //     table.innerHTML = `<tr class="table">
        //         <th class="id-column">ID</th>
        //         <th class="name-column">Name</th>
        //         <th class="description-column">Description</th>
        //         <th class="price-column">Price</th>
        //         <th class="actions-column">Actions</th>
        //         </tr>`;
        // }
        // xmlhttp.open("GET", "/BTL_LTW/LTWeb/admin/products", true);
        // xmlhttp.send();

        function displayProductAdmin(products) {
            const table = document.getElementById("productTable");

            // Clear existing rows except the header
            table.innerHTML = `<tr class="table">
                <th class="id-column">ID</th>
                <th class="name-column">Name</th>
                <th class="size-column">Size</th>
                <th class="description-column">Description</th>
                <th class="quantity-column">Quantity</th>
                <th class="price-column">Price</th>
                <th class="rating-column">Rating</th>
                <th class="discount-column">Discount</th>
                <th class="actions-column">Actions</th>
                </tr>`;
            // Append new rows for each product
            products.forEach((product) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                <td class="id-column">${product.id}</td>
                <td class="name-column">${product.name}</td>
                    <td class="size-column">${product.size}</td>
                    <td class="description-column"><div class="description-column-item">${product.desc}</div></td>
                    <td class="quantity-column">${product.quantity}</td>
                    <td class="price-column">$${product.price}</td>
                    <td class="rating-column">${product.rating}</td>
                    <td class="discount-column">${product.discount}</td>
                    <td class="actions-column">
                        <div class="btn-wrap">
                            <button class="btn--success btn btn-admin--small">See</button>
                            <button class="js-toggle btn-primary btn btn-admin--small" toggle-target="#editProductModal">Edit</button>
                            <button class="js-toggle btn--danger btn btn-admin--small btn--no-margin" toggle-target="#deleteProductModal">Delete</button>
                        </div>
                    </td>
                `;
                table.appendChild(row);
            });
            initJsToggle()
        }

        function sortProductsByIdDescending(products) {
            // Sắp xếp mảng sản phẩm theo thứ tự ID từ cao đến thấp
            return products.sort((a, b) => b.id - a.id);
        }

        fetchProducts();
        async function fetchProducts() {
            try {
                // Hiển thị spinner
                document.getElementById("tableLoader").style.display = "block";
                const response = await fetch("http://localhost/BTL_LTW/LTWeb/admin/products");
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                let products = await response.json();
                // Sắp xếp sản phẩm theo thứ tự ID từ cao đến thấp
                products = sortProductsByIdDescending(products);

                // Lưu vào localStorage
                localStorage.setItem("products", JSON.stringify(products));
                displayProductAdmin(products);
            } catch (error) {
                console.log("Fetch error: " + error.message);
            } finally {
                // Ẩn spinner khi dữ liệu đã tải xong
                document.getElementById("tableLoader").style.display = "none";
            }
        }
    </script>

    <script src="/BTL_LTW/LTWeb/public/assets/js/scripts-admin.js"></script>

    <script>
        // Lấy thẻ div chứa trình soạn thảo
        const description = document.getElementById('description');

        // Thêm sự kiện khi người dùng blur khỏi trình soạn thảo
        description.addEventListener('blur', function () {
            const content = description.innerHTML;
            // Cập nhật nội dung của textarea với nội dung của trình soạn thảo
            document.getElementById('description').value = content;
        });

        // Tạo hàm để cuộn id="createProductModal" lên đầu của modal trước khi nó đóng
        function scrollToCreateProductModal() {
            const createProductModal = document.getElementById("createProductModal");
            createProductModal.scrollTop = 0;
        }

        function clearCreateProductForm() {
            // Xóa giá trị của các trường input
            document.getElementById("product-name").value = "";
            document.getElementById("price").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("discount").value = "";
            document.getElementById("similar").value = "";
            document.getElementById("img-link").value = "";
            // Xóa nội dung trong trình soạn thảo
            document.getElementById("description").innerHTML = "";
        }

        // Tạo hàm để ẩn modal và hiển thị thông báo
        function hideModalAndShowNotification(modalId, message, isSuccess = true) {
            const modal = document.getElementById(modalId);
            modal.classList.add("hide");
            modal.classList.remove("show");

            // Reset the modal to the top before hiding
            modal.scrollTop = 0;

            // Show notification
            const notification = document.createElement("div");
            notification.textContent = message;
            notification.classList.add("notification");
            notification.classList.add(isSuccess ? "notification-success" : "notification-failure"); // Add success or failure class based on the isSuccess flag
            document.body.appendChild(notification);

            // Automatically hide notification after 2 seconds
            setTimeout(() => {
                notification.remove();
            }, 1000);

            // Optionally, you can clear the form inside the modal
            if (modalId === "createProductModal") {
                clearCreateProductForm();
            }
        }

        async function createProduct(productData) {
            try {
                var formData = new FormData();

                for (var key in productData) {
                    formData.append(key, productData[key]);
                }

                const response = await fetch("http://localhost/BTL_LTW/LTWeb/admin", {
                    method: "POST",
                    body: formData
                });
                
                if (!response.ok) {
                    throw new Error(`Failed to create product. Status: ${response.status}`);
                }
                
                fetchProducts();
                hideModalAndShowNotification("createProductModal", "Product created successfully!");

            } catch (error) {
                console.error("Error creating product:", error);
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const createProductForm = document.getElementById("createProductForm");
            createProductForm.addEventListener("submit", function (event) {
                event.preventDefault(); // Ngăn chặn hành động mặc định của form

                // Lấy ra giá trị từ các trường input trong form
                const productName = document.getElementById("product-name").value;
                const price = document.getElementById("price").value;
                const quantity = document.getElementById("quantity").value;
                const discount = document.getElementById("discount").value;
                let similarProducts = document.getElementById("similar").value;
                const imageLink = document.getElementById("img-link").value;
                const size = document.getElementById("size").value;

                // Lấy nội dung mô tả từ CKEditor
                const description = CKEDITOR.instances['description'].getData();

                
                // Tạo một mảng để lưu trữ các URL hình ảnh
                let images = [];
                if (imageLink) {
                    images.push(imageLink);
                }

                if (similarProducts.trim() == "") {
                    similarProducts = [];
                }
                else {
                    similarProducts = similarProducts.split(",").map(id => parseInt(id.trim()));
                }

                // Tạo object productData từ các giá trị thu thập được
                const productData = {
                    name: productName,
                    price: price,
                    description: description,
                    similar: similarProducts,
                    image: images,
                    discount: discount,
                    quantity: quantity,
                    size: size
                };

                // Gọi hàm createProduct với productData
                createProduct(productData);
            });
        });


        function getProductIdFromRow(button) {
            const row = button.closest('tr');
            if (row) {
                return parseInt(row.querySelector('.id-column').textContent, 10);
            }
            return null;
        }

        function getSizeFromRow(button) {
            const row = button.closest('tr');
            if (row) {
                return row.querySelector('.size-column').textContent;
            }
            return null;
        }

        document.getElementById('productTable').addEventListener('click', function (event) {
            const target = event.target;
            if (target.classList.contains('btn-primary') && target.textContent === "Edit") {
                const productId = getProductIdFromRow(target);
                const size = getSizeFromRow(target);
                if (productId && size) {
                    displayEditProductModal(productId,size);
                }
            }
        });

        function displayEditProductModal(productId,size) {
            const products = JSON.parse(localStorage.getItem('products'));
            const product = products.find(p => p.id == productId && p.size == size);
            if (product) {
                document.getElementById('edit-product-id').value = product.id;
                document.getElementById('edit-product-name').value = product.name;
                document.getElementById('edit-price').value = product.price;
                document.getElementById('edit-quantity').value = product.quantity;
                document.getElementById('edit-size').value = product.size;
                document.getElementById('edit-discount').value = product.discount || 0;
                document.getElementById('edit-similar').value = product.similar;
                document.getElementById('edit-img-link').value = product.img;
                // document.getElementById('edit-similar').value = (product.similar_product_ids || []).join(', ');
                // document.getElementById('edit-img-link').value = (product.images && product.images[0]) || '';

                // Chắc chắn rằng CKEditor đã sẵn sàng
                if (CKEDITOR.instances['edit-description']) {
                    CKEDITOR.instances['edit-description'].setData(product.desc);
                } else {
                    // Nếu CKEditor chưa sẵn sàng, khởi tạo và thiết lập dữ liệu
                    CKEDITOR.replace('edit-description', {
                        resize_enabled: false
                    }).then(editor => {
                        editor.setData(product.description);
                    });
                }

                const editModal = document.getElementById('editProductModal');
                editModal.classList.remove('hide');
                editModal.classList.add('show');
            }
        }



        document.getElementById('editProductForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Retrieve productId from hidden input
            const productId = document.getElementById('edit-product-id').value;
            const productName = document.getElementById("edit-product-name").value;
            const price = document.getElementById("edit-price").value;
            const quantity = document.getElementById("edit-quantity").value;
            const discount = document.getElementById("edit-discount").value;
            let similarProducts = document.getElementById("edit-similar").value;
            const imageLink = document.getElementById("edit-img-link").value;
            const size = document.getElementById("edit-size").value;

            // Lấy nội dung mô tả từ CKEditor
            const description = CKEDITOR.instances['edit-description'].getData();

            let images = [];
            if (imageLink) {
                images.push(imageLink);
            }

            if (similarProducts.trim() == "") {
                similarProducts = [];
            }
            else {
                similarProducts = similarProducts.split(",").map(id => parseInt(id.trim()));
            }

            // Gather updated product data from form fields
            const productData = {
                id: productId,  // Ensure the product ID is included in the data object
                name: productName,
                price: price,
                description: description,
                similar: similarProducts,
                image: images,
                discount: discount,
                quantity: quantity,
                size: size,
            };

            // Update the product via API call
            updateProduct(productData);
        });

        async function updateProduct(productData) {
            try {
                var formData = new FormData();
                for (var key in productData) {
                    formData.append(key, productData[key]);
                }
                const url = `http://localhost/BTL_LTW/LTWeb/admin/products/update`;
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData
                });
                // console.log(form)

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                fetchProducts();
                hideModalAndShowNotification("editProductModal", "Product updated successfully!");

            } catch (error) {
                console.error('Update failed:', error);
            }
        }

        document.getElementById('productTable').addEventListener('click', function (event) {
            const target = event.target;
            if (target.classList.contains('btn--danger') && target.textContent === "Delete") {
                const productId = getProductIdFromRow(target);
                const size = getSizeFromRow(target);
                if (productId && size) {
                    // Set the product ID somewhere to retrieve later (e.g., in a hidden input field or a data attribute)
                    document.getElementById('deleteConfirm').setAttribute('data-product-id', productId);
                    document.getElementById('deleteConfirm').setAttribute('data-size', size);
                    const deleteModal = document.getElementById('deleteProductModal');
                    deleteModal.classList.remove('hide');
                    deleteModal.classList.add('show');
                }
            }

            // Kiểm tra có nhấn vào nút See hay không, nếu có thì chuyển hướng đến trang có productId tương ứng
            if (target.classList.contains('btn--success') && target.textContent === "See") {
                const productId = getProductIdFromRow(target);
                const size = getSizeFromRow(target);
                if (productId) {
                    window.location.href = `/BTL_LTW/LTWeb/detail?id=${productId}`;
                }
            }
        });

        document.getElementById('deleteConfirm').addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');
            const size = this.getAttribute('data-size');
            deleteProduct(productId,size);
        });


        async function deleteProduct(productId,size) {
            try {
                const url = `http://localhost/BTL_LTW/LTWeb/admin/products/delete?id=${productId}&size=${size}`; // Adjust the URL as per your API endpoint
                const response = await fetch(url, {
                    method: 'GET', // Method is GET
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                fetchProducts(); // Refresh the product list after deletion
                hideModalAndShowNotification('deleteProductModal', 'Product deleted successfully!');
            } catch (error) {
                console.error('Delete failed:', error);
                hideModalAndShowNotification('deleteProductModal', 'Failed to delete product.', false);
            }
        }

        // Này dùng để khi nhấn vào over-play thì sẽ mất modal
        document.addEventListener("DOMContentLoaded", function () {
            const modals = document.querySelectorAll('.modal-overlay');
            modals.forEach(modal => {
                modal.addEventListener('click', function (event) {
                    // Kiểm tra nếu click vào chính overlay thì đóng modal
                    if (event.target === modal) {
                        modal.classList.toggle('hide');
                        modal.classList.toggle('show')
                    }
                });
            });
        });

    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            resize_enabled: false, // Không cho resize
        });

        CKEDITOR.replace('edit-description', {
            resize_enabled: false, // Không cho resize
        });
        function isValidSimilarPattern(input) {
            return /^(\d+(,\d+)*)?$/.test(input);
        }

        const similarInput = document.getElementById('similar');

        similarInput.addEventListener('blur', function() {
            const value = similarInput.value.trim();
            if (!isValidSimilarPattern(value)) {
                $("#createSubmit").disabled = true;
                $("#similarError").style.display = 'block';
                similarInput.value = '';
                // similarInput.focus();
            }
            else {
                $("#createSubmit").disabled = false;
                $("#similarError").style.display = 'none';
            }
        });
    </script>
</body>

</html>