<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Procedimiento;

class ListaProcedimientos
{
    public function compose (View $view)
    {

        $procedimientos = Procedimiento::where('activo',1)->orderBy('nombre')->get();
        $view->with (['procedimientos' => $procedimientos]);
    }
}