

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
    // const form = document.querySelector('.partners-requisites__form');
    //
    // form.addEventListener('submit', function(event) {
    //     event.preventDefault();
    //
    //     let formData = {
    //         'Name': form.Name.value,
    //         'Phone': form.Phone.value,
    //         'Email': form.Email.value,
    //         'Comments': form.Comments.value,
    //         'URI': form.URI.value,
    //         'NAME': form.NAME.value
    //     };
    //
    //     BX.ajax({
    //         method: 'POST',
    //         url: '/local/templates/main/form_question.php',
    //         data: formData,
    //         processData: false,
    //         contentType: true,
    //         onsuccess: function(response) {
    //             console.log('Форма отправлена успешно');
    //             console.log(response);
    //             console.log(formData)
    //         },
    //         onfailure: function(response) {
    //             console.log('Ошибка отправки формы');
    //             console.log(response);
    //         }
    //     });
    // });

    document.querySelector('.partners-requisites__form').addEventListener('submit', function () {
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
