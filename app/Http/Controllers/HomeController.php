<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('services')->get();
        $services = Service::latest()->limit(5)->get();
        return view('index', ['categories' => $categories, 'services' => $services]);
    }

    public function getCategoryService(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $services = $category->services;
        return view('category.show', ['services' => $services, 'category' => $category]);
    }
}