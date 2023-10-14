<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();

        return view('Peminjaman_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new PeminjamanModel();

            $rules = [
                'tgl_peminjaman' => 'required',
                'tgl_pengembalian' => 'required',
                'tb_pengguna_id_peminjaman' => 'required',
                'tb_anggota_id' => 'required',
                'tb_koleksibuku_id' => 'required',
                'denda' => 'required|decimal'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
                    'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
                    'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id_peminjaman'),
                    'tb_pengguna_id_pengembalian' => $this->request->getPost('tb_pengguna_id_pengembalian'),
                    'tb_anggota_id' => $this->request->getPost('tb_anggota_id'),
                    'tb_koleksibuku_id' => $this->request->getPost('tb_koleksibuku_id'),
                    'denda' => $this->request->getPost('denda')
                ]);

                return redirect()->to('/peminjaman')->with('success', 'Peminjaman berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Peminjaman_View', $data);
    }

    public function edit($id)
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'tgl_peminjaman' => 'required',
                'tgl_pengembalian' => 'required',
                'tb_pengguna_id_peminjaman' => 'required',
                'tb_anggota_id' => 'required',
                'tb_koleksibuku_id' => 'required',
                'denda' => 'required|decimal'
            ];

            if ($this->validate($rules)) {
                $model->save([
                    'id' => $id,
                    'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
                    'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
                    'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id_peminjaman'),
                    'tb_pengguna_id_pengembalian' => $this->request->getPost('tb_pengguna_id_pengembalian'),
                    'tb_anggota_id' => $this->request->getPost('tb_anggota_id'),
                    'tb_koleksibuku_id' => $this->request->getPost('tb_koleksibuku_id'),
                    'denda' => $this->request->getPost('denda')
                ]);

                return redirect()->to('/peminjaman')->with('success', 'Peminjaman berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Peminjaman_View', $data);
    }

    public function delete($id)
    {
        $model = new PeminjamanModel();
        $model->delete($id);

        return redirect()->to('/peminjaman')->with('success', 'Peminjaman berhasil dihapus.');
    }
}