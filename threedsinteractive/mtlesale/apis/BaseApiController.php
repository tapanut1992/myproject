<?php namespace Threedsinteractive\Mtlesale\Apis;

use Illuminate\Routing\Controller;

class BaseApiController  extends Controller
{
    public $lang;
    function __construct() {
        $this->lang = post('lang');
        if($this->lang !== 'en'){
            $this->lang = 'th';
        }
        $this->citizen = post('citizen');
    }
}