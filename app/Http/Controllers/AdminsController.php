<?php

namespace App\Http\Controllers;



use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class adminsController extends Controller
{
    public function add()
    {
        return view('admins.add');
    }
    public function addSave(Request $form)
    {
      
        $dados = $form->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'senha' => 'required',
            
            
        ]);

        

        $admin = Admin::create($dados);

        
      
    }

}
