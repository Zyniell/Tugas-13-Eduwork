<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_produk')->insert([
            [
                'nama_kategori' => 'Elektronik',
            ],
            [
                'nama_kategori' => 'Rumah Tangga',
            ],
        ]);

        DB::table('produk')->insert([
            [
                'nama_produk' => 'IPhone 17 Pro Max',
                'deskripsi' => 'Smartphone dengan fitur canggih dan kamera berkualitas tinggi.',
                'harga' => 5000000,
                'stok' => 50,
                'kategori_id' => 1,
                'gambar' => 'https://cdnpro.eraspace.com/media/catalog/product/i/p/iphone-17-pro-max-cosmic-orange-1000_3_2_1.webp',
            ],
            [
                'nama_produk' => 'Blender ABC',
                'deskripsi' => 'Blender multifungsi untuk kebutuhan dapur Anda.',
                'harga' => 800000,
                'stok' => 30,
                'kategori_id' => 2,
                'gambar' => 'blender_abc.jpg',
            ],
        ]);

    }
}
