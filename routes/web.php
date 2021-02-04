<?php

use App\Http\Controllers\{
    EmpresaController,
    FuncionarioController
};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

    Route::get('admin/empresas', [EmpresaController::class, 'adminEmpresas'])->name('admin.empresas');
    Route::get('admin/funcionarios', [FuncionarioController::class, 'adminFuncionarios'])->name('admin.funcionarios');

    Route::get('cadastrar/empresa', [EmpresaController::class, 'cadastrarEmpresaPagina'])->name('cadastrar.empresa.pagina');
    Route::post('cadastrar/empresa', [EmpresaController::class, 'cadastrarEmpresa'])->name('cadastrar.empresa');

    Route::get('cadastrar/funcionario', [FuncionarioController::class, 'cadastrarFuncionarioPagina'])->name('cadastrar.funcionario.pagina');
    Route::post('cadastar/funcionario', [FuncionarioController::class, 'cadastrarFuncionario'])->name('cadastrar.funcionario');

    Route::get('editar/empresa/{id}', [EmpresaController::class, 'editarEmpresaPagina'])->name('editar.empresa.pagina');
    Route::post('editar/empresa', [EmpresaController::class, 'editarEmpresa'])->name('editar.empresa');

    Route::get('editar/funcionario/{id}', [FuncionarioController::class, 'editarFuncionarioPagina'])->name('editar.funcionario.pagina');
    Route::post('editar/funcionario', [FuncionarioController::class, 'editarFuncionario'])->name('editar.funcionario');

    Route::get('excluir/empresa/{id}', [EmpresaController::class, 'excluirEmpresa'])->name('excluir.empresa');
    Route::get('excluir/funcionario/{id}', [FuncionarioController::class, 'excluirFuncionario'])->name('excluir.funcionario');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
