<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassificationController extends Controller
{
    public function index()
    {
        return view('classification.form');
    }
    public function classify(Request $request)
    {
        // Validasi input
        $request->validate([
            'age' => 'required|integer|between:18,65',
            'gender' => 'required|in:Non-binary,Prefer not to say,Female,Male',
            'occupation' => 'required|in:IT,Finance,Healthcare,Education,Engineering,Sales,Other',
            'mental_health_condition' => 'required|in:No,Yes',
            'consultation_history' => 'required|in:No,Yes',
            'sleep_hours' => 'required|numeric|between:4,10',
            'physical_activity_hours' => 'required|numeric|between:0,10',
        ]);

        // Membaca dataset CSV
        $dataPath = storage_path('app/mental_dataset_new.csv');
        $data = $this->readCsv($dataPath);

        // Hitung frekuensi untuk setiap kelas
        $frequencies = ['High' => 0, 'Medium' => 0, 'Low' => 0];
        $totalData = count($data);

        // Hitung frekuensi untuk setiap kelas (Stress Level)
        foreach ($data as $row) {
            $frequencies[$row[7]]++;
        }

        // Hitung probabilitas untuk setiap kelas
        $probabilities = [
            'High' => $frequencies['High'] / $totalData,
            'Medium' => $frequencies['Medium'] / $totalData,
            'Low' => $frequencies['Low'] / $totalData,
        ];

        // Input dari pengguna
        $input = [
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'occupation' => $request->input('occupation'),
            'mental_health_condition' => $request->input('mental_health_condition'),
            'consultation_history' => $request->input('consultation_history'),
            'sleep_hours' => $request->input('sleep_hours'),
            'physical_activity_hours' => $request->input('physical_activity_hours'),
        ];

        // Hitung probabilitas untuk setiap kelas (High, Medium, Low) berdasarkan input pengguna
        $results = [];
        foreach (['High', 'Medium', 'Low'] as $class) {
            $prob = $probabilities[$class];

            // Menghitung probabilitas kondisional untuk setiap fitur
            foreach ($input as $feature => $value) {
                $prob *= $this->getConditionalProbability($feature, $value, $class, $data);
            }

            $results[$class] = $prob;
        }

        // Hitung total probabilitas untuk semua kelas
        $totalProb = array_sum($results);

        // Hitung persentase untuk masing-masing kelas
        $percentages = [];
        foreach ($results as $class => $prob) {
            $percentages[$class] = ($prob / $totalProb) * 100;
        }

        // Tentukan kelas dengan probabilitas tertinggi
        $predictedClass = array_keys($results, max($results))[0];

        // Tampilkan hasil klasifikasi dan persentase
        return view('classification.result', [
            'predictedClass' => $predictedClass,
            'percentages' => $percentages
        ]);
    }
    // Membaca data CSV
    private function readCsv($filePath)
    {
        $data = [];
        if (($handle = fopen($filePath, "r")) !== false) {
            // Skip header
            fgetcsv($handle);

            // Baca setiap baris
            while (($row = fgetcsv($handle)) !== false) {
                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }

    // Fungsi untuk menghitung probabilitas kondisional
    private function getConditionalProbability($feature, $value, $class, $data)
    {
        $count = 0;
        $total = 0;

        foreach ($data as $row) {
            if ($row[7] === $class) {
                $total++;
                // Menentukan indeks berdasarkan fitur
                $featureIndex = $this->getFeatureIndex($feature);
                if ($row[$featureIndex] == $value) {
                    $count++;
                }
            }
        }

        return $count / $total;
    }

    // Fungsi untuk menentukan indeks fitur
    private function getFeatureIndex($feature)
    {
        $featureIndices = [
            'age' => 0,
            'gender' => 1,
            'occupation' => 2,
            'mental_health_condition' => 3,
            'consultation_history' => 4,
            'sleep_hours' => 5,
            'physical_activity_hours' => 6,
        ];

        return $featureIndices[$feature];
    }
}

