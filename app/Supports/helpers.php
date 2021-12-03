<?php

if (!function_exists('auth_user')) {
    function auth_user($guard = 'web')
    {
        if (!auth($guard)->check()) {
            return null;
        }

        return auth($guard)->user();
    }
}

if (!function_exists('is_valid_mobile_number')) {
    function is_valid_mobile_number($input)
    {
        return preg_match('/^01[3-9]\d{8}$/', strval($input));
    }
}


if (!function_exists('get_enums')) {
    function get_enums($enumClass, $flipArray = true)
    {
        $reflector = new \ReflectionClass($enumClass);
        $enums = $reflector->getConstants();
        return $flipArray ? array_flip($enums) : $enums;
    }
}

if (!function_exists('generate_order_code')) {
    function generate_order_code($number, $prefix, $format = true)
    {
        $number = strval($number);
        $padLength = 12;
        if (!empty($prefix)) {
            $prefix = strval($prefix);
            $padLength = $padLength - strlen($prefix);
        } else {
            $prefix = '';
        }

        $result = "{$prefix}-" . str_pad($number, $padLength, "0", STR_PAD_LEFT);

        return $format ? format_ean($result, strlen($prefix)) : $result;
    }
}

if (!function_exists('format_ean')) {
    function format_ean($ean, $length = 1)
    {
        $parts = [
            "PAT",
//            substr($ean, 0, $length),
            substr($ean, 1, 6),
            substr($ean, 7, 6)
        ];

        return implode('-', $parts);
    }
}

