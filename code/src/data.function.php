<?php


function validateDate(string $date): bool {
    $dateBlocks = array_map('intval', explode("-", $date));

    if (count($dateBlocks) !== 3) {
        return false;
    }

    list($day, $month, $year) = $dateBlocks;

    if ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year > date('Y')) {
        return false;
    }

    return checkdate($month, $day, $year);
}


function validateName(string $name) : bool {
    if (!isset($name) or mb_strlen($name) < 2) return false;
    return true;
}

