<!--<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Transformando asesorias y gestiones</h5>
    <span class="text-muted">sg-sst</span>
  </div>
</div>-->
<!--
<nav class="navbar navbar-dark  navv">
  <div class="container-fluid" id="navbarTogglerDemo01">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a  aria-current="page" href="index.php"><button class="inicio">inicio</button></a>
  <a  aria-current="page" href="?opcion=formulario"><button class="inicio">Registro</button></a>
  <a  aria-current="page" href="?opcion=mision"><button class="inicio">Mision</button></a>
  <a  aria-current="page" href="?opcion=contacto"><button class="inicio">Contacto</button></a>
  <a aria-current href="?opcion=sesion"> <img src="imagenes/sesion.png" alt="" class="img_inic"></a>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search (no sirve)" aria-label="Search" disabled>
        <button class="btn btn-outline-success" type="submit">Search </button>
      </form>
  </div>
</nav>

!-->

<header>
		<a href="#" class="logo"><img src="imagenes/logo3.png" alt=""></a>
		<nav>
			<ul>
				<li><a aria-current="page" href="index.php">Inicio</a></li>
				<li><a aria-current="page" href="?opcion=formulario">Formulario</a></li>
				<li><a aria-current="page" href="?opcion=contacto">contacto</a></li>
				<li><a aria-current="page" href="?opcion=mision">Mision</a></li>
        <li><a aria-current="page" href="?opcion=resolucion">Resolución</a></li>
				<a aria-current href="?opcion=sesion"> <img src="imagenes/sesion.png" alt="" class="img_inic"></a>
				<form class="d-flex">
        <input class="form-control me-2 bt" type="search" placeholder="Search (no sirve)" aria-label="Search" disabled>
        <button class="btn btn-outline-success" type="submit">Search </button>
      </form>
			</ul>
		</nav>
	</header>

	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>

<!--menu 2    -->
