<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function crear_backup()
    {
        Artisan::call('backup:run', ['--only-db' => true]);
        return redirect()->back()->with('info', 'Backup creado correctamente!');
    }

    public function listar_backups()
    {
        //listar los archivos de la carpeta Citas del disco local
        $files = Storage::disk('local')->files(env('APP_NAME'));
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

    public function descargar_backup($file)
    {
        // Descargar el archivo de la carpeta Citas del disco local desde el navegador
        return Storage::disk('local')->download(env('APP_NAME') . '/' . $file);
        
    }

    public function eliminar_backup($file)
    {
        // Eliminar el archivo de la carpeta Citas del disco local
        Storage::disk('local')->delete(env('APP_NAME') . '/' . $file);
        return redirect()->back()->with('info', 'Backup eliminado correctamente!');
    }

}
