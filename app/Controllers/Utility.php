<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Utility extends BaseController
{
    public function index()
    { {
            session();

            $data = [
                'title'         => 'SIAKADINKA',
                'subtitle'      => 'PPDB',
                'ppdb'          => $this->ModelPpdb->AllData(),
                'sekolah'       => $this->ModelSekolah->AllData(),
                'ta'            => $this->ModelTa->statusTa(),
                'jenjang'       => $this->ModelJenjang->AllData(),
            ];
            return view('ppdb/utility', $data);
        }
    }
}
