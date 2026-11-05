# Estatísticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.stats.php

---

# Estatísticas

O Driver Nativo MySQL contém suporte para coleta de estatísticas sobre a
comunicação entre o cliente e o servidor. As estatísticas
recolhidas são de dois tipos principais:

- Estatísticas de cliente
- Estatísticas de conexão

Ao usar a extensão [mysqli](book.mysqli.md), essas
estatísticas poderão ser obtidas através de duas chamadas de API:

- [mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md)
- [mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md)

> **Nota**:
>
> As estatísticas são agregadas entre todas as extensões que utilizam o Driver Nativo
> MySQL.
> Por exemplo, se a extensão [mysqli](book.mysqli.md)
> e o driver PDO MySQL estiverem ambos configurados para usar MySQLnd,
> as chamadas de função de [mysqli](book.mysqli.md) e
> chamadas de métodos do PDO afetarão as estatísticas.
>
> Não há como saber o quanto uma determinada chamada de API de qualquer extensão
> que tenha sido compilada contra o Driver Nativo MySQL tenha impactado uma determinada
> estatística.

## Obtendo estatísticas

Estatísticas do cliente podem ser obtidas chamando a função
[mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md)

Estatísticas de conexão podem ser obtidas chamando a função
[mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md).

Ambas as funções retornam um array associativo,
onde o nome da estatística é a chave para o dado estatístico
correspondente.

## Estatísticas do Driver Nativo MySQL

A maior parte das estatíticas são associadas a uma conexão mas algumas são associadas
ao processo, e neste caso isto será mencionado no texto.

As seguintes estatísticas são produzidas pelo Driver Nativo MySQL:

**Estatísticas Relacionadas à Rede**

`bytes_sent`
:   Número de bytes enviados do PHP para o servidor MySQL.

`bytes_received`
:   Número de bytes recebidos do servidor MySQL.

`packets_sent`
:   Número de pacotes enviados pelo protocolo Cliente Servidor do MySQL.

`packets_received`
:   Número de pacotes recebidos pelo protocolo Cliente Servidor do MySQL.

`protocol_overhead_in`
:   Sobrecarga do protocolo Cliente Servidor do MySQL em bytes para o tráfego de entrada.
    Atualmente apenas o Cabeçalho do Pacote (4 bytes) é considerado como sobrecarga.
    `protocol_overhead_in = packets_received * 4`

`protocol_overhead_out`
:   Sobrecarga do protocolo Cliente Servidor do MySQL em bytes para o tráfego de saída.
    Atualmente apenas o Cabeçalho do Pacote (4 bytes) é considerado como sobrecarga.
    `protocol_overhead_out = packets_received * 4`

`bytes_received_ok_packet`
:   Tamanho total em bytes de pacotes OK recebidos pelo protocolo Cliente Servidor do MySQL.
    Pacotes OK podem conter uma mensagem de status.
    O comprimento da mensagem de status pode variar e portanto o tamanho de um
    pacote OK não é fixo.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_ok`
:   Número de pacotes OK recebidos pelo protocolo Cliente Servidor do MySQL.

`bytes_received_eof_packet`
:   Tamanho total em bytes de pacotes EOF recebidos pelo protocolo Cliente Servidor do MySQL.
    EOF pode variar em tamanho dependendo da versão do servidor.
    Além disso, EOF pode transportar uma mensagem de erro.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_eof`
:   Número de pacotes EOF recebidos pelo protocolo Cliente Servidor do MySQL.

    Como acontece com outras estatísticas de pacotes, o número de pacotes será
    incrementado mesmo se o PHP não receber o pacote esperado mas,
    por exemplo, receber uma mensagem de erro.

