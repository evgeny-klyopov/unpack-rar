<?php

$rar_file = rar_open('fias_xml.rar') or die("Невозможно открыть RAR архив");

$entries = rar_list($rar_file);

foreach ($entries as $entry) {
    echo 'Имя файла: ' . $entry->getName() . "\n";
    echo 'Упакованный размер: ' . $entry->getPackedSize() . "\n";
    echo 'Распакованный размер: ' . $entry->getUnpackedSize() . "\n";

    $entry->extract(__DIR__);
}

rar_close($rar_file);
