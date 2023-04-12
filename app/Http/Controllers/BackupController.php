<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;


class BackupController extends Controller
{
    public function listar_backup()
    {

        $files=Storage::disk('local')->files(env('APP_NAME'));

        rsort($files);
        foreach ($files as $key => $file) {
            $files[$key] = [
                'name' => basename($file),
                'date' => date('d-m-Y H:i:s', Storage::disk('local')->lastModified($file)),
                'size' => round(Storage::disk('local')->size($file) / 1048576, 2) . ' MB'
                
            ];
        }
        return view('admin.backup.listar', compact('files'));

    }

    public function crear_backup()
    {
        Artisan::call('backup:run', ['--only-db' => true]);
        return redirect()->back()->with('info', '¡Archivo de respaldo creado correctamente!');
    }


    public function descargar_backup($file)
    {

        return Storage::disk('local')->download(env('APP_NAME') .'/'.$file);
    }

    public function eliminar_backup($file)
    {

        Storage::disk('local')->delete(env('APP_NAME') .'/'.$file);
        return redirect()->back()->with('info', '¡Archivo de espaldo eliminado correctamente!');

    }
}
