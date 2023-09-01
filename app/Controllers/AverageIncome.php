<?php

namespace App\Controllers;

class AverageIncome extends BaseController
{
    public function index()
    {
        $builder        = $this->db->table('ms_average_income');
        $query          = $builder->where('status', 1)->get()->getResult();
        $data['result'] = $query;
        // print_r($query->getResult());
        return view('average_income/index', $data);
    }

    public function create() {
        return view('average_income/add');
    }

    public function store() {
        try {
            $data = $this->request->getPost();
            $data['payment_date'] = date('Y-m-d', strtotime($data['payment_date']));
            $data['payment_price'] = str_replace(".","", $data['payment_price']);
            $data['buruh1_price'] = str_replace(".","", $data['buruh1_price']);
            $data['buruh2_price'] = str_replace(".","", $data['buruh2_price']);
            $data['buruh3_price'] = str_replace(".","", $data['buruh3_price']);
            $data['status'] = 1;

            // $this->request->getVar('payment_date'),
            // print_r($data);
            $this->db->table('ms_average_income')->insert($data);
            
            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('average-income'))->with('success', 'Data berhasil dibuat!');
            }
            // return $data;
        } catch (\Exception $e) {
            return $e->getMessage() . ' on file ' . $e->getFile() . ' on line number ' . $e->getLine();
        }
    }

    public function detail($id) {
        $query = $this->db->table('ms_average_income')->getWhere(['id' => $id]);
        if ($query->resultID->num_rows > 0) {
            $data['result'] = $query->getRow();
            return view('average_income/detail', $data);
        }
    }

    public function edit($id) {
        $query = $this->db->table('ms_average_income')->getWhere(['id' => $id]);
        if ($query->resultID->num_rows > 0) {
            $data['result'] = $query->getRow();
            return view('average_income/edit', $data);
        }
    }

    public function update($id) {
        try {
            $data = $this->request->getPost();
            $data['payment_date'] = date('Y-m-d', strtotime($data['payment_date']));
            $data['payment_price'] = str_replace(".","", $data['payment_price']);
            $data['buruh1_price'] = str_replace(".","", $data['buruh1_price']);
            $data['buruh2_price'] = str_replace(".","", $data['buruh2_price']);
            $data['buruh3_price'] = str_replace(".","", $data['buruh3_price']);
            $data['status'] = 1;
            unset($data['_method']);

            $this->db->table('ms_average_income')->where('id', $id)->update($data);
            
            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('average-income'))->with('success', 'Data berhasil diubah!');
            }
        } catch (\Exception $e) {
            return $e->getMessage() . ' on file ' . $e->getFile() . ' on line number ' . $e->getLine();
        }
    }

    public function destroy($id) {
        $data['status'] = 0;
        $query = $this->db->table('ms_average_income')->where('id', $id)->update($data);

        // $query = $this->db->table('ms_average_income')->where('id', $id)->delete();

        if ($query) {
            return redirect()->to(site_url('average-income'))->with('success', 'Data berhasil dihapus!');
        }
    }
}
