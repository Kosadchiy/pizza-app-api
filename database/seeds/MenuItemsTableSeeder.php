<?php

use App\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    const ITEMS = [
        [
            'name' => 'Pepperoni',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => ''
        ],
        [
            'name' => 'Margherita',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => ''
        ],
        [
            'name' => 'Carbonara',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => ''
        ],
        [
            'name' => 'Napoletana',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => ''
        ],
    ];

    const OPTIONS = [
        [
            'name' => '30 cm',
            'price' => '8'
        ],
        [
            'name' => '35 cm',
            'price' => '10'
        ],
        [
            'name' => '40 cm',
            'price' => '12'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $item) {
            MenuItem::create($item)->options()->createMany(self::OPTIONS);
        }
    }
}
