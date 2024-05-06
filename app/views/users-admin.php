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
    </div>
    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
        load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
    </script>
    <script>
        function displayProductAdmin(users) {
            const table = document.getElementById("productTable");
            // Clear existing rows except the header
            table.innerHTML = `<tr class="table">
                <th class="id-column">Email</th>
                <th class="name-column">Fullname</th>
                <th class="name-column">Phone</th>
                </tr>`;
            // Append new rows for each product
            users.forEach((user) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                <td class="id-column">${user.email}</td>
                <td class="name-column">${user.fullname}</td>
                <td class="size-column">${user.phone}</td>
                `;
                table.appendChild(row);
            });
            initJsToggle()
        }

        fetchProducts();
        async function fetchProducts() {
            try {
                // Hiển thị spinner
                document.getElementById("tableLoader").style.display = "block";
                const response = await fetch("http://localhost/BTL_LTW/LTWeb/admin/get_all_users");
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                let users = await response.json();

                // Lưu vào localStorage
                localStorage.setItem("users", JSON.stringify(users));
                displayProductAdmin(users);
            } catch (error) {
                console.log("Fetch error: " + error.message);
            } finally {
                // Ẩn spinner khi dữ liệu đã tải xong
                document.getElementById("tableLoader").style.display = "none";
            }
        }

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