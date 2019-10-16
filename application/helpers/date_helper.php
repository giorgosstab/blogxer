<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
if (! function_exists('date_format')) {
    function date_format($date) {
        return date( "m/d/Y", strtotime($date));
    }
}