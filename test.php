<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("TEST");
$APPLICATION->ShowHead();
?>
	 <?php $APPLICATION->ShowPanel();?>


<form class="partners-requisites__form" method="post">
    <input name="ytryty" value="fhdi">
    <input type="submit">
</form>
<?php
$jsonData = file_get_contents('php://input');
var_dump($jsonData);
?>

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
