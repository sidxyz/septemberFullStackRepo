<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showServices()
    {
        $services = new Service();
        $services = $services->all();
        return view('servicesBackEnd')->with('services',$services);
    }

    public function deleteService($id)
    {
        Service::Destroy($id);
        return redirect('servicesBackEnd');
    }
}
