<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonCoffees extends Model
{
    use HasFactory;

    private static $noncoffees = [
        [
            'name' => 'Matcha',
            'price' => '20.000',
            'code' =>'mtc',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Taro',
            'price' => '18.000',
            'code' =>'tro',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Red Velvet',
            'price' => '18.000',
            'code' =>'rvt',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Choco Banana',
            'price' => '18.000',
            'code' =>'cbnn',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Milkshake Chocolate',
            'price' => '18.000',
            'code' =>'mchc',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Milkshake Vanilla',
            'price' => '18.000',
            'code' =>'mvnl',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Pina Colada',
            'price' => '18.000',
            'code' =>'pico',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Milk Tea',
            'price' => '16.000',
            'code' =>'mtea',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Rhum Raisin',
            'price' => '18.000',
            'code' =>'rhra',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Earl Grey Milk Tea',
            'price' => '18.000',
            'code' =>'egmt',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Grey Raisin Tea',
            'price' => '16.000',
            'code' =>'grt',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Exotic Strawberry River',
            'price' => '16.000',
            'code' =>'esr',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Summer Tea',
            'price' => '16.000',
            'code' =>'stea',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Strawberry Squash',
            'price' => '16.000',
            'code' =>'ssqh',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Lychee Squash',
            'price' => '16.000',
            'code' =>'lsqh',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Summer Tea',
            'price' => '16.000',
            'code' =>'stea',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Orange Squash',
            'price' => '16.000',
            'code' =>'osqh',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Strawberry Tea',
            'price' => '16.000',
            'code' =>'sbtea',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Lychee Tea',
            'price' => '16.000',
            'code' =>'ltea',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Lemon Tea',
            'price' => '16.000',
            'code' =>'lmte',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Original Tea',
            'price' => '12.000',
            'code' =>'orte',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Ice Cream',
            'price' => '15.000',
            'code' =>'icream',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Fresh Line Water',
            'price' => '12.000',
            'code' =>'flw',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Hot Ginger',
            'price' => '12.000',
            'code' =>'hgng',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Fresh Milk',
            'price' => '12.000',
            'code' =>'fmlk',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Mineral Water',
            'price' => '6.000',
            'code' =>'mw',
            'image' => 'https://via.placeholder.com/400'
        ],

    ];
    public static function allData(){
        return collect(self::$noncoffees);
    }

    public static function allDataWithCode($code){
        $allNonCoffees = static::allData();
        return $allNonCoffees->firstWhere('code', $code);
    }
}
