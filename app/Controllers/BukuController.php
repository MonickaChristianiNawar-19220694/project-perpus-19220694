<?php

namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();

        return view('Buku_View', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $model = new BukuModel();

            $rules = [
                'tb_kategori_id' => 'required',
                'tb_penerbit_id' => 'required',
                'judul' => 'required',
                'edisi' => 'required',
                'cetakan' => 'required',
                'sinopsis' => 'required',
                'halaman' => 'required',
                'penulis' => 'required',
                'tahun' => 'required|integer',
                // Tambahan validasi untuk file upload
            ];

            if ($this->validate($rules)) {
                // Implementasi upload file (gunakan Library/File)
                $coverFile = $this->request->getFile('cover_file');
                if ($coverFile->isValid() && !$coverFile->hasMoved()) {
                    $newName = $coverFile->getRandomName();
                    $coverFile->move(ROOTPATH . 'public/uploads', $newName);
                }

                $model->save([
                    'tb_kategori_id' => $this->request->getPost('tb_kategori_id'),
                    'tb_penerbit_id' => $this->request->getPost('tb_penerbit_id'),
                    'judul' => $this->request->getPost('judul'),
                    'edisi' => $this->request->getPost('edisi'),
                    'cetakan' => $this->request->getPost('cetakan'),
                    'sinopsis' => $this->request->getPost('sinopsis'),
                    'halaman' => $this->request->getPost('halaman'),
                    'penulis' => $this->request->getPost('penulis'),
                    'tahun' => $this->request->getPost('tahun'),
                    'cover_file' => $newName ?? null,
                ]);

                return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Buku_View', $data);
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'tb_kategori_id' => 'required',
                'tb_penerbit_id' => 'required',
                'judul' => 'required',
                'edisi' => 'required',
                'cetakan' => 'required',
                'sinopsis' => 'required',
                'halaman' => 'required',
                'penulis' => 'required',
                'tahun' => 'required|integer',
            ];

            if ($this->validate($rules)) {
                $coverFile = $this->request->getFile('cover_file');
                if ($coverFile->isValid() && !$coverFile->hasMoved()) {
                    $newName = $coverFile->getRandomName();
                    $coverFile->move(ROOTPATH . 'public/uploads', $newName);
                }

                $model->save([
                    'id' => $id,
                    'tb_kategori_id' => $this->request->getPost('tb_kategori_id'),
                    'tb_penerbit_id' => $this->request->getPost('tb_penerbit_id'),
                    'judul' => $this->request->getPost('judul'),
                    'edisi' => $this->request->getPost('edisi'),
                    'cetakan' => $this->request->getPost('cetakan'),
                    'sinopsis' => $this->request->getPost('sinopsis'),
                    'halaman' => $this->request->getPost('halaman'),
                    'penulis' => $this->request->getPost('penulis'),
                    'tahun' => $this->request->getPost('tahun'),
                    'cover_file' => $newName ?? $data['buku']['cover_file'],
                ]);

                return redirect()->to('/buku')->with('success', 'Buku berhasil diperbarui.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('Form_Buku_View', $data);
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $buku = $model->find($id);

        // Hapus file cover jika ada
        if ($buku['cover_file']) {
            unlink(ROOTPATH . 'public/uploads/' . $buku['cover_file']);
        }

        $model->delete($id);

        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus.');
    }
}