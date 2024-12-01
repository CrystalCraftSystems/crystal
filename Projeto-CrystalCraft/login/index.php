<?php
require __DIR__ . "/../header.php";
//Classes:
require __DIR__ . "/../App/Model/Usuarios.php";
require __DIR__ . "/../App/Model/Funcionarios.php";
require __DIR__ . "/../App/Model/Residencias.php";
require __DIR__ . "/../App/Model/Moradores.php";
require __DIR__ . "/../App/Model/Horarios.php";
require __DIR__ . "/../App/Model/Visitantes.php";
//Bancos:
require __DIR__ . "/../App/Model/UsuariosBanco.php";
require __DIR__ . "/../App/Model/FuncionariosBanco.php";
require __DIR__ . "/../App/Model/ResidenciasBanco.php";
require __DIR__ . "/../App/Model/MoradoresBanco.php";
require __DIR__ . "/../App/Model/HorariosBanco.php";
require __DIR__ . "/../App/Model/VisitantesBanco.php";
//Cadastrar:
require __DIR__ . "/../Administrador/Controller/cadastrarUsuario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarFuncionario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarResidencia.php";
require __DIR__ . "/../Administrador/Controller/cadastrarMorador.php";
require __DIR__ . "/../Administrador/Controller/cadastrarHorario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarVisitante.php";

//Ações Usuário:
require __DIR__ . "/../Administrador/Controller/excluirUsuario.php";
require __DIR__ . "/../Administrador/Controller/exibirUsuario.php";
require __DIR__ . "/../Administrador/Controller/editarUsuario.php";
require __DIR__ . "/../Administrador/Controller/atualizarUsuario.php";

//Ações Funcionário:
require __DIR__ . "/../Administrador/Controller/excluirFuncionario.php";
require __DIR__ . "/../Administrador/Controller/exibirFuncionario.php";
require __DIR__ . "/../Administrador/Controller/editarFuncionario.php";
require __DIR__ . "/../Administrador/Controller/atualizarFuncionario.php";

//Ações Horários:
require __DIR__ . "/../Administrador/Controller/excluirHorario.php";
require __DIR__ . "/../Administrador/Controller/exibirHorario.php";
require __DIR__ . "/../Administrador/Controller/editarHorario.php";
require __DIR__ . "/../Administrador/Controller/atualizarHorario.php";

//Ações Visitantes:
require __DIR__ . "/../Administrador/Controller/excluirVisitante.php";
require __DIR__ . "/../Administrador/Controller/exibirVisitante.php";
require __DIR__ . "/../Administrador/Controller/editarVisitante.php";
require __DIR__ . "/../Administrador/Controller/atualizarVisitante.php";

//Ações Moradores:
require __DIR__ . "/../Administrador/Controller/excluirMorador.php";
require __DIR__ . "/../Administrador/Controller/exibirMorador.php";
require __DIR__ . "/../Administrador/Controller/editarMorador.php";
require __DIR__ . "/../Administrador/Controller/atualizarMorador.php";

//Ações Residências:
require __DIR__ . "/../Administrador/Controller/excluirResidencia.php";
require __DIR__ . "/../Administrador/Controller/exibirResidencia.php";
require __DIR__ . "/../Administrador/Controller/editarResidencia.php";
require __DIR__ . "/../Administrador/Controller/atualizarResidencia.php";

//Referente ao Controller do Usuário Comum:
require __DIR__ . "/../UsuarioComum/Controller/exibirUsuario.php";
require __DIR__ . "/../UsuarioComum/Controller/exibirFuncionario.php";
require __DIR__ . "/../UsuarioComum/Controller/exibirHorario.php";
require __DIR__ . "/../UsuarioComum/Controller/exibirVisitante.php";
require __DIR__ . "/../UsuarioComum/Controller/exibirMorador.php";
require __DIR__ . "/../UsuarioComum/Controller/exibirResidencia.php";
require __DIR__ . "/../UsuarioComum/Controller/editarHorario.php";
require __DIR__ . "/../UsuarioComum/Controller/editarVisitante.php";
require __DIR__ . "/../UsuarioComum/Controller/excluirVisitante.php";
require __DIR__ . "/../UsuarioComum/Controller/excluirHorario.php";
require __DIR__ . "/../UsuarioComum/Controller/atualizarVisitante.php";
require __DIR__ . "/../UsuarioComum/Controller/atualizarHorario.php";

