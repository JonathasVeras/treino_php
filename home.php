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
    <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3">
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
    <div class="container-fluid">
        <div class="row row-cols-1">
            <h1 class="h1" style="color: white;">Introdução a Jquery</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Sintaxe básica: </strong></h1>
                $(seletor).ação(); <br> <br>
                <h1 class="h4"><strong>Checando se o documento está pronto: </strong></h1>
                $(function(){ <br>
                    <span style="color: green;">____#Coloca as coisas aqui;</span> <br>
                });
                <h1 class="h4"><strong>Fazendo uma utilização básica: </strong></h1>
                $(fuction(){ <br>
                ____$('button').click(function(){ <br>
                ________$('h1').hide(); <br>
                ____}); <br>
                }); <br>
                <h1 class="h4"><strong>Colocando em prática: </strong></h1>
                <button type="button" class="btn btn-primary" id="jqueryButton1">Sumir span</button>
                <button type="button" class="btn btn-primary" id="jqueryButton2">span red</button>
                <button type="button" class="btn btn-primary" id="jqueryButton3">show span</button> <br>
                <span id="teste">Olá, sou um span</span>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>FadeOut, FadeIn e delay: </strong></h1>
                <button type="button" class="btn btn-primary" id="buttonFadeOut">Com fadeOut e fadeIn</button>
                <button type="button" class="btn btn-primary" id="buttonSemFadeOut">Sem fadeOut e fadeIn</button> <br>
                <span id="testeFadeOut">Olá mundo</span> <br>
                $('#buttonFadeOut').click(function() <br>
                { <br>
                ____$('#testeFadeOut').fadeOut('slow'); //Pode colocar valores numericos como no delay <br> 
                ____$('#testeFadeOut').delay(2000); <br>
                ____$('#testeFadeOut').fadeIn('slow'); <br>
                }); <br>
                $('#buttonSemFadeOut').click(function() <br>
                { <br>
                ____$('#testeFadeOut').hide(); <br>
                }); <br>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Mensagens gravadas: </strong></h1>
                <button type="button", class="btn btn-primary" id="msg_gravada">aperte aqui</button>
                <span id="surgimento"></span> <br>
                Forma feita: <br>
                $('#msg_gravada').click(function() <br>
                { <br>
                ____$('#surgimento').text(' Olá, eu nasci'); <br>
                }); <br>
                <h1 class="h4"><strong>Encadeamento em boloco</strong></h1>
                ao invés de chamar o seletor toda vez que vá modificar ele, pode fazer assim: <br>
                $('#msg_gravada').click(function() <br>
                { <br>
                ____$('#surgimento').text(' Olá, eu nasci').css('border', '2px solid green'); <br>
                }); <br>
                <h1 class="h4"><strong>Declaração multipla de CSS:</strong></h1>
                Já foi visto que para modificar o CSS através do Jquery é usando o .css('elemento','caracteristica'),
                porém foi visto chamando cada elemento por vez, agora veremos como é colocar tudo em uma mesma chamada: <br>
                ____$('#surgimento').text(' Olá, eu nasci').css({border: '2px solid green', color: 'blue'}); <br>
                <strong>lembra muito um dicionário em Python</strong>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Adicionando e removendo classes:</strong></h1>
                <button type="button" class="btn btn-primary" id="botao_class">botão</button> <br>
                <span id="span_class">Olá, vou virar verde pela classe</span> <br>
                vamos criar uma classes chamada .green no nosso csss: <br>
                .green{ <br>
                ____background-color: green;
                } <br> =====================<br>
                E agora lá no jquery vamos adiciona-la na frase acima: <br>
                $('#botao_class').click(function() <br>
                { <br>
                ____$("#span_class").addClass('green').css({color: 'white'}); <br>
                }); <br> <br>  
                <span>para remover uma classe basta usar .removeClass('nome_da_classe')</span>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <h1 class="h4"><strong>Slideshow</strong></h1>
                <span><strong>usando bootstrap...</strong></span>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-cols-1">
            <h1 class="h1" style="color: white;">Bootstrap a +</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3">
        <div class="col">
            <div class="p-3 border bg-light">
            <h1 class="h4"><strong>Basicamente copiei do site do bootstrap "modals"</strong></h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>