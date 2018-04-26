<?php

namespace Shridhar\Webservices;

use Illuminate\Support\Facades\Input as InputClass;

/**
 *
 * @author Shridhar Kaushik
 */
trait Input {

    function post($key, $default = null) {
        return array_get($_POST, $key, $default);
    }

    function get($key, $default = null) {
        return array_get($_GET, $key, $default);
    }

    function request($key, $default = null) {
        return array_get($_REQUEST, $key, $default);
    }

    function input($key, $default = null) {
        return InputClass::get($key, $default);
    }

    function file($name) {
        return request()->file($name);
    }

}
