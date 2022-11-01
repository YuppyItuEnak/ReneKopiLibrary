<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    private static $foods = [
        [
            'name' => 'Nasi Ayam Teriyaki',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our teriyaki sauce',
            'code' =>'nat'
        ],
        [
            'name' => 'Nasi Ayam Lada Hitam',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our blackpepper sauce',
            'code' =>'nalh'
        ],
        [
            'name' => 'Nasi Ayam Asam Manis',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our sweet sour sauce',
            'code' =>'naam'
        ],
        [
            'name' => 'Nasi Ayam BBQ',
            'price' => '20.000',
            'desc' => 'hand-trimmed chicken breast, served with our barbeque sauce',
            'code' =>'nabbq'
        ],
        [
            'name' => 'Nasi Ayam Katsu Sambal Matah',
            'price' => '25.000',
            'desc' => 'seasoned breaded chicken breast and served with rice',
            'code' =>'naksm'
        ],
        [
            'name' => 'Pasta Carbonara',
            'price' => '25.000',
            'desc' => 'creamy sauce pasta with smoked beef and mushroom',
            'code' =>'pc'
        ],
        [
            'name' => 'Pasta Aglio e Olio',
            'price' => '25.000',
            'desc' => 'only garlic flavour with chili flakes, smoked beef and mushroom',
            'code' =>'pao'
        ],
        [
            'name' => 'Nasi Goreng Rene',
            'price' => '23.000',
            'desc' => 'mix vegetables, minced chicken ad fried egg',
            'code' =>'ngr'
        ],
        [
            'name' => 'Kentang Goreng',
            'price' => '16.000',
            'desc' => 'fried fries',
            'code' =>'kg'
        ],
        [
            'name' => 'Roti Bakar Strawberry',
            'price' => '16.000',
            'desc' => 'strawberry toast',
            'code' =>'rbs'
        ],
        [
            'name' => 'Roti Bakar Coklat',
            'price' => '16.000',
            'desc' => 'chocolate toast',
            'code' =>'rbc'
        ],
        [
            'name' => 'Roti Bakar Tiramisu',
            'price' => '16.000',
            'desc' => 'tiramisu toast',
            'code' =>'rbt'
        ],
        [
            'name' => 'Tahu Cabe Garam',
            'price' => '16.000',
            'desc' => 'fried tofu with salt and chili',
            'code' =>'tcg'
        ],
        [
            'name' => 'Tahu Barbeque',
            'price' => '16.000',
            'desc' => 'fried tofu with barbeque sauce',
            'code' =>'tbbq'
        ],
        [
            'name' => 'Tahu Crispy',
            'price' => '14.000',
            'desc' => 'fried tofu',
            'code' =>'tc'
        ],

    ];
}
