<?php namespace VaahCms\Modules\Faq\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return 'PublicController';
    }

}