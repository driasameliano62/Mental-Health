<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData(Request $request)
    {
        // Path ke file CSV
        $filePath = storage_path('app/mental_dataset_new.csv');

        // Baca file CSV
        $data = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Ambil header
            $header = fgetcsv($handle, 1000, ',');
            // Ambil isi
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        // Gunakan pagination manual
        $perPage = 50; // Jumlah data per halaman
        $currentPage = $request->get('page', 1); // Halaman saat ini
        $items = collect($data);
        $pagedData = new LengthAwarePaginator(
            $items->forPage($currentPage, $perPage), // Data untuk halaman saat ini
            $items->count(),                        // Total data
            $perPage,                               // Jumlah data per halaman
            $currentPage,                           // Halaman saat ini
            ['path' => $request->url()]             // URL untuk pagination
        );

        // Kirim data ke view
        return view('hasil', ['data' => $pagedData]);
    }
}
