<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    private static $coffees = [
        [
            'name' => 'Espresso',
            'price' => '12.000',
            'desc' => 'double shot, extracted to 32ml',
            'code' => 'esp'
        ],
        [
            'name' => 'Americano',
            'price' => '15.000',
            'desc' => 'espresso, hot water',
            'code' => 'ame'
        ],
        [
            'name' => 'Affogato',
            'price' => '16.000',
            'desc' => 'espresso with 2 scoop vanilla ice cream',
            'code' => 'aff'
        ],
        [
            'name' => 'Cappucino',
            'price' => '18.000',
            'desc' => 'espresso, steamed milk with milk foam',
            'code' => 'cap'
        ],
        [
            'name' => 'Mochaccino',
            'price' => '18.000',
            'desc' => 'espresso, chocolate, milk',
            'code' => 'moc'
        ],
        [
            'name' => 'Caffe Latte',
            'price' => '18.000',
            'desc' => 'espresso, steamed milk',
            'code' => 'caf'
        ],
        [
            'name' => 'Kopi Susu Caramel',
            'price' => '20.000',
            'desc' => 'espresso, milk, caramel syrup',
            'code' => 'ksc'
        ],
        [
            'name' => 'Kopi Susu Hazelnut',
            'price' => '20.000',
            'desc' => 'espresso, milk, hazelnut syrup',
            'code' => 'ksh'
        ],
        [
            'name' => 'Kopi Susu Rum',
            'price' => '20.000',
            'desc' => 'espresso, milk, rum syrup',
            'code' => 'ksr'
        ],
        [
            'name' => 'Kopi Susu Vanilla',
            'price' => '20.000',
            'desc' => 'espresso, milk, vanilla syrup',
            'code' => 'ksv'
        ],
        [
            'name' => 'Kopi Susu Pandan',
            'price' => '20.000',
            'desc' => 'espresso, milk, pandan syrup',
            'code' => 'ksp'
        ],
        [
            'name' => 'Kopi SUsu Rhum Raisin',
            'price' => '20.000',
            'desc' => 'espresso, milk, raisin syrup',
            'code' => 'ksrr'
        ],
        [
            'name' => 'Kopi Susu Butterscotch',
            'price' => '20.000',
            'desc' => 'espresso, milk, butterscotch syrup',
            'code' => 'ksb'
        ],
        [
            'name' => 'Iced Avocado Coffee',
            'price' => '20.000',
            'desc' => 'espresso, avocado powder, milk, topped with vanilla ice cream',
            'code' => 'iac'
        ],
        [
            'name' => 'Iced Banana Coffee',
            'price' => '20.000',
            'desc' => 'espresso, banana powder, topped with vanilla ice cream',
            'code' => 'ibc'
        ],
        [
            'name' => 'Iced Chocolate Raisin Coffee',
            'price' => '18.000',
            'desc' => 'blended milk, espresso, chocolate, with raisin',
            'code' => 'icrc'
        ],
        [
            'name' => 'Iced Coffee Float',
            'price' => '16.000',
            'desc' => 'shaked coffee with water, topped with vanilla ice cream',
            'code' => 'icf'
        ],
        [
            'name' => 'Manual Brewing',
            'price' => '18.000',
            'desc' => 'ask our baristas to find out the single origin coffe we have today!',
            'code' => 'mb'
        ]
        
        
    ];
}
