<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
   "PARAMETERS" => array(
        "FILTER_NAME" =>  array (
            "PARENT"=> "BASE", 
             "NAME" => "testfilter", 
             "TYPE" => "STRING", 
             "MULTIPLE" => "Y",
             "ADDITIONAL_VALUES" => "Y",
             "DEFAULT" => null,
            ),
        "ELEMENT_ID" => array (
            "PARENT"=> "BASE", 
             "NAME" => "", 
             "TYPE" => "STRING", 
             "MULTIPLE" => "Y",
             "ADDITIONAL_VALUES" => "N",
             "DEFAULT" => null,
            ),
        "PROPERTY_NAME" =>  array (
            "PARENT"=> "BASE", 
             "NAME" => "", 
             "TYPE" => "STRING", 
             "MULTIPLE" => "Y",
             "ADDITIONAL_VALUES" => "N",
             "DEFAULT" => null,
            ),

     ),
    );
?>