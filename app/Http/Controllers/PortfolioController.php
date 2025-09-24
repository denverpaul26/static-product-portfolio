<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Poco X7 Pro — Power Meets Style',

            'Subtitle' => 'Experience blazing-fast performance, stunning display, and long-lasting battery life all packed in a sleek design.',

            'profile_image' => 'https://m-cdn.phonearena.com/images/article/166489-wide-two_1200/Poco-X7-and-Poco-X7-Pro-officially-introduced-alongside-Iron-Man-Edition.jpg?1736447456',

            'about' => ['CPU: MediaTek Dimensity 8400',
            'RAM: 8/12GB',
            'STORAGE: 256/512GB',
            'DISPLAY: 6.67" 1220P AMOLED 120Hz',
            'CAMERA: 50 + 8 MP rear / 20 MP front',
            'OS: Android 15, HyperOS 2',
            'BATTERY: 6000mAh 90W'
            ],



        ];

        return view('portfolio.index', compact('portfolio'));

    }

    public function about()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Poco X7 Pro — Power Meets Style',

            'Subtitle' => 'Experience blazing-fast performance, stunning display, and long-lasting battery life all packed in a sleek design.',

            'profile_image' => 'https://m-cdn.phonearena.com/images/article/166489-wide-two_1200/Poco-X7-and-Poco-X7-Pro-officially-introduced-alongside-Iron-Man-Edition.jpg?1736447456',

            'about' => ['CPU: MediaTek Dimensity 8400',
            'RAM: 8/12GB',
            'STORAGE: 256/512GB',
            'DISPLAY: 6.67" 1220P AMOLED 120Hz',
            'CAMERA: 50 + 8 MP rear / 20 MP front',
            'OS: Android 15, HyperOS 2',
            'BATTERY: 6000mAh 90W'
            ],



        ];

        return view('portfolio.about', compact('portfolio'));

    }

}