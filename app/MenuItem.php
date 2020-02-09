<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    protected $with = [
        'options'
    ];

    public function options()
    {
        return $this->hasMany(MenuItemOption::class, 'menu_item_id', 'id');
    }
}
