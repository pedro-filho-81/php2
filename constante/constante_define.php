<?php
        echo "<h2>Cria função: define()</h2>";

        echo "Use a função define() para criar uma constante. <br/>
                Ele define constante em tempo de execução. <br/>
                A sintaxe da função define() em PHP.</p>";
        
        echo "<h3>Sintax: define()</h3>";
         
        echo "<p><mark>define(NOmE, valor, diferencia maiúsculas de minúsculas)</mark><br/>
                <strong>NOmE: </strong>Ele especifica o nome da constante. <br/>
                <strong>valor: </strong>Ele especifica o valor constante. <br/>
                <strong>diferência maiúsculas de minúsculas: </strong></p>";
                
        echo "<p>Especifica se uma constante não diferencia maiúsculas de minúsculas. <br/>
                O valor padrão é <strong>false</strong>. <br/>
                Isso significa que ele diferência maiúsculas de minúsculas por padrão. <br/>
                O valor <strong>true</strong> não diferência e também é opcional.</p>";
        echo "<hr>";

        echo "<h4>Exemplo: constante1.php</h4>";
        echo "<strong>< ?php</strong>
                <p>// cria constantes
                <br/>define (\"NOmE\",\"Pedro\"); 
                <br/>define (\"PESO\",80); <br/>
                <br/>// exibi os valores das constantes
                <br/>echo \"O meu nome é \" . NOmE; 
                <br/>echo \"< br>\"; # pula linha
                <br/>echo \"O meu peso é \" . PESO . \" quilos\"; <br/>
                <br/><strong> ?></strong></p>";

        echo "<p><mark>Saida: </mark><br/>O meu nome é Pedro<br/>O meu peso é 80 quilos</p>";

        echo "<p>Outro recurso que utilizado no exemplo foi a <strong>concatenação</strong>, 
                representada pelo <strong>ponto (.)</strong>.<br/>
                Pode-se concatenar vários dados, e todos eles serão exibidos como uma sequência de caracteres.</p>";

        echo "<hr>";

    ?>