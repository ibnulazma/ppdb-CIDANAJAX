<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }
    public function index()
    { {
            $data = [
                'title' => 'SPMBINKATA',
                'subtitle' => 'Login',
                'validation'    =>  \Config\Services::validation(),
            ];

            echo view('v_login', $data);
        }
    }


    public function cek_loginuser()
    {
        $validation = $this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'valid_email' => 'Format {field} tidak valid.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
        ]);

        if (!$validation) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->to(base_url('auth'))->withInput();
        }




        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->ModelAuth->getUserByEmail($email);



        if ($user) {

            // ✅ Cek apakah akun sudah aktif
            if ($user['status_aktif'] == 0) {
                session()->setFlashdata('error', 'Akun Anda belum aktif. Silakan menunggu verifikasi dari admin.');
                return redirect()->to(base_url('auth'))->withInput();
            }
            if ($user && password_verify($password, $user['password'])) {
                session()->set([
                    'nama_user' => $user['nama_user'],
                    'email'     => $user['email'],
                    'foto'      => $user['foto'],
                    'level'      => $user['level'],
                    'logged_in' => true
                ]);

                if ($user['level'] == 'admin') {
                    return redirect()->to(base_url('admin'));
                } else if ($user['level'] == 'bendahara') {
                    return redirect()->to(base_url('formulir'));
                } else if ($user['level'] == 'user') {
                    return redirect()->to(base_url('formulir'));
                } else if ($user['level'] == 'kasir') {
                    return redirect()->to(base_url('transaksi'));
                }
            } else {
                session()->setFlashdata('error', 'Email atau password salah!');
                return redirect()->to(base_url('auth'))->withInput();
            }
        } else {
            session()->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to(base_url('auth'))->withInput();
        }
    }




    public function register()
    {

        $data = [
            'title' => 'SPMBINKATA',
            'subtitle' => 'Register',
            'validation'    =>  \Config\Services::validation(),
        ];
        return view('v_register', $data);
    }


    public function simpan_register()
    {
        // Validasi input
        $validation = $this->validate([
            'nama_user' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'min_length' => '{field} minimal 3 karakter.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[tbl_user.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'valid_email' => 'Format {field} tidak valid.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]|regex_match[/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'min_length' => '{field} minimal 6 karakter.',
                    'regex_match' => '{field} harus mengandung huruf dan angka.'
                ]
            ],
            'password_konfirmasi' => [
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'matches' => '{field} tidak sama dengan Password.'
                ]
            ]
        ]);
        if (!$validation) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register'))->withInput();
        }

        // Simpan ke database dengan password_hash
        $this->ModelAuth->insert([
            'nama_user' => $this->request->getPost('nama_user'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level'     => '0',
            'status_aktif' => 0
        ]);

        session()->setFlashdata('pesan', 'Registrasi berhasil! Tunggu akun Anda diaktifkan oleh admin.');
        return redirect()->to(base_url('auth'));
    }




    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }
}
