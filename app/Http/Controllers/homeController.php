<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Exemplo',
            'showButton' => true,
            'items' =>  ['Item 1','Item 2', 'Item 3'],
            'user' => ['name' => 'Matheus Pereira', 'role' => 'Developer']
        ];
        return view('home', $data);
    }
}
