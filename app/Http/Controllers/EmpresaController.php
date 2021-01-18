<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller {
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function adminEmpresas()
    {
        $empresas = Empresa::paginate(10);
        return view('admin.adminEmpresas', ['empresas' => $empresas]);
    }

    function usuarioEmpresas()
    {
        $funcionarios = Empresa::paginate(10);
        return view('usuario.usuarioEmpresas', ['funcionarios' => $funcionarios]);
    }

    public function cadastrarEmpresaPagina()
    {
        return view('modificar.cadastrarEmpresa');
    }

    public function cadastrarEmpresa(EmpresaRequest $empresaRequest)
    {
        $empresa = $empresaRequest->all();
        $logotipo = $empresaRequest->logotipo->storeAs('', $empresaRequest->nome.'.png');
        $empresa['logotipo'] = $logotipo;
        Empresa::create($empresa);
        return redirect()->route('admin.empresas');
    }

    public function editarEmpresaPagina($id)
    {
        if (!$empresa = Empresa::find($id))
            return redirect()->route('admin.empresas');
        $empresa = Empresa::find($id);
        return view('modificar.editarEmpresa', ['empresa' => $empresa]);
    }

    public function editarEmpresa(EmpresaRequest $empresaRequest)
    {
        $empresa = Empresa::find($this->request->id);
        Storage::delete($empresa->logotipo);
        $editado = $empresaRequest->all();
        $logotipo = $empresaRequest->logotipo->storeAs('', $empresaRequest->nome.'.png');
        $editado['logotipo'] = $logotipo;
        $empresa->update($editado);
        return redirect()->route('admin.empresas');
    }

    public function excluirEmpresa($id)
    {
        if (!$empresa = Empresa::find($id))
            return redirect()->route('admin.empresas');
        $empresa = Empresa::find($id);
        Storage::delete($empresa->logotipo);
        $empresa->delete();
        return redirect()->route('admin.empresas');
    }

}

