<?php

if(!function_exists('userAsset')) {

    /**
     * User Asset
     * @return [type] [description]
     */
    function userAsset($path) {

        return asset('/assets/user/' . config('user.theme') . '/' . $path);
    }
}