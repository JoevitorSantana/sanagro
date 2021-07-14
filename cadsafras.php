
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SanAgro | Safras</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/estilo-cadusers.css">
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body>    
<div id="interface">
    <header id="cabecalho">
    <h1>SanAgro</h1>
    
    <nav id="menu-superior">
        
        <ul type="disc">                        
            <li onmouseover="mudaFoto('imagens/symbolmapgreen.png')" onmouseout="mudaFoto('imagens/symbolmapwhite.png')"><a href="index2.html"><b>Mapa</b></a></li>
            <li onmouseover="mudaFoto1('imagens/symbolinfogreen.png')" onmouseout="mudaFoto1('imagens/symbolinfowhite.png')"><a><b>Informações Gerais</b></a></li>
            <li onmouseover="mudaFoto2('imagens/symbolusergreen.png')" onmouseout="mudaFoto2('imagens/symboluserwhite.png')"><a href="cadusers.html"><b>Usuários e Funcionários</b></a>
            <li onmouseover="mudaFoto3('imagens/symbolsafragreen.png')" onmouseout="mudaFoto3('imagens/symbolsafrawhite.png')"><a><b>Safras</b></a></li>
            <li onmouseover="mudaFoto4('imagens/symbolpatrimoniogreen.png')" onmouseout="mudaFoto4('imagens/symbolpatrimoniowhite.png')"><a href="cadpatrimonio.html"><b>Patrimônio</b></a></li>
            <li onmouseover="mudaFoto5('imagens/symbolestoquegreen.png')" onmouseout="mudaFoto5('imagens/symbolestoquewhite.png')"><a href="cadinsumos.html"><b>Estoque</b></a></li>
            <li onmouseover="mudaFoto6('imagens/symbolfinanceirogreen.png')" onmouseout="mudaFoto6('imagens/symbolfinanceirowhite.png')"><a href="financeiro.html"><b>Financeiro</b></a></li>
            <li onmouseover="mudaFoto7('imagens/symbolreportgreen.png')" onmouseout="mudaFoto7('imagens/symbolreportwhite.png')"><a><b>Relatórios</b></a></li>
        </ul>
        <img id="symbolmap" src="imagens/symbolmapwhite.png" alt="Símbolo mapa" onmouseover="mudaFoto('imagens/symbolmapgreen.png')" onmouseout="mudaFoto('imagens/symbolmapwhite.png')" >
        <img id="symboluser"src="imagens/symboluserwhite.png" alt="Simbolo Usuário" onmouseover="mudaFoto2('imagens/symbolusergreen.png')" onmouseout="mudaFoto2('imagens/symboluserwhite.png')">
        <img id="symbolinfo"src="imagens/symbolinfowhite.png" alt="Símbolo Info" onmouseover="mudaFoto1('imagens/symbolinfogreen.png')" onmouseout="mudaFoto1('imagens/symbolinfowhite.png')">
        <img id="symbolsafra"src="imagens/symbolsafrawhite.png" alt="Símbol Safra" onmouseover="mudaFoto3('imagens/symbolsafragreen.png')" onmouseout="mudaFoto3('imagens/symbolsafrawhite.png')">
        <img id="symbolpatrimonio"src="imagens/symbolpatrimoniowhite.png" alt="Símbolo patrimônio" onmouseover="mudaFoto4('imagens/symbolpatrimoniogreen.png')" onmouseout="mudaFoto4('imagens/symbolpatrimoniowhite.png')">
        <img id="symbolestoque"src="imagens/symbolestoquewhite.png" alt="Símbol Estoque" onmouseover="mudaFoto5('imagens/symbolestoquegreen.png')" onmouseout="mudaFoto5('imagens/symbolestoquewhite.png')">
        <img id="symbolfinanceiro"src="imagens/symbolfinanceirowhite.png" alt="Símbolo Financeiro">
        <img id="symbolrelatorio"src="imagens/symbolreportwhite.png" alt="Símbol Relatório" onmouseover="mudaFoto7('imagens/symbolreportgreen.png')" onmouseout="mudaFoto7('imagens/symbolreportwhite.png')">
    </nav>
    </header>
    <aside id="menu-lateral">
        <header>
            <h2>Cadastros</h2>
        </header>
        <section id="botoes">
            <li><a href="cadsafras.php"></a>Nova Safra</li>   
            <li><a href="cadcolheitas.php">Colheita</a></li>
        </section>            
    </aside>
    <aside id="right"> 
        <?php
            require "_php/conexao.php";
            $query = mysql_query("select ar_codigo, ar_nome, ar_area from area")
        ?>
        <form id="formuser" action="_php/cadsafra.php" method="POST">
            <header id="headerusers">
                <p><b>Cadastro de Safra</b></p>
            </header>
            <section id="body">
                <p>Código:<input type="number" id="cCod" name="tCod" size="6"min="0" max="99999"></p>
                <p>Nome da Safra:<input type="text" id="cNomeS" name="tNomeS" size="45"></p>
                <p><label for="tArea">Área:</label>
                    <select name="cArea" id="tArea">                        
                        <?php while($area = mysql_fetch_array($query)){?>
                        <option value="<?php echo $area['ar_codigo'] ?>"><?php echo $area['ar_nome']?></option>
                        <?php } ?>
                    </select>                    
                </p>              
                <p><label for="tCul">Cultura:</label>
                    <select name="cCul" id="tCul">
                        <option value="3">Soja</option>
                        <option value="2">Cana de Açúcar</option>
                        <option value="1">Algodão</option>
                        <option value="4">Milho</option>
                    </select>
                </p>                             
                <p>Data de Início:<input type="date" id="cDi" name="tDi" size="40"></p>
                <p>Data do Fim: <input type="date" id="cDf" name="tDf" size="20"></p>
                <input id="buttons" class="cad" type="submit" value="Cadastrar">
                <input id="buttons" type="submit" value="Editar">
                <input id="buttons" type="submit" value="Excluir">
            </section>
        </form>    
    </aside>    
    <footer id="rodape">      
        <p>Developed by Joevitor Sant'Ana</p>
        <p>Junho 2021</p>
    </footer>
</div>
</body>
</html>