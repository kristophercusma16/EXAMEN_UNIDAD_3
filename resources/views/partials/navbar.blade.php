<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f8f8f8;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar div {
        margin: 0 20px;
    }

    .navbar .examen {
        font-weight: bold;
        color: #007bff;
    }

    .navbar .nav-links {
        display: flex;
        justify-content: center;
        flex: 1;
        gap: 20px; /* Añadir más espacio entre las opciones */
    }

    .navbar a {
        color: #333;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .navbar .activo a {
        color: #fff;
        background-color: #007bff;
    }

    .navbar a:hover {
        color: #007bff;
        background-color: #e9ecef;
    }
</style>

<body>
    <div class="navbar">
        <div class="examen">Examen</div>
        <div class="nav-links">
            <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
            <div class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Servicios</a></div>
            <div class="{{ setActivo('proyectos') }}"><a href="{{ route('proyectos') }}">Proyectos</a></div>
            <div class="{{ setActivo('clientes') }}"><a href="{{ route('clientes') }}">Clientes</a></div>
            <div class="{{ setActivo('blog') }}"><a href="{{ route('blog') }}">Blog</a></div>
            <div class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></div>
        </div>
    </div>
</body>
