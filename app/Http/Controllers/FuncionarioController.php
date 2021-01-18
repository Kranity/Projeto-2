<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Empresa;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller {
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function adminFuncionarios()
    {
        $funcionarios = Funcionario::paginate(10);
        return view('admin.adminFuncionarios', ['funcionarios' => $funcionarios]);
    }

    function usuarioFuncionarios()
    {
        $funcionarios = Funcionario::paginate(10);
        return view('usuario.usuarioFuncionarios', ['funcionarios' => $funcionarios]);
    }

    public function cadastrarFuncionarioPagina()
    {
        $empresas = Empresa::all();
        return view('modificar.cadastrarFuncionario', ['empresas' => $empresas]);
    }

    public function cadastrarFuncionario(FuncionarioRequest $funcionarioRequest)
    {
        Funcionario::create($funcionarioRequest->all());
        return redirect()->route('admin.funcionarios');
    }

    public function editarFuncionarioPagina($id)
    {
        if (!$funcionario = Funcionario::find($id))
            return redirect()->route('admin.funcionarios');
        $empresas = Empresa::all();
        $funcionario = Funcionario::find($id);
        return view('modificar.editarFuncionario', ['funcionario' => $funcionario, 'empresas' => $empresas]);
    }

    public function editarFuncionario(FuncionarioRequest $funcionarioRequest)
    {
        $funcionario = Funcionario::find($this->request->id);
        $funcionario->update($funcionarioRequest->all());
        return redirect()->route('admin.funcionarios');
    }

    function excluirFuncionario($id)
    {
        if (!$funcionario = Funcionario::find($id))
            return redirect()->route('admin.funcionarios');
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect()->route('admin.funcionarios');
    }

}

