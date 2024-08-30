<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa Elegante</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">EbenEzer</h1>
            <nav>
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#shop">Tienda</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home">
        <div class="hero">
            <div class="hero-content">
                <h2>Bienvenidos a Eben Ezer</h2>
                <p>Descubre nuestra nueva colección</p>
                <a href="#shop" class="btn">Comprar Ahora</a>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2>Sobre Nosotros</h2>
            <p>En Eben Ezer, nos dedicamos a ofrecer ropa de alta calidad con un diseño exclusivo y elegante. Nuestra misión es proporcionar una experiencia de compra única y satisfactoria.</p>
        </div>
    </section>

    <section id="shop" class="section">
        <div class="container">
            <h2>Nuestra Tienda</h2>
            <div class="products">
                <div class="product">
                    <img src="{{ asset('img/product1.jpg') }}" alt="Producto 1">
                    <h3>Producto 1</h3>
                    <p>$100.00</p>
                </div>
                <div class="product">
                    <img src="{{ asset('img/product2.jpg') }}" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>$150.00</p>
                </div>
                <!-- Más productos aquí -->
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Contacto</h2>
            <p>Puedes contactarnos a través de nuestras redes sociales o enviándonos un correo a info@EbenEzer.com.</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Eben Ezer. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
