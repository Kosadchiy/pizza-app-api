<?php

use App\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    const ITEMS = [
        [
            'name' => 'Pepperoni',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/pepperoni.jpg'
        ],
        [
            'name' => 'Margherita',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/margherita.jpeg'
        ],
        [
            'name' => 'Carbonara',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/carbonara.jpg'
        ],
        [
            'name' => 'Napoletana',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/napoletana.jpg'
        ],
        [
            'name' => 'Chicken BBQ',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/chicken_bbq.jpg'
        ],
        [
            'name' => 'Ham and mushrooms',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/ham_and_mushrooms.jpg'
        ],
        [
            'name' => 'Chicken ranch',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/chicken_ranch.jpg'
        ],
        [
            'name' => 'Meat',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/meat.jpg'
        ],
        [
            'name' => 'Alfredo',
            'description' => 'Perfect combination: tender chicken fillet with blue cheese crumbles, Parmeggiano sauce, mix of Italian cheeses and Mozzarella cheese',
            'image' => '/images/Alfredo.jpg'
        ]
    ];

    const DRINKS_ITEMS = [
        [
            'name' => 'Coca-cola',
            'description' => 'Soft drink',
            'image' => '/images/coke.jpg'
        ],
        [
            'name' => 'Fanta',
            'description' => 'Soft drink',
            'image' => '/images/fanta.jpeg'
        ],
        [
            'name' => 'Sprite',
            'description' => 'Soft drink',
            'image' => '/images/sprite.jpg'
        ]
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

    const DRINKS_OPTIONS = [
        [
            'name' => '0.5 L',
            'price' => '1'
        ],
        [
            'name' => '1 L',
            'price' => '1.2'
        ],
        [
            'name' => '1.5 L',
            'price' => '1.5'
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
        foreach (self::DRINKS_ITEMS as $item) {
            MenuItem::create($item)->options()->createMany(self::DRINKS_OPTIONS);
        }
    }
}
