<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                'banner' => 'images/slider/slider 1.jpg',
                'type' => 'Fashion',
                'title' => 'Go Youn-jung',
                'starting_price' => '1',
                'btn_url' => 'https://youtu.be/vs-gfy3Pv1c?si=-xvJX_VAY2LB2Oc5',
                'serial' => '1',
                'status' => '1'
            ],
            [
                'banner' => 'images/slider/slider 2.jpg',
                'type' => 'Fashion',
                'title' => 'Go Youn-jung ',
                'starting_price' => '1',
                'btn_url' => 'https://youtu.be/vs-gfy3Pv1c?si=-xvJX_VAY2LB2Oc5',
                'serial' => '1',
                'status' => '1'
            ],
            [
                'banner' => 'images/slider/slider 3.jpg',
                'type' => 'Fashion',
                'title' => 'Go Youn-jung ',
                'starting_price' => '1',
                'btn_url' => 'https://youtu.be/vs-gfy3Pv1c?si=-xvJX_VAY2LB2Oc5',
                'serial' => '1',
                'status' => '1'
            ]
            ]);
    }
}
