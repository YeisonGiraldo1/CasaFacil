<?php

namespace App\Http\Controllers;
use App\Models\Publications;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function create()
    {

return view('publications.create');
    }

  
    public function register_publication(Request $request)
   
    {
        // Obtener los datos del formulario excluyendo algunos campos
        $data = $request->except([
            '_token', 'main_image', 'additional_image_1', 'additional_image_2', 'additional_image_3',
            'additional_image_4', 'additional_image_5', 'additional_image_6', 'additional_image_7',
            'additional_image_8', 'additional_image_9', 'additional_image_10'
        ]);
    
        // Subir y almacenar la imagen principal
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
            $data['main_image'] = $mainImageName;
        }
    
        // Subir y almacenar imágenes adicionales
        for ($i = 1; $i <= 10; $i++) {
            $fieldName = 'additional_image_' . $i;
            if ($request->hasFile($fieldName)) {
                $additionalImage = $request->file($fieldName);
                $additionalImageName = time() . '_' . $i . '.' . $additionalImage->getClientOriginalExtension();
                $additionalImage->move(public_path('images'), $additionalImageName);
                $data[$fieldName] = $additionalImageName;
            }
        }
    
        // Asignar el ID del usuario autenticado como user_id
        $data['user_id'] = auth()->id(); // Agrega el ID del usuario actualmente autenticado
    
        // Crear la publicación
        $publication = Publications::create($data);
    
        // Opcional: Configurar el atributo delete_images_on_delete
    
        return redirect()->route('home');
    }
    




    public function showPublicationsWelcome()
{
    $publications = Publications::all(); // Suponiendo que "Publications" es tu modelo
    return view('welcome', compact('publications'));
}
  




public function showPublicationsHome()
{
    $publications = Publications::all(); // Suponiendo que "Publications" es tu modelo
    return view('home', compact('publications'));
}
    
     }
