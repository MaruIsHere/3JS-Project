<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 3 data secara acak (atau gunakan latest() untuk yang terbaru)
        // Kita limit 3 agar pas dengan layout grid desain
        $specimens = Product::inRandomOrder()->limit(3)->get();

        // Jika ingin filter kategori khusus:
        // $specimens = Product::where('category', 'TerumbuKarang')->inRandomOrder()->limit(3)->get();

        // Kembalikan ke view beranda (sesuaikan nama file blade kamu, misal: home.blade.php)
        return view('home', compact('specimens'));
    }
}
