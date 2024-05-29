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
  <div class="container mt-5">
  <h2>Cadastro</h2>
  <form method="POST" action="/cadastrar">
    @csrf
    <div class="row mb-3">
      <label for="nome" class="col-sm-2 col-form-label">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo">
      </div>
    </div>
    <div class="row mb-3">
      <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
      </div>
    </div>
    <div class="row mb-3">
      <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="endereço" id="endereço" placeholder="Rua, número, bairro">
      </div>
    </div>
    <div class="row mb-3">
      <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
      <div class="col-sm-10">
        <select class="form-select" name="genero" id="genero" aria-label="Sexo">
          <option value="">Selecione</option>
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
          <option value="outro">Outro</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary float-end">Cadastrar</button>
  </form>
</div>

  <div class="container mt-5" id="contato">
    <h2 class="text-center">Nossos Contatos</h2>
    <h4>Se você tiver alguma dúvida ou quiser mais informações sobre nossos cursos, entre em contato conosco:</h4>
    <ul class="fs-3">
      <li>Email: EtecZL@gmail.com</li>
      <li>Telefone: (123)123456-8901</li>
      <li>Endereço: Rua da Tecnologia, 230 - São Paulo, São Paulo</li>
    </ul>
  </div>

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>