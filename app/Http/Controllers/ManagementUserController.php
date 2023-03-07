<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam controller ManagementUser. dengan memiliki data nama dan mata pelajaran ";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Andini Putri Ramadhani";

        $pelajaran = ["Workshop Sistem Informasi Berbasis Website","Workshop Mobile", "Literasi Digital"];

        return view('home', compact('nama', 'pelajaran'));
    }
}
//    {
//         // return "Halo ini adalah method index, dalam controller ManagementUser.";
//         return "Method ini nantinya akan digunakan untuk mengambil semua data user";
//     }
//     public function create()
//     {
//         return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
//     }

//     public function store(Request $request)
//     {
//         return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
//     }

//     public function show($id)
//     {
//         return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan  id=" . $id;
//     }

//     public function edit($id)
//     {
//         return "Method ini nantinya akan digunakan untuk menampilkan fore untuk mengubah data edit dengan id=" . $id;
//     }
//     public function update(Request $request, $id)
//     {
//         return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
//     }

//     public function destroy($id)
//     {
//         return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
//     }
