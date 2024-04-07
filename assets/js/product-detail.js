console.log("abc");
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