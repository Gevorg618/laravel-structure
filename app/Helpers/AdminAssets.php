<?php

if(!function_exists('adminAsset')) {

    /**
     * Admin Asset
     * @return [type] [description]
     */
    function adminAsset($path) {

        return asset('/assets/admin/' . config('admin.theme') . '/' . $path);
    }
}