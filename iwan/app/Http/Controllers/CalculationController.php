<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\FishTest;
use Illuminate\Http\Request;
use Phpml\Classification\NaiveBayes;

class CalculationController extends Controller
{
    protected $naiveBayes;

    public function __construct(NaiveBayes $naiveBayes)
    {
        $this->naiveBayes = $naiveBayes;
    }

    public function index(Request $request)
    {
        $title = "Perhitungan Naive Bayes";
        $fish = Fish::all();

        $samples = [];
        $labels = [];
        $labelIndex = 0;
        $labelMapping = [];

        foreach ($fish as $item) {
            $sample = [
                $item->water_temperature,
                $item->depth,
                $item->waters,
                $item->pool_area,
                $item->challenger_height,
                $item->bottom_pool,
                $item->fish_class,
            ];

            $fishType = $item->fish_type;

            // Jika label belum ada dalam mapping, tambahkan ke mapping dengan indeks numerik
            if (!isset($labelMapping[$fishType])) {
                $labelMapping[$fishType] = $labelIndex;
                $labelIndex++;
            }

            // Konversi label string ke bentuk numerik
            $numericLabel = $labelMapping[$fishType];

            // Memasukkan data sampel ke dalam array $samples
            $samples[] = $sample;

            // Memasukkan label numerik ke dalam array $labels
            $labels[] = $numericLabel;
        }
        $data = FishTest::get();
        $predictions = [];
        // Inisialisasi model Naive Bayes di sini
        $naiveBayes = new NaiveBayes();
        $naiveBayes->train($samples, $labels);
        foreach ($data as $value) {
            $dataToPredict = [
                $value['water_temperature'], // $request->input('water_temperature'),
                $value['depth'], // $request->input('depth'),
                $value['waters'], // $request->input('waters'),
                $value['pool_area'], // $request->input('pool_area'),
                $value['challenger_height'], // $request->input('challenger_height'),
                $value['bottom_pool'], // $request->input('bottom_pool'),
                $value['fish_class'], // $request->input('fish_class'),
            ];
            $prediction = $naiveBayes->predictSample($dataToPredict);
            $predictions[] = $prediction;
        }
        // Convert the numeric predictions back to the original labels
        $predictedLabels = array_map(function ($predicted) use ($labelMapping) {
            return array_search($predicted, $labelMapping);
        }, $predictions);
        return view('calculation.index', compact('title', 'predictedLabels', 'data'));
    }
}
