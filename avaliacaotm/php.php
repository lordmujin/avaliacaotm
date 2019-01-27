<?php 
    
    $titulo = 'PHP - hypertext preprocessor';

    include 'includes/header.php' 
    
    ?>

<section id="rp">
    <h2>Tipos de dados</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>String</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Uma string é uma seqüência de caracteres, como "Hello world!". Uma string pode ser qualquer texto entre
                        aspas. Você pode usar aspas simples ou duplas:

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Integer</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Um tipo de dados inteiro é um número não decimal entre -2.147.483.648 e 2.147.483.647. Regras para números
                        inteiros: Um inteiro deve ter pelo menos um dígito Um inteiro não deve ter um ponto decimal Um inteiro
                        pode ser positivo ou negativo Os inteiros podem ser especificados em três formatos: decimal (baseado
                        em 10), hexadecimal (baseado em 16 - prefixado com 0x) ou octal (baseado em 8 - prefixado com 0)
                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Float </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Um float (número de ponto flutuante) é um número com um ponto decimal ou um número no formato exponencial.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Boolean</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Um booleano representa dois estados possíveis: true ou false.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Array</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Uma Array armazena vários valores em uma única variável.</p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Object</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Um objeto é um tipo de dados que armazena dados e informações sobre como processar esses dados. No PHP,
                        um objeto deve ser explicitamente declarado.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>NULL</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Nulo é um tipo de dados especial que pode ter apenas um valor: NULL. Uma variável do tipo de dados NULL
                        é uma variável que não tem valor atribuído a ela.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Resource</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>O tipo de recurso especial não é um tipo de dados real. É o armazenamento de uma referência a funções
                        e recursos externos ao PHP. Um exemplo comum de uso do tipo de dados de recurso é uma chamada de
                        banco de dados.

                    </p>
                </div>
            </div>
            <!-- ./box -->

        </div>
    </div>
</section>

<section id="md">
    <h2>Operadores</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores aritméticos</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores aritméticos do PHP são usados ​​com valores numéricos para executar operações aritméticas
                        comuns, como adição, subtração, multiplicação etc.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores de atribuição</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores de atribuição do PHP são usados ​​com valores numéricos para gravar um valor em uma variável.
                        O operador de atribuição básico no PHP é "=". Isso significa que o operando esquerdo é definido para
                        o valor da expressão de atribuição à direita.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores de comparação </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores de comparação do PHP são usados ​​para comparar dois valores (número ou string):

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores de incremento / decremento</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores de incremento PHP são usados ​​para incrementar o valor de uma variável. Os operadores
                        de decremento do PHP são usados ​​para decrementar o valor de uma variável.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores lógicos</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores lógicos PHP são usados ​​para combinar instruções condicionais.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores de String</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>PHP tem dois operadores que são especialmente projetados para seqüências de caracteres.

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Operadores de array</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>Os operadores da array PHP são usados ​​para comparar arrays.

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