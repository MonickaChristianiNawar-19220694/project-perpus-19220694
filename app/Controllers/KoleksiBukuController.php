<?php

namespace App\Controllers;

use App\Models\KoleksiBukuModel;

class KoleksiBukuController extends BaseController
{
    public function index()
    {
        $model = new KoleksiBukuModel();
        $data['koleksibuku'] = $model->findAll();

        return view('KoleksiBuku_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new KoleksiBukuModel();

            $rules = [
                'tb_buku_id' => 'required',
                'nomor_koleksi' => 'required',
                'status_koleksi' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'tb_buku_id' => $this->request->getPost('tb_buku_id'),
                    'nomor_koleksi' => $this->request->getPost('nomor_koleksi'),
                    'status_koleksi' => $this->request->getPost('status_koleksi')
                ]);

                return redirect()->to('/koleksibuku')->with('success', 'Koleksi Buku berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_KoleksiBuku_View', $data);
    }

    public function edit($id)
    {
        $model = new KoleksiBukuModel();
        $data['koleksibuku'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'tb_buku_id' => 'required',
                'nomor_koleksi' => 'required',
                'status_koleksi' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'tb_buku_id' => $this->request->getPost('tb_buku_id'),
                    'nomor_koleksi' => $this->request->getPost('nomor_koleksi'),
                    'status_koleksi' => $this->request->getPost('status_koleksi')
                ]);

                return redirect()->to('/koleksibuku')->with('success', 'Koleksi Buku berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_KoleksiBuku_View', $data);
    }

    public function delete($id)
    {
        $model = new KoleksiBukuModel();
        $model->delete($id);

        return redirect()->to('/koleksibuku')->with('success', 'Koleksi Buku berhasil dihapus.');
    }
}