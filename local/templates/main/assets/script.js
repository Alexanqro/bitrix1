const check = document.querySelector('[data-top-checkbox]');
const reset = document.querySelector('.catalog-hero__reset-text');

if (check !== null && reset !== null) {
    check.addEventListener('click', function () {
        document.getElementById('Form').submit();
    })

    reset.addEventListener('click', function () {
        window.location.href = window.location.pathname;
    })

    function selectChange() {
        document.getElementById('Form').submit();
    }
}
else {
    document.querySelector('.partners-requisites__form').addEventListener('submit', function () {
        let emailInput = document.getElementById('EmailID').value;
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let phoneRegex = /^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
        let phoneInput = document.getElementById('PhoneID').value;
        let nameRegex = /^[А-Яа-яЁё\s]+$/;
        let nameInput = document.getElementById('NameID').value;

        let formData = new FormData(this);
        let convertedData = {};
        for (const [key, value] of formData.entries()) {
            convertedData[key] = value;
        }
        console.log(convertedData)
        let jsonData = JSON.stringify(convertedData);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/main/form_question.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json; UTF-8');
        xhr.onload = function () {
            if (xhr.status === 200) {
                console.log(jsonData);
            } else {
                console.log('Произошла ошибка при отправке формы: ' + xhr.status);
            }
        };
        xhr.send(jsonData);
    });
}