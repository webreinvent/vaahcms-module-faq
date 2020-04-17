<?php namespace VaahCms\Modules\Faq\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return view('faq::admin.pages.dashboard');
    }

}