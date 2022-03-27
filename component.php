<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!CModule::IncludeModule('iblock')){
    showError("Не установлен модуль Инфоблоки");
}
else {
    

$arParams = ['FILTER_NAME' , 'ELEMENT_ID', 'PROPERTY_NAME'];

$arResult = Array();
$res = CIBlockElement::GetList(Array(), false, false, false, $arParams);

while($ob = $res->GetNextElement()){ 
 $arItem = $ob->GetFields();  
 $arItem['PROPERITY_NAME'] = $ob->GetProperties();

$arResult[] = $arItem;
}

    
}