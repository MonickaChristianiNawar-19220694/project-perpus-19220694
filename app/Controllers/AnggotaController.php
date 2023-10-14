<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();

        return view('Anggota_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new AnggotaModel();

            $rules = [
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'notelp' => 'required',
                'email' => 'required|valid_email'
            ];

            if ($this->validate($rules)) {
                $model-save([
                    'nama_lengkap' => $this->request-getPost('nama_lengkap'),
                    'alamat' => $this->request->getPost('alamat'),
                    'kota' => $this->request->getPost('kota'),
                    'notelp' => $this->request->getPost('notelp'),
                    'email' => $this-request->getPost('email'),
                ]);

                return redirect()->to('/anggota')->with('success', 'anggota berhasil di tambahkan.');
            } else {
                $data['validation'] = $this->validator;

            }
        }
        return view('Form_Anggota_View', $data);
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'notelp' => 'required',
                'email' => 'required|valid_email'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'alamat' => $this->request->getPost('alamat'),
                    'kota' => $this->request->getPost('kota'),
                    'notelp' => $this->request->getPost('notelp'),
                    'email' => $this->request->getPost('email'),
                ]);

                return redirect()->to('/anggota')->with('success', 'Anggota berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Anggota_View', $data);
    }

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);

        return redirect()->to('/anggota')->with('success', 'Anggota berhasil dihapus.');
    }
}