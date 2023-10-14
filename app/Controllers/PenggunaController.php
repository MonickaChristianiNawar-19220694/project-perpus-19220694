<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class PenggunaController extends BaseController
{
    public function index()
    {
        $model = new PenggunaModel();
        $data['pengguna'] = $model->findAll();

        return view('Pengguna_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new PenggunaModel();

            $rules = [
                'email' => 'required|valid_email',
                'nama_lengkap' => 'required',
                'katasandi' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'email' => $this->request->getPost('email'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'katasandi' => password_hash($this->request->getPost('katasandi'), PASSWORD_DEFAULT)
                ]);

                return redirect()->to('/pengguna')->with('success', 'Pengguna berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Pengguna_View', $data);
    }

    public function edit($id)
    {
        $model = new PenggunaModel();
        $data['pengguna'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'nama_lengkap' => 'required',
                'katasandi' => 'required'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'email' => $this->request->getPost('email'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'katasandi' => password_hash($this->request->getPost('katasandi'), PASSWORD_DEFAULT)
                ]);

                return redirect()->to('/pengguna')->with('success', 'Pengguna berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Pengguna_View', $data);
    }

    public function delete($id)
    {
        $model = new PenggunaModel();
        $model->delete($id);

        return redirect()->to('/pengguna')->with('success', 'Pengguna berhasil dihapus.');
    }
}