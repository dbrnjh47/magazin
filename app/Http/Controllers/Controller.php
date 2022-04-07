<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Settings;
use App\Models\News;
use App\Models\Catalog;
use App\Models\Service;

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(Request $request)
    {
        date_default_timezone_set('Europe/Moscow');
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        $this->settings = Settings::first();

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            view()->share('u', $this->user);

            if($this->settings->teh_works && !Auth::check()){
                return response()->view('pages.teh_work');
            }
            return $next($request);
        });

        view()->share('settings', $this->settings);

        $this->news_block = News::where('status', '1')->latest('created_at')->limit(5)->get();
        view()->share('news_block', $this->news_block);

        $this->сatalog_menu = Catalog::where('status', '1')->get();
        view()->share('сatalog_menu', $this->сatalog_menu);

        $this->service_menu = Service::where('status', '1')->get();
        view()->share('service_menu', $this->service_menu);
    }

    public function validation($request)
    {
        $data = $this->runValidator($request);
        if ($data->fails())
            throw new ValidationException($data);
        return $data->validated();
    }

    public function runValidator($request) {
        $currentAction = Route::currentRouteAction();
        list($controller, $method) = explode('@', $currentAction);
        return $this->validator->$method($request);
    }
}