`bytes_received_rset_header_packet`
:   Tamanho total em bytes dos pacotes de cabeçalho do conjunto de resultados
    recebido pelo protocolo Cliente Servidor do MySQL.
    O tamanho dos pacotes varia dependendo da carga
    (`LOAD LOCAL INFILE`, `INSERT`,
    `UPDATE`, `SELECT`, mensagem de erro).

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_rset_header`
:   Número de pacotes de cabeçalho de conjunto de resultados recebidos pelo protocolo Cliente Servidor do MySQL.

`bytes_received_rset_field_meta_packet`
:   Tamanho total em bytes de pacotes de metadados (informação de campo) de conjunto de resultados
    recebidos pelo protocolo Cliente Servidor do MySQL.
    É evidente que o tamanho varia com os campos no conjunto de resultados.
    O pacotes também pode transportar um pacote de erro ou de EOF em caso de
    COM\_LIST\_FIELDS.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_rset_field_meta`
:   Número de pacotesde metadados (informação de campo) de conjunto de resultados
    recebidos pelo protocolo Cliente Servidor do MySQL.

`bytes_received_rset_row_packet`
:   Tamanho total em bytes dos pacotes de dados de registros do conjunto de resultados
    recebidos pelo protocolo Cliente Servidor do MySQL.
    O pacote também pode transportar uma mensagem de erro ou de EOF.
    Pode-se computar o número de pacotes de erro e de EOF subtraindo-se
    `rows_fetched_from_server_normal`
    e `rows_fetched_from_server_ps`
    de `bytes_received_rset_row_packet`.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_rset_row`
:   Número de pacotes de dados de registros do conjunto de resultados recebidos pelo protocolo Cliente Servidor do MySQL.

`bytes_received_prepare_response_packet`
:   Tamanho total em bytes dos pacotes de Inicialização OK para Instruções Preparadas (pacotes de
    inicialização de instrução preparada) recebidos pelo protocolo Cliente Servidor do MySQL.
    O pacote também pode transportar um erro.
    O tamanho do pacote depende da versão MySQL.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_prepare_response`
:   Número de pacotes de inicialização de instruções preparadas recebidos
    pelo protocolo Cliente Servidor do MySQL.

`bytes_received_change_user_packet`
:   Tamanho total em bytes de pacotes COM\_CHANGE\_USER recebidos pelo protocolo Cliente Servidor do MySQL.
    O pacote também pode transportar um erro ou um EOF.

    > **Nota**:
    >
    > O tamanho total em bytes inclui o tamanho do pacote de cabeçalho.
    > (4 bytes, consulte sobre sobrecarga do protocolo)

`packets_received_change_user`
:   Número de pacotes COM\_CHANGE\_USER recebidos pelo protocolo Cliente Servidor do MySQL.

`packets_sent_command`
:   Número de comandos do protocolo Cliente Servidor do MySQL enviados pelo PHP ao MySQL.

    Não há como saber quais foram os comandos específicos e quantos deles
    foram enviados.

`bytes_received_real_data_normal`
:   Número de bytes dos dados reais buscados pelo cliente PHP vindos do
    `mysqlnd` usando o protocolo de texto.

    Este é o tamanho dos dados reais contidos nos conjuntos de resultados que não
    se originaram de instruções preparadas e que foram buscados pelo cliente PHP.

    Observe que embora um conjunto de resultados completo possa ter sido puxado do MySQL
    pelo `mysqlnd`, esta estatística apenas conta dados reais
    puxados a partir do `mysqlnd` pelo cliente PHP.

    A seguir é apresentado um exemplo de sequência de código que irá incrementar o valor:

    ```
    $mysqli = new mysqli();
    $res = $mysqli->query("SELECT 'abc'");
    $res->fetch_assoc();
    $res->close();
    ```

    Cada operação de busca irá incrementar o valor.

    Entretanto, a estatística não será incrementada se o conjunto de resultados estiver sujeito
    a buffer no lado do cliente mas não for buscado, como no exemplo a seguir:

    ```
    $mysqli = new mysqli();
    $res = $mysqli->query("SELECT 'abc'");
    $res->close();
    ```

