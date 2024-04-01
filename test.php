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