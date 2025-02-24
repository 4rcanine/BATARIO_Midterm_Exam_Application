<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = [
            ["name" => "Erased (Blu-ray)", "price" => 950, "category" => "DVDs", "image" => "https://www.alltheanime.com/cdn/shop/products/ANI0517_Amaray_2_3D.jpg?v=1610126653&width=1445"],
            ["name" => "Re:Creators Artbook", "price" => 1800, "category" => "Books", "image" => "https://i.ebayimg.com/images/g/vgEAAOSwEoBht2Ed/s-l400.jpg"],
            ["name" => "The Great Pretender Poster Set", "price" => 650, "category" => "Posters", "image" => "https://i.ebayimg.com/images/g/y9YAAOSw86hi-6gE/s-l400.jpg"],
            ["name" => "Vivy: Fluorite Eye’s Song OST Vinyl", "price" => 2200, "category" => "Music", "image" => "https://upload.wikimedia.org/wikipedia/en/a/a9/Vivy_Fluorite_Eye%E2%80%99s_Song_key_visual.jpg"],
            ["name" => "A Place Further than the Universe Figure", "price" => 3200, "category" => "Figures", "image" => "https://cdn.archonia.com/images/1-69845603-1-1-original1/a-place-further-than-the-universe-pvc-figure-nendoroid-hinata-miyake.jpg"],
            ["name" => "91 Days Collector’s Edition", "price" => 2700, "category" => "DVDs", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEM8FnzCcGndXxZ_nWuwt3rwrr0HnEn7DQlg&s"],
            ["name" => "Made in Abyss Nanachi Plush", "price" => 1900, "category" => "Plush Toys", "image" => "https://otakuhobbitoysph.com/cdn/shop/files/1-100_8b5227c4-a242-4472-acda-374d79b34248.jpg?v=1696925900"],
            ["name" => "The Tatami Galaxy Novel", "price" => 1100, "category" => "Books", "image" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1649508834l/60619439.jpg"],
        ];

      
        return view('welcome', compact('products'));
    }
}