`bytes_received_real_data_ps`
:   Número de bytes dos dados reais buscados pelo cliente PHP vindos do
    `mysqlnd` usando o protocolo de instruções preparadas.

    Este é o tamanho dos dados reais contidos nos conjuntos de resultados que
    se originaram de instruções preparadas e que foram buscados pelo cliente PHP.

    O valor não será incrementado se o conjunto de resultados não for subsequentemente lido pelo cliente PHP.

    Observe que embora um conjunto de resultados completo possa ter sido puxado do MySQL
    pelo `mysqlnd`, esta estatística apenas conta dados reais
    puxados a partir do `mysqlnd` pelo cliente PHP.

    Consulte também `bytes_received_real_data_normal`.

**Estatísticas Relacionadas ao Conjunto de Resultados**

`result_set_queries`
:   Número de consultas que geraram um conjunto de resultados.
    Exemplos de consultas que geram um conjunto de resultados:
    `SELECT`, `SHOW`.

    A estatística não será incrementada se ocorrer um erro ao ler
    o pacote de cabeçalho do conjunto de resultados.

    > **Nota**:
    >
    > Esta estatística pode ser usada como uma medição indireta do número de
    > consultas que o PHP enviou ao MySQL.
    > Isto pode ajudar a identificar um cliente que causa uma carga alta no banco de dados.

`non_result_set_queries`
:   Número de consultas que não geraram um conjunto de resultados.
    Exemplos de consultas que não geram um conjunto de resultados:
    `INSERT`, `UPDATE`, `LOAD DATA`.

    A estatística não será incrementada se ocorrer um erro ao ler
    o pacote de cabeçalho do conjunto de resultados.

    > **Nota**:
    >
    > Esta estatística pode ser usada como uma medição indireta do número de
    > consultas que o PHP enviou ao MySQL.
    > Isto pode ajudar a identificar um cliente que causa uma carga alta no banco de dados.

`no_index_used`
:   Número de consultas que geraram um conjunto de resultados mas não usaram um índice.
    (Consulte também a opção de início do mysqld `--log-queries-not-using-indexes`).

    > **Nota**:
    >
    > Essas consultas podem ser reportadas através de uma exceção com
    > `mysqli_report(MYSQLI_REPORT_INDEX);`.
    > É possível reportá-las também através de um alerta com
    > `mysqli_report(MYSQLI_REPORT_INDEX ^ MYSQLI_REPORT_STRICT);`.

`bad_index_used`
:   Número de consultas que geraram um conjunto de resultados e não usaram um índice bom.
    (Consulte também a opção de início do mysqld `--log-slow-queries`).

    > **Nota**:
    >
    > Essas consultas podem ser reportadas através de uma exceção com
    > `mysqli_report(MYSQLI_REPORT_INDEX);`.
    > É possível reportá-las também através de um alerta com
    > `mysqli_report(MYSQLI_REPORT_INDEX ^ MYSQLI_REPORT_STRICT);`.

`slow_queries`
:   Instruções SQL que levaram mais de `long_query_time`
    segundos para execução e requereram que pelo menos
    `min_examined_row_limit` registros fossem examinados.

    **Cuidado**

    Não reportada através de [mysqli\_report()](function.mysqli-report.md).

`buffered_sets`
:   Número de conjuntos de resultados em buffer retornados por consultas
    normais (isto é, não por via de instrução preparada).

    Exemplos de chamadas API que armazenarão conjuntos de resultados em buffer no cliente:
    [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md), [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md)

`unbuffered_sets`
:   Número de conjuntos de resultados sem buffer retornados por consultas
    normais (isto é, não por via de instrução preparada).

    Exemplos de chamadas API que não armazenarão conjuntos de resultados em buffer no cliente:
    [mysqli\_use\_result()](mysqli.use-result.md)

`ps_buffered_sets`
:   Número de conjuntos de resultados em buffer retornados por instruções preparadas.

    Exemplos de chamadas API que armazenarão conjuntos de resultados em buffer no cliente:
    [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md)

`ps_unbuffered_sets`
:   Número de conjuntos de resultados sem buffer retornados por instruções preparadas.

    Por padrão, instruções preparadas não são armazenadas em buffer,
    portanto a maioria das instruções preparadas será considerada nesta estatísitica.

`flushed_normal_sets`
:   Número de conjuntos de resultados retornados por consultas
    normais (isto é, não por via de instrução preparada)
    com dados não lidos que foram silenciosamente descarregados.

    > **Nota**:
    >
    > Os descarregamento ocorre somente com conjuntos de resultados sem buffer.
    >
    > Conjuntos de resultados sem buffer devem ser buscados integralmente antes que uma nova consulta possa
    > ser executada na conexão, caso contrário o MySQL lançará um erro.
    > Se a aplicação não buscar todos os registros de um conjunto de resultados sem buffer,
    > o mysqlnd não busca implicitamente o conjunto de resultados para limpar a linha de dados.
    >
    > Consulta também `rows_skipped_normal`, `rows_skipped_ps`.
    >
    > Algumas causas possíveis para um descarregamento implícito:
    >
    > - Aplicação cliente com falhas
    > - Cliente parou de ler depois de ter encontrado o que estava procurando
    >   mas fez o MySQL calcular mais registros que o necessário
    > - Aplicação cliente parou inesperadamente

`flushed_ps_sets`
:   Número de conjuntos de resultados de instruções preparadas
    com dados não lidos que foram silenciosamente descarregados.

    > **Nota**:
    >
    > Os descarregamento ocorre somente com conjuntos de resultados sem buffer.
    >
    > Conjuntos de resultados sem buffer devem ser buscados integralmente antes que uma nova consulta possa
    > ser executada na conexão, caso contrário o MySQL lançará um erro.
    > Se a aplicação não buscar todos os registros de um conjunto de resultados sem buffer,
    > o mysqlnd não busca implicitamente o conjunto de resultados para limpar a linha de dados.
    >
    > Consulta também `rows_skipped_normal`, `rows_skipped_ps`.
    >
    > Algumas causas possíveis para um descarregamento implícito:
    >
    > - Aplicação cliente com falhas
    > - Cliente parou de ler depois de ter encontrado o que estava procurando
    >   mas fez o MySQL calcular mais registros que o necessário
    > - Aplicação cliente parou inesperadamente

`ps_prepared_never_executed`
:   Número de intruções preparadas mas nunca executadas.

`ps_prepared_once_executed`
:   Número de intruções preparadas executadas apenas uma vez.

`rows_fetched_from_server_normal`

`rows_fetched_from_server_ps`
:   Número total de registros do conjunto de resultados buscados do servidor.
    Isto inclui os registros que não foram lidos pelo cliente mas
    foram buscados implicitamente devido a conjuntos de resultados sem buffer descarregados.

    Consulte também `packets_received_rset_row`.

`rows_buffered_from_client_normal`
:   Número total de registros em buffer originários de uma consulta normal.

    Este é o número de registros que foram buscados do MySQL e armazenados em buffer no cliente.

    Exemplos de consultas que irão armazenar resultados em buffer:

    - [mysqli\_query()](mysqli.query.md)
    - [mysqli\_store\_result()](mysqli.store-result.md)

`rows_buffered_from_client_ps`
:   O mesmo que `rows_buffered_from_client_normal`,
    porém para instruções preparadas.

`rows_fetched_from_client_normal_buffered`
:   Número total de registros buscados pelo cliente a partir de um conjunto de resultados em buffer
    criado por uma consulta normal.

`rows_fetched_from_client_ps_buffered`
:   Número total de registros buscados pelo cliente a partir de um conjunto de resultados em buffer
    criado por uma instrução preparada.

`rows_fetched_from_client_normal_unbuffered`
:   Número total de registros buscados pelo cliente a partir de um conjunto de resultados sem buffer
    criado por uma consulta normal.

`rows_fetched_from_client_ps_unbuffered`
:   Número total de registros buscados pelo cliente a partir de um conjunto de resultados sem buffer
    criado por uma instrução preparada.

`rows_fetched_from_client_ps_cursor`
:   Número total de registros buscados pelo cliente a partir de um cursor criado por uma
    instrução preparada.

`rows_skipped_normal`

`rows_skipped_ps`
:   Reservada para uso futuro (atualmente não suportada).

`copy_on_write_saved`

`copy_on_write_performed`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Com o mysqlnd, variáveis retornadas pelas extensões apontam para os
    buffers de resultados da rede interna do mysqlnd.
    Se os dados não foram modificados, os dados buscados são mantidos apenas uma vez na memória.
    Entretanto, qualquer modificação nos dados irá requerer que o mysqlnd realize
    uma operação de cópia-na-escrita.

`explicit_free_result`

`implicit_free_result`
:   Esta é uma estatística cujo escopo está no nível de conexão e de processo.

    Número total de conjuntos de resultados liberados.

`proto_text_fetched_null`
:   Número total de colunas do tipo
    `MYSQL_TYPE_NULL`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_null`
:   Número total de colunas do tipo
    `MYSQL_TYPE_NULL`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_bit`
:   Número total de colunas do tipo
    `MYSQL_TYPE_BIT`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_bit`
:   Número total de colunas do tipo
    `MYSQL_TYPE_BIT`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_tinyint`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TINY`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_tinyint`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TINY`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_short`
:   Número total de colunas do tipo
    `MYSQL_TYPE_SHORT`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_short`
:   Número total de colunas do tipo
    `MYSQL_TYPE_SHORT`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_int24`
:   Número total de colunas do tipo
    `MYSQL_TYPE_INT24`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_int24`
:   Número total de colunas do tipo
    `MYSQL_TYPE_INT24`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_int`
:   Número total de colunas do tipo
    `MYSQL_TYPE_LONG`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_int`
:   Número total de colunas do tipo
    `MYSQL_TYPE_LONG`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_bigint`
:   Número total de colunas do tipo
    `MYSQL_TYPE_LONGLONG`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_bigint`
:   Número total de colunas do tipo
    `MYSQL_TYPE_LONGLONG`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_decimal`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_DECIMAL` ou `MYSQL_TYPE_NEWDECIMAL`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_decimal`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_DECIMAL` ou `MYSQL_TYPE_NEWDECIMAL`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_float`
:   Número total de colunas do tipo
    `MYSQL_TYPE_FLOAT`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_float`
:   Número total de colunas do tipo
    `MYSQL_TYPE_FLOAT`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_double`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DOUBLE`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_double`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DOUBLE`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_date`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DATE` ou `MYSQL_TYPE_NEWDATE`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_date`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DATE` ou `MYSQL_TYPE_NEWDATE`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_year`
:   Número total de colunas do tipo
    `MYSQL_TYPE_YEAR`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_year`
:   Número total de colunas do tipo
    `MYSQL_TYPE_YEAR`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_time`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TIME`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_time`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TIME`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_datetime`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DATETIME`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_datetime`
:   Número total de colunas do tipo
    `MYSQL_TYPE_DATETIME`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_timestamp`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TIMESTAMP`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_timestamp`
:   Número total de colunas do tipo
    `MYSQL_TYPE_TIMESTAMP`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_string`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_STRING`, `MYSQL_TYPE_VARSTRING` ou `MYSQL_TYPE_VARCHAR`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_string`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_STRING`, `MYSQL_TYPE_VARSTRING` ou `MYSQL_TYPE_VARCHAR`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_blob`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_TINY_BLOB`,
    `MYSQL_TYPE_MEDIUM_BLOB`,
    `MYSQL_TYPE_LONG_BLOB`
    ou `MYSQL_TYPE_BLOB`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_blob`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_TINY_BLOB`,
    `MYSQL_TYPE_MEDIUM_BLOB`,
    `MYSQL_TYPE_LONG_BLOB`
    ou `MYSQL_TYPE_BLOB`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_enum`
:   Número total de colunas do tipo
    `MYSQL_TYPE_ENUM`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_enum`
:   Número total de colunas do tipo
    `MYSQL_TYPE_ENUM`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_set`
:   Número total de colunas do tipo
    `MYSQL_TYPE_SET`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_set`
:   Número total de colunas do tipo
    `MYSQL_TYPE_SET`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_geometry`
:   Número total de colunas do tipo
    `MYSQL_TYPE_GEOMETRY`
    buscadas por uma consulta normal (protocolo de texto MySQL).

`proto_binary_fetched_geometry`
:   Número total de colunas do tipo
    `MYSQL_TYPE_GEOMETRY`
    buscadas por uma instrução preparada (protocolo binário MySQL).

`proto_text_fetched_other`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_*`
    não listadas previamente e
    buscadas por uma consulta normal (protocolo de texto MySQL).

    > **Nota**:
    >
    > Em teoria, deveria ser sempre `0`.

`proto_binary_fetched_other`
:   Número total de colunas dos tipos
    `MYSQL_TYPE_*`
    não listadas previamente e
    buscadas por uma instrução preparada (protocolo binário MySQL).

    > **Nota**:
    >
    > Em teoria, deveria ser sempre `0`.

**Estatísticas Relacionadas a Conexões**

`connect_success`
:   Número total de tentativas bem sucedidas de conexões.

    > **Nota**:
    >
    > `connect_success` contém a soma de tentativas bem sucedidas
    > de conexões persistentes e não persistentes.
    > Portanto, o número de tentativas bem sucedidas de conexões não persistentes
    > é `connect_success - pconnect_success`.

`pconnect_success`
:   Número total de tentativas bem sucedidas de conexões persistentes.

`connect_failure`
:   Número total de tentativas falhadas de conexões.

`reconnect`
:   Esta é uma estatística cujo escopo está no nível de processo.

`active_connections`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Número total de conexões ativas, persistentes e não persistentes.

    > **Nota**:
    >
    > Número total de conexões ativas não persistentes é
    > `active_connections - active_persistent_connections`.

`active_persistent_connections`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Número total de conexões ativas persistentes.

`explicit_close`
:   Número total de conexões fechadas explicitamente.

    **Exemplo #1 Exemplos de trechos de código que causam um fechamento explícito**

    - ```
      $link = new mysqli(/* ... */);
      $link->close(/* ... */);
      ```
    - ```
      $link = new mysqli(/* ... */);
      $link->connect(/* ... */);
      ```

`implicit_close`
:   Número total de conexões fechadas implicitamente.

    **Exemplo #2 Exemplos de trechos de código que causam um fechamento implícito**

    - ```
      $link = new mysqli(/* ... */);
      $link->real_connect(/* ... */);
      ```
    - `unset($link)`
    - Conexão persistente: conexão em fila foi criada com
      real\_connect e podem haver opções desconhecidas definidas - fecha
      implicitamente para evitar o retorno de uma conexão com opções desconhecidas
    - Conexão persistente: ping/change\_user falha e a extensão mysqli
      fecha a conexão
    - Fim de execução de script: fecha conexões que não foram
      fechadas pelo usuário

`disconnect_close`
:   Falhas de conexão indicadas pela chamada API C
    `mysql_real_connect` durante uma tentativa de se
    estabalecer uma conexão.

`in_middle_of_command_close`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Uma conexão foi fechada no meio de uma execução de comando
    (conjuntos de resultados não buscados, após enviar uma consulta e
    antes de receber uma resposta, durante a busca de dados, enquanto
    dados são transferidos com LOAD DATA).

    **Aviso**

    A menos que consultas assíncronas sejam usadas,
    isto só deve acontecer se a aplicação PHP terminar inesperadamente
    e o PHP fechar a conexão automaticamente.

`init_command_executed_count`
:   Número total de execuções do comando init.
    Por exemplo: `mysqli_options(MYSQLI_INIT_COMMAND , $value)`.

    O número total de execuções bem sucedidas é
    `init_command_executed_count - init_command_failed_count`.

`init_command_failed_count`
:   Número total de comandos init falhados.

**Estatísticas Relacionadas aos Comandos `COM_*`**

`com_quit`

`com_init_db`

`com_query`

`com_field_list`

`com_create_db`

`com_drop_db`

`com_refresh`

`com_shutdown`

`com_statistics`

`com_process_info`

`com_connect`

`com_process_kill`

`com_debug`

`com_ping`

`com_time`

`com_delayed_insert`

`com_change_user`

`com_binlog_dump`

`com_table_dump`

`com_connect_out`

`com_register_slave`

`com_stmt_prepare`

`com_stmt_execute`

`com_stmt_send_long_data`

`com_stmt_close`

`com_stmt_reset`

`com_stmt_set_option`

`com_stmt_fetch`

`com_daemon`
:   Número total de tentativas de envio de um certo comando `COM_*`
    do PHP para o MySQL.

    As estatísticas são incrementadas após verificação da linha de dados e imediatamente
    antes do envio do pacote correspondente do protocolo Cliente Servidor do MySQL.

    **Cuidado**

    Se o MySQLnd falhar ao enviar o pacote pela rede, a estatística não será decrementada.
    Em caso de falha, o MySQLnd emite um alerta do PHP
    "Error while sending %s packet. PID=%d."

    **Exemplo #3 Exemplos de uso**

    - Verificar se o PHP envia certos comandos ao MySQL, por exemplo,
      verificar se o cliente envia `COM_PROCESS_KILL`
    - Calcular o número médio de execuções de instruções preparadas
      comparando `COM_EXECUTE` com
      `COM_PREPARE`
    - Verificar se o PHP executou alguma instrução SQL não preparada
      observando se `COM_QUERY` é igual a zero
    - Identificar scripts PHP que executam um número excessivo de instruções
      SQL, verificando `COM_QUERY` e
      `COM_EXECUTE`

**Estatísticas Miscelâneas**

`explicit_stmt_close`

`implicit_stmt_close`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Número total de instruções preparadas fechadas.

    > **Nota**:
    >
    > Uma instrução preparada é sempre fechada explicitamente. O único momento em que ela é fechaada implicitamente é quando sua preparação falha.

`mem_emalloc_count`

`mem_emalloc_ammount`

`mem_ecalloc_count`

`mem_ecalloc_ammount`

`mem_realloc_count`

`mem_realloc_ammount`

`mem_efree_count`

`mem_malloc_count`

`mem_malloc_ammount`

`mem_calloc_count`

`mem_calloc_ammount`

`mem_ealloc_count`

`mem_ealloc_ammount`

`mem_free_count`
:   Esta é uma estatística cujo escopo está no nível de processo.

    Chamadas de gerenciamento de memória.

`command_buffer_too_small`
:   Número de extensões de buffer de comandos de rede ao enviar comandos do
    PHP para o MySQL.

    MySQLnd aloca um buffer interno de comando/rede de
    [mysqlnd.net\_cmd\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-cmd-buffer-size)
    bytes para cada conexão.

    Se um comando do protocolo Cliente Servidor do MySQL,
    por exemplo `COM_QUERY` (consulta normal),
    não couber no buffer,
    o MySQLnd aumentará o buffer para o tamanho necessário para envio do comando.
    Sempre que o buffer for estendido para uma conexão,
    `command_buffer_too_small` será incrementada em uma unidade.

    Se o MySQLnd tiver que aumentar o buffer para além do seu tamanho inicial de
    [mysqlnd.net\_cmd\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-cmd-buffer-size)
    bytes para quase todas as conexões,
    deve ser considerado aumento do tamanho padrão para evitar
    realocações.

`connection_reused`
:   O número total de vezes em que uma conexão persistente foi reutilizada.

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
