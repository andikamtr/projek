<?php

namespace App\Http\Controllers;

use App\Models\FishTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FishTestingController extends Controller
{
    public function index()
    {
        $title = "Data Ikan";
        $fishTest = FishTest::get();

        return view('fish-test.index', compact('title', 'fishTest'));
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
        ]);

        FishTest::create($credentials);

        return back()->with('success', 'Berhasil Menambah data testing!');
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        FishTest::find()->delete();

        return back()->with('success', 'Berhasil menghapus data testing!');
    }

    public  function edit($id)
    {
        $id = Crypt::decrypt($id);
        $title = "Edit Data Testing";
        $fishTest = FishTest::find($id);

        return view('fish-test.edit', compact('title', 'fishTest'));
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

        FishTest::find($id)->update($credentials);

        return redirect('fish-test')->with('success', 'Berhasil mengubah data testing!');
    }
}