require __DIR__ . "/Controller/validarUsuario.php";

session_start();

if (isset($_GET['acao'])) {

   if ($_GET['acao'] == "login") {

      echo (new validarUsuario)->retornar();

   }

   //Ações do usuário:

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


   //Ações do funcionário:

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

   //Ações das residências:

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

   //Ações dos moradores:

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

   //Ações dos horários:

   if ($_GET['acao'] == "cad-horario") {
      echo (new cadastrarHorario)->retornar();

   }
   if ($_GET['acao'] == "editar-horarioAdm") {
      (new EditarHorarioAdm)->retornar();
   }

   if ($_GET['acao'] == "consultar-horario") {
      echo (new ExibirHorario)->retornar();
   }

   if ($_GET['acao'] == "atualizar-horarioAdm") {
      echo (new AtualizarHorarioAdm)->retornar();
   }
   if ($_GET['acao'] == "excluir-horarioAdm") {
      echo (new ExcluirHorarioAdm)->retornar();
   }

   //Ações dos visitantes:

   if ($_GET['acao'] == "cad-visitante") {
      echo (new cadastrarVisitante)->retornar();

   }
   if ($_GET['acao'] == "editar-visitanteAdm") {
      (new EditarVisitanteAdm)->retornar();
   }

   if ($_GET['acao'] == "consultar-visitante") {
      echo (new ExibirVisitante)->retornar();
   }

   if ($_GET['acao'] == "atualizar-visitanteAdm") {
      echo (new AtualizarVisitanteAdm)->retornar();
   }
   if ($_GET['acao'] == "excluir-visitanteAdm") {
      echo (new ExcluirVisitanteAdm)->retornar();
   }

   //Ações do usuário comum://

      if ($_GET['acao'] == "consultar-usuario") {
         echo (new ExibirUsuarioC)->retornar();
      }
      if ($_GET['acao'] == "consultar-funcionario") {
         echo (new ExibirFuncionarioC)->retornar();
      }
      if ($_GET['acao'] == "consultar-horario") {
         echo (new ExibirHorarioC)->retornar();
      }
      if ($_GET['acao'] == "consultar-visitante") {
         echo (new ExibirVisitanteC)->retornar();
      }
      if ($_GET['acao'] == "consultar-morador") {
         echo (new ExibirMoradorC)->retornar();
      }
      if ($_GET['acao'] == "consultar-residencia") {
         echo (new ExibirResidenciaC)->retornar();
      }

      //Atualizar:
      if ($_GET['acao'] == "atualizar-visitante") {
         echo (new AtualizarVisitante)->retornar();
      }
      if ($_GET['acao'] == "atualizar-horario") {
         echo (new AtualizarHorario)->retornar();
      }

      //Editar:
      if ($_GET['acao'] == "editar-horario") {
         (new EditarHorario)->retornar();
      }

      if ($_GET['acao'] == "editar-visitante") {
         (new EditarVisitante)->retornar();
      }

      //Excluir:
      if ($_GET['acao'] == "excluir-horario") {
         echo (new ExcluirHorario)->retornar();
      }
      if ($_GET['acao'] == "excluir-visitante") {
         echo (new ExcluirVisitante)->retornar();
      }
}



