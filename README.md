<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperCars Web - Luxo sobre Rodas</title>
    <meta name="description" content="Encontre os carros mais luxuosos e potentes do mercado. Compre agora o seu supercarro dos sonhos na SuperCars Web.">
    <meta name="keywords" content="Supercarros, Luxo, Velozes, Potentes, Comprar, Automóveis">

    <!-- Fonte externa -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #a0949452;
            margin: 0;
            padding: 0;
            color: #ffffff;
            overflow-x: hidden;
        }

        header {
            background-color: #1e272e;
            color: #f7f1e3;
            padding: 30px 0;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-size: 3em;
            letter-spacing: 3px;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #576574;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: #f7f1e3;
            padding: 15px 30px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #15ff00;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 50px auto;
            padding: 0 20px;
            max-width: 1200px;
        }

        .car-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
        }

        .car-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .car-card-content {
            padding: 20px;
        }

        .car-card h3 {
            margin: 0;
            font-size: 1.8em;
            color: #34495e;
            position: relative;
        }

        .car-card h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 50px;
            height: 4px;
            background-color: #f10404;
        }

        .car-card .price {
            margin-top: 15px;
            font-size: 1.2em;
            color: #27ae60;
        }

        .car-card .discount {
            margin-top: 10px;
            font-size: 1em;
            color: #c0392b;
            font-weight: 700;
        }

        .car-specs {
            margin-top: 20px;
            text-align: left;
            color: #2c3e50;
        }

        .car-specs h4 {
            margin-bottom: 10px;
            font-size: 1.4em;
            color: #34495e;
        }

        .car-specs ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .car-specs li {
            margin: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .car-specs li::before {
            content: '\2022';
            color: #ff9f43;
            font-weight: bold;
            display: inline-block;
            width: 20px;
            margin-left: -20px;
        }

        .car-year {
            margin-top: 15px;
            font-size: 0.9em;
            color: #7f8c8d;
        }

        .car-card button {
            background-color: #ff9f43;
            color: #fff;
            border: none;
            padding: 12px 25px;
            font-size: 1em;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        .car-card button:hover {
            background-color: #3cff00;
        }

        footer {
            background-color: #1e272e;
            color: #f7f1e3;
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
            font-size: 0.9em;
        }

        footer p {
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }

            .car-card img {
                height: 180px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>SuperCars Web</h1>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">Sobre</a>
        <a href="#contact">Contato</a>
    </nav>

    <div class="container">
        <!-- Carro 1 -->
        <div class="car-card">
            <img src="Bugatti_Chiron_1.jpg" alt="Bugatti Chiron">
            <div class="car-card-content">
                <h3>Bugatti Chiron</h3>
                <p class="price">R$ 49.000.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 45.000.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 8.0L W16 Quad-Turbo</li>
                        <li>Potência: 1.500 hp</li>
                        <li>0-100 km/h: 2.4 s</li>
                        <li>Velocidade máxima: 420 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2024</div>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Carro 2 -->
        <div class="car-card">
            <img src="panamera.webp" alt="Porsche Panamera">
            <div class="car-card-content">
                <h3>Porsche Panamera</h3>
                <p class="price">R$ 630.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 600.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 4.0L V8 Turbo</li>
                        <li>Potência: 550 hp</li>
                        <li>0-100 km/h: 3.6 s</li>
                        <li>Velocidade máxima: 310 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2023</div>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Carro 3 -->
        <div class="car-card">
            <img src="koenisegg agera r.webp" alt="Koenigsegg Agera R">
            <div class="car-card-content">
                <h3>Koenigsegg Agera R</h3>
                <p class="price">R$ 5.700.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 5.500.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 5.0L V8 Turbo</li>
                        <li>Potência: 1.341 hp</li>
                        <li>0-100 km/h: 2.8 s</li>
                        <li>Velocidade máxima: 440 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2022</div>
                <button>Comprar</button>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Carro 1 -->
        <div class="car-card">
            <img src="phantom.jpg" alt="Rolls-Royce Phantom">
            <div class="car-card-content">
                <h3>Rolls-Royce Phantom</h3>
                <p class="price">R$ 6.000.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 5.800.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 6.75L V12</li>
                        <li>Potência: 563 hp</li>
                        <li>0-100 km/h: 5.3 s</li>
                        <li>Velocidade máxima: 250 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2024</div>
                <button>Comprar</button>
            </div>
        </div>
    
        <!-- Carro 2 -->
        <div class="car-card">
            <img src="mclaren 720s.jpg" alt="McLaren 720S">
            <div class="car-card-content">
                <h3>McLaren 720S</h3>
                <p class="price">R$ 2.700.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 2.500.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 4.0L V8 Turbo</li>
                        <li>Potência: 710 hp</li>
                        <li>0-100 km/h: 2.8 s</li>
                        <li>Velocidade máxima: 341 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2023</div>
                <button>Comprar</button>
            </div>
        </div>
    
        <!-- Carro 3 -->
        <div class="car-card">
            <img src="valquish.png" alt="Aston Martin Vanquish">
            <div class="car-card-content">
                <h3>Aston Martin Vanquish</h3>
                <p class="price">R$ 1.800.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 1.700.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 5.9L V12</li>
                        <li>Potência: 595 hp</li>
                        <li>0-100 km/h: 3.5 s</li>
                        <li>Velocidade máxima: 323 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2022</div>
                <button>Comprar</button>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Carro 1 -->
        <div class="car-card">
            <img src="stradale.avif" alt="Ferrari SF90 Stradale">
            <div class="car-card-content">
                <h3>Ferrari SF90 Stradale</h3>
                <p class="price">R$ 7.500.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 7.200.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 4.0L V8 Híbrido</li>
                        <li>Potência: 986 hp</li>
                        <li>0-100 km/h: 2.5 s</li>
                        <li>Velocidade máxima: 340 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2024</div>
                <button>Comprar</button>
            </div>
        </div>
    
        <!-- Carro 2 -->
        <div class="car-card">
            <img src="lambo huracan.jpg" alt="Lamborghini Huracán Evo">
            <div class="car-card-content">
                <h3>Lamborghini Huracán Evo</h3>
                <p class="price">R$ 2.400.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 2.200.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 5.2L V10</li>
                        <li>Potência: 640 hp</li>
                        <li>0-100 km/h: 2.9 s</li>
                        <li>Velocidade máxima: 325 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2023</div>
                <button>Comprar</button>
            </div>
        </div>
    
        <!-- Carro 3 -->
        <div class="car-card">
            <img src="bentley.webp" alt="Bentley Continental GT">
            <div class="car-card-content">
                <h3>Bentley Continental GT</h3>
                <p class="price">R$ 1.500.000,00 à vista</p>
                <p class="discount">Desconto especial: R$ 1.400.000,00</p>
                <div class="car-specs">
                    <h4>Especificações:</h4>
                    <ul>
                        <li>Motor: 6.0L W12</li>
                        <li>Potência: 626 hp</li>
                        <li>0-100 km/h: 3.7 s</li>
                        <li>Velocidade máxima: 333 km/h</li>
                        <li>Kilometragem: 0 km</li>
                    </ul>
                </div>
                <div class="car-year">Ano: 2022</div>
                <button>Comprar</button>
            </div>
        </div>
    </div>
    
    
    

    <footer>
        <p>&copy; 2024 SuperCars Web. Todos os direitos reservados.</p>
    </footer>

</body>

</html>
