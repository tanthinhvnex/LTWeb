document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('a[href^="delete.php"]');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            if (!confirm('Are you sure you want to delete this product?')) {
                e.preventDefault();
            }
        });
    });
});
