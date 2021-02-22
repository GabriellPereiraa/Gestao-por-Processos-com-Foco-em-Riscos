<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="page-title">
                <h2 class="font-bold" style="color: #008445;">
                    Apresentação
                </h2>
                    <p class="Texto">
                        As organizações, sejam elas públicas ou privadas, buscam continuamente otimizar recursos e alcançar resultados, sem comprometer a qualidade do produto ou serviço que está ofertando a seus clientes.
                    </p>
                    <p class="Texto">
                        Nesse contexto, identificar e gerenciar processos torna-se algo fundamental para o alcance dos objetivos supracitados, visto que por meio de um modelo de gestão que busca o alcance dos resultados focado em atender às necessidades dos clientes, as organizações têm conseguido eficiência e eficácia
                    </p>
                    <p class="Texto">
                        Nesta aula, os principais conceitos e elementos pertinentes à gestão de processos são apresentados de forma bastante didática, fazendo uma relação com um exemplo cotidiano, com o qual todos são familiarizados.
                    </p>

                <br>
                <hr>
                <h2 class="font-bold" style="color: #008445;">
                    Objetivo
                </h2>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Evidenciar os principais conceitos que são utilizados na gestão de processos; 
                    </p>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Apresentar a metodologia para manter e melhorar processos;
                    </p>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Apresentar a importância do gerenciamento de processos como ferramenta para o alcance da melhoria contínua.
                    </p>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico01.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>