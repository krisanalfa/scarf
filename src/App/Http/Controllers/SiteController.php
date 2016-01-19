<?php

namespace App\Http\Controllers;

class SiteController
{
    /**
     * Handle to '/' request.
     *
     * @return array
     */
    public function index()
    {
        return [
            'name' => 'Scarf',
            'version' => '1.0.1',
        ];
    }
}
