<?php

namespace App\Controllers;

use App\Models\PenerbitModel;

class PenerbitController extends BaseController
{
    public function index()
    {
        $model = new PenerbitModel();
        $data['penerbit'] = $model->findAll();

        return view('Penerbit_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new PenerbitModel();

            $rules = [
                'penerbit' => 'required',
                'kota' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'penerbit' => $this->request->getPost('penerbit'),
                    'kota' => $this->request->getPost('kota')
                ]);

                return redirect()->to('/penerbit')->with('success', 'Penerbit berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Penerbit_View', $data);
    }

    public function edit($id)
    {
        $model = new PenerbitModel();
        $data['penerbit'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'penerbit' => 'required',
                'kota' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'penerbit' => $this->request->getPost('penerbit'),
                    'kota' => $this->request->getPost('kota')
                ]);

                return redirect()->to('/penerbit')->with('success', 'Penerbit berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Penerbit_View', $data);
    }

    public function delete($id)
    {
        $model = new PenerbitModel();
        $model->delete($id);

        return redirect()->to('/penerbit')->with('success', 'Penerbit berhasil dihapus.');
    }
}