if (isset($_GET['menu'])) {

   //Menu do usuário comum:   

   if ($_GET['menu'] == "inicio") {
      require __DIR__ . "/../UsuarioComum/Public/inicio.php";
   }

   if ($_GET['menu'] == "funcionarios") {
      $funcionarios = (new FuncionariosBanco())->ListarFuncionario();
      require __DIR__ . "/../UsuarioComum/Public/funcionarios.php";
   }

   if ($_GET['menu'] == "horarios") {
      $registros = (new HorariosBanco())->ListarHorario();
      require __DIR__ . "/../UsuarioComum/Public/horarios.php";
   }

   if ($_GET['menu'] == "visitantes") {
      $visitantes = (new VisitantesBanco())->ListarVisitanteMorador();
      require __DIR__ . "/../UsuarioComum/Public/visitantes.php";
   }

   if ($_GET['menu'] == "moradores") {
      $moradores = (new MoradoresBanco())->ListarMorador();
      require __DIR__ . "/../UsuarioComum/Public/moradores.php";
   }

   if ($_GET['menu'] == "residencias") {
      $residencias = (new ResidenciasBanco())->ListarResidencia();
      require __DIR__ . "/../UsuarioComum/Public/residencias.php";
   }

   //Menu do Administrador:

   if ($_GET['menu'] == "usuariosAdm") {
      $usuarios = (new UsuariosBanco())->ListarUsuario();
      require __DIR__ . "/../Administrador/Public/usuariosAdm.php";
   }

   if ($_GET['menu'] == "funcionariosAdm") {
      $funcionarios = (new FuncionariosBanco())->ListarFuncionario();
      require __DIR__ . "/../Administrador/Public/funcionariosAdm.php";
   }

   if ($_GET['menu'] == "horariosAdm") {
      $registros = (new HorariosBanco())->ListarHorario();
      require __DIR__ . "/../Administrador/Public/horariosAdm.php";
   }

   if ($_GET['menu'] == "visitantesAdm") {
      $visitantes = (new VisitantesBanco())->ListarVisitanteMorador();
      require __DIR__ . "/../Administrador/Public/visitantesAdm.php";
   }

   if ($_GET['menu'] == "moradoresAdm") {
      $moradores = (new MoradoresBanco())->ListarMorador();
      require __DIR__ . "/../Administrador/Public/moradoresAdm.php";
   }

   if ($_GET['menu'] == "residenciasAdm") {
      $residencias = (new ResidenciasBanco())->ListarResidencia();
      require __DIR__ . "/../Administrador/Public/residenciasAdm.php";
   }
   

   if ($_GET['menu'] == "logout") {
      if (isset($_SESSION)) {
         session_destroy();
         header("Location:login.php");
      }
   }
}



//Sessões:

if (isset($_SESSION['login'])) {
   if ($_SESSION['login'] == true && $_SESSION['adm'] == true && (isset($_GET['acao']) && $_SESSION['login']) && (($_GET['acao']) != 'editar-usuario') && (($_GET['acao']) != 'editar-funcionario') && (($_GET['acao']) != 'editar-horarioAdm') && (($_GET['acao']) != 'editar-visitanteAdm') && (($_GET['acao']) != 'editar-morador') && (($_GET['acao']) != 'editar-residencia') && (($_GET['acao']) != 'atualizar-usuario') && (($_GET['acao']) != 'atualizar-funcionario') && (($_GET['acao']) != 'atualizar-horarioAdm') && (($_GET['acao']) != 'atualizar-visitanteAdm') && (($_GET['acao']) != 'atualizar-morador') && (($_GET['acao']) != 'atualizar-residencia')&&(($_GET['acao']) != 'excluir-usuario') &&(($_GET['acao']) != 'excluir-funcionario') &&(($_GET['acao']) != 'excluir-horarioAdm') &&(($_GET['acao']) != 'excluir-visitanteAdm') &&(($_GET['acao']) != 'excluir-morador') &&(($_GET['acao']) != 'excluir-residencia')) {

      $usuarios = (new UsuariosBanco())->ListarUsuario();
      require __DIR__ . "/../Administrador/Public/usuariosAdm.php";

   }

   if (($_SESSION['login'] == true && $_SESSION['adm'] == false) && (isset($_GET['acao']) && $_SESSION['login']) && (($_GET['acao']) != 'editar-horario') && (($_GET['acao']) != 'editar-visitante') && (($_GET['acao']) != 'atualizar-horario') && (($_GET['acao']) != 'atualizar-visitante')&&(($_GET['acao']) != 'excluir-horario') && (($_GET['acao']) != 'excluir-visitante')){
      require __DIR__ . "/../UsuarioComum/Public/inicio.php";
   }
} else {

   $mensagem = '
        <div class="notification is-text color-white">
            <button class="delete"></button>
               Não fez o login! 
        </div>';
   echo $mensagem;
}



