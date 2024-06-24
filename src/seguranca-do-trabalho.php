<?php $titulo = 'Segurança do Trabalho - Preventiva'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<body class="page">
    <?php require_once ('head.php'); ?>
    <?php require_once ('header.php'); ?>
    <style>
        .bloco {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: space-between;
    height: auto;
    padding: 20px 30px;
    margin-bottom: 90px;
}

.botao-leia {
    background: #5484c2;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    width: fit-content;
}
    </style>

    <main>
        <div class="container py-5">
            <div class="text-center pb-5">
                <h1>Segurança do Trabalho</h1>
            </div>

            <div class="row">
                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>NR15 - LTCAT</h2>
                        <p>O LTCAT servirá de instrumento de apoio para a elaboração do PPRA - Programa de Prevenção de
                            Riscos Ambientais e do PPP - Perfil Profissiográfico Previdenciário.</p>
                    </div>

                    <a class="botao-leia" href="ltcat.php">Leia Mais</a>
                </div>

                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>NR 09 - PPRA</h2>
                        <p>De acordo com a NR 09, a implantação do PPRA é obrigatória para todos os empregadores e instituições que admitam trabalhadores como empregados. Não há que se levar em conta o grau de risco ou a quantidade de empregados.</p>
                    </div>
                    <a class="botao-leia" href="ppra.php">Leia Mais</a>
                </div>
                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>PPP</h2>
                        <p>O Perfil Profissiográfico Previdenciário (PPP) é um formulário a ser preenchido pelas empresas no ato da demissão do colaborador, assim pode o MPA verificar quais são os contribuintes que exerceram atividades que os expos a agentes nocivos químicos, físicos, biológicos ou a associação de agentes prejudiciais à sua saúde ou à sua integridade física (origem da concessão de aposentadoria especial após 15, 20 ou 25 anos de contribuição).</p>
                    </div>
                    <a class="botao-leia" href="ppp.php">Leia Mais</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>CIPA</h2>
                        <p>A Comissão Interna de Prevenção de Acidentes de Trabalho (CIPA) visa a proteção da saúde dos trabalhadores dentro das empresas, e está sua obrigatoriedade regulamentada pela Consolidação das Leis do Trabalho (CLT) nos artigos 162 a 165 e pela Norma Regulamentadora 5 (NR-5), contida na portaria 3.214 de 08.06.78 baixada pelo Ministério do Trabalho</p>
                    </div>
                    <a class="botao-leia" href="cipa.php">Leia Mais</a>
                </div>


                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>NR 20 LÍQUIDOS COMBUSTÍVEIS E INFLAMÁVEIS</h2>
                        <p>20.1.1 Esta Norma Regulamentadora - NR estabelece requisitos mínimos para a gestão da segurança e saúde no trabalho contra os fatores de risco de acidentes provenientes das atividades de extração, produção, armazenamento, transferência, manuseio e manipulação de inflamáveis e líquidos combustíveis.</p>
                    </div>
                    <a class="botao-leia" href="nr20.php">Leia Mais</a>
                </div>


                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>PCMAT</h2>
                        <p>Este laudo estabelece diretrizes de ordem administrativa, de planejamento e de organização, que objetivam a implementação de procedimentos e normas de segurança detalhadas, bem como medidas de controle e sistemas preventivos de segurança nos processos, nas condições e no meio ambiente de trabalho na indústria da construção civil, visando prevenir acidentes e doenças ocupacionais nas condições e no ambiente de trabalho da indústria da construção civil, antecipando os riscos inerentes à atividade.</p>
                    </div>
                    <a class="botao-leia" href="pcmat.php">Leia Mais</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 bloco">
                    <div class="conteudo">
                        <h2>LAUDO ERGONÔMICO</h2>
                        <p>Em atendimento aos ditames da NR 17, é necessário adaptar o posto de trabalho e as ferramentas às necessidades do ser humano, com o objetivo de reduzir o stress físico nas articulações, músculos, nervos, tendões e ossos;  e também prevenir os distúrbios mentais, visuais, auditivos, entre outros.</p>
                    </div>
                    <a class="botao-leia" href="laudo-ergonomico.php">Leia Mais</a>
                </div>
            </div>

    </main>
    <?php include_once ('footer.php'); ?>
</body>

</html>