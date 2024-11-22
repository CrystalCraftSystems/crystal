<?php
require __DIR__ . "/../header.php";

require __DIR__ . "/../App/Model/Usuarios.php";
require __DIR__ . "/../App/Model/Funcionarios.php";
require __DIR__ . "/../App/Model/Residencias.php";
require __DIR__ . "/../App/Model/Moradores.php";
require __DIR__ . "/../App/Model/Horarios.php";
require __DIR__ . "/../App/Model/Visitantes.php";

require __DIR__."/../App/Model/UsuariosBanco.php";
require __DIR__."/../App/Model/FuncionariosBanco.php";
require __DIR__."/../App/Model/ResidenciasBanco.php";
require __DIR__."/../App/Model/MoradoresBanco.php";
require __DIR__."/../App/Model/HorariosBanco.php";
require __DIR__."/../App/Model/VisitantesBanco.php";

require __DIR__ . "/../Administrador/Controller/cadastrarUsuario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarFuncionario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarResidencia.php";
require __DIR__ . "/../Administrador/Controller/cadastrarMorador.php";
require __DIR__ . "/../Administrador/Controller/cadastrarHorario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarVisitante.php";


require __DIR__ . "/../Administrador/Controller/excluirUsuario.php";
require __DIR__ . "/../Administrador/Controller/exibirUsuario.php";
require __DIR__ . "/../Administrador/Controller/editarUsuario.php";
require __DIR__ . "/../Administrador/Controller/atualizarUsuario.php";

require __DIR__ . "/Controller/validarUsuario.php";

session_start();

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        
       echo (new validarUsuario)->retornar();
   
    }


    if ($_GET['acao'] == "cad-usuario") {
      (new cadastrarUsuario)->retornar();
   
   }
   if ($_GET['acao'] == "editar-usuario") {
      (new EditarUsuario)->retornar();
  }
    
  if ($_GET['acao'] == "consultar-usuario") {
   echo (new ExibirUsuario)->retornar();
}

if ($_GET['acao'] == "atualizar-usuario") {
   echo (new AtualizarUsuario)->retornar();
}
if ($_GET['acao'] == "excluir-usuario") {
   echo (new ExcluirUsuario)->retornar();
}




 if ($_GET['acao'] == "cad-funcionario") {
     echo (new cadastrarFuncionario)->retornar();
     
  }
if ($_GET['acao'] == "editar-funcionario") {
      (new EditarFuncionario)->retornar();
  }
    
  if ($_GET['acao'] == "consultar-funcionario") {
   echo (new ExibirFuncionario)->retornar();
}

if ($_GET['acao'] == "atualizar-funcionario") {
   echo (new AtualizarFuncionario)->retornar();
}
if ($_GET['acao'] == "excluir-funcionario") {
   echo (new ExcluirFuncionario)->retornar();
}


  if ($_GET['acao'] == "cad-residencia") {
   echo (new cadastrarResidencia)->retornar();

}
if ($_GET['acao'] == "editar-residencia") {
   (new EditarResidencia)->retornar();
}

if ($_GET['acao'] == "consultar-residencia") {
echo (new ExibirResidencia)->retornar();
}

if ($_GET['acao'] == "atualizar-residencia") {
echo (new AtualizarResidencia)->retornar();
}
if ($_GET['acao'] == "excluir-residencia") {
echo (new ExcluirResidencia)->retornar();
}


if ($_GET['acao'] == "cad-morador") {
   echo (new cadastrarMorador)->retornar();
  
}
if ($_GET['acao'] == "editar-morador") {
   (new EditarMorador)->retornar();
}
 
if ($_GET['acao'] == "consultar-morador") {
echo (new ExibirMorador)->retornar();
}

if ($_GET['acao'] == "atualizar-morador") {
echo (new AtualizarMorador)->retornar();
}
if ($_GET['acao'] == "excluir-morador") {
echo (new ExcluirMorador)->retornar();
}


if ($_GET['acao'] == "cad-horario") {
   echo (new cadastrarHorario)->retornar();
   
}
if ($_GET['acao'] == "editar-horario") {
   (new EditarHorario)->retornar();
}
 
if ($_GET['acao'] == "consultar-horario") {
echo (new ExibirHorario)->retornar();
}

if ($_GET['acao'] == "atualizar-horario") {
echo (new AtualizarHorario)->retornar();
}
if ($_GET['acao'] == "excluir-horario") {
echo (new ExcluirHorario)->retornar();
}


if ($_GET['acao'] == "cad-visitante") {
   echo (new cadastrarVisitante)->retornar();
 
}
if ($_GET['acao'] == "editar-visitante") {
   (new EditarVisitante)->retornar();
}
 
if ($_GET['acao'] == "consultar-visitante") {
echo (new ExibirVisitante)->retornar();
}

if ($_GET['acao'] == "atualizar-visitante") {
echo (new AtualizarVisitante)->retornar();
}
if ($_GET['acao'] == "excluir-visitante") {
echo (new ExcluirVisitante)->retornar();
}




}

if (isset($_GET['menu'])) {
   
if($_GET['menu']=="usuariosAdm"){
   $usuarios = (new UsuariosBanco())->ListarUsuario();
   require __DIR__."/../Administrador/Public/usuariosAdm.php";
}

if($_GET['menu']=="funcionariosAdm"){
   $funcionarios = (new FuncionariosBanco())->ListarFuncionario();
   require __DIR__."/../Administrador/Public/funcionariosAdm.php";
}

if($_GET['menu']=="horariosAdm"){
   $horarios = (new HorariosBanco())->ListarHorario();
   require __DIR__."/../Administrador/Public/horariosAdm.php";
}

if($_GET['menu']=="visitantesAdm"){
   $visitantes = (new VisitantesBanco())->ListarVisitante();
   require __DIR__."/../Administrador/Public/visitantesAdm.php";
}

if($_GET['menu']=="moradoresAdm"){
   $moradores = (new MoradoresBanco())->ListarMorador();
   require __DIR__."/../Administrador/Public/moradoresAdm.php";
}

if($_GET['menu']=="residenciasAdm"){
   $residencias = (new ResidenciasBanco())->ListarResidencia();
   require __DIR__."/../Administrador/Public/residenciasAdm.php";
}

}


if(isset($_SESSION['login'])){
if($_SESSION['login']==true && $_SESSION['adm']==true){
   $usuarios = (new UsuariosBanco())->ListarUsuario();
   require __DIR__."/../Administrador/Public/usuariosAdm.php";

}

if(($_SESSION['login']==true && $_SESSION['adm']==false)&&(isset($_GET['acao']) && $_SESSION['login'])){
   require __DIR__."/../UsuarioComum/Public/inicio.php";
}
}else{
   echo "Não fez login! ";
}  



