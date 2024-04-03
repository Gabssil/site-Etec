<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
    .carousel-item img {
        height: 500px; /* Altere esse valor conforme necessário */
        object-fit: cover; /* Para manter a proporção da imagem */
    }
    .navbar {
            width: 100%; /* Definindo a largura para 100% */
        }
        @media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
        .rounded-img {
            border-radius: 10px; /* Define o raio da borda */
        }
        /* Estilo para o rodapé */
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
.custom-input {
    background-color: #FFFFFF; 
    color: #919FAE; 
    padding: 0.75rem 1rem; 
    border-radius: 40px;
    width: 80%; 
    max-width: 400px; 
    border: none; 
    margin: 0 auto; 
    display: block; 
    outline: none; 
}

.custom-input::placeholder {
    color: #919FAE; 
}

.custom-input:focus {
    outline: none; 
}

    </style>
</style>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo-etec.png" alt="Bootstrap" width="50" height="40">
            </a>
            <a class="nav-link" href="cursos">Cursos</a>
            <a class="nav-link" href="departamento">Departamento</a>
            <a class="nav-link" href="oportunidades">Oportunidades</a>
            <a class="nav-link" href="vestibulinho">Vestibulinho</a>
            <a class="nav-link" href="instituicao">Instituição</a>
        </div>
    </nav>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img2.jpg" class="d-block w-100" alt="Bootstrap" width="" height="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etec Zona Leste</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img1.jpg" class="d-block w-100" alt="Bootstrap" width="" height="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etec Zona Leste</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img3.jpg" class="d-block w-100" alt="Bootstrap" width="" height="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etec Zona Leste</h5>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <input class="custom-input" type="search" placeholder="O que está buscando?" value="" name="s">
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8">
          <h1><strong>Descubra um futuro brilhante na ETEC Zona Leste</strong></h1>
          &nbsp;
      &nbsp;
      &nbsp;
            <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. 
                Nossos cursos técnicos são ministrados por professores altamente qualificados, 
                proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos
                com habilidades práticas essenciais para o mercado de trabalho.</p>
          </div>
          <div class="col-sm-4">
            <img src="img/img4.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-4">
            <img src="img/img5.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-sm-8">
          <h1><strong>Aprendizados para além da sala de aula</strong></h1>
          &nbsp;
      &nbsp;
      &nbsp;
            <p>Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. 
                Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente,
                 orientação vocacional e programas extracurriculares.</p>
          </div>
        </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8">
          <h1><strong>Infraestrutura Moderna</strong></h1>
          &nbsp;
      &nbsp;
      &nbsp;
            <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos 
                projetos que desenvolvemos durante a jornada dos estudantes. 
                Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
          </div>
          <div class="col-sm-4">
            <img src="img/img6.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    &nbsp;
    &nbsp;
    &nbsp;
    <div class="container text-center">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
                   
                    <div class="card-body">
                        <h5 class="card-title">Novotec Desenvolvimento de Sistemas</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
                   
                    <div class="card-body">
                        <h5 class="card-title">ADMINISTRAÇÃO</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
             
                    <div class="card-body">
                        <h5 class="card-title">CONTABILIDADE</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
                
                    <div class="card-body">
                        <h5 class="card-title">Logística</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
                   
                    <div class="card-body">
                        <h5 class="card-title">Serviços Juridicos</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4"> <!-- Adicionei a classe mb-4 aqui -->
            <div class="container text-center">
                <div class="card h-100">
             
                    <div class="card-body">
                        <h5 class="card-title">Recursos Humanos</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Curso Etec</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
