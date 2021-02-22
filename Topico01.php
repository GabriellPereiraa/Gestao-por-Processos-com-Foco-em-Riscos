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
                <i class="fas fa-folder"></i> Tópico 1 – Gestão por Processos: Contextualização
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar por meio de um exemplo do cotidiano o link com a gestão de processos e evidenciar os principais conceitos que são utilizados na gestão de processos.</p>
            
            <hr class="hrLaranja">

            <p class="Texto">
                Antes de iniciar a discussão sobre o gerenciamento de processos, imagine que ontem foi um domingo e você, no início da noite, foi fazer um lanche em uma lanchonete. Ao chegar, você escolheu um local e sentou. Logo em seguida, um garçom foi até você e mostrou o cardápio, para que fizesse a escolha do pedido. Após analisar as opções, você fez a escolha por um hambúrguer e um suco de laranja. O garçom anotou seu pedido e entregou na cozinha da lanchonete. Passados cinco minutos, o garçom retorna e informa que não será possível fazer o suco, porque não tem laranja, você então pede um suco de limão. Após trinta minutos, o garçom retorna à sua mesa e serve o lanche que você pediu. Você faz a refeição, chama o garçom e pede a conta. O garçom se dirige ao caixa da lanchonete, fecha a conta, entrega a você que realiza o pagamento e, em seguida, vai para casa. Após sua saída da lanchonete, o garçom vai limpar a mesa para o próximo cliente e percebe que no local em que você estava sentado há uma irregularidade no piso, que poderia ter ocasionado sua queda da cadeira ou pode vir a gerar a queda de um outro cliente. Ele chama então o gerente da lanchonete e juntos tiram aquela mesa e as cadeiras, a fim de que não ocorra nenhum acidente. Em seguida, o gerente questiona com o garçom o motivo do pedido ter demorado trinta e cinco minutos, uma vez que o padrão é o tempo de vinte minutos para o preparo dos lanches. O garçom explicou que o atraso ocorreu, devido à falta de laranjas que o levou a refazer o pedido.
            </p>

            <p class="Texto">
                Observe que para você fazer a refeição na lanchonete, várias pessoas precisaram realizar diversas atividades antes da sua chegada, durante sua permanência na lanchonete e após sua saída. Foi a partir do conjunto de atividades que foram realizadas que você conseguiu satisfazer sua necessidade de fazer um lanche. Essa situação é um excelente exemplo de processos e a partir dele o tema gestão de processos será desenvolvido.
            </p>

            <h3>1. Principais Conceitos Associados à Gestão de Processos</h3>
            <hr class="hrLaranja">

            <p class="Texto">
                Antes de abordar a gestão de processos, é preciso conhecer alguns conceitos que serão expostos a seguir.
            </p>

            <hr>
            <h3>Processo</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Outro conceito de processo é o apresentado na NBR ISO 9000 o qual apresenta processo como qualquer atividade, ou conjunto de atividades inter-relacionadas, que usam recursos para transformar insumos (entradas) em produtos (saídas). (NBR ISO 9000:2000, p.3).
            </p>

            <p class="Texto">
                Aqui foram expostos dois de vários conceitos existentes para processos. O objetivo não é se estender em evidenciar suas sutis diferenças, mas chamar à atenção para a convergência existente entre eles. Observe que ambos falam em atividades executadas para gerar um resultado ou produto. Nesse contexto, pode-se colocar um conceito genérico de processo como sendo um conjunto de atividades que são realizadas em uma sequência lógica para transformar insumos em um produto ou serviço que satisfaça uma necessidade, manifestada ou não.
            </p>

            <p class="Texto">
                Voltando ao exemplo da lanchonete, por meio da imagem 01, evidencia-se o conceito de processo.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Imagem 1:</strong> Ilustração do conceito de processo.</p>
                <a href="imagens/Imagem01.png" data-toggle="lightbox" data-footer="Ilustração do conceito de processo.">
                    <img class="img-fluid" src="imagens/Imagem01.png" alt="Alt_da_Imagem">
                </a>
            </div>

            <p class="Texto">
                Observe que ao chegar à lanchonete um garçom executou um conjunto de atividades e, em seguida, levou seu pedido para cozinha, momento em que outro conjunto de atividades foi realizado e, assim, sucessivamente. Em uma sequência lógica definida, atividades foram sendo realizadas até o pagamento da conta. Observe ainda que, mesmo após sua saída da lanchonete, outras atividades foram realizadas. Da mesma maneira, antes da sua chegada à lanchonete, atividades também já haviam sido realizadas, como por exemplo, a organização das mesas e das cadeiras para receber os clientes.
            </p>

            <p class="Texto">
                Dessa forma, fica fácil entender que algumas atividades estão diretamente ligadas ao serviço ou ao produto que está sendo ofertado. No entanto, existem outras atividades que, embora não estejam diretamente ligadas ao serviço ou produto que está sendo ofertado, são importantes e precisam ser realizadas.
            </p>

            <p class="Texto">
                Nesse contexto, os processos são classificados em:
            </p>

            <hr>
            <h3>Processos Finalísticos</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Contribuem diretamente para o cumprimento do propósito da instituição e agregam valor diretamente para o cliente, podendo ter interface direta com os mesmos, de maneira que qualquer problema no processo será percebido pelo usuário imediatamente.
            </p>

            <hr>
            <h3>Processos Gerenciais</h3>
            <hr class="hrLaranja">
            <p class="Texto">
                Coordenam os processos finalísticos e de apoio. São os processos cuja finalidade é promover a estruturação, avaliação e melhoria do funcionamento da organização, hoje e no futuro. Estes processos, assim como os de apoio, não agregam valor diretamente para os clientes, mas são necessários para assegurar que a instituição opere de acordo com seus objetivos e metas de desempenho.
            </p>

            <hr>
            <h3>Processos de Apoio</h3>
            <hr class="hrLaranja">
            <p class="Texto">
            Como o próprio nome sugere, dão suporte aos finalísticos, sendo necessários para subsidiar a execução dos mesmos. Nesse caso, a ocorrência de falhas não é percebida imediatamente pelo cliente, mas podem impactar no produto ou serviço final. Em outras palavras, são aqueles que prestam apoio ou são provedores de recursos aos demais processos da organização.
            </p>

            <p class="Texto">
            Os processos são ainda classificados por níveis. Ferreira (2013, p.17-18) mostra que, conforme o nível, os processos são classificados em:
            </p>

            <section id="Macroprocessos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Macroprocessos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Segundo Brasil (2007), macroprocessos são conjuntos de macroatividades, que podem ser desdobrados em grupos de processos, pelos quais a instituição cumpre o seu propósito, que devem estar alinhados aos objetivos de suas unidades organizacionais.
                                </p>

                                <h3>Fornecedor</h3>
                                <hr class="hrLaranja">
                                <p class="Texto">
                                    Indivíduo ou organização que fornece insumos para os processos de uma organização, que podem ser tanto informações ou orientações quanto prestação ou fornecimento de serviços e produtos.
                                </p>

                                <h3>Cliente</h3>
                                <hr class="hrLaranja">
                                <p class="Texto">
                                    Pessoas físicas e/ou jurídicas (públicas ou privadas) que demandam ou utilizam diretamente serviços ou produtos fornecidos por uma organização.
                                </p>
                                <p class="Texto">
                                    No caso das organizações públicas, os clientes são geralmente conhecidos ou denominados como usuários. Os clientes ou usuários que demandam ou utilizam serviços finalísticos da organização são denominados clientes externos, ao passo que os membros ou segmentos da organização que utilizam os resultados parciais de processos internos (subprodutos ou serviços intermediários) como insumo em outro processo de natureza interna são chamados clientes internos. Em se tratando de uma unidade prestadora de serviços dentro da organização, aquelas que recorrem aos seus serviços/produtos também são chamadas de clientes internos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="Processos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3>Processos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os processos, como já explicitado, podem ser definidos como conjuntos de atividades interrelacionadas ou interativas que transformam insumos (entradas) em produtos ou serviços (saídas), que têm valor para um grupo específico de clientes ou usuários.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="Subprocessos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <h3>Subprocessos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os subprocessos são conjuntos de atividades necessárias e suficientes para a execução dos processos. A quantidade de subprocessos depende da complexidade de cada processo.
                                </p>
                                <p class="Texto">
                                    Em um nível mais detalhado, as atividades de um subprocesso são desmembradas em tarefas.
                                </p>
                                <h3>Atividades</h3>
                                <hr class="hrLaranja">
                                <p class="Texto">
                                    As atividades são conjuntos de tarefas, com início e fim identificável, orientadas para a consecução dos objetivos definidos em cada etapa. O enfoque nesse caso é o que fazer como condição necessária para se alcançar o objetivo.
                                </p>

                                <h3>Tarefas</h3>
                                <hr class="hrLaranja">
                                <p class="Texto">
                                    Compreendem a sequência de passos para realizar uma atividade. Os passos geralmente envolvem explicações detalhadas sobre o como fazer, que fundamentam a construção ou definição de procedimentos.
                                </p>
                                <p class="Texto">
                                    Ao fazer uma análise da classificação dos processos por nível, observa-se que um conjunto de tarefas gera uma atividade, um conjunto de atividades gera um processo, um conjunto de processos gera um macroprocesso.
                                </p>
                                <p class="Texto">
                                    Apresentadas essas definições e classificações, é importante compreender que um processo é diferente de um setor da organização.
                                </p>
                                <p class="Texto">
                                    O setor é uma parte da estrutura organizacional responsável por executar um ou mais processos. Desta forma, um setor pode executar um processo em sua totalidade ou apenas uma parte do processo. Nesse sentido, ressalta-se que os processos são transversais, ou seja, eles passam por um ou mais setores até que tenham seu resultado (produto ou serviço) concluído.
                                </p>
                                <p class="Texto">
                                    Observe que no exemplo da lanchonete, da sua chegada até sua saída, vários setores trabalharam para que você tivesse sua necessidade atendida. Ao chegar o garçom (setor atendimento) anotou seu pedido. Em seguida, o cozinheiro (setor produção) preparou seu lanche. Após realizar a refeição, foi realizado o pagamento (setor contas a receber). Rapidamente, consegue-se identificar três setores que executaram atividades de um mesmo processo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.1.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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