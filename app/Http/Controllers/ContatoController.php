<?php

namespace App\Http\Controllers;
use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;
class ContatoController extends Controller
{
   public function contato(Request $request){
      /*
       echo'<pre>';
       print_r($request->all()); // Debugging: print all request data
       echo'</pre>';
      
         // Accessing specific input fields
       echo $request->input('name'); // Accessing a specific input field
       echo '<br>';
       echo $request->input('telefone'); // Accessing another input field

      dd($request->all()); // Debugging: dump and die to see all request data
      */

      //persintindo no banco de dados
      //geito simples



      /*
      $conato = new SiteContato();
      $conato->nome = $request->input('name');
      $conato->telefone = $request->input('telefone');
      $conato->email = $request->input('email');
      $conato->motivo_contato = $request->input('motivo_contato');
      $conato->mensagem = $request->input('mensagem');
      $conato->save(); // Save the contact information to the database
      */

      /*
      //geito mais simples
      //usando o método fill
      $contanto = new SiteContato();
      $contanto->fill($request->all()); //pega coleçao de dados enviados
      $contanto->save(); //salva no banco de dados
      */
      //print_r($contanto->getAttributes()); // Debugging: print the attributes of the saved contact

      $motivo_contato = MotivoContato::all();
     

      return view('site.contato',['titulo' => 'Contato (test)' ,'motivo_contato' => $motivo_contato, 'classe' => 'borda-preta']);
   }

   public function salvar(Request $request){
      
      // Validating the request data
      $regras =
         [
         'nome' => 'required|min:3|max:40|unique:site_contatos', // Name must be between 3 and 40 characters and unique in the site_contatos table
         'telefone' => 'required|min:10|max:15', // Phone number must be between 10 and 15 characters
         'email' => 'required|email',  // Email must be a valid email format
         'motivo_contatos_id' => 'required',  // Contact reason must be selected
         'mensagem' => 'required|min:10|max:200'    // Message must be between 10 and 200 characters
         ];
      $mensagens =  // Custom error messages for validation rules
         [
            'required' => 'O campo :attribute é obrigatório.', // Custom error message for required fields
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres.', // Custom error message for minimum length
            'max' => 'O campo :attribute deve ter no máximo :max caracteres.', // Custom error message for maximum length
            'unique' => 'O campo :attribute já está em uso.', // Custom error message for unique fields
            'nome.unique' => 'Este nome já está em uso.', // Custom error message for unique name
            'email.email' => 'O campo email deve ser um endereço de email válido.' // Custom error message for invalid email
         ];
      
      // Validate the request data against the defined rules and custom messages

      $request->validate($regras,$mensagens); // Validate the request data against the defined rules
      SiteContato::create($request->all());
      return redirect()->route('site.index')->with('success', 'Mensagem enviada com sucesso!'); // Redirect to the index route with a success message

   }
}
