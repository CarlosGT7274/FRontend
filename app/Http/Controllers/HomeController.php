<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    public function __construct()
    {
        
    }

    public function indexShow()
    {
        $data = [
            'titulo' => 'Bienvenido a mi sitio',
            'contenido' => 'Esta es una página de ejemplo con Blade.',
        ];

        // return $this->view('home.tailwind', $data);
        return view('home.tailwind');
    }

    public function show()
    {
        $data = [
            'titulo' => 'Bienvenido a mi sitio',
            'contenido' => 'Esta es una página de ejemplo con Blade.',
        ];
        // return  $this->view('home.index', $data);
        return view('home.index');
    }
    

    public function index()
    {
        // $this->redirect('/');
        Route::redirect("/hola", "/");
    }
}