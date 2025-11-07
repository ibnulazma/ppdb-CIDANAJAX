<?php

namespace App\Controllers;

use App\Models\ModelWilayah;


class Wilayah extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelWilayah = new ModelWilayah();
    }



    public function dataKabupaten($id_provinsi)
    {
        $data = $this->ModelWilayah->kabupaten($id_provinsi);
        echo '<option>--Pilih Kabupaten--</option>';
        foreach ($data as $value) {
            echo '<option value="' . $value['id_kabupaten'] . '">' . $value['kabupaten'] . '</option>
           ';
        }
    }
}
