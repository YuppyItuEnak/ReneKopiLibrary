<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonCoffee extends Model
{
    use HasFactory;

    private static $noncoffees = [
        [
            'name' => 'Matcha',
            'price' => '20.000',
            'code' =>'mtc'
        ],
        [
            'name' => 'Taro',
            'price' => '18.000',
            'code' =>'tro'
        ],
        [
            'name' => 'Red Velvet',
            'price' => '18.000',
            'code' =>'rvt'
        ],
        [
            'name' => 'Choco Banana',
            'price' => '18.000',
            'code' =>'cbnn'
        ],
        [
            'name' => 'Milkshake Chocolate',
            'price' => '18.000',
            'code' =>'mchc'
        ],
        [
            'name' => 'Milkshake Vanilla',
            'price' => '18.000',
            'code' =>'mvnl'
        ],
        [
            'name' => 'Pina Colada',
            'price' => '18.000',
            'code' =>'pico'
        ],
        [
            'name' => 'Milk Tea',
            'price' => '16.000',
            'code' =>'mtea'
        ],
        [
            'name' => 'Rhum Raisin',
            'price' => '18.000',
            'code' =>'rhra'
        ],
        [
            'name' => 'Earl Grey Milk Tea',
            'price' => '18.000',
            'code' =>'egmt'
        ],
        [
            'name' => 'Grey Raisin Tea',
            'price' => '16.000',
            'code' =>'grt'
        ],
        [
            'name' => 'Exotic Strawberry River',
            'price' => '16.000',
            'code' =>'esr'
        ],
        [
            'name' => 'Summer Tea',
            'price' => '16.000',
            'code' =>'stea'
        ],
        [
            'name' => 'Strawberry Squash',
            'price' => '16.000',
            'code' =>'ssqh'
        ],
        [
            'name' => 'Lychee Squash',
            'price' => '16.000',
            'code' =>'lsqh'
        ],
        [
            'name' => 'Summer Tea',
            'price' => '16.000',
            'code' =>'stea'
        ],
        [
            'name' => 'Orange Squash',
            'price' => '16.000',
            'code' =>'osqh'
        ],
        [
            'name' => 'Strawberry Tea',
            'price' => '16.000',
            'code' =>'sbtea'
        ],
        [
            'name' => 'Lychee Tea',
            'price' => '16.000',
            'code' =>'ltea'
        ],
        [
            'name' => 'Lemon Tea',
            'price' => '16.000',
            'code' =>'lmte'
        ],
        [
            'name' => 'Original Tea',
            'price' => '12.000',
            'code' =>'orte'
        ],
        [
            'name' => 'Ice Cream',
            'price' => '15.000',
            'code' =>'icream'
        ],
        [
            'name' => 'Fresh Line Water',
            'price' => '12.000',
            'code' =>'flw'
        ],
        [
            'name' => 'Hot Ginger',
            'price' => '12.000',
            'code' =>'hgng'
        ],
        [
            'name' => 'Fresh Milk',
            'price' => '12.000',
            'code' =>'fmlk'
        ],
        [
            'name' => 'Mineral Water',
            'price' => '6.000',
            'code' =>'mw'
        ],

    ];
}
