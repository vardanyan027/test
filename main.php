<?php

$arr = explode(' ', readline());
print('--------------------------------------');
print("\n");
$main_array = ['vasya', 'pupkin', 'apple', 23, 41, 55, 1, 2];
$arr_merge = array_merge($arr, $main_array);

$flag = false;
$main_array_string = [];
foreach ($main_array as $item) {
    if (is_bool($item) && $item) {
        $flag = true;
        break;
    }
    if (is_string($item)) {
        $main_array_string[] = strtoupper($item);
    }
}

if ($flag) {
    print('main array has boolean item');
} else {
    print('main array has no boolean item');
}
print("\n");

$flag = false;
$new_arr = [];
$arr_not_include_in_main = [];
$arr_include_in_main = [];
$arr_numbers = [];
foreach ($arr as $item) {
    if (!in_array($item, $main_array)) {
        $arr_not_include_in_main[] = $item;
    } else {
        $arr_include_in_main[] = $item;
    }
    if ($item == 'true') {
        $item = true;
        $flag = true;
    } elseif ($item == 'false') {
        $item = false;
    } elseif (is_numeric($item)) {
        $arr_numbers[] = (int) $item;
    }
    $new_arr[] = $item;
}

if ($flag) {
    print('input array has true item');
} else {
    print('input array has not true item');
}
print("\n");
print('merged array');
print("\n");
print_r($arr_merge);
print("\n");

print("where item not in main_array but in input array");
print("\n");
print_r($arr_not_include_in_main);
print("\n");
print('where item in main_array and in input array');
print("\n");
print_r($arr_include_in_main);
print("\n");

print('string to upper case');
print("\n");
print_r($main_array_string);
print("\n");

print('int in input array');
print("\n");
print_r($arr_numbers);
print("\n");

sort($main_array);
print('sorted array');
print("\n");
print_r($main_array);