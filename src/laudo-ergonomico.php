<?php $titulo = 'Laudo Ergonômico - Preventiva'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<body class="page">
    <?php require_once ('head.php'); ?>
    <?php require_once ('header.php'); ?>
    <style>
        .objetivos li{list-style-type: disc !important;}
    </style>
    <main>
        <div class="container py-5">

        <div class="text-center page-img">
                <img src="images/laudo.png" alt="logo laudo ergonomico">
            </div>

            <h1 class="page-title text-center my-4">Laudo Ergonômico</h1>

            <p>
            Conforme NR-17 da Portaria MTE 3214/78.
            </p>

            <p>
            Em atendimento aos ditames da NR 17, é necessário adaptar o posto de trabalho e as ferramentas às necessidades do ser humano, com o objetivo de reduzir o stress físico nas articulações, músculos, nervos, tendões e ossos;  e também prevenir os distúrbios mentais, visuais, auditivos, entre outros.
            </p>

            <p class="pb-0">
            O laudo deverá contemplar:
            </p>
            <ul class="objetivos">
    <li>Descrição da Organização Setorial</li>
    <li>Identificação das Funções Operacionais</li>
    <li>Análise das Atividades Desenvolvidas pelas Funções Operacionais quanto a aspectos Ergonômicos (Espaço Físico, Arranjo Físico, Posturas Assumidas, etc...)</li>
    <li>Interpretação dos Indicadores Ergonômicos</li>
    <li>Recomendações para correções de Condições Ergonômicas Adversas</li>
    <li>Emissão de Laudo Técnico e ART do Engº Responsável</li>
</ul>
        </div>

    </main>
    <?php include_once ('footer.php'); ?>
</body>

</html>