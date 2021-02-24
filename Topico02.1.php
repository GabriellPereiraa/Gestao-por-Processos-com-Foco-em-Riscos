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
            <h2 class="font-bold Cinza">
                <i class="fas fa-folder"></i> Tópico 2 – Gestão de Processos
            </h2>

            <hr class="hr4Cinza">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar a metodologia para manter e melhorar processos e a importância do gerenciamento de processos como ferramenta para o alcance da melhoria contínua.</p>
            
            <hr class="hrLaranja">

            <p class="Texto">
                Organizações existem para atender às necessidades de seus clientes. Dessa forma, os processos de uma organização devem ser gerenciados, buscando garantir o atendimento a essas necessidades
            </p>

            <p class="Texto">
                O gerenciamento de processos possui dois grandes pilares, o primeiro está relacionado a manter os processos sob controle, atingindo os resultados planejados para o atendimento das necessidades dos clientes. O segundo pilar diz respeito a melhorar os processos, isso quer dizer, otimizar os processos de forma a gerar um salto de qualidade nos resultados.

            </p>

            <h3>1. Gerenciamento para manter processos</h3>
            <hr class="hrLaranja">

            <p class="Texto">
                A partir de agora serão explicadas as etapas, que devem ser seguidas para implementação do gerenciamento para manter processos.
            </p>

            <hr>
            <h3>1.1 Identificar e classificar os processos</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Para gerenciar processos, o primeiro passo é identificar as necessidades dos clientes e a partir destas, identificar os processos finalísticos e de apoio, observando a criticidade dos mesmos.
            </p>

            <p class="Texto">
                Com base na definição e na classificação dos processos, é realizado o macroprocesso da organização, nele é listado, em uma sequência lógica, os processos finalísticos e de apoio da organização.
            </p>

            <hr>
            <h3>1.2 Definição de objetivos, metas e indicadores</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Para cada processo crítico, faz-se necessário definir objetivos, metas e indicador para posteriormente verificar-se se o processo está controlado.
            </p>
            <p class="Texto">
                Um objetivo é aquilo que se busca alcançar em um processo, o objetivo a ser definido precisa ser alinhado ao atendimento de uma necessidade do cliente. Esse é um ponto fundamental, pois, não levar em conta a necessidade dos clientes na definição dos objetivos, muito provavelmente, fará com que a organização aplique recursos para gerar um resultado, o qual não será percebido pelo cliente. Em outras palavras, investe-se em atividades que não agregam valor
            </p>
            <p class="Texto">
                Um objetivo precisa ser alcançado. Dessa forma, é preciso definir metas. Uma meta trata-se de um objetivo mensurável e com prazo para ser alcançado:
            </p>

            <div class="alert alert-success center" role="alert">
                META = OBJETIVO + VALOR + PRAZO
            </div>
            <p class="Texto">
                No exemplo da lanchonete, observe que o tempo padrão estabelecido para servir os lanches eram vinte minutos. O exemplo evidencia que, naquele processo, o tempo para servir o lanche era uma necessidade do cliente, sendo assim, foi estabelecido:
            </p>
            <p class="Texto">
                    <strong>Objetivo:</strong> tempo para o lanche ser servido ao cliente.
            </p>
            <p class="Texto">
                    <strong>Meta:</strong> 20 minutos.
            </p>
            <p class="Texto">
                    <strong>Prazo:</strong> imediato.
            </p>

            <p class="Texto">
                Nesse caso, o prazo é imediato, ou seja, sempre todos os lanches devem ser servidos em 20 minutos. Em algumas situações, pode ser dado um prazo para a meta ser alcançada. Por exemplo, a lanchonete poderia ter determinado que até dezembro todos os lanches deveriam ser servidos em vinte minutos. Ou seja, estaria sendo determinado um prazo até dezembro para a meta ser alcançada.
            </p>
            <p class="Texto">
                Por fim, estabelecidos o objetivo e a meta, é necessário definir um indicador para medir se a meta está sendo cumprida.
            </p>
            <p class="Texto">
                Indicador é instrumento de gestão essencial para o monitoramento e avaliação do desempenho dos objetivos. Descreve o que será medido, contemplando as dimensões eficiência, eficácia e efetividade
            </p>
            <p class="Texto">
                Um indicador bem definido precisa ser:
            </p>

            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Relevante:</strong> trata-se da importância do indicador;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Confiável:</strong> refere-se à qualidade do levantamento dos dados usados no seu cálculo;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Abrangente:</strong> amplitude da representatividade do objetivo;
            </p>

            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Compreensível:</strong> transparência na metodologia de construção do indicador;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Disponível:</strong> facilidade de acesso para coleta, estando disponível a tempo;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right" style="color:#4885AE"></i><strong> Rastreável:</strong> facilidade de identificação da origem dos dados, seu registro e manutenção.
            </p>

            <hr>
            <h3>1.3 Padronização do processo</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Padronizar o processo significa estabelecer a melhor maneira de executar as atividades e tarefas do processo, de forma a alcançar os resultados, otimizando os recursos e eliminando aquilo que não agrega valor.
            </p>
            <p class="Texto">
                A padronização dos processos se dá por meio dos fluxogramas de atividades e documentos de descrição de tarefas, também denominados de procedimento operacional ou instrução de trabalho.
            </p>

            <hr>
            <h3>1.4 Identificação dos riscos do processo</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Todo processo possui riscos, um risco refere-se a algo que pode acontecer e, caso aconteça, trará um impacto negativo ou positivo para o processo. Nesse contexto, quando se tem um problema durante o processo, estamos diante do algo (risco) que aconteceu e que trouxe um impacto negativo.

            </p>
            <p class="Texto">
                Voltando ao exemplo da lanchonete, o primeiro pedido era um suco de laranja e o garçom informou que não tinha laranja e, em seguida, o pedido foi alterado para um suco de limão. Nesse caso, faltar insumos para preparação dos lanches é um risco que pode ou não ocorrer. Quando ocorre, e o impacto é negativo, tem-se um problema. A falta da laranja fez com que a necessidade do cliente não fosse atendida em sua plenitude.
            </p>
            <p class="Texto">
                Os riscos devem ser identificados, classificados e gerenciados para evitar que problemas venham a acontecer. Ainda no exemplo da lanchonete, tem-se um risco que foi identificado e uma ação de controle foi realizada para evitar um problema. Observe que o garçom quando foi limpar a mesa identificou que havia uma irregularidade no piso, o que poderia ocasionar a queda de um cliente (risco), para evitar que o risco ocorresse e torna-se um problema, o garçom e o gerente retiram a mesa e as cadeiras daquele lugar. Ou seja, atuaram de forma a controlar o risco.
            </p>

            <hr>
            <h3>1.5 Monitoramento do processo</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Os processos precisam ser monitorados para verificar se as metas estão sendo alcançadas. O monitoramento é realizado por meio dos indicadores que devem ter uma frequência de medição e reuniões periódicas devem ser realizadas para tomada de decisão acerca dos processos.

            </p>
            <p class="Texto">
                Observe o exemplo da lanchonete que o gerente questiona o motivo do lanche ter sido servido em trinta e cinco minutos com o garçom, uma vez que a meta é servir os lanches em vinte minutos. O garçom explicou o motivo.
            </p>
            <p class="Texto">
                Nas situações em que as metas não são alcançadas, deve ser realizada uma análise, buscando identificar a causa do problema e, uma vez identificada, correções e a ações corretivas devem ser implementadas. Correção diz respeito a corrigir o problema, sem atuar na causa, ou seja, sem evitar que o problema volte a acontecer. No exemplo da lanchonete, a correção foi substituir a fruta do suco pelo limão, mas isso não garante que no futuro não falte novamente a laranja. Por outro lado, a ação corretiva tem por finalidade corrigir o problema de forma que ele não volte a acontecer pela mesma causa.
            </p>
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

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