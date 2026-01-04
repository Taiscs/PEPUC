<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    /* Topo com imagem e texto sobreposto */
 .hero {
  background-image: url('https://scontent-gig4-1.xx.fbcdn.net/v/t1.6435-9/48395701_360308331463307_2538602203405352960_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=PGzLUGML7jUQ7kNvwHLy_11&_nc_oc=Adm_G_VadPamJG-WhmtWsJAM8ToRQZZm4jITDHvD7FfObwhxfh3mQlsDIS_WLSn56zL3Ku90RQUEXUJueWkaArhn&_nc_zt=23&_nc_ht=scontent-gig4-1.xx&_nc_gid=UT0U_4-GOS1uWTs9EDOeoA&oh=00_AfqOwmbYh4gk1Vwsb2EVohU_KcIZcrpP1Rehn7NRhGWXIA&oe=69824371');
  background-size: cover;
  background-position: center;
  height: 400px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

    .hero-text {
      background-color: rgba(0,0,0,0.5);
      padding: 20px 40px;
      border-radius: 10px;
    }

    
    

    /* Sessão "Quem Somos" */
   .quem-somos .imagem-container {
  width: 250px;             /* tamanho do círculo */
  height: 250px;
  background-color: #f0f0f0; /* fundo delicado */
  border-radius: 50%;        /* deixa circular */
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;          /* corta a imagem para caber no círculo */
  margin: 0 auto;            /* centraliza no container, se necessário */
}

.quem-somos .imagem-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;         /* preenche o círculo sem distorcer */
  border-radius: 50%;        /* garante que a imagem fique redonda */
}


.quem-somos {
  background-color: #f9f9f9; /* tom claro */
  padding: 60px 0;
}

.quem-nos-apoia {
  background-color: #ffffff; /* branco puro */
  padding: 60px 0;
}

.voluntarios {
  background-color: #f1f1f1;
  padding: 60px 0;
}

section {
  border-top: 2px solid #ddd;
  padding-top: 60px;
  padding-bottom: 60px;
}


section {
  padding-top: 80px;
  padding-bottom: 80px;
}


    /* Sessão "Quem nos apoia" */
    .card-carousel {
      display: flex;
      gap: 1rem;
      overflow-x: auto;
      padding: 1rem 0;
    }
  .card-carousel .card {
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}
.card-carousel .card:hover {
  transform: translateY(-5px);
}

    /* Sessão Voluntários */
    .voluntarios img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin: 10px;
    }

    /* Depoimentos */
    .depoimentos {
      background-color: #f8f9fa;
      padding: 2rem 0;
    }
    .depoimentos .card {
      border: none;
      background-color: #fff;
      margin-bottom: 1rem;
    }

    /* Scrollbar bonita para card-carousel */
    .card-carousel::-webkit-scrollbar {
      height: 8px;
    }
    .card-carousel::-webkit-scrollbar-thumb {
      background-color: #888;
      border-radius: 4px;
    }
    .card-carousel::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Menu */
.navbar-custom {
  background-color: #343a40;
}

.navbar-custom .navbar-brand,
.navbar-custom .nav-link {
  color: #fff;
}

.navbar-custom .nav-link:hover {
  color: #ffc107; /* destaque ao passar o mouse */
}

body {
  padding-top: 70px; /* espaço para que o conteúdo não fique escondido atrás do menu */
}


/* WhatsApp */
.whatsapp-float {
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 20px;
  right: 20px;
  background-color: #25D366;
  color: white;
  border-radius: 50%;
  text-align: center;
  font-size: 30px;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 0.3s;
}

.whatsapp-float:hover {
  transform: scale(1.1);
  text-decoration: none;
  color: white;
}

/* Botão de Doação */
.doacao-float {
  position: fixed;
  bottom: 20px;
  left: 20px;
  background-color: #ffc107; /* amarelo/dourado chamativo */
  color: #343a40; /* texto escuro */
  padding: 15px 20px;
  border-radius: 50px;
  font-weight: bold;
  text-decoration: none;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  z-index: 1000;
  transition: transform 0.3s, background-color 0.3s;
}

.doacao-float:hover {
  transform: scale(1.05);
  background-color: #e0a800;
  color: #fff;
}



