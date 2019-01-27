<?php 
    
    $titulo = 'MYSQL - my structured query language';
    include 'includes/header.php' 
    
    ?>

<section id="rp">
    <h2>Base de dados</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Create</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução CREATE DATABASE é usada para criar um novo banco de dados SQL.
                        <br>
                        <br>
                        <b>CREATE DATABASE databasename;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Drop</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução DROP DATABASE é usada para eliminar um banco de dados SQL existente.
                        <br>
                        <br>
                        <b>DROP DATABASE databasename;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Backup </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução BACKUP DATABASE é usada no SQL Server para criar um backup completo de um banco de dados
                        SQL existente.
                        <br>
                        <br>
                        <b>BACKUP DATABASE databasename TO DISK = 'filepath'; </b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<section id="md">
    <h2>Tabelas</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Create</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução CREATE TABLE é usada para criar uma nova tabela em um banco de dados.
                        <br>
                        <br>
                        <b>CREATE TABLE table_name (...);</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Drop</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução DROP TABLE é usada para descartar uma tabela existente em um banco de dados.
                        <br>
                        <br>
                        <b>DROP TABLE table_name;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Alter </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução ALTER TABLE é usada para adicionar, excluir ou modificar colunas em uma tabela existente.
                        A instrução ALTER TABLE também é usada para adicionar e eliminar várias restrições em uma tabela existente.
                        <br>
                        <br>
                        <b>ALTER TABLE table_name ADD column_name datatype;
                        </b>
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