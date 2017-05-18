<?php namespace Threedsinteractive\Mtlesale\Classes;
use Threedsinteractive\Mtlesale\Models\member;

class MasterDataApiService extends BaseApiService
{
    public static function  checkCitizen($lang) {
        $nationality = Nationality::all();
        return $nationality->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }