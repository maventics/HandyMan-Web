<?php

namespace Database\Seeders;

use App\Models\SettingModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingModel::create([
            'key'=>"name",
            'value'=>'HandyMan',
        ]);
        SettingModel::create([
            'key'=>"logo",
            'value'=>'/images/logo.png',
        ]);
        SettingModel::create([
            'key'=>"default_currency",
            'value'=>'PKR',
        ]);
    }
}
