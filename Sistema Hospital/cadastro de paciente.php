<html> 
    <head> 
        <title> Cadastro de pascientes</title> 
        <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTR
i" crossorigin="anonymous"> 
        <meta charset="UTF-8"> 
      </head>
    <body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
              <ul class="navbar-nav"> 
                <li class="nav-item active"> 
                           <a  class="nav-link"  href="index.html">Inicio  <span  class="sr-only"></span></a> 
                </li> 
                <li class="nav-item"> 
                  <a class="nav-link" href="cadastroAluno.html">Cadastro</a> 
                </li> 
                <li class="nav-item"> 
                  <a class="nav-link" href="listarAluno.php">Listagem</a> 
                </li> 
              </ul> 
            </div> 
          </nav> 
           
    <h3>Cadastro de aluno</h3> 
    <form  method="POST" action="insereAluno.php"> 
        <div class="form-row"> 
          <div class="form-group col-md-6"> 
            <label>Nome Completo</label> 
            <input type="text" class="form-control" name="nome" placeholder="Digite 
o nome completo do aluno"> 
          </div> 
          <div class="form-group col-md-6"> 
            <label>Curso</label> 
            <input type="text" class="form-control" name="curso" placeholder="Digite 
o curso do aluno"> 
</div> 
 
 <div class="form-group col-md-2"> 
   <label>Idade</label> 
   <input type="number" class="form-control" name="idade" 
placeholder="Digite a idade do aluno"> 
    </div> 
</div> 
<br> 
<button type="submit" class="btn btn-primary">Cadastrar Dados</button> 
</form> 
</body> 
</html> 