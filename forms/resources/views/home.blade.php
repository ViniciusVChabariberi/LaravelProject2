<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ETEC ZL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  @include('components.navbar')
  <div class="container mt-5 text-center" id="sobre">
    <h2>ETEC Zona Leste</h2>
    <p class="fs-5">A Escola Técnica da Zona Leste é uma instituição dedicada a oferecer cursos técnicos de alta qualidade nas áreas de tecnologia, administração, logística, entre outros.</p>
  </div>

  <div class="container mt-5" id="cursos">
    <h2>Nossos Cursos - período da manhã</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Recursos Humanos</h5>
            <p class="card-text">Aprenda os conhecimentos e estudos utilizados na contratação de novos funcionários de uma empresa.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administração</h5>
            <p class="card-text">Aprenda os princípios fundamentais da administração e desenvolva planejamentos com organização e controle de recursos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Desenvolvimento de Sistemas</h5>
            <p class="card-text">Desenvolva aplicações e crie projetos incríveis utilizando ferramentas e computadores preparados para o uso.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5" id="cursos">
    <h2>Nossos Cursos - período da tarde</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Logística</h5>
            <p class="card-text">Aprenda as habilidades de cálculo e raciocínio lógico de maneira prática.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administração</h5>
            <p class="card-text">Aprenda os princípios fundamentais da administração e desenvolva planejamentos com organização e controle de recursos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Novotec Desenvolvimento de Sistemas AMS</h5>
            <p class="card-text">Desenvolva aplicações e crie projetos incríveis com o patrocínio de uma empresa de tecnologia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5" id="cursos">
    <h2>Nossos Cursos - período da noite</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Serviços Jurídicos</h5>
            <p class="card-text">Estude e entenda as áreas do direitoe como elas funcionam no Brasil.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contabilidade</h5>
            <p class="card-text">Aprenda a organizar e administrar uma planilha de contas de maneira prática.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Desenvolvimento de Sistemas</h5>
            <p class="card-text">Desenvolva aplicações e crie projetos incríveis utilizando ferramentas e computadores preparados para o uso.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5" id="noticias">
    <h2>Notícias</h2>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ETEC está de portas abertas!</h5>
        <p class="card-text">Nossa instituição está aberta e pronta para o ano letivo de 2024. Alunos, compareçam as aulas e cumpram seus deveres de acordo com o manual do aluno!</p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec3.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Feira Tecnológica</h5>
        <p class="card-text">No último bimestre, nossa instituição promove a participação de todas as turmas da escola na feira tecnológica, onde são apresentados projetos desenvolvidos ao longo do ano pelos alunos.</p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec4.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">O Auditório recebe novos equipamentos</h5>
        <p class="card-text">O auditório da ETEC Zona Leste recebeu novos equipamentos de aúdio de som e promete uma nova qualidade na experiência.</p>
      </div>
    </div>
  </div>

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>