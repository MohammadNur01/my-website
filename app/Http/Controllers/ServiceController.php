<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services/services', [
            "title" => "All Services",
            "services" => Service::all()
        ]);
    }

    public function show(Service $service)
    {
        return view('services/service', [
            "title" => "Service",
            "service" => $service
        ]);
    }
}
