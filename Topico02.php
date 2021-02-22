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
            <h2 class="font-bold Azul">
                <i class="fas fa-folder"></i> Tópico 2 – Gestão de Processos
            </h2>

            <hr class="hr4">

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
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Relevante:</strong> trata-se da importância do indicador;
            </p>
            <p class="Texto">
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Confiável:</strong> refere-se à qualidade do levantamento dos dados usados no seu cálculo;
            </p>
            <p class="Texto">
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Abrangente:</strong> amplitude da representatividade do objetivo;
            </p>

            <p class="Texto">
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Compreensível:</strong> transparência na metodologia de construção do indicador;
            </p>
            <p class="Texto">
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Disponível:</strong> facilidade de acesso para coleta, estando disponível a tempo;
            </p>
            <p class="Texto">
            <i class="far fa-dot-circle" style="color:#4885AE"></i><strong>Rastreável:</strong> facilidade de identificação da origem dos dados, seu registro e manutenção.
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
            
            <hr>
            <h3>2. Gerenciamento para melhorar processos</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                A melhoria contínua é algo inerente à gestão de processos. Nesse contexto, as organizações devem identificar quais processos precisam ser melhorados, buscando obter um salto de qualidade que mude o patamar dos resultados até então obtidos
            </p>
            <p class="Texto">
                Desse modo, o redesenho de processos apresenta-se como um método eficaz para obtenção de melhorias nos processos. A implantação de redesenhos de processos deve seguir uma metodologia composta de quatro fases: elaboração do projeto de redesenho, mapeamento do processo atual, análise do processo, redesenho do processo e detalhamento de tarefas.
            </p>

            <hr>
            <h3>2.1 Elaboração do projeto de redesenho</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Essa fase caracteriza-se pela escolha do processo que precisa ser aperfeiçoado. Após a definição do projeto, forma-se a equipe responsável pelo redesenho, que deve ser multidisciplinar. O procedimento seguinte é o levantamento das informações para elaboração do plano do projeto, que são: objetivo; alinhamento estratégico; premissas; diretrizes; papéis e responsabilidades; e cronograma.
            </p>
            <p class="Texto">
                De acordo com Santos; Arraes e Mendonça (2013, p. 10-11):
            </p>
            <p class="Texto">
                O objetivo diz respeito à motivação para realização do redesenho, geralmente é algo bem genérico, sobretudo porque ainda não houve análise para identificar aquilo que de fato é problema a ser solucionado.
            </p>
            <p class="Texto">
                O alinhamento estratégico evidencia o trabalho de redesenho a ser realizado com as diretrizes estratégicas do Governo. Convêm ressaltar a importância dessa etapa, visto que é a ligação existente entre a operação (processo) e os resultados (serviços) a serem entregues ao cidadão.
            </p>
            <p class="Texto">
                As premissas são situações assumidas como verdadeiras e que serão levadas em consideração para proposições de melhorias no decorrer do redesenho.
            </p>
            <p class="Texto">
                As diretrizes correspondem àquilo que deve nortear todas as proposições de melhoria nos processos. Dependendo dos resultados a serem alcançados, as diretrizes podem variar de um redesenho para outro.
            </p>
            <p class="Texto">
                Os papéis e responsabilidades dos membros da equipe de redesenho estão descritos no quadro a seguir.
            </p>

            <section id="quadroConteudo">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-ead">
                            <tr>
                                <th scope="col-3">
                                    <h5><strong>PAPÉIS</strong></h5>
                                </th>
                                <th scope="col-sm">
                                    <h5><strong>RESPONSABILIDADE</strong></h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        Patrocinador do Redesenho
                                    </p>
                                </td>
                                <td scope="col">
                                    <p>Estabelecer o direcionamento estratégico do projeto; </p>
                                    <p>apoiar o gerente do projeto nas ações necessárias ao redesenho; </p>
                                    <p>participar das reuniões de validação do processo; </p>
                                    <p>promover e assegurar o redesenho do processo.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Gerente do Projeto
                                    </p>
                                </td>
                                <td scope="col">
                                    <p>Atuar como ponto central de contato para toda a comunicação relacionada ao projeto;</p>
                                    <p>garantir a execução do plano do projeto;</p>
                                    <p>garantir a coleta e disponibilização das informações necessárias;</p>
                                    <p>monitorar o progresso do trabalho e articular as ações necessárias.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                    Gestor do Processo
                                    </p>
                                </td>
                                <td scope="col">
                                    <p>Participar das reuniões de redesenho e de validação; </p>
                                    <p>fornecer informações necessárias ao redesenho do processo;</p>
                                    <p>conduzir a implantação do redesenho do processo.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                    Equipe de Redesenho
                                    </p>
                                </td>
                                <td scope="col">
                                    <p>Realizar mapeamento e análise do processo atual;</p>
                                    <p>identificar e analisar pontos críticos, identificando soluções e propondo a melhoria do processo;</p>
                                    <p>elaborar a documentação do projeto e a revisão da legislação;</p>
                                    <p>identificar as condições necessárias para implementar o novo processo.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Facilitador das Oficinas de Redesenho
                                    </p>
                                </td>
                                <td scope="col">
                                    <p>Elaborar o plano do projeto;</p>
                                    <p>conduzir as reuniões de redesenho;</p>
                                    <p>coordenar a elaboração da documentação do projeto;</p>
                                    <p>elaborar e disponibilizar as atas das reuniões;</p>
                                    <p>manter a documentação do projeto atualizada.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
            </section>

            <p class="Texto">
                O cronograma, por sua vez, contém o planejamento das atividades do redesenho ao longo do tempo. Em média, leva-se de três a quatro meses para conclusão do projeto de redesenho de um processo.
            </p>
            <p class="Texto">
                Concluído o plano do projeto de redesenho, este é apresentado e validado para desenvolvimento.
            </p>
                
            <hr>
            <h3>2.2 Mapeamento do processo atual</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                O objetivo do mapeamento do processo atual é fazer um levantamento de como o processo é executado atualmente. Essa fase também é conhecida com “AS IS”, ou seja, "como é". Nessa fase do redesenho, também é feito o levantamento de toda a legislação aplicável ao processo e o levantamento dos indicadores que são utilizados atualmente para medir o processo.
            </p>
            <hr>
            <h3>2.3 Análise do processo atual</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Essa fase consiste no levantamento dos riscos e problemas existentes no processo, para em seguida analisá-los no sentido de propor ações para controle ou correção que farão parte das proposições de melhoria que serão consolidadas na fase seguinte do redesenho.
            </p>
            <hr>
            <h3>2.4 Redesenho do processo</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                O redesenho do processo é o momento em que as proposições de melhoria são propostas em um novo fluxograma de processo. Aqui, as correções de problemas e os controles são apresentados. Ainda nessa fase, são propostos novos indicadores para monitoramento do processo e é elaborado um plano de implantação, contendo as ações que devem ser realizadas para implementar o processo redesenhado.
            </p>
            <p class="Texto">
                Por fim, é realizado o detalhamento das atividades em tarefas, de forma a explicar a execução das tarefas e deixar o processo totalmente padronizado. O detalhamento pode ser realizado por meio de procedimento operacional ou instrução de trabalho, como também de forma descritiva associada a desenhos de fluxogramas.
            </p>

            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">Para complementar seu estudo sobre a metodologia para a implantação de redesenhos de processos e suas quatro fases, acesse o artigo “Redesenho de processos: a experiência do estado do Ceará em prover melhoria na gestão”, escrito por Ricardo Ribeiro Santos; Vanessa Machado Arraes e Aline Barbosa Mendonça, na Biblioteca do curso.</p>
            </div>
            <br>

            <hr>
            <h3>Considerações finais</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Nesta aula, foi possível evidenciar um modelo de gestão de processos que busca a partir das necessidades dos clientes, desenvolver as atividades dos processos de forma que o produto ou serviço entregue ao cliente, seja capaz de satisfazer tais necessidades.
            </p>
            <p class="Texto">
                As rotinas de manter processos controlados e melhorá-los, quando oportuno, fazem com que a organização esteja sempre num movimento de melhoria contínua, obtendo resultados que consolidam o atendimento às necessidades dos clientes.
            </p>
            
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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