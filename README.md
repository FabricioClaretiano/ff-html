<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Esportivos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carros Esportivos</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#modelos">Modelos</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <h2>Bem-vindo ao mundo dos carros esportivos</h2>
        <p>Explore os carros mais rápidos e elegantes do mundo.</p>
    </section>

    <section id="modelos">
        <h2>Modelos Populares</h2>
        <div class="carros">
            <div class="carro">
                <img src="red-ferrari-grand-sport-car-website-header.jpg" alt="Ferrari">
                <h3>Ferrari</h3>
                <p>A Ferrari é sinônimo de luxo e velocidade.</p>
            </div>
            <div class="carro">
                <img src="b7cd0922767685.55f0a0e947f3b.jpg" alt="Lamborghini">
                <h3>Lamborghini</h3>
                <p>A Lamborghini é conhecida por seu design agressivo e desempenho.</p>
            </div>
            <div class="carro">
                <img src="porsche laranja.jpg" alt="Porsche">
                <h3>Porsche</h3>
                <p>A Porsche combina elegância com potência em seus veículos.</p>
            </div>
        </div>
    </section>

    <section id="sobre">
        <img src="logo.jpg" alt="Porsche">
        <h2>Sobre Nós</h2>
        <p>Somos apaixonados por carros esportivos e estamos aqui para compartilhar essa paixão com você.</p>
    </section>

    <section id="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco para saber mais sobre nossos serviços.</p>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Carros Esportivos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
