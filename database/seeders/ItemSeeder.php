<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        $accessories = Category::where(
            'name',
            'Aksesori'
        )->firstOrFail();

        $computer = Category::where(
            'name',
            'Perangkat Komputer'
        )->firstOrFail();

        $storage = Category::where(
            'name',
            'Penyimpanan'
        )->firstOrFail();

        $items = [
            [
                'category_id' => $accessories->id,
                'name' => 'Keyboard',
                'price' => 150000,
                'stock' => 10,
            ],
            [
                'category_id' => $accessories->id,
                'name' => 'Mouse',
                'price' => 75000,
                'stock' => 20,
            ],
            [
                'category_id' => $computer->id,
                'name' => 'Monitor',
                'price' => 1500000,
                'stock' => 5,
            ],
            [
                'category_id' => $accessories->id,
                'name' => 'Headset',
                'price' => 250000,
                'stock' => 8,
            ],
            [
                'category_id' => $storage->id,
                'name' => 'Flashdisk',
                'price' => 85000,
                'stock' => 15,
            ],
        ];

        foreach ($items as $item) {
            Item::firstOrCreate(
                ['name' => $item['name']],
                $item
            );
        }
    }
}