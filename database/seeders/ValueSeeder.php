<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Value::create([
           "attribute_id" =>1,
           "name" => "red"
       ]);
       Value::create([
           "attribute_id" =>1,
           "name" => "yellow"
       ]);
       Value::create([
           "attribute_id" =>1,
           "name" => "purple"
       ]);
       Value::create([
           "attribute_id" =>1,
           "name" => "blue"
       ]);
        Value::create([
           "attribute_id" =>2,
           "name" => "leather"
       ]);
            Value::create([
           "attribute_id" =>2,
           "name" => "natural leather"
       ]);
            Value::create([
           "attribute_id" =>2,
           "name" => "material"
       ]);

    }
}
