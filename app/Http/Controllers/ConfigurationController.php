<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $entity = Configuration::first();
        return view('admin.configuration.edit', compact("entity"));
    }

    public function update(Request $request)
    {
        $configuration = Configuration::first();

        $configuration->facebook_pixel = $request->post("facebook_pixel");
        $configuration->google_analytics = $request->post("google_analytics");
        $configuration->mail_host = $request->post("mail_host");
        $configuration->mail_port = $request->post("mail_port");
        $configuration->mail_username = $request->post("mail_username");
        $configuration->mail_password = $request->post("mail_password");
        $configuration->mail_from_address = $request->post("mail_from_address");

        $configuration->save();

        return redirect()->route("admin.configuration")->with('message', "Saved successfully");
    }
}
