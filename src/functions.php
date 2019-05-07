<?php

namespace smdb;

if (!function_exists('model')) {
    function model()
    {
        return new Model();
    }
}
