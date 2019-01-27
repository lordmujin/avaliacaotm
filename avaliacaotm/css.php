<?php 
    
    $titulo = 'CSS - cascading style sheets';

    include 'includes/header.php' 
    
    ?>

<section id="rp">
    <h2>Seletores basicos</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Seletores de tipo</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor de tipo CSS corresponde a elementos por nome de nó. Em outras palavras, ele seleciona todos
                        os elementos do tipo determinado dentro de um documento.</p>
                    <br>
                    <p>
                        <b>elemento {
                            <br>&nbsp;&nbsp;estilo
                            <br> }</b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Seletores de classe</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor de tipo CSS corresponde a elementos por nome de nó. Em outras palavras, ele seleciona todos
                        os elementos do tipo determinado dentro de um documento.</p>
                    <br>
                    <p>
                        <b>.nomeclass {
                            <br>&nbsp;&nbsp;estilo
                            <br> }</b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Seletores de ID</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor de ID CSS corresponde a um elemento com base no valor de seu idatributo. Para que o elemento
                        seja selecionado, seu IDatributo deve corresponder exatamente ao valor fornecido no seletor.</p>
                    <br>
                    <p>
                        <b>.nomeid {
                            <br>&nbsp;&nbsp;estilo
                            <br> }</b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Seletores universais</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor universal CSS ( *) corresponde a elementos de qualquer tipo.</p>
                    <br>
                    <p>
                        <b>* {
                            <br>&nbsp;&nbsp;estilo
                            <br> }</b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Seletores de atributo</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor de atributos CSS corresponde a elementos com base na presença ou no valor de um determinado
                        atributo.
                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<section id="md">
    <h2>Combinadores</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Combinador irmão adjacente (+)</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O combinador irmão adjacente (+) separa dois seletores e corresponde ao segundo elemento somente se ele
                        seguir imediatamente o primeiro elemento, e ambos são filhos do mesmo pai.</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Combinador de irmãos comum (~)</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O combinador irmão comum (~) separa dois seletores e corresponde ao segundo elemento somente se seguir
                        o primeiro elemento (embora não necessariamente imediatamente), e ambos são filhos do mesmo elemento
                        pai .</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Combinador de filhos (>)</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O combinador filho (>) é colocado entre dois seletores CSS. Ele corresponde apenas aos elementos correspondidos
                        pelo segundo seletor que são os filhos dos elementos correspondidos pelo primeiro.</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Combinador descendente ()</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O combinador descendente - normalmente representado por um único caractere de espaço ( ) - combina dois
                        seletores, de modo que os elementos correspondidos pelo segundo seletor sejam selecionados se tiverem
                        um elemento ancestral correspondente ao primeiro seletor. Seletores que utilizam um combinador descendente
                        são chamados de seletores descendentes .</p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<section id="rs">
    <h2>Pseudo classes</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:active</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS representa um elemento (como um botão) que está sendo ativado pelo usuário. :active
                        Ao usar um mouse, "ativação" geralmente começa quando o usuário pressiona o botão principal do mouse.</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:checked</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O seletor de pseudo-classes CSS representa qualquer elemento de rádio ( ), caixa de seleção ( ) ou opção
                        ( em um ) que é marcado ou alternado para um estado.:checked</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:disabled</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS representa qualquer elemento desativado. Um elemento é desativado se não puder ser
                        ativado (selecionado, clicado, digitado etc.) ou aceitar o foco. O elemento também possui um estado
                        habilitado, no qual ele pode ser ativado ou aceitar o foco.:disabled</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:empty</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS representa qualquer elemento que não tenha filhos. As crianças podem ser nós de elemento
                        ou texto (incluindo espaço em branco). Comentários ou instruções de processamento não afetam se um
                        elemento é considerado vazio.:empty</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:first-child</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS representa o primeiro elemento entre um grupo de elementos irmãos.:first-child</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:focus</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS representa um elemento (como uma entrada de formulário) que recebeu foco. Geralmente
                        é acionado quando o usuário clica ou toca em um elemento ou o seleciona com a tecla "tab" do teclado.:focus

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:hover</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo classe CSS corresponde quando o usuário interage com um elemento com um dispositivo apontador,
                        mas não necessariamente o ativa. Geralmente, é acionado quando o usuário passa por cima de um elemento
                        com o cursor (ponteiro do mouse).:hover

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>:nth-child</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A pseudo-classe CSS combina elementos com base em sua posição em um grupo de irmãos.:nth-child()

                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<section id="cw">
    <h2>Pseudo elementos</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>::after</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>
                        Em CSS, ::after cria um pseudoelemento que é o último filho do elemento selecionado. É frequentemente usado para adicionar
                        conteúdo cosmético a um elemento com a contentpropriedade. É inline por padrão.
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>::before</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>
                        Em CSS, ::before cria um pseudoelemento que é o primeiro filho do elemento selecionado. É frequentemente usado para adicionar
                        conteúdo cosmético a um elemento com a contentpropriedade. É inline por padrão.
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>::selection</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>
                        O pseudoelemento ::selection CSS aplica estilos à parte de um documento que foi realçada pelo usuário (como clicar e arrastar
                        o mouse pelo texto).

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>::slotted</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>
                        O pseudoelemento CSS representa qualquer elemento que tenha sido colocado em um slot dentro de um modelo HTML (consulte Usando
                        modelos e slots para obter mais informações).::slotted()

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>::cue</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>
                        O pseudoelemento CSS corresponde a sugestões WebVTT dentro de um elemento selecionado. Isso pode ser usado para legendar
                        legendas e outras sugestões na mídia com faixas VTT.::cue

                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>


<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>