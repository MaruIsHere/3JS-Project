<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class DataController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        $datas = $query->latest()->paginate(100);
        $datas->appends($request->query());

        return view('data.object', compact('datas'));
    }

    public function show(Product $data)
    {
        return view('data.object-detail', compact('data'));
    }

    public function data3d(Product $id)
    {
        return view('3D.3dObject', compact('id'));
        // return view('3D.acropora_cervicornis', compact('id'));
    }
}
