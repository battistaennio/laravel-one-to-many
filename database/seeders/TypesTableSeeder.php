<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'VueJS', 'PHP', 'LaravelPHP'];

        foreach ($data as $type) {
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Helper::generateSlug($new_type->name, Type::class);
            $new_type->save();
        }
    }
}
