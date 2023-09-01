<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $builder        = $this->db->table('ms_average_income');
        $query          = $builder->get()->getResult();
        $data['result'] = $query;
        // print_r($query->getResult());
        return view('home/get', $data);
    }
}
