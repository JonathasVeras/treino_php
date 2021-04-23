<div class="container-fluid">
    <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3">
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Como declarar uma variável em PHP?</strong></h1>
                <br>
                $string = 'Olá mundo';
                <br>
                $inteiro = 10;
                <br>
                $real = 10.54;
                <br>
                $booleano = True;
                <br>
                <h1 class="h4"><strong>Operações matemáticas:</strong></h1>
                <br>
                Nada de diferente de outras linguagens, só lembrar que para elevar um número se faz: **
                <br>
                <h1 class="h4"><strong>Operações condicionais:</strong></h1>
                <p>Sintaxe:</p>
                <p>if(condição){</p>
                <p>____comando;</p>
                <p>}</p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Laços de repetição:</strong></h1>
                <p>O comando $i++ <u>(POR EXEMPLO)</u>, funciona aqui</p>
                <p>While:(Do-While é no mesmo esquema com ; no final do while())</p>
                while(condiçao){<br>
                ____comando;<br>
                }<br>
                <p>for: </p>
                for($i = 0; i < limite; $i++){<br>
                ____comando;<br>
                }<br>
                <p>foreach: </p>
                $lista = [0, 1, 2, 3, 4, 5, 6];
                foreach($lista as $j){<br>
                ____comando;<br>
                //Ele passa por cada elemento, atribuindo a J, o iteravel. <br>
                } <br>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Arrays:</strong></h1>
                <strong>função array:</strong><br>
                    $variavel = array(1, 2, 3...);<br>
                <strong>print array toda:</strong> <br>
                    print_r($variavel); <br> <br>
                <p>A array é uma lista e meio que um dicionário ao mesmo tempo, o que isso quer dizer?
                Quer dizer que posso escolher nomes para índice da seguinte maneira: 
                $variavel = array('A'=>1, 'B'=>2, 'C'=>3);
                </p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>A variável superglobal $_GET</strong></h1>
                <p>A variável superglobal $_GET recebe o conteúdo enviado pela URL, ou seja, o conteúdo digitado na barra de endereços do navegador.</p>
                <p>Para entender melhor basta olhar o arquivo 'index.php', mas no geral, o valor que é atribuido a $_GET se torna a página a ser carregada.
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-cols-1">
            <h1 class="h1" style="color: white;">Introdução a javascript</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Variáveis</strong></h1>
                <p>Para declarar uma variável de qualquer tipo no javascript basta fazer:
                var nome_variavel = algum_tipo_de_dado;</p>
                <strong>Estruturas condicionais: </strong> São iguais ao do PHP. <br>
                <strong>laços de repetição: </strong> Igual ao PHP sem o foreach. <br>
                <h1 class="h4"><strong>Arrays: </strong></h1>
                <p>var lista = ['a', 'b', 'c', 'd']; <br>
                acessando pelo indice: alert(lista[0]); //acessa o 'a' <br>
                <strong>acessando valores na lista: </strong> for(i in lista){} <br> <br>
                <strong>console.log("");</strong> <br>
                Exibe uma mensagem no console da aplicação/navegador.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">    
                <h1 class="h4"><strong>Funções</strong></h1> <br>
                funcion name_funcion(param1, param2...) <br>
                { <br>
                    comandos; <br>
                    return; <br>
                } <br>
                <br>
                <h1 class="h4"><strong>Eventos: </strong></h1> <br>
                *Pesquisar "eventos javascript lista" <br>
                <span>*Olhar o "script.js" dessa página.</span>
                <span>(<)button onclick="" type="button" class="btn btn-primary">clique aqui(<)/button></span> <br>
                <button onclick="mensagem()" type="button" class="btn btn-primary">clique aqui</button>
            </div>    
        </div>
        <div class="col">
            <div class="p-3 border bg-light">    
                <h1 class="h4"><strong>DOM</strong></h1> <br>
                <strong>Pegando elemento pela ID no JS:</strong> <br>
                var elemento = document.getElementById("ID") <br>
                <strong>Acessando o style atravez do elemento no js: </strong> <br>
                elemento.style.color = #FFFFFF; por exemplo <br>
                elemento.style.backgroundColor = #FFFFFF; por exemplo; <br>
                Se no CSS nós faziamos background-color, no JS fazemod backgroundColor. <br>
                <strong>DOM DE FATO</strong> <br>
                <p>Nós podemos fazer com que, por exemplo, um botão chame uma função, e nessa função
                eu altere elementos do html/css, exemplo:</p>
                <button type="button" class="btn btn-primary" onclick="mudarcor()">mudar cor da fonte abaixo</button> <br>
                <span id="mensagem">Aperte o botão e mude minha cor.</span>
            </div>    
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
            <h1 class="h4"><strong>Validação de formulário</strong></h1> <br>
            <span>Basicamente é o uso de DOM para checar se um formulário foi preenchido corretamente.</span> <br>
            <form>
                <input type="text" id="nome_form" placeholder="Nome aqui.">
                <button type="button" class="btn btn-primary" onclick="send_form()">Enviar nome</button>
            </form>
                
            </div>    
        </div>
    </div>
</div>