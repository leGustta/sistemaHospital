<?php 
    session_start(); 
    require 'conexao.php'; 
?> 
<!doctype html> 
<html lang="pt-BR"> 
  <head> 
    <meta charset="utf-8"> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet"> 
    <title>Listagem de pacientes</title> 
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav"> 
            <ul class="navbar-nav"> 
                <li class="nav-item active"> 
                           <a  class="nav-link"  href="index.html">Inicio  <span  class="sr-only"></span></a> 
                </li> 
        <li class="nav-item"> 
            <a class="nav-link" href="cadastro de paciente.html">Cadastro</a> 
        </li> 
         <li class="nav-item"> 
             <a class="nav-link" href="listar paciente.php">Listagem</a> 
                </li> 
            </ul> 
        </div> 
    </nav> 
           
    <div class="container mt-4"> 
        <h4>paciente cadastrado</h4> 
    </div> 
        <table> 
            <thead> 
                <tr> 
                    <th>Nome</th> 
                    <th>CPF</th> 
                    <th>Idade</th> 
                    <th>sintomas</th> 
                    <th>medico responsavel</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php  
                    $query = "SELECT * FROM consulta"; 
                    $query_run = mysqli_query($conexao, $query); 
 
                    if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $alunos){ 
                            ?> 
                            <tr> 
                                <td><?= $consulta['nome']; ?></td> 
                                <td><?= $consulta['CPF']; ?></td> 
                                <td><?= $consulta['Idade']; ?></td> 
                                <td><?= $consulta['sintomas']; ?></td> 
                                <td><?= $consulta['medico responsavel']; ?></td> 
                            </tr> 
                        <?php 
                            } 
                        }else{ 
                            echo "Nenhum paciente cadastrado."; 
                            } 
                        ?> 
                </tbody> 
            </table> 
    </body> 
    </html> 