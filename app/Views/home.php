<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PEPUC Vila Paciência | 10 Anos Transformando Vidas</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    :root {
      --primary: #ffc107;
      --primary-dark: #e0a800;
      --secondary: #343a40;
      --light-gray: #f8f9fa;
      --text-main: #2d3436;
      --text-muted: #636e72;
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--text-main);
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    /* Navbar Glassmorphism */
    .navbar-custom {
      background-color: rgba(255, 255, 255, 0.9) !important;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(0,0,0,0.05);
      padding: 15px 0;
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--secondary) !important;
      letter-spacing: -1px;
    }

    .nav-link {
      font-weight: 500;
      color: var(--text-main) !important;
      margin-left: 20px;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: var(--primary-dark) !important;
    }

/* Hero Section com sua imagem original */
    .hero {
      position: relative;
      background-image: url('https://scontent-gig4-1.xx.fbcdn.net/v/t1.6435-9/48395701_360308331463307_2538602203405352960_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=PGzLUGML7jUQ7kNvwFQenfL&_nc_oc=Adlta1y3PsH-fWumEgmMFtooqS-lq4JRh_QyHxqUDmzyLd3vEVk1Geh3alSjHMiMrqFvHykG70Csl1EIzpSL1qe_&_nc_zt=23&_nc_ht=scontent-gig4-1.xx&_nc_gid=Avn5mMTQuEhRXZ2cuq9mbA&oh=00_AfojOB7BeuiCjYPP32K3vlEx4RGYmYL0uaNc8ujhA53ZCA&oe=69824371');
      background-size: cover;
      background-position: center;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      margin-top: 60px;
    }

    /* Overlay escuro para destacar o texto sobre a imagem */
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Escurece a imagem para o texto brilhar */
      z-index: 1;
    }

    .hero .container {
      position: relative;
      z-index: 2; /* Garante que o texto fique acima do overlay */
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 800;
      letter-spacing: -1px;
    }

    /* Seções Genéricas */
    section {
      padding: 100px 0;
    }

    .section-title {
      font-weight: 700;
      margin-bottom: 50px;
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: "";
      width: 60%;
      height: 4px;
      background: var(--primary);
      display: block;
      margin-top: 8px;
      border-radius: 2px;
    }

    /* Quem Somos */
    .quem-somos { background-color: #fff; }
    
    .imagem-container {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      border: 10px solid var(--light-gray);
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .imagem-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Apoio & Notícias Cards */
    .card-custom {
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      height: 100%;
    }

    .card-custom:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .card-custom img {
      border-radius: 15px 15px 0 0;
      height: 200px;
      object-fit: cover;
    }

    /* Carousel de Apoiadores */
    .card-carousel {
      display: flex;
      gap: 20px;
      overflow-x: auto;
      padding: 20px 0;
      scrollbar-width: thin;
    }

    /* Voluntários */
    .voluntarios-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin: 15px;
      border: 3px solid white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .voluntarios-img:hover { transform: scale(1.1); }

    /* Depoimentos */
    .depoimentos { background-color: var(--light-gray); }
    .depoimento-card {
      background: white;
      padding: 40px;
      border-radius: 20px;
      position: relative;
      border: none;
    }
    .depoimento-card i {
      color: var(--primary);
      font-size: 2rem;
      position: absolute;
      top: 20px;
      left: 20px;
      opacity: 0.3;
    }

    /* Botões Flutuantes */
    .doacao-float {
      position: fixed;
      bottom: 30px;
      left: 30px;
      background-color: var(--primary);
      color: var(--secondary);
      padding: 16px 28px;
      border-radius: 50px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 10px 25px rgba(255, 193, 7, 0.4);
      z-index: 9999;
      transition: all 0.3s;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .whatsapp-float {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: #25D366;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 30px;
      box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
      z-index: 9999;
      transition: 0.3s;
    }

    .whatsapp-float:hover, .doacao-float:hover {
      transform: translateY(-5px);
      color: white;
    }

    /* Footer */
    .footer {
      background-color: var(--secondary);
      color: white;
      padding: 80px 0 40px;
    }
    .social-icons a {
      color: var(--primary);
      font-size: 1.8rem;
      margin: 0 15px;
      transition: 0.3s;
    }
    .social-icons a:hover { color: white; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">PEPUC <span class="text-warning">VILA PACIÊNCIA</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#quem-somos">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="#quem-nos-apoia">Apoio</a></li>
        <li class="nav-item"><a class="nav-link" href="#voluntarios">Voluntários</a></li>
        <li class="nav-item"><a class="nav-link" href="#noticias">Notícias</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <h1 class="mb-3">10 anos transformando vidas</h1>
    <p class="lead fw-light">Construindo um futuro melhor através da educação e união.</p>
  </div>
</section>

<section id="quem-somos" class="quem-somos">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="section-title">Quem Somos</h2>
        <p class="lead text-muted">Uma organização dedicada à transformação social.</p>
        <p>Somos uma organização dedicada a transformar vidas através de educação, apoio social e iniciativas comunitárias. Nosso compromisso é fazer a diferença em cada projeto que realizamos na Vila Paciência.</p>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="imagem-container">
          <img src="/assets/images/10ea8392-55aa-420f-8e2d-eaeb8ed83621.jpg" alt="Quem Somos">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="quem-nos-apoia" class="bg-light">
  <div class="container">
    <h2 class="section-title">Quem nos Apoia</h2>
    <div class="card-carousel px-2">
      <div class="card card-custom" style="min-width: 280px;">
        <div class="p-4 text-center">
          <i class="bi bi-bank fs-1 text-warning mb-3"></i>
          <h5 class="card-title">Igreja Batista</h5>
          <p class="small text-muted">Vila Paciência</p>
        </div>
      </div>
      <div class="card card-custom" style="min-width: 280px;">
        <div class="p-4 text-center">
          <i class="bi bi-people-fill fs-1 text-warning mb-3"></i>
          <h5 class="card-title">Associação</h5>
          <p class="small text-muted">Moradores Locais</p>
        </div>
      </div>
      <div class="card card-custom" style="min-width: 280px;">
        <div class="p-4 text-center">
          <i class="bi bi-building-check fs-1 text-warning mb-3"></i>
          <h5 class="card-title">Prefeitura</h5>
          <p class="small text-muted">Parceiro Institucional</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="depoimentos">
  <div class="container text-center">
    <h2 class="section-title">Depoimentos</h2>
    <div class="row g-4 mt-2">
      <div class="col-md-4">
        <div class="depoimento-card shadow-sm">
          <i class="bi bi-quote"></i>
          <p class="fst-italic text-muted">"Essa organização mudou minha vida. Sou eternamente grato pelo apoio e oportunidades."</p>
          <h6 class="fw-bold mb-0">- João Silva</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="depoimento-card shadow-sm">
          <i class="bi bi-quote"></i>
          <p class="fst-italic text-muted">"Incrível ver o impacto positivo que eles causam na comunidade diariamente."</p>
          <h6 class="fw-bold mb-0">- Maria Souza</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="depoimento-card shadow-sm">
          <i class="bi bi-quote"></i>
          <p class="fst-italic text-muted">"Recomendo a todos participarem e colaborarem com essa causa tão nobre."</p>
          <h6 class="fw-bold mb-0">- Carlos Pereira</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="voluntarios" class="text-center">
  <div class="container">
    <h2 class="section-title">Nossos Voluntários</h2>
    <div class="d-flex justify-content-center flex-wrap mt-4">
      <img src="https://randomuser.me/api/portraits/women/68.jpg" class="voluntarios-img" alt="Voluntário">
      <img src="https://randomuser.me/api/portraits/men/44.jpg" class="voluntarios-img" alt="Voluntário">
      <img src="https://randomuser.me/api/portraits/women/72.jpg" class="voluntarios-img" alt="Voluntário">
      <img src="https://randomuser.me/api/portraits/men/56.jpg" class="voluntarios-img" alt="Voluntário">
      <img src="https://randomuser.me/api/portraits/women/85.jpg" class="voluntarios-img" alt="Voluntário">
    </div>
  </div>
</section>

<section id="noticias" class="bg-light">
  <div class="container">
    <h2 class="section-title">Notícias Recentes</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQVD-r6C46c26fhagkzaxKFWIZ6Tan57iOkA&s" class="card-img-top" alt="Notícia">
          <div class="card-body p-4">
            <h5 class="fw-bold">Ação de Natal 2025</h5>
            <p class="text-muted small">Um resumo da nossa última grande ação comunitária.</p>
            <a href="#" class="btn btn-link p-0 text-warning fw-bold text-decoration-none">Ler mais →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShEjWJSYmqoFe4MbBgBpN22eAk9ESrzVrIXQ&s" class="card-img-top" alt="Notícia">
          <div class="card-body p-4">
            <h5 class="fw-bold">Novos Cursos Livres</h5>
            <p class="text-muted small">Inscrições abertas para oficinas de capacitação.</p>
            <a href="#" class="btn btn-link p-0 text-warning fw-bold text-decoration-none">Ler mais →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRyky40lcr0-Gil_FqOEweLsfTZytnSUcyAQ&s" class="card-img-top" alt="Notícia">
          <div class="card-body p-4">
            <h5 class="fw-bold">Parceria Renovada</h5>
            <p class="text-muted small">Novos investimentos para a quadra comunitária.</p>
            <a href="#" class="btn btn-link p-0 text-warning fw-bold text-decoration-none">Ler mais →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<a href="https://wa.me/5521995756785" target="_blank" class="whatsapp-float">
  <i class="bi bi-whatsapp"></i>
</a>

<a href="#" class="doacao-float">
  <i class="bi bi-heart-fill me-2"></i> CONTRIBUA AGORA
</a>

<footer class="footer">
  <div class="container text-center">
    <div class="mb-4">
      <h4 class="fw-bold mb-3">PEPUC Vila Paciência</h4>
      <div class="social-icons">
        <a href="mailto:contato@minhaong.com"><i class="bi bi-envelope-heart"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-geo-alt"></i></a>
      </div>
    </div>
    <p class="small opacity-50 mb-0">&copy; 2026 PEPUC Vila Paciência. Todos os direitos reservados.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

