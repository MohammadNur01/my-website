<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolios/portfolios', [
            "title" => "All Portfolio",
            "portfolios" => Portfolio::all()
        ]);
    }

    public function show(Portfolio $port)
    {
        return view('portfolios/portfolio', [
            "title" => "Portfolio",
            // "categories" => Post::allCat(),
            "portfolio" => $port
        ]);
    }
}

// Portfolio::create([
//     'title' => 'Portfolio one',
//     'slug' => 'portfolio-one',
//     'excerpt' => 'Lorem ipsum dolor portfolio one ',
//     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ad accusamus quo nihil quod impedit, nesciunt ipsam culpa vitae nulla ratione rem eius voluptates. Aperiam deserunt, ipsam libero officia rerum repellendus culpa iusto aliquam blanditiis repellat voluptatum necessitatibus. Suscipit quia eos eveniet nobis saepe quod ut repellat totam debitis culpa delectus illo, magnam, hic numquam nemo doloribus rerum. </p> <p> Voluptatem distinctio reprehenderit facere architecto repellat, quos necessitatibus doloribus animi sapiente libero nostrum soluta corporis recusandae fugit incidunt. Doloribus laborum dolorum perspiciatis repellendus dignissimos quia culpa debitis quibusdam est. Provident sequi, molestiae atque consequuntur blanditiis cupiditate, tempora mollitia corrupti sapiente incidunt placeat eius fugit a quasi explicabo deleniti.</p> <p> Ea ut corrupti, officia eveniet exercitationem autem ex ratione vero quaerat fugit nostrum velit alias unde dolor dignissimos molestias architecto numquam sint ipsa reiciendis voluptatum non tempore. Necessitatibus expedita sed dicta nobis dolore odio, iure modi, debitis laudantium in cum. Officiis neque vero ex? </p> ',
//     'image' => 'port1.jpg'
// ]);