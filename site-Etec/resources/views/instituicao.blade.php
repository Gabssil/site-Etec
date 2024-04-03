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
.titulo{
    text-align: center;
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
.map-container {
    margin: 0 auto;
    width: 600px; /* Ajuste conforme necessário */
}
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

      <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img2.jpg" class="d-block w-100" alt="Bootstrap" width="600" height="600">
      <div class="carousel-caption left-caption">
        <h5>INSTITUIÇÃO</h5>
        <p>Conheça Nossa Instituição: Tradição, Inovação e Compromisso com a Excelência Educacional</p>
      </div>
    </div>
  </div>
</div>
&nbsp;
      &nbsp;
      &nbsp;
      <input class="custom-input" type="search" placeholder="O que está buscando?" value="" name="s">
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="container">
      <h1 class="titulo">ETEC Zona Leste</h1>
        <p>Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.</p>
        
        <p>Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>
        
        <p>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>
        
        <p>Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
    </div>
    &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2588068819955!2d-46.47838692489226!3d-23.523192178826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1712094555712!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
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