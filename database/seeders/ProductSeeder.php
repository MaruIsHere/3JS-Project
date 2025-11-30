<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'code' => '001',
                'name' => 'Acropora Cervicornis',
                'description' => 'Acropora cervicornis merupakan jenis koral yang menyukai perairan laut hangat yang dekat dengan permukaan sebagai tempat tinggal. Seperti pada wilayah perairan tropis bagian barat yang juga merupakan tempat dimana terdapat sebagian besar keanekaragaman organisme terumbu karang. Polip yang membentuk karang membutuhkan perairan tropis yang suhunya lebih dari 20°C dan cukup cahaya, menjadikan perairan hangat di laut tropis merupakan tempat sesuai bagi pertumbuhan karang. Acropora cervicornis atau dapat disebut juga karang staghorn (tanduk rusa) membutuhkan air yang sangat beroksigen dan mengandung persediaan hewan planktonik kecil yang cukup. Karang juga membutuhkan air yang jernih, karena selain mengurangi cahaya, hujan sedimen yang deras juga akan menutupi karang. Karang jenis ini ditemukan banyak di perairan karibia dan great barrier reef of Australia.
                                Acropora cervicornis umumnya mempunyai tentakel dalam kelipatan tiga, yang merupakan ciri khas dalam subkelas Zoantharia, juga dikenal sebagai Hexacorallia. Tentakel kecil menyerupai jari akan muncul pada malam hari seperti bintang-bintang kecil di seluruh terumbu karang. Karang staghorn memiliki ciri khas yaitu menumbuhkan “cabang seperti tanduk” sehingga polipnya menonjol di atas pasir hal tersebut menjadi dasar penamaannya. Karang staghorn memiliki nematocyst, yaitu sel penyengat yang terletak di tentakelnya. Sel penyengat ini diperlukan karang untuk mendapatkan makanan.',
                'information' => 'Nama : Acropora Cervicornis
                                Lokasi Geografis : Perairan Karibia dan Great Barrier Reef of Australia
                                Habitat : Perairan laut hangat yang dekat dengan permukaan
                                Struktur : Memiliki cabang seperti tanduk dengan tentakel dalam kelipatan tiga',
                'category' => 'Terumbu Karang',
                'status' => 'active'
            ],
         
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}