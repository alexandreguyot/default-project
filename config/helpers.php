<?php

if (! function_exists('baseUrl')) {
    function baseUrl() {
        return config('app.base_url');
    }
}


if (! function_exists('adminUrl')) {
    function adminUrl() {
        return config('app.admin_subdomain') . '.' . baseUrl();
    }
}

if (! function_exists('format_phone_number')) {
    function format_phone_number($number) {
        return trim(chunk_split($number, 2, ' '));
    }
}
