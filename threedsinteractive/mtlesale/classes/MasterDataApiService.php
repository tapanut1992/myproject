<?php namespace Threedsinteractive\Mtlesale\Classes;
use Threedsinteractive\Mtlesale\Models\Nationality;
use Threedsinteractive\Mtlesale\Models\Salutation;
use Threedsinteractive\Mtlesale\Models\Job;
use Threedsinteractive\Mtlesale\Models\Province;
use Threedsinteractive\Mtlesale\Models\District;
use Threedsinteractive\Mtlesale\Models\Status;

class MasterDataApiService extends BaseApiService
{
    public static function  getNationality($lang) {
        $nationality = Nationality::all();
        return $nationality->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
    public static function  getSalutation($lang) {
        $salutation = Salutation::all();
        return $salutation->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
    public static function  getJob($lang) {
        $job = Job::all();
        return $job->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
    public static function  getProvince($lang) {
        $province = province::all();
        return $province->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
    public static function  getDistrict($lang) {
        $district = district::all();
        return $district->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
    public static function  getStatus($lang) {
        $status = status::all();
        return $status->map(function ($item) use($lang) {
            return [
                'id' => $item->id,
                'title' => $item->{'title_'.$lang}
            ];
        });
    }
}