<?php

namespace App\Controllers;

class CoordinatesController extends BaseController
{
    public function arduino()
    {
        // Dapatkan data koordinat dari database atau sumber lainnya
        $latitude = '...';
        $longitude = '...';

        // Kirim data ke view
        return view('coordinates', ['latitude' => $latitude, 'longitude' => $longitude]);
    }
}
