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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> ABNT – ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. <strong>Sistemas de gestão da qualidade </strong>– fundamentos e vocabulário. NBR ISO 9000. Rio de Janeiro, 2000.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> BPM CBOK – <strong>Guia para o Gerenciamento de Processos de Negócio</strong>. Corpo Comum do Conhecimento – ABPMP BPM CBOK V3.0, Association of Business Process Management Professionals, 2013.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>  CAMPOS, Vicente Falconi. <strong>Gerenciamento da rotina do trabalho do dia-a-dia</strong>. 8. ed. Nova Lima/MG: INDG, 2004.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>  FERREIRA, André Ribeiro. <strong> Gestão de processos;</strong> módulo 3. – Brasília: ENAP / DDG, 2013. 179 p. <strong>Apostila do Programa de Desenvolvimento de Gerentes Operacionais – DGO</strong>. Revisão e adaptação – Coordenação-Geral de Projetos de Capacitação/ DDG / ENAP.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> SANTOS, Ricardo; ARRAES, Vanessa; MENDONÇA, Aline. <strong> Redesenho de processos: a experiência do estado do Ceará em prover melhoria na gestão. </strong>Anais do VI Congresso CONSAD de Gestão Pública, Brasília: DF, 2013.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> BRASIL. Ministério do Planejamento, Orçamento e Gestão. <strong> Padrão de Trabalho de Modelagem de Processos: Escritório de Processos.</strong> 2007. Disponível em: <a href="http://editor.planejamento.gov.br/secretarias/upload/Arquivos/seges/081003_seges_arq_padrao.pdf/view" target="_blank">http://editor.planejamento.gov.br/secretarias/upload/Arquivos/seges/081003_seges_arq_padrao.pdf</a>. Acessado em: 07 de jun. de 2020.
                    </li>
                    <br>
                </ul>
            </div>

        </div>

        <br>
        <div class="center">
            <div class="btn-group" id="btn-group">
                <a href="Topico02.2.php" class="btn btn-outline-success btn-sm ">Página Anterior</a>
                <a href="#" class="btn btn-outline-success btn-sm">Avaliação</a>
            </div>
        </div>

        <!-- SCRIPT LIGHTBOX -->
        <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });                    
                </script>

    </div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>