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
    public static function extendTopLeftMenu()
    {
        $links = [
            [
                'link' => route('vh.backend.faq'),
                'label'=> 'Logout'
            ],
        ];
        return $links;
    }

    //----------------------------------------------------------
    public static function extendTopRightUserMenu()
    {
        $links = [];
        return $links;
    }

    //----------------------------------------------------------

}
