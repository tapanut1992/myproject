<?php namespace ThreeDSInteractive\MtlESale\Models;

use Model;

/**
 * Model
 */

class Nationality extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $rules = [
    ];
    public $table = 'nationalities';
}
/*
class Province extends Eloquent 
{
     
    public $timestamps = false;
 
    // ชื่อตาราง tbl_province ในฐานข้อมูล
    protected $table = 'threedsinteractive_mtlesale_nationality';
     
}
*/