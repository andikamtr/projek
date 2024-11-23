<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required',
        ]);

        try {
            $response = Mahasiswa::create($validate);
            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => array(
                    'nama' => [$e->getMessage()]
                )
            ]);
        }
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required'
        ]);

        try {
            $response = Mahasiswa::where('id', $id)->update($validate);
            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Success',
                'errors' => array(
                    [$e->getMessage()]
                )
            ]);
        }
    }


    public function destroy(string $id)
    {
        $response = Mahasiswa::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Success'
        ]);
    }
}
