<?php  namespace VaahCms\Modules\Faq\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ExtendController extends Controller
{

    //----------------------------------------------------------
    public function __construct()
    {
    }
    //----------------------------------------------------------
    public static function topLeftMenu()
    {
        $links = [
            [
                'link' => route('vh.backend.faq'),
                'label'=> 'Faq'
            ],
        ];
        return $links;
    }

    //----------------------------------------------------------
    public static function topRightUserMenu()
    {
        $links = [];
        return $links;
    }

    //----------------------------------------------------------

}
