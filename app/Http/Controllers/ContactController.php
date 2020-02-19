<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
   public function contact()
{
return view('contact');
} 
   public function contactPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all());

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'bodyMessage' => $request->get('message')
       ), function($message)
   {
       $message->from('email configurado no .env--para o envio');
       $message->to('email que receberah os registros', 'Nome do remetente')->subject('Add o seu subject aqui');
   });
    return back()->with('success', 'Email enviado com sucesso!'); 
   }
}