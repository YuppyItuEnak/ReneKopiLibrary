<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    private static $foods = [
        [
            'name' => 'Nasi Ayam Teriyaki',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our teriyaki sauce',
            'code' => 'nat',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Nasi Ayam Lada Hitam',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our blackpepper sauce',
            'code' =>'nalh',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Nasi Ayam Asam Manis',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our sweet sour sauce',
            'code' =>'naam',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Nasi Ayam BBQ',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our barbeque sauce',
            'code' =>'nabbq',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Nasi Ayam Katsu Sambal Matah',
            'price' => '25.000',
            'desc' => 'seasoned breaded chicken breast and served with rice',
            'code' =>'naksm',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Pasta Carbonara',
            'price' => '25.000',
            'desc' => 'creamy sauce pasta with smoked beef and mushroom',
            'code' =>'pc',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Pasta Aglio e Olio',
            'price' => '25.000',
            'desc' => 'only garlic flavour with chili flakes, smoked beef and mushroom',
            'code' =>'pao',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Nasi Goreng Rene',
            'price' => '23.000',
            'desc' => 'mix vegetables, minced chicken ad fried egg',
            'code' =>'ngr',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Kentang Goreng',
            'price' => '16.000',
            'desc' => 'fried fries',
            'code' =>'kg',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Roti Bakar Strawberry',
            'price' => '16.000',
            'desc' => 'strawberry toast',
            'code' =>'rbs',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Roti Bakar Coklat',
            'price' => '16.000',
            'desc' => 'chocolate toast',
            'code' =>'rbc',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Roti Bakar Tiramisu',
            'price' => '16.000',
            'desc' => 'tiramisu toast',
            'code' =>'rbt',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Tahu Cabe Garam',
            'price' => '16.000',
            'desc' => 'fried tofu with salt and chili',
            'code' =>'tcg',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Tahu Barbeque',
            'price' => '16.000',
            'desc' => 'fried tofu with barbeque sauce',
            'code' =>'tbbq',
            'image' => 'https://via.placeholder.com/400'
        ],
        [
            'name' => 'Tahu Crispy',
            'price' => '14.000',
            'desc' => 'fried tofu',
            'code' =>'tc',
            'image' => 'https://via.placeholder.com/400'
        ],

    ];
    public static function allData(){
        return collect(self::$foods);
    }

    public static function allDataWithCode($code){
        $allFoods = static::allData();
        return $allFoods->firstWhere('code', $code);
    }
}
