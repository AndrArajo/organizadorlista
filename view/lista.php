<html>
    <head>
        <title> Organizador de Lista </title>
        <link rel="stylesheet" href="./public/css/estilo.css"/>
    </head>
    <body>
        <header class="header">
            <h1> Organizador de Lista </h1>
        </header>
        <div class="esquerda">
            <h2> Insira a baixo os itens que deseja organizar em ordem alfabética </h2>
            <form id="formadc">
                <label> Item: </label>
                <input type="text" id="item"/>
                <button> Adicionar </button>
            </form>
            <br/>
            <div class="tabela">
                <table id="tabelaItens" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Item </th>
                        </tr>
                    </thead>
                    <tbody id="itenstabela">
                    </tbody>
                </table>
            </div>
            <div>
                <button type="button" onclick="organizar()">Organizar</button>
                <button onclick="limpar()">Limpar</button>
            </div>
        </div>
        <div class="direita">
            <h2> Itens Organizados </h2>
            <div class="tabela">
                <table id="tabelaItensOrganizados" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Item </th>
                        </tr>
                    </thead>
                    <tbody id="itenstabelaorganizada">
                    </tbody>
                </table>
            </div>
        </div>
        <script src="./public/js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    </body>
</html>