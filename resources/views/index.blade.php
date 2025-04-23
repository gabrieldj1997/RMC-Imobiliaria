<!DOCTYPE html>
<html lang="pt-br">
<head>

@include('layout.head')
  
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Imóveis Valparaíso</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Alugar</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Lançamentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Leilões</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Seção de busca -->
  <section class="py-4 bg-light">
    <div class="container">
      <form class="row g-2">
        <div class="col-md-10">
          <input type="text" class="form-control" placeholder="Buscar por cidade, bairro ou código" />
        </div>
        <div class="col-md-2 d-grid">
          <button class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Lista de imóveis -->
  <main class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Apartamento em Águas Claras</h5>
              <p class="card-text">R$ 450.000 - 2 Quartos, 70m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Casa no Lago Norte</h5>
              <p class="card-text">R$ 1.200.000 - 4 Quartos, 300m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Kitnet em Taguatinga</h5>
              <p class="card-text">R$ 180.000 - 1 Quarto, 40m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <main class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Apartamento em Águas Claras</h5>
              <p class="card-text">R$ 450.000 - 2 Quartos, 70m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Casa no Lago Norte</h5>
              <p class="card-text">R$ 1.200.000 - 4 Quartos, 300m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Kitnet em Taguatinga</h5>
              <p class="card-text">R$ 180.000 - 1 Quarto, 40m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <main class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Apartamento em Águas Claras</h5>
              <p class="card-text">R$ 450.000 - 2 Quartos, 70m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Casa no Lago Norte</h5>
              <p class="card-text">R$ 1.200.000 - 4 Quartos, 300m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Imóvel" />
            <div class="card-body">
              <h5 class="card-title">Kitnet em Taguatinga</h5>
              <p class="card-text">R$ 180.000 - 1 Quarto, 40m²</p>
              <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <div class="container">
      &copy; 2025 Imóveis Valparaíso. Todos os direitos reservados.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