/* Footer */
.footer {
  background-color: #343a40;
  color: #fff;
  padding: 2rem 0;
}

.footer a {
  color: #ffc107;
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

.footer .social-icons a {
  font-size: 1.5rem;
  margin-right: 1rem;
  color: #ffc107;
}

.footer .social-icons a:hover {
  color: #fff;
}

  </style>
</head>
<body>

<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">PEPUC Vila Paciência</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#quem-somos">Quem Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#quem-nos-apoia">Quem Nos Apoia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#voluntarios">Voluntários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#noticias">Notícias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




  <!-- Topo -->
  <section class="hero">
    <div class="hero-text">
      <h1>10 anos transformando vidas</h1>
    </div>
  </section>

  <!-- Quem Somos -->
<section id="quem-somos" class="quem-somos container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h2>Quem Somos</h2>
      <p>
        Somos uma organização dedicada a transformar vidas através de educação, apoio social e iniciativas comunitárias. Nosso compromisso é fazer a diferença em cada projeto que realizamos.
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <div class="imagem-container">
        <img src="http://localhost/portal-ci/public/assets/images/10ea8392-55aa-420f-8e2d-eaeb8ed83621.jpg" alt="Quem Somos">
      </div>
    </div>
  </div>
</section>



  <!-- Quem nos apoia -->
  <section id="quem-nos-apoia" class="quem-nos-apoia container my-5">
    <h2 class="mb-4">Quem nos Apoia</h2>
    <div class="card-carousel">
      <div class="card" style="width: 18rem;">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA1VBMVEUILVT/Fxf///8ALVUALlcAL1f/FRIAEUYAGUkAHUursr3c1dmWoK3/FA//FhQAC0PR1tzj5+u7sbnvGBrv5ujgGiKpnqkAFUe+xMwzKk7r7vHTzNLkIinz7e+NKkIAMlhML0/AHi3XICiqIzemJzvMJzRTLk4mLlIyMlTYJS+XLEN6KkVHMlL7GxsaMVZvLkqEKUMAJlBkKki1JTfvICTLHytbKkqOJ0CbJDu9IzKJlaV1KkViMU4mM1ZqLUu4JDYAADdWZ4B/i52jK0FSNFNqMU1AVXIbv7EfAAAN80lEQVR4nO2dC3faOBbH8VxJfcxK7ZRhO3RZoARCeJjQAEmZpM3Mpt3v/5HWMhD0tCWZBJP1/5w505kaWT/fq9fVq1arVKlSpUqVKlWqVKlSpUqVKlWqVKlSpUqVKlWqVKlSpUqVKlWqVKlSpUqVKp2EAACnSv5w7LwcXoBQrTu5WX9OtG5PLgC9KEpAuDvuMfIoSuJVe4ZeCiPg4UOdEhZJYoSuLl8EI6Dr1R4vsSOllGz+m9HG/OQZAV+3KMfh/xBaX9xcc31d1wnhkLQxxcfOYyHhixXdmY/QwVVajW6q1MvN3zByg21mfPNqr9fPmm9XAR5vLJVaq9eVUAB1eykjXVsQ3/z56bedPr0tIyIetuhjxULbWokDdBuniCMz4uu3v+z1/pV/Bjb+gjBGidJ2OIAiQ+iWPRqQxcbihmY9/ghpGd9dgJCDIdyZ3k3GZ/eDUStRo7GMzw+JCKi/NyCrz8xpAz7jT5GeCTGQkFutc32zGNW3DTDbin/JYB5D1gcOgInQV/4cHRjeHUKY0H27PWtFuwZJFr07mBEB96iQcjMjYXSTIvaR9jfehAneeb9Ftc7F/lMfzIiA93VMHNErPfeC8MaKE+3lfoRJE3S3iO10GyN+P4wREwsSIVWDeSShe/400wztQwh49rCkxIq2M2LjMEZEa8FF2TIvUf5BYv5yBdGdMGlbByQXL/3cV4cwIjoTyyDNr6JhFicPkjPF1q6EiXuO8s23/d69HIdyEb4V3hazzw5JwlVaFK/lb+FGCOjHiGYWPtmIxdtEaDLxfXTokiJakNSfpWedCNG3gQdf8pJBYSOiFon3CZK1U9EGXE+ySfrSww6EgB8iR/98zJHTJ8/Qpu7fmzCrKRSzesUzSi/Ep/MJ0Y8GtYAIVmNSC0Ieihkx8VEp9Z5r7YwH3E9H4tvzCAEvMh00HW1H9dZo0BMfqxdrMNBKchpy6+oSMONfWqrMcwjhomU1IOORoN5ifnfBhxRoKGaKXhZxU7iWX0rcByz4K1Fa5GxCdMksBkxst1xMLpIx0y5qiVbCo8XqGtyQTMg+u3sEYD5YpILRMwmTwbUFj43GUyzHKuG7+OGZfRyQn8tL2YR04pEWGjPZiBmEgNdGDyW0dTMzRGJxXXxoHk6Il8oLfWrmbYuxLyV2QuiMTICErM/NgWbUFyxeoF+jlkLW8EoK2snPyerxN1ZCmLUMLkrY2dBW7KEp5ozUQo2IR3LZJ2deFXNSEpPOwr4FtRFCZ6kDMnKfFUPHDSFrxKfwSDkcKi/2dXh8xkMNj5/FQggdgwXpaJoZWwaxYmKmiIJbBpU3064fIcy4L8U5hNLgc/sp40lO7Fx20ziUsK40UN4Joc8kYo8NhpnQUIvSVX79L1WCdBrkpmo9E0W5Y18tifNlo9FYbH9mJIQ2f0TW2KFfkY5eHm3+EESI7xXvYStvZwAxbmu24XaSVZRLdkEctQbkjEtzUrbQ03nzzl1/SYR/uf/wo4lwJn7/oN43dFUnNTQW4lSEWf/m+pTqt08C4S+bv/5dkyGNP0yIcrfmIsBNlYEhT+arlszHP355BpnHkmIhos5jHjGFlVqJG5rDIxJCW6xq+gFuiiN1MGMYHB6T8E4McQa0+XoxFDvRZSAUe1whkWGY6z2NUhHWsBAgi+KONyFelJ0QtYRiRP0rU1NvUe/CH9WGA5HQPzCstfcJ4bhUhFJzYfCvHGkjp8hYJR+VUBzn+0cyYKqHFQx9mmMSSkNEg3/lEV4aht16RP+ohHKT7xurkX6+I9QjPl/+/keO3ib68OED/9ef74Vc//5PSZlp/OeLA6Fvg5jGc1UZxodf3uTo9V7vxLHFr+/yfrmXEVBusbXJylzBg4GQhS3RgWazyb+NND789RX/31sNg5ItRmho8IODBbhP01lHhRDFdKvoW0i6spf6E342LV8JCy7DOU1jWCrhboAXGIOAm0I1DRqYYrQhYxQep2DpHJRKuIslxWHOj8RQIPnqT2iwYWj4HPXoJbbaMHSKU45FtX2/kpEw9GsnBfF7hpcGxuSlLPqHvY1e6h0S3gq+p1EGM6F/CdpKCuz7r3DDa5MNaTusIA5p227D0JUG0vjQv5pHakQ/LYeBcckairmhjIRkHWhCuJBy2PHul5r6NHyWOyw3i0ubDUmY4ysh4YCAqWXSmQQuI0vnWUyEbBS6kkKeJPVfhmnqeXNCQ9jbWSZCr3lzSUic3DQMe/KkT8tsFDqPxWUiDE4POtKX9x4eKvNzexVZ7agQ4hVLvn3oFLwULg0J05iiGKk7eKw3UWXotYUv1JaKYVCvwRCJ2rppsBENXhru9FiMJQZ1Jw3RRJ5U6PiCSycki2AnlXwsqF+kTeLvGMNXVuuE6hpbd0lhqDBnT5oLs5uGL8rVCFkBJ11KuQuaID23LBQkwQvlNMLwpOTcsVVQOti6VDBkvpVLIyzQ3EuDO//BYSpzVcPTC60edC8Nis/UeD0jfX0Slo6tqkkSDFztqBEG7+mRG8PQvq3cdz+EEbVYm3d8bJc1LOcn1NmxddG163J2RRphyPICLqU/4z823KXTsxE67SrRpREGVllyp7tIt8E8CE6NGDRsVQlDh4ZKDRG0liaVaYJtZ8SgOkKN6gcWQ2jKa8/DGsNUSr9BMmJI4VYJAysIZV1vkY1P9vYibIihEoZ5F9xKrsVaBfYiwNROGFK8FcKwQDB0YikjxbYCSzFX2YQswDlUwiApi9HctymZUxvb91nlbyXVdAhCNFF2gBTbfiiv4VREvavCAxBCV/nOBSrSVOb5mR2i7/C1OCF0Wsr+iOC2cJeibZCYfj/f+rQ4IVrLThU4oSklaa1rIv+xcGFCtV5g9eJnf8Aka88qnXt9wqKEcK7ucPlxgK3q6RY7O6JX/7QgIVzEyttDZx4lbU65sInVfQYurz8UIYSO0okMaK+M6UpL4nUj+tTWhQj13VEsbO2LpqxW39NTihBCZ6Ruwhofwke5bOH93Yv0M0xsKkAIWF1XQAKnow1C7ewt8sy5tgknlM7/2bzVqwbIkbpVViWMXZcaBBMCXmm7W0Inx43p3+UYcel4JqRE6HESVgKotsp0fqhCmErfPaN8T/PRXpoCCfVKJqIFT4rQXjHUts8oiJYD2hSFEcI3bZcwDY6u2YSzW4yMY/YkBRHCVOtVhU/o2KUcrWBEzE8lhBDd6tuvegesRncybILSEPO/qz8hoAd991XjCQAty759HdWbEDpqM+herXnLHpR6RBzkvdqXEC70kwhI60ksWNNOizIiGg9LFORHCGiiv/KJXDQVnueeb0S0E9pkeRFCx3DaydNZkEuNkZgQl5kdOB9C1DWclUFHTwmY9J3s0xg7sfg8o9VwJwTcN0xe5pf0goJmHmCU3WF0JkRT04lR1O9klRChq/yjxng+bB/akZCfVmzwFnLYzrZZ4jG0dsSebcrFiRDQ1HRmG4vungGQ76RxOBCP1S2F0YUQOmem5QNkGbowxVNgXWQjIdK2+aTkXELAt7FxF8TgSStROQuGStyAaDxgJo8Q8LRnKgaMuBzncijBsJ7buYn4IUGGk3izCQHN1sbFgiT+8SxF8DEjLm0GN+NC++6ZhNB5YEb3eEYP3Qp3c0b8u0+/VCucDELAc2MBjBjTz35/ciFHREYflBNabYSAL5eWhfOti2f10K3QuRti0hWXzqa3EAL62TIvMGOk/4xVjCh1rjnDjGIWjYSAbXzHMuAmW83sUL+Qy/r1YznSCSHxz4aFj0T2izKeA3Ho0i5uzHi/y6hKCNCZL20LIOmo6BR9UUTTUYA2M24v2FEIYTaObXwkvj2mATeI2mSJTTE/Qw/phKhuS4Cw/nO3gSYB0g4Ds4oQ3qopMzPIMvfK6OCiJDcOoVu3s++5aKsJtp3O6pN3JeFLhJqu9Q0/L9e6l1viiydHL4CiIBkwuh4R70JI4nEZCqAoQLbNQ3ruc8shiR7KxseFp46emkdIon6nPAVQFL8eyMWM2YRJA/GtnHw17qnX1pbNkTDhK/fVggBn+XeKWAkZjR/KzVdLIyy51zZYCBldzjuncP0l4BuWXasSvdfGW8neT3wKfFx4mN02GghptM4+tbtkAjTtZdSqOuGg/MVPFaBL63hPJ6ydjHs+Kr3McrK0+KpW0xw7u74CQJ3LdmIWbBm3nzQhpzvv9xil8ZwzTkyxl1MmnP0cj3aX3JH6hDNe9rQuwCkT1hYiDl22MUq6AAulfTxpQtSU1n+S+tcOBozb0vV+J02Y9Gi+16WTOKL7pCnHqLuIyW6q6rQJOeOD5JSMtOaYG/Jqvb3C+9QJE1cdypfeMRIvuul1z9f3ibsyGrxGuDQCdCfNIDFKRunuwASyOV/XT58wXSeyneVkhEaD+T4qkZgS1eDb+3+lep/ov+aDZUsvNFtTluAt72872l1UAB93evXxRAHTkMay1T/X8fhiyu2FK09xpfZzCrBlzABjWq83Vut1ox7HUf+EEW0Cvkk5vU87cr7t87QE4rK44Gu2yizoHua+u/JKOrHjQNsjyyWYiV2eIkdMllbyiRan3F7YJG3zK3xRcRklHSxzgPu0yyf5YpjvL5BQvjYl7Jy8cks+6v/AmyRLIfnKwhfZbRP3+IUefl5qbS5e3REWOcGqtMLiNGrBS9/LKcDjaF8Uy7iypLjSKMe2Mj3y6sqnEqDzrau+yE5NKsDt1FWDTx09AaHafeKqAUfhn44AdVu00DUL5RfgeVT0MLmyKymOL9hLU53cQoxKlSpV+r/W/wAo9C5ef/54VAAAAABJRU5ErkJggg==" class="card-img-top" alt="Apoiador 1">
        <div class="card-body">
          <p class="card-text">Igreja Batista de Vila paciencia.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFzE2lhBo1luNNxMyoXxLh-Tu9N-6Ht3PReg&s" class="card-img-top" alt="Apoiador 2">
        <div class="card-body">
          <p class="card-text">Associação de Moradores.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://avatars.githubusercontent.com/u/92761110?s=280&v=4" class="card-img-top" alt="Apoiador 3">
        <div class="card-body">
          <p class="card-text">Prefeitura do</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Depoimentos -->
  <section class="depoimentos container my-5">
    <h2 class="mb-4 text-center">Depoimentos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <p>"Essa organização mudou minha vida. Sou eternamente grato pelo apoio e oportunidades."</p>
          <h6 class="text-end mb-0">- João Silva</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <p>"Incrível ver o impacto positivo que eles causam na comunidade."</p>
          <h6 class="text-end mb-0">- Maria Souza</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <p>"Recomendo a todos participarem e colaborarem com essa causa."</p>
          <h6 class="text-end mb-0">- Carlos Pereira</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- Voluntários -->
  <section id="voluntarios" class="voluntarios container my-5 text-center">
    <h2 class="mb-4">Nossos Voluntários</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Voluntário 1">
      <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Voluntário 2">
      <img src="https://randomuser.me/api/portraits/women/72.jpg" alt="Voluntário 3">
      <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Voluntário 4">
      <img src="https://randomuser.me/api/portraits/women/85.jpg" alt="Voluntário 5">
    </div>
  </section>

  <!-- Notícias -->
<section id="noticias" class="noticias container my-5">
    <h2 class="mb-4">Notícias</h2>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1605902711622-cfb43c4437b1?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Notícia 1">
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 1</h5>
            <p class="card-text">Resumo da notícia 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1581091215366-8b67f9ff4c99?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Notícia 2">
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 2</h5>
            <p class="card-text">Resumo da notícia 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1596496055987-2a78a9f0419d?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Notícia 3">
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 3</h5>
            <p class="card-text">Resumo da notícia 3.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Ícone do WhatsApp -->
<a href="https://wa.me/5521995756785" target="_blank" class="whatsapp-float">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Botão de Doação -->
<a href="https://www.seusite.com/doacao" target="_blank" class="doacao-float">
  Contribua
</a>


<!-- Footer -->
<footer class="footer mt-5">
  <div class="container text-center">
    <div class="mb-3">
      <p>Entre em contato:</p>
      <div class="social-icons">
        <a href="mailto:contato@minhaong.com" target="_blank" title="Email"><i class="bi bi-envelope-fill"></i></a>
        <a href="https://goo.gl/maps/abc123" target="_blank" title="Endereço"><i class="bi bi-geo-alt-fill"></i></a>
        <a href="https://instagram.com/minhaong" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
    <p>&copy; 2026 PEPUC Vila Paciência. Todos os direitos reservados.</p>
  </div>
</footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
