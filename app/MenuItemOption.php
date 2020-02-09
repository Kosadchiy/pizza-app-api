<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItemOption extends Model
{
    protected $fillable = [
        'name',
        'menu_item_id',
        'price'
    ];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class, 'menu_item_id', 'id');
    }
}
