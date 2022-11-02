<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffees extends Model
{
    use HasFactory;

    private static $coffees = [
        [
            'name' => 'Espresso',
            'price' => '12.000',
            'desc' => 'double shot, extracted to 32ml',
            'code' => 'esp',
            'image' => 'https://images.unsplash.com/photo-1610889556528-9a770e32642f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1315&q=80'
        ],
        [
            'name' => 'Americano',
            'price' => '15.000',
            'desc' => 'espresso, hot water',
            'code' => 'ame',
            'image' => 'https://images.unsplash.com/photo-1581996323441-538096e854b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=436&q=80'
        ],
        [
            'name' => 'Affogato',
            'price' => '16.000',
            'desc' => 'espresso with 2 scoop vanilla ice cream',
            'code' => 'aff',
            'image' => 'https://images.unsplash.com/photo-1594631661960-34762327295a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80'
        ],
        [
            'name' => 'Cappucino',
            'price' => '18.000',
            'desc' => 'espresso, steamed milk with milk foam',
            'code' => 'cap',
            'image' => 'https://images.unsplash.com/photo-1531441802565-2948024f1b22?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
        ],
        [
            'name' => 'Mochaccino',
            'price' => '18.000',
            'desc' => 'espresso, chocolate, milk',
            'code' => 'moc',
            'image' => 'https://awsimages.detik.net.id/community/media/visual/2020/11/04/cara-meracik-mochaccino-2.jpeg?w=700&q=90'
        ],
        [
            'name' => 'Caffe Latte',
            'price' => '18.000',
            'desc' => 'espresso, steamed milk',
            'code' => 'caf',
            'image' => 'https://images.unsplash.com/photo-1616866860951-417035eda234?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80'
        ],
        [
            'name' => 'Kopi Susu Caramel',
            'price' => '20.000',
            'desc' => 'espresso, milk, caramel syrup',
            'code' => 'ksc',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi Susu Hazelnut',
            'price' => '20.000',
            'desc' => 'espresso, milk, hazelnut syrup',
            'code' => 'ksh',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi Susu Rum',
            'price' => '20.000',
            'desc' => 'espresso, milk, rum syrup',
            'code' => 'ksr',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi Susu Vanilla',
            'price' => '20.000',
            'desc' => 'espresso, milk, vanilla syrup',
            'code' => 'ksv',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi Susu Pandan',
            'price' => '20.000',
            'desc' => 'espresso, milk, pandan syrup',
            'code' => 'ksp',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi SUsu Rhum Raisin',
            'price' => '20.000',
            'desc' => 'espresso, milk, raisin syrup',
            'code' => 'ksrr',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Kopi Susu Butterscotch',
            'price' => '20.000',
            'desc' => 'espresso, milk, butterscotch syrup',
            'code' => 'ksb',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Iced Avocado Coffee',
            'price' => '20.000',
            'desc' => 'espresso, avocado powder, milk, topped with vanilla ice cream',
            'code' => 'iac',
            'image' => 'https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2021/09/08/avocadojpg-20210908040041.jpg'
        ],
        [
            'name' => 'Iced Banana Coffee',
            'price' => '20.000',
            'desc' => 'espresso, banana powder, topped with vanilla ice cream',
            'code' => 'ibc',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ],
        [
            'name' => 'Iced Chocolate Raisin Coffee',
            'price' => '18.000',
            'desc' => 'blended milk, espresso, chocolate, with raisin',
            'code' => 'icrc',
            'image' => 'https://images.unsplash.com/photo-1549407978-23788293b970?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'

        ],
        [
            'name' => 'Iced Coffee Float',
            'price' => '16.000',
            'desc' => 'shaked coffee with water, topped with vanilla ice cream',
            'code' => 'icf',
            'image' => 'https://www.readyseteat.com/sites/g/files/qyyrlu501/files/uploadedImages/img_4050_2059.JPG'
        ],
        [
            'name' => 'Manual Brewing',
            'price' => '18.000',
            'desc' => 'ask our baristas to find out the single origin coffe we have today!',
            'code' => 'mb',
            'image' => 'https://www.readyseteat.com/sites/g/files/qyyrlu501/files/uploadedImages/img_4050_2059.JPG'
        ]
        
        
    ];

    public static function allData(){
        return collect(self::$coffees);
    }

    public static function allDataWithCode($code){
        $allCoffees = static::allData();
        return $allCoffees->firstWhere('code', $code);
    }
}
