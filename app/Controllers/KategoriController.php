<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    public function index()
    {
        $model = new KategoriModel();
        $data['kategori'] = $model->findAll();

        return view('Kategori_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new KategoriModel();

            $rules = [
                'kategori' => 'required',
                'kode_ddc' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'kategori' => $this->request->getPost('kategori'),
                    'kode_ddc' => $this->request->getPost('kode_ddc')
                ]);

                return redirect()->to('/kategori')->with('success', 'Kategori berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Kategori_View', $data);
    }

    public function edit($id)
    {
        $model = new KategoriModel();
        $data['kategori'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'kategori' => 'required',
                'kode_ddc' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'kategori' => $this->request->getPost('kategori'),
                    'kode_ddc' => $this->request->getPost('kode_ddc')
                ]);

                return redirect()->to('/kategori')->with('success', 'Kategori berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Kategori_View', $data);
    }

    public function delete($id)
    {
        $model = new KategoriModel();
        $model->delete($id);

        return redirect()->to('/kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}