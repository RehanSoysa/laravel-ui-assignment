<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/', function () {
    $products = [
        [
            'image' => 'images/products_images/mens_pro_long_sleeve.png',
            'name' => "Men’s Pro Long Sleeve <br> Performance Shirt in DezTeck Lite",
            'status' => "Draft",
            'inventory' => "0 In Stock",
            'channels' => 5,
            'markets' => 2,
            'category' => "Activewear Tops",
            'vendor' => "Encore",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
        ],
        [
            'image' => 'images/products_images/womens_pro_long_sleeve.png',
            'name' => "Women’s Pro Long Sleeve <br> Performance Shirt in DezTeck Lite",
            'status' => "Active",
            'inventory' => '73 In Stock for 5 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 6,
            'markets' => 3,
            'category' => "Activewear Tops",
            'vendor' => "Encore",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'', 'stock'=>23, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: white;height:30px;width:30px;border-radius:50px;"></span>White', 'size'=>'', 'stock'=>20, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: green;height:30px;width:30px;border-radius:50px;"></span>Green', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
        ]
        ],
        [
            'image' => 'images/products_images/mens_short_sleeve.png',
            'name' => "Men's Short Sleeve <br> Performance Shirt in CoolTech Fabric",
            'status' => "Active",
            'inventory' => '68 In Stock For 18 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 7,
            'markets' => 4,
            'category' => "Activewear Tops",
            'vendor' => "NextGen",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
        ],
        [
            'image' => 'images/products_images/womens_tank_top.png',
            'name' => "Women's Tank Top  <br> Breathable Fabric",
            'status' => "Active",
            'inventory' => '24 In Stock For 22 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 9,
            'markets' => 1,
            'category' => "Activewear Tops",
            'vendor' => "Evergreen",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
        ],
        [
            'image' => 'images/products_images/mens_full_zip.png',
            'name' => "Men’s Full Zip  <br> Windbreaker Jacket",
            'status' => "Draft",
            'inventory' => '34 In Stock For 12 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 4,
            'markets' => 2,
            'category' => "Outwear",
            'vendor' => "Element",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
            ],
        [
            'image' => 'images/products_images/mens_pro_long_sleeve.png',
            'name' => "Men’s Pro Long Sleeve <br> Performance Shirt in DezTeck Lite",
            'status' => "Draft",
            'inventory' => "0 In Stock",
            'channels' => 5,
            'markets' => 2,
            'category' => "Activewear Tops",
            'vendor' => "Encore",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
        ],
        [
            'image' => 'images/products_images/womens_pro_long_sleeve.png',
            'name' => "Women’s Pro Long Sleeve <br> Performance Shirt in DezTeck Lite",
            'status' => "Active",
            'inventory' => '73 In Stock for 5 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 6,
            'markets' => 3,
            'category' => "Activewear Tops",
            'vendor' => "Encore",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'', 'stock'=>23, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: white;height:30px;width:30px;border-radius:50px;"></span>White', 'size'=>'', 'stock'=>20, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: green;height:30px;width:30px;border-radius:50px;"></span>Green', 'size'=>'', 'stock'=>10, 'price'=>68, 'discount'=>0],
        ]
        ],
        [
            'image' => 'images/products_images/mens_short_sleeve.png',
            'name' => "Men's Short Sleeve <br> Performance Shirt in CoolTech Fabric",
            'status' => "Active",
            'inventory' => '68 In Stock For 18 Variants <br> <span style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG 25</span>',
            'channels' => 7,
            'markets' => 4,
            'category' => "Activewear Tops",
            'vendor' => "NextGen",
            'variants' => [
            ['color'=>'<span style="display:inline=block;background: aqua;height:30px;width:30px;border-radius:50px;"></span>Aqua', 'size'=>'M', 'stock'=>10, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: blue;height:30px;width:30px;border-radius:50px;"></span>Blue', 'size'=>'L', 'stock'=>5, 'price'=>68, 'discount'=>0],
            ['color'=>'<span style="display:inline=block;background: black;height:30px;width:30px;border-radius:50px;"></span>Black', 'size'=>'S', 'stock'=>8, 'price'=>68, 'discount'=>5],
        ]
        ]
    ];

    return view('home', compact('products'));
});