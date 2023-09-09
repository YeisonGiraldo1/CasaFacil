<?php

namespace App\Http\Controllers;
use App\Models\Publications;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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

        $validator = Validator::make($data, [
            'offer_type' => 'required|max:50',
            'property_type' => 'required|max:50',
            'city' => 'required|max:50',
            'neighborhood' => 'required|max:50',
            'address' => 'required|max:50',
            'price' => 'required|max:50|numeric',
            'stratum' => 'required|max:50',
            'status' => 'required|max:50',
            'size' => 'required|max:50|numeric',
            'number_rooms' => 'required|max:50',
            'number_bathrooms' => 'required|max:50',
            'description' => 'required|max:100',
            'main_image' => 'required|image|max:2048',
            'email' => 'required|max:50|email',
            'name' => 'required|max:50',
            'lastname' => 'required|max:50',
            'phone' => 'required|max:10|numeric',
           
           
        ], [
            // Mensajes personalizados de error
            'offer_type.required' => 'El campo tipo de oferta es obligatorio.',
            'offer_type.max' => 'El campo tipo de oferta no puede ser mayor a 50 caracteres.',
            'property_type.required' => 'El campo tipo de propiedad es obligatorio.',
            'property_type.max' => 'El campo tipo de propiedad no puede ser mayor a 50 caracteres.',
            'city.required' => 'El campo ciudad es obligatorio.',
            'city.max' => 'El campo ciudad no puede ser mayor a 50 caracteres.',
            'neighborhood.required' => 'El campo barrio es obligatorio.',
            'neighborhood.max' => 'El campo barrio no puede ser mayor a 50 caracteres.',
            'address.required' => 'El campo direccion es obligatorio.',
            'address.max' => 'El campo direccion no puede ser mayor a 50 caracteres.',
            'price.required' => 'El campo precio es obligatorio.',
            'price.max' => 'El campo precio no puede ser mayor a 50 caracteres.',
            'stratum.required' => 'El campo estrato es obligatorio.',
            'stratum.max' => 'El campo estrato no puede ser mayor a 50 caracteres.',
            
            'status.required' => 'El campo estado es obligatorio.',
            'status.max' => 'El campo estado no puede ser mayor a 50 caracteres.',
            'size.required' => 'El campo tamaño es obligatorio.',
            'size.max' => 'El campo tamaño no puede ser mayor a 50 caracteres.',
            
           
            'number_rooms.required' => 'El campo numero de habitaciones es obligatorio.',
            'number_rooms.max' => 'El campo numero de habitaciones no puede ser mayor a 50 caracteres.',
            'number_bathrooms.required' => 'El campo numero de baños es obligatorio.',
            'number_bathrooms.max' => 'El campo numero de baños no puede ser mayor a 50 caracteres.',

            'description.required' => 'El descripcion es obligatorio.',
            'description.max' => 'El campo descripcion no puede ser mayor a 100 caracteres.',

            'main_image.required' => 'La Imagen es obligatoria',
            'main_image.image' => 'La Imagen debe ser un archivo jpg o png',
            'main_image.max' => 'La imagen debe ser menor a 2MB',


            
            'email.required' => 'El campo email es obligatorio.',
            'email.max' => 'El campo email no puede ser mayor a 50 caracteres.',

            
            'name.required' => 'El campo nombre es obligatorio.',
            'name.max' => 'El campo nombre no puede ser mayor a 50 caracteres.',

         
            
            'lastname.required' => 'El campo celular es obligatorio.',
            'lastname.max' => 'El campo apellido no puede ser mayor a 50 caracteres.',

            
            'phone.required' => 'El campo celular es obligatorio.',
            'phone.max' => 'El campo celular no puede ser mayor a 10 caracteres.',
            
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
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




public function loadviewrefresh($id){
    $data['datos'] = Publications::where('id', $id)->get();
    return view("publications.update",$data);
}





public function update(Request $request, $id)
{
    // Obtener los datos del formulario excluyendo algunos campos
    $data = $request->except([
        '_token', 'main_image', 'additional_image_1', 'additional_image_2', 'additional_image_3',
        'additional_image_4', 'additional_image_5', 'additional_image_6', 'additional_image_7',
        'additional_image_8', 'additional_image_9', 'additional_image_10'
    ]);

    // Subir y almacenar la nueva imagen principal si se proporciona
    if ($request->hasFile('main_image')) {
        $mainImage = $request->file('main_image');
        $mainImageName = time() . '.' . $mainImage->getClientOriginalExtension();
        $mainImage->move(public_path('images'), $mainImageName);
        $data['main_image'] = $mainImageName;
    }

    // Subir y almacenar nuevas imágenes adicionales si se proporcionan
    for ($i = 1; $i <= 10; $i++) {
        $fieldName = 'additional_image_' . $i;
        if ($request->hasFile($fieldName)) {
            $additionalImage = $request->file($fieldName);
            $additionalImageName = time() . '_' . $i . '.' . $additionalImage->getClientOriginalExtension();
            $additionalImage->move(public_path('images'), $additionalImageName);
            $data[$fieldName] = $additionalImageName;
        }
    }

    // Actualizar la publicación existente con los nuevos datos
    $publication = Publication::find($id);

    if (!$publication) {
        // Manejar el caso en el que la publicación no se encuentre
        return redirect()->back()->with('error', 'La publicación no existe.');
    }

    $publication->update($data);

    // Redirigir a la lista de publicaciones u otra página adecuada
    return redirect()->route('list.publications')->with('success', 'La publicación se ha actualizado correctamente.');
}

}
