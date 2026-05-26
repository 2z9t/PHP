<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class QuestController extends Controller
{
    public function perfil(): View
    {
        return view('perfil', [
            'nome' => 'Marcos',
        ]);
    }

    public function tarefas(): View
    {
        return view('tarefas', [
            'tarefas' => ['Estudar Blade', 'Salvar o mundo', 'Dormir'],
        ]);
    }

    public function pagina(): View
    {
        return view('pagina');
    }
}

