<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Isp;
class IspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isps = [
            [
                'isp' => 'True',
                'isps_color' => '#f44336',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_true_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => 'Ais',
                'isps_color' => '#66bb6a',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_ais_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => '3BB',
                'isps_color' => '#ff7043',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_3bb_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => 'TOT',
                'isps_color' => '#42a5f5',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_tot_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => 'TXRX',
                'isps_color' => '#8d6e63',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_txrx_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => 'Fibernet',
                'isps_color' => '#ab47bc',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_fibernet_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'isp' => 'Other',
                'isps_color' => '#cfd8dc',
                'isps_map_icon' => 'https://raw.githubusercontent.com/ggafiled/vue-crud-fisrt-mile-system/main/public/images/new_other_mark.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];
        Isp::insert($isps);
    }
}