<?php namespace Threedsinteractive\Mtlesale\Apis;

//namespace Threedsinteractive\Mtlesale\Views;
use App\User;
use Threedsinteractive\Mtlesale\Classes\MasterDataApiService;
class MasterDataApiController extends BaseApiController
{
    function __construct() {
        parent::__construct();
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return [
            'name' => post('name')
        ];
    }
    public function getNationality()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getNationality($this->lang)
        ];
    }
    public function getSalutation()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getSalutation($this->lang)
        ];
    }
    public function getJob()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getJob($this->lang)
        ];
    }
    public function getProvince()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getProvince($this->lang)
        ];
    }
    public function getDistrict()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getDistrict($this->lang)
        ];
    }
    public function getStatus()
    {
        return [
            'status' => 'success',
            'results' => MasterDataApiService::getStatus($this->lang)
        ];
    }
}