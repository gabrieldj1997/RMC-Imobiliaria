<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Imóveis Valparaíso</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  @include('header')

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

