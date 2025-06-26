const navBar = document.querySelector("#navbar");
navBar.innerHTML = `
  <header>
    <div class="parte_de_cima">
      <img src="img/LogoCeaplam.png" alt="">
      <hr>
      <img src="img/logoElementos.png" alt="">
    </div>

    <!-- Botão do menu hamburguer (visível só no mobile) -->
    <div class="menu-mobile">
      <div class="hamburger" onclick="toggleMenu()">☰</div>
      <ul class="mobile-nav" id="mobileMenu">
        <li><a href="../../pages/Doe-main/index.html">Doe</a></li>
        <li><a href="">Mapa</a></li>
        <li><a href="">Institucional</a></li>
        <li><a href="index.html">Equipe</a></li>
        <li><a href="../../pages/visitas.html">Visitas</a></li>
        <li><a href="">Programação</a></li>
        <li><a href="../../pages/index.html">Loja</a></li>
      </ul>
    </div>

    <!-- Menu padrão (desktop) -->
    <nav>
      <ul>
        <li><a href="">Doe</a></li>
        <li><a href="">Mapa</a></li>
        <li><a href="">Institucional</a></li>
        <li><a href="index.html">Equipe</a></li>
        <li><a href="visitas.html">Visitas</a></li>
        <li><a href="">Programação</a></li>
        <li><a href="index.html">Loja</a></li>
      </ul>
    </nav>
  </header>
`;
g