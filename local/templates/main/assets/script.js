
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

    let jsonData;
    document.querySelector('.partners-requisites__form').addEventListener('submit', function () {
        let formData = new FormData(this);
        let collectedData = Object.fromEntries(formData.entries());

        jsonData = JSON.stringify(collectedData);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/main/form_question.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
        xhr.onload = function () {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if ('errors' in response) {
                    alert(response.errors.join('\n'));
                }
            } else {
                console.log('Произошла ошибка при отправке формы: ' + xhr.status);
            }
        };
        xhr.send(jsonData);
    });
}