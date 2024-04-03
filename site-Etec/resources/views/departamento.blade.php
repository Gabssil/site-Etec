<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
.custom-input {
    background-color: #FFFFFF; /* cor de fundo */
    color: #919FAE; /* cor do texto */
    padding: 0.75rem 1rem; /* preenchimento interno */
    border-radius: 40px; /* borda arredondada */
    width: 80%; /* largura do input */
    max-width: 400px; /* largura máxima */
    border: none; /* remover borda */
    margin: 0 auto; /* centralizar */
    display: block; /* exibir como bloco */
    outline: none; /* remover contorno de foco */
}

.custom-input::placeholder {
    color: #919FAE; /* cor do texto de espaço reservado */
}

.custom-input:focus {
    outline: none; /* remover contorno de foco ao focar */
}
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f9f9f9; /* Cor de fundo bem clara */
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

strong {
    font-weight: bold;
}
footer {
  background-color: #333; /* Cor de fundo do rodapé */
  color: #fff; /* Cor do texto */
  padding: 40px 0; /* Espaçamento interno (40px em cima e embaixo, 0 nos lados) */
}

/* Estilo para os títulos dentro do rodapé */
footer h3 {
  color: #fff; /* Cor dos títulos */
}

/* Estilo para os links no rodapé */
footer a {
  color: #fff; /* Cor dos links */
  text-decoration: none; /* Remover sublinhado padrão */
}

/* Estilo para os links no rodapé quando passados */
footer a:hover {
  text-decoration: underline; /* Adicionar sublinhado ao passar o mouse */
}

/* Estilo para os parágrafos dentro do rodapé */
footer p {
  margin-bottom: 10px; /* Espaçamento inferior */
}

/* Estilo para o texto de direitos autorais */
footer .text-center {
  margin-top: 20px; /* Espaçamento superior */
}
</style>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo-etec.png" alt="Bootstrap" width="50" height="40">
          </a>
          <a class="nav-link" href="home">inicio</a>
            <a class="nav-link" href="departamento">Departamento</a>
            <a class="nav-link" href="oportunidades">Oportunidades</a>
            <a class="nav-link" href="vestibulinho">Vestibulinho</a>
            <a class="nav-link" href="instituicao">Instituição</a>
            <a class="nav-link" href="cursos">Cursos</a>
        </div>
      </nav>
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <input class="custom-input" type="search" placeholder="O que está buscando?" value="" name="s">
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-4">
            <img src="img/amanda.jpg" alt="Descrição da imagem" class="img-fluid" width="400" height="400">
          </div>
          <div class="col-sm-8">
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
            <h1><strong>Diretora</strong></h1>
            <h3><strong>Amanda Bueno</strong></h3>
          </div>
        </div>
      </div>
      &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
      <div class="container">
      <h1 class="titulo">Contato</h1>
        <p>E-mail: e211dir@cps.sp.gov.br<br>
         Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009
        </p>
    </div>
    &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
    <div class="container">
    <table>
        <tbody>
            <tr>
                <td><strong>Segunda-Feira</strong></td>
                <td><strong>Quarta-Feira</strong></td>
                <td><strong>Sexta-Feira</strong></td>
            </tr>
            <tr>
                <td>08h00min. às 09h30min.</td>
                <td>08h00min. às 09h30min.</td>
                <td>08h00min. às 09h30min.</td>
            </tr>
            <tr>
                <td>14h30min. às 15h30min.</td>
                <td>14h30min. às 15h30min.</td>
                <td>14h30min. às 15h30min.</td>
            </tr>
            <tr>
                <td>19h30min. às 20h30min.</td>
                <td>19h30min. às 20h30min.</td>
                <td>19h30min. às 20h30min.</td>
            </tr>
        </tbody>
    </table>
    </div>
    &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p>Email</p>
        <p>Diretoria: e211dir@cps.sp.gov.br</p>
        <p>Diretoria Administrativa: e211adm@cps.sp.gov.br</p>
        <p>Diretoria Acadêmica: e211acad@cps.sp.gov.br</p>
      </div>
      <div class="col-md-4">
        <h3>Redes Sociais</h3>
        <ul>
          <li><a href="https://www.instagram.com/eteczonalesteoficial/">Instagram: Eteczonalesteoficial</a></li>
          <li><a href="https://www.facebook.com/Eteczonalesteoficial/?locale=pt_BR">Facebook: Eteczonalesteoficial</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy;2024 Etec Zona Leste. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>
      </body>
</html>