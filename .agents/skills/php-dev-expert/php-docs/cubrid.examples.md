# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cubrid.examples.php

---

# Examples

A seguir está um exemplo simples que estabelece uma conexão entre o PHP e o CUBRID. Esta seção cobrirá os recursos mais básicos e notáveis. O código a seguir é necessário para conectar-se ao banco de dados CUBRID, o que significa que o CUBRID Server e o CUBRID Broker devem estar em execução.

O exemplo abaixo usa o banco de dados demodb como exemplo. Por padrão, ele é criado durante a instalação. Certifique-se de que ele foi criado.

**Exemplo #1 Exemplo de recuperação de dados**

```
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=euc-kr">
    </head>
    <body>
    <center>
    <table border=2>
    <?php
        /**
         * Define informações do servidor para conexão CUBRID. host_ip é o endereço
         * IP onde o CUBRID Broker está instalado (localhost neste
         * exemplo), e host_port é o número da porta do CUBRID Broker.
         * O número da porta é o padrão fornecido durante a instalação.
         * Para obter detalhes, consulte o "Guia do Administrador".
         */
        $host_ip = "localhost";
        $host_port = 33000;
        $db_name = "demodb";
        /**
         * Conecta ao servidor CUBRID. Não faz a conexão real, mas
         * apenas retém as informações da conexão. A razão para não fazer
         * a conexão real é para lidar com transações com mais eficiência
         * na arquitetura de 3 camadas.
         */
        $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);

        if (!$cubrid_con) {
            echo "Erro de conexão com banco de dados";
            exit;
        }
    ?>
    <?php
        $sql = "select sports, count(players) as players from event group by sports";
        /**
         * Solicita ao CUBRID Server os resultados da instrução SQL.
         * Agora faz a conexão real com o CUBRID Server.
         */
        $result = cubrid_execute($cubrid_con, $sql);

        if ($result) {
            /**
             * Obtém os nomes das colunas do conjunto de resultados criado pela consulta SQL.
             */
            $columns = cubrid_column_names($result);
            /**
             * Obtém o número de colunas no conjunto de resultados criado pela consulta SQL.
             */
            $num_fields = cubrid_num_cols($result);
            /**
             * Lista os nomes das colunas do conjunto de resultados na tela.
             */
            echo "<tr>";

            while (list($key, $colname) = each($columns)) {
                echo "<td align=center>$colname</td>";
            }

            echo "</tr>";

            /**
             * Obtém os resultados do conjunto de resultados.
             */
            while ($row = cubrid_fetch($result)) {
                echo "<tr>";

                for ($i = 0; $i < $num_fields; $i++) {
                    echo "<td align=center>";
                    echo $row[$i];
                    echo "</td>";
                }

                echo "</tr>";
            }
        }
        /**
         * O módulo PHP no CUBRID é executado em uma arquitetura de 3 camadas. Mesmo ao
         * chamar SELECT para processamento da transação, ela é processada como parte
         * da transação. Portanto, a transação precisa ser revertida
         * chamando-se commit ou rollback mesmo que SELECT tenha sido chamado, para obter um desempenho
         * suave.
         */
        cubrid_commit($cubrid_con);
        cubrid_disconnect($cubrid_con);
    ?>
    </body>
    </html>
```

**Exemplo #2 Exemplo de inserção de dados**

```
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=euc- kr">
    </head>
    <body>
    <center>
    <table border=2>
    <?php
        /**
         * host_ip é o endereço IP onde o CUBRID Broker está instalado
         * host_port é o número da porta do CUBRID Broker
         * db_name é o nome do banco de dados CUBRID
         */
        $host_ip = "localhost";
        $host_port = 33000;
        $db_name = "demodb";
        $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);

        if (!$cubrid_con) {
            echo "Erro de conexão com banco de dados";
            exit;
        }
    ?>
    <?php
        $sql = "insert into olympic (host_year,host_nation,host_city,"
            . "opening_date,closing_date) values (2008, 'China', 'Beijing',"
            . "to_date('08-08-2008','mm-dd- yyyy'),to_date('08-24-2008','mm-dd-yyyy')) ;";
        $result = cubrid_execute($cubrid_con, $sql);
        if ($result) {
            /**
             * Tratado com sucesso, então confirma.
             */
            cubrid_commit($cubrid_con);
            echo "Inserido com sucesso";
        } else {
            /**
             * Ocorreu um erro, então a mensagem de erro é exibida e a reversão é chamada.
             */
            echo cubrid_error_msg();
            cubrid_rollback($cubrid_con);
        }
        cubrid_disconnect($cubrid_con);
    ?>
    </body>
    </html>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
