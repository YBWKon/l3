<?php

$text = $_POST["text"];
echo "Текст: ",  $text, "\nСлов: ", str_word_count($text), "\nСимволов: ", strlen($text);