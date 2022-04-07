<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function oplata()
    {
        return view('pages.oplata');
    }

    public function dostavka()
    {
        return view('pages.dostavka');
    }

    public function about_us()
    {
        return view('pages.about_us');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function certificates()
    {
        return view('pages.certificates');
    }

    public function news()
    {
        $news = \App\Models\News::where('status', '1')->get();
        return view('pages.news', compact("news"));
    }
    
    public function catalog($id)
    {
        $catalog = \App\Models\Catalog::where('status', '1')->where('id', $id)->first();
        if(!$catalog){
            abort(404);
        }
        $service = \App\Models\Service::where('status', '1')->where('catalog_id', $id)->get();
        return view('pages.catalog', compact("catalog", "service"));
    }

    public function service($id)
    {
        $service = \App\Models\Service::where('status', '1')->where('id', $id)->first();
        if(!$service){
            abort(404);
        }
        $service_lots = \App\Models\ServiceLot::where('services_id', $id)->get();
        return view('pages.service', compact("service_lots", "service"));
    }
    
    public function service_lot($id)
    {
        $service_lots = \App\Models\ServiceLot::where('id', $id)->first();
        if(!$service_lots){
            abort(404);
        }
        $service = \App\Models\Service::where('id', $service_lots->services_id)->where('status', '1')->first();
        if(!$service){
            abort(404);
        }
        return view('pages.service_lot', compact("service_lots", "service"));
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function thank()
    {
        return view('pages.thank');
    }
}
