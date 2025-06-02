<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vila Lobos</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./componentes/header/header.css">
    <link rel="stylesheet" href="./componentes/footer/footer.css">
    <link rel="stylesheet" href="./componentes/carrossel/carrossel.css">
    <link rel="stylesheet" href="./componentes/cards/cards.css">
    <link rel="stylesheet" href="./componentes/cards/card-responsividade.css">
    <link rel="stylesheet" href="./componentes/carrossel/carrossel-responsividade.css">
</head>
<body>
    <?php include('./componentes/header/header.php'); ?>
    <main>
        <section id="conteinerConheca">
           <?php 
            include_once('./componentes/carrossel/carrossel.php'); 
            carrosselTitulo("Conheça CEAPLAM");
            ?>
        </section>

        <section id="conteinerNos">
            <section>
                <h2>Quem Somos?</h2>
                <p>O CEAPLAM - Centro de Educação Ambiental e de Plantas Medicinais do Parque Villa-Lobos, tem como objetivo geral “Ser um espaço educador dedicado a Educação Ambiental e à promoção da Saúde e do Bem-estar, e demais temáticas da educação ambiental, por meio do conhecimento do uso consciente de plantas medicinais e fitoterápicos, promovendo ações dinâmicas e engajadoras que formem cidadãos mais conscientes e proativos na preservação socioambiental integrada à saúde individual e coletiva”. </p>
                <p>O CEAPLAM é uma iniciativa do Instituto 5 Elementos – Educação para a Sustentabilidade, com diversos parceiros estratégicos, financiadores, além dos doadores que participam da nossa programação de palestras, oficinas, exposições, visitas monitoradas, cursos e voluntariado.</p>
            </section>
            <section>
                <h2>Objetivos específicos do CEAPLAM</h2>
                 <ul>
                    <li>Promover o conhecimento sobre a importância da biodiversidade e da preservação ambiental de forma lúdica, divertida e interessante, estimulando a Cultura de Paz.</li>
                    <li>Promover ações integrando a saúde individual e coletiva, relacionada com o meio ambiente e a ciência.</li>
                    <li>Disseminar os diversos usos das plantas medicinais, promovendo trocas de saberes científicos e ancestrais.</li>
                    <li>Produzir e doar mudas às escolas e grupo que participarem das visitas monitoradas.</li>
                    <li>Proporcionar vivências interativas enfatizando os temas: consumo e descarte sustentável, gestão das águas, segurança alimentar, biodiversidade – biomas (fauna e flora), energias renováveis e tecnologias sustentáveis.</li>
                    <li>Sensibilizar a população sobre as Mudanças Climáticas.</li>
                    <li>Estimular o trabalho voluntário apoiando as atividades programadas e potencializando seus saberes, por meio da realização de oficinas e palestras.</li>
                </ul>
            </section>
        </section>

        <section id="conteinerParceiros">
          <?php 
            carrosselTitulo("Parceiros estratégicos");
          ?>
        </section>

        <section id="conteinerProgramacao">
          <?php 
            include_once('./componentes/cards/cards.php'); 
            cardsTitle("Nossa programação!");
            cardsTitle("Nossos cursos!");
            cardsTitle("Visitas monitoradas!");
          ?>
        </section>

        <section id="conteinerFinanciadores">
          <?php 
            carrosselTitulo("Financiadores");
          ?>
        </section>
    </main>

    <?php include('./componentes/footer/footer.php'); ?>
  <!-- Fim do componente -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons(); 
    </script>
</body>
</html>