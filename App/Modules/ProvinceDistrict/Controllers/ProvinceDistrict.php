<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 22/5/2559
 * Time: 23:00
 */

namespace App\Modules\ProvinceDistrict\Controllers;


use App\Models\amphur;
use App\Models\district;
use App\Models\province;
use System\HMVC\HMVC;

class ProvinceDistrict extends HMVC
{

    protected $provinces;
    protected $amphurs;
    protected $districts;
    protected $id;


    public function index()
    {
        if ($_POST['action'] == 'province_id') {
            $this->getAmphur($_POST['value']);
        } elseif ($_POST['action'] == 'amphur_id') {
            $this->getDistrict($_POST['value']);
        } else {
            $this->provinces = new province();
            $this->provinces->select();
            $this->view();
        }
    }

    public function getAmphur($id)
    {
        $this->amphurs = new amphur();
        $this->amphurs->find("province_id = " . $id);
        $this->view("Amphur");
    }

    public function getDistrict($id)
    {
        $this->districts = new district();
        $this->districts->find("amphur_id = " . $id);
        $this->view("District");
    }
}