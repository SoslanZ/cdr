<?php
/*
 * Автоинформатор. Формирования масива для "Тип вызова"
 *
 * Автоматически подключаеться из AutoinformController при условии
 * что сам параметр [type] не являеться масивом.
 * Не зависимо сколько значений будет содержать [type], первой
 * строкой поля выбора будет "Любой"
 *
 * используемая переменная для возврата:
 * (Array) $type_arr  - где
 *    ключи - это коды типов (в поле type), а значения - текст, название типа.
 *
 * Доступны переменые
 *   App::Db() - обект класса mysqli
 *   $this     - обект класса AutoinformController (если файл подцепляеться автоматически)
 *
 * charset="UTF-8"
 */
$type_arr = array();

// Ваш код

// пример
$type_arr  = array(
        "code" => "label code",
        '1' => "Анализ",
        '2' => "Прием"
);

$res = App::Db()->query("SELECT VERSION()");
$result = $res->fetch_array();
$type_arr['version'] = "SQL version-".$result[0];


// -----------------------------------------------------------------------
// ---- END code ---------------------------------------------------------
// -----------------------------------------------------------------------
return (is_array($type_arr)) ? $type_arr : array();