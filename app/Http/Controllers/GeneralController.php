<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();

        $facebookPixel = $configuration->facebook_pixel;
        $googleAnalytics = $configuration->google_analytics;

        return view('layouts.frontend.app', compact('facebookPixel', 'googleAnalytics'));
    }
}
