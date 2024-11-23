<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FishController extends Controller
{
    public function index()
    {
        $title = "Data Ikan";
        $fish = Fish::get();

        return view('fish.index', compact('title', 'fish'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'water_temperature' => 'required',
            'depth' => 'required',
            'waters' => 'required',
            'pool_area' => 'required',
            'challenger_height' => 'required',
            'bottom_pool' => 'required',
            'fish_class' => 'required',
            'fish_type' => 'required',
        ]);

        Fish::create($credentials);

        return back()->with('success', 'Berhasil Menambah data ikan!');
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        Fish::find($id)->delete();

        return back()->with('success', 'Berhasil menghapus data ikan!');
    }

    public  function edit($id)
    {
        $id = Crypt::decrypt($id);
        $title = "Edit Data Ikan";
        $fish = Fish::find($id);

        return view('fish.edit', compact('title', 'fish'));
    }

    public function update(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $credentials = $request->validate([
            'water_temperature' => 'required',
            'depth' => 'required',
            'waters' => 'required',
            'pool_area' => 'required',
            'challenger_height' => 'required',
            'bottom_pool' => 'required',
            'fish_class' => 'required',
            'fish_type' => 'required',
        ]);

        Fish::find($id)->update($credentials);

        return redirect('fish')->with('success', 'Berhasil mengubah data ikan!');
    }
}
