<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostruário da Estância</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        header {
            background-color: #54FFF7;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            margin-right: 15px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .logo h1 {
            margin: 0;
            color: #004085;
            font-size: 24px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: #004085;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, border-bottom 0.3s;
            padding-bottom: 5px;
            border-bottom: 2px solid transparent;
        }

        nav ul li a:hover {
            color: #28a745;
            border-bottom: 2px solid #28a745;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            color: #333;
        }

        .accommodation {
            margin-bottom: 50px;
        }

        .accommodation h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            color: #444;
            position: relative;
        }

        .accommodation h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #28a745;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin-bottom: 25px;
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.3s;
            text-align: center;
            border: 1px solid #ddd;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            border-bottom: 1px solid #ddd;
        }

        .card h3 {
            margin: 20px 0 10px;
            font-size: 20px;
            color: #333;
        }

        .card p {
            font-size: 15px;
            color: #777;
        }

        .card .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: bold;
        }

        .card .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Ajustes para dispositivos médios */
        @media (max-width: 768px) {
            .card {
                width: 48%;
            }
        }

        /* Ajustes para dispositivos pequenos */
        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }

        footer {
            background-color: #54FFF7;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            border-radius: 8px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo png 2.png" alt="Logo da Estância">
            <h1>Estância Bela Vista</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#fale-conosco">Fale Conosco</a></li>
                <li><a href="#pacotes-promocionais">Pacotes Promocionais</a></li>
                <li><a href="#pontos-turisticos">Pontos Turísticos</a></li>
                <li><a href="#acomodacoes">Acomodações</a></li>
                <li><a href="#area-recreativa">Área Recreativa</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Estância Turística - Acomodações</h1>

        <!-- Quartos -->
        <section class="accommodation" id="acomodacoes">
            <h2>Quartos</h2>
            <div class="row">
                <div class="card">
                    <img src="room1.jpg" alt="Quarto 1">
                    <h3>Quarto 1</h3>
                    <p>Quarto Standard com vista lateral para o mar, cama de casal, banheiro privativo e varanda. Ideal para casais que buscam conforto e simplicidade.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="room2.jpg" alt="Quarto 2">
                    <h3>Quarto 2</h3>
                    <p>Quarto duplo com duas camas de solteiro, ideal para amigos ou familiares. Equipado com ar-condicionado e vista parcial da praia.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="room3.jpg" alt="Quarto 3">
                    <h3>Quarto 3</h3>
                    <p>Quarto Luxo com vista frontal para o mar, cama king size, banheiro espaçoso com banheira de hidromassagem e varanda privativa.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
            </div>
        </section>

        <!-- Suítes -->
        <section class="accommodation">
            <h2>Suítes</h2>
            <div class="row">
                <div class="card">
                    <img src="suite1.jpg" alt="Suíte 1">
                    <h3>Suíte 1</h3>
                    <p>Suíte Master com vista panorâmica para o mar, banheira de hidromassagem e área de estar separada. Perfeita para uma experiência de luxo.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="suite2.jpg" alt="Suíte 2">
                    <h3>Suíte 2</h3>
                    <p>Suíte Deluxe com cama king size, sala de estar privativa e vista para o jardim. Uma combinação de conforto e elegância.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="suite3.jpg" alt="Suíte 3">
                    <h3>Suíte 3</h3>
                    <p>Suíte Júnior com varanda privativa, ideal para famílias ou pequenos grupos. Vista parcial para a montanha.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="suite4.jpg" alt="Suíte 4">
                    <h3>Suíte 4</h3>
                    <p>Suíte Superior com cama de casal e decoração clássica, perfeita para quem busca tranquilidade e sofisticação.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="suite5.jpg" alt="Suíte 5">
                    <h3>Suíte 5</h3>
                    <p>Suíte Presidencial, a maior e mais luxuosa acomodação, com duas varandas, sala de jantar privativa e vista 360° para o oceano.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
            </div>
        </section>

        <!-- Chalés -->
        <section class="accommodation">
            <h2>Chalés</h2>
            <div class="row">
                <div class="card">
                    <img src="chale1.jpg" alt="Chalé 1">
                    <h3>Chalé 1</h3>
                    <p>Chalé rústico de madeira com vista para a floresta, ideal para quem busca uma experiência em contato com a natureza.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale2.jpg" alt="Chalé 2">
                    <h3>Chalé 2</h3>
                    <p>Chalé familiar com dois quartos, lareira e varanda privativa com vista para o lago. Conforto e tranquilidade garantidos.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale3.jpg" alt="Chalé 3">
                    <h3>Chalé 3</h3>
                    <p>Chalé aconchegante para casais, equipado com lareira, hidromassagem e vista para o jardim.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale4.jpg" alt="Chalé 4">
                    <h3>Chalé 4</h3>
                    <p>Chalé com dois andares, varanda ampla e vista panorâmica para as montanhas. Perfeito para famílias.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale5.jpg" alt="Chalé 5">
                    <h3>Chalé 5</h3>
                    <p>Chalé de luxo com jacuzzi externa, varanda com rede e vista espetacular do pôr do sol.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale6.jpg" alt="Chalé 6">
                    <h3>Chalé 6</h3>
                    <p>Chalé minimalista com decoração moderna, equipado com cozinha compacta e lareira, ideal para estadias prolongadas.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale7.jpg" alt="Chalé 7">
                    <h3>Chalé 7</h3>
                    <p>Chalé para grandes grupos, com três quartos, churrasqueira e uma grande varanda com vista para a montanha.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale8.jpg" alt="Chalé 8">
                    <h3>Chalé 8</h3>
                    <p>Chalé para dois, com design rústico e aconchegante, lareira e vista para o bosque.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale9.jpg" alt="Chalé 9">
                    <h3>Chalé 9</h3>
                    <p>Chalé de montanha com três quartos, sala de estar espaçosa e varanda com vista para o vale.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="card">
                    <img src="chale10.jpg" alt="Chalé 10">
                    <h3>Chalé 10</h3>
                    <p>Chalé com dois quartos, sala com lareira e vista deslumbrante para o lago e montanhas ao fundo.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Estância Bela Vista - Todos os Direitos Reservados</p>
    </footer>
</body>
</html>
