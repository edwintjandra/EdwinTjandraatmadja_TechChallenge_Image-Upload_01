<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'title'=>'gambar 1',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'url_image'=>'public/download/image.jpeg'
        ]);

        Image::create([
            'title'=>'gambar 2',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'url_image'=>'public/download/download.jpeg'
        ]);

        Image::create([
            'title'=>'gambar 3',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'url_image'=>'public/download/gambar-pemandangan.jpg'
        ]);
    }
}
