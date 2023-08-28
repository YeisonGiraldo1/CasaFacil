<?php

namespace App\Http\Controllers;
use App\Models\Publications;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


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
    
        // create the publication
        $publication = Publications::create($data);
    
        // Opcional: Configurar el atributo delete_images_on_delete
    
        return redirect()->route('list.publications');
    }
    




    public function showPublicationsWelcome()
{
    $publications = Publications::all(); 
    return view('welcome', compact('publications'));
}
  




public function showPublicationsHome()
{
    $publications = Publications::all(); 
    return view('home', compact('publications'));
}



public function propertydetail($id) {
    $data['publications'] = Publications::where('id', $id)->select()->get();

    $additionalImages = [];
    if ($data['publications']->count() > 0) {
        $publication = $data['publications'][0];
        $additionalImages = [
            
            asset('images/' . $publication->main_image),
            asset('images/' . $publication->additional_image_1),
            asset('images/' . $publication->additional_image_2),
            asset('images/' . $publication->additional_image_3),
            asset('images/' . $publication->additional_image_4),
            asset('images/' . $publication->additional_image_5),
            asset('images/' . $publication->additional_image_6),
            asset('images/' . $publication->additional_image_7),
            asset('images/' . $publication->additional_image_8),
            asset('images/' . $publication->additional_image_9),
            asset('images/' . $publication->additional_image_10),
        ];
    }

    return view('publications.details', $data, compact('additionalImages'));
}



public function propertysearch(Request $request){


    $location = $request->input('city');
    $propertyType = $request->input('property_type');
    $offerType = $request->input('offer_type');

   
    //makes the consultation the databases to get the filtered propertys 
   $query = DB::table('publications'); 
   // Aply the filter if location whether provides
   if ($location) {
    $query->where('city', $location);
   }

   // Aply the filter if property tipe whether provides
   if ($propertyType) {
    $query->where('property_type', $propertyType);
   }

   // Aply the filter if offer tipe whether provides
   if ($offerType) {
    $query->where('offer_type', $offerType);
   }


$filteredProperties= $query->get();

    return view('publications.search', compact('filteredProperties'));
}




public function listpublications(){


    $data['datos'] =Publications::where('user_id', auth()->id())->select()->get(); // show only the publications of the user 
    return view('publications.list',$data);
}



public function delete($id){
    Publications::destroy([$id]);
 
    return redirect()->route('list.publications');
}
}
