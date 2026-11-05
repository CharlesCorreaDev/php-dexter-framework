# Retorna uma conexão com um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-connect.php

---

# db2\_connect

(PECL ibm\_db2 >= 1.0.0)

db2\_connect — 
Retorna uma conexão com um banco de dados

### Descrição

function **db2\_connect**(  
    [string](language.types.string.md) `$database`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username`,  
    [?](language.types.null.md)[string](language.types.string.md) `$password`,  
    [array](language.types.array.md) `$options` = []  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Cria uma nova conexão com um banco de dados IBM DB2 Universal Database, IBM Cloudscape
ou Apache Derby.

### Parâmetros

`database`
:   Para uma conexão catalogada com um banco de dados, `database`
    representa o apelido do banco de dados no catálogo do cliente DB2.

    Para uma conexão não catalogada com um banco de dados,
    `database` representa uma string de conexão
    completa no seguinte formato:

    ```
    DATABASE=database;HOSTNAME=hostname;PORT=port;PROTOCOL=TCPIP;UID=username;PWD=password;
    ```

    > **Nota**:
    >
    > Ao conectar-se ao Db2 no IBM i, o sistema subjacente chama
    > [» SQLDriverConnect](https://www.ibm.com/docs/en/i/7.5?topic=functions-sqldriverconnect-connect-data-source),
    > que aceita apenas DSN, UID e PWD para a
    > [» string de conexão](https://www.ibm.com/docs/en/i/7.5?topic=functions-sqldriverconnect-connect-data-source#rzadpfndvcon__title__5).
    > Assim:
    >
    > ```
    > DSN=database;UID=username;PWD=password;
    > ```

    onde os parâmetros representam os seguintes valores:

    `database`
    :   O nome do banco de dados.

    `hostname`
    :   O nome do host ou endereço IP do servidor de banco de dados.

    `port`
    :   A porta TCP/IP na qual o banco de dados está escutando
        solicitações.

    `username`
    :   O nome de usuário com o qual a conexão ao
        banco de dados é realizada.

    `password`
    :   A senha com a qual a conexão ao banco de dados é realizada.

`username`
:   O nome de usuário com o qual a conexão ao banco de dados é realizada.

    Para conexões não catalogadas, deve ser passado um valor **`null`** ou uma string
    vazia.

`password`
:   A senha com a qual a conexão ao banco de dados é realizada.

    Para conexões não catalogadas, deve ser passado um valor **`null`** ou uma string
    vazia.

`options`
:   Um array associativo de opções de conexão que afetam o comportamento
    da conexão, onde chaves válidas do array incluem:

    `autocommit`
    :   Passar o valor **`DB2_AUTOCOMMIT_ON`** ativa
        a autoconfirmação para este identificador de conexão.

        Passar o valor **`DB2_AUTOCOMMIT_OFF`** desativa
        a autoconfirmação para este identificador de conexão.

    `DB2_ATTR_CASE`
    :   Passar o valor **`DB2_CASE_NATURAL`** especifica
        que os nomes das colunas são retornados em maiúsculas e minúsculas.

        Passar o valor **`DB2_CASE_LOWER`** especifica
        que os nomes das colunas são retornados em letras minúsculas.

        Passar o valor **`DB2_CASE_UPPER`** especifica
        que os nomes das colunas são retornados em letras maiúsculas.

    `CURSOR`
    :   Passar o valor **`DB2_FORWARD_ONLY`** especifica um
        cursor somente de avanço para um recurso de instrução. Este é o
        tipo de cursor padrão e é suportado em todos os servidores de banco de dados.

        Passar o valor **`DB2_SCROLLABLE`** especifica um
        cursor rolável para um recurso de instrução. Este modo permite
        acesso aleatório a linhas em um conjunto de resultados, mas atualmente é suportado
        apenas pelo IBM DB2 Universal Database.

    A nova opção a seguir está disponível no ibm\_db2 versão 1.7.0 e posteriores.

    `trustedcontext`
    :   Passar o valor DB2\_TRUSTED\_CONTEXT\_ENABLE ativa o contexto confiável
        para este identificador de conexão. Este parâmetro não pode ser definido usando
        [db2\_set\_option()](function.db2-set-option.md).

        Esta chave funciona somente se o banco de dados estiver catalogado (mesmo se o
        banco de dados for local), ou se você especificar o DSN completo ao criar
        a conexão.

        Para catalogar o banco de dados, use os seguintes comandos:

        ```
        db2 catalog tcpip node loopback remote <SERVERNAME> server <SERVICENAME>
        db2 catalog database <LOCALDBNAME> as <REMOTEDBNAME> at node loopback
        db2 "update dbm cfg using svcename <SERVICENAME>"
        db2set DB2COMM=TCPIP
        ```

    As seguintes novas opções do i5/OS estão disponíveis no ibm\_db2 versão 1.5.1
    e posteriores.

    `i5_lib`
    :   Um valor de caractere que indica a biblioteca padrão que será
        usada para resolver referências de arquivo não qualificadas. Isso não é válido
        se a conexão estiver usando o modo de nomenclatura do sistema.

    `i5_naming`
    :   O valor `DB2_I5_NAMING_ON` ativa o modo de nomeação do sistema DB2 UDB CLI iSeries.
        Os arquivos são qualificados usando o delimitador de barra (/).
        Os arquivos não qualificados são resolvidos usando a lista de bibliotecas para o trabalho.

        O valor `DB2_I5_NAMING_OFF` desativa o modo de nomeação padrão
        do DB2 UDB CLI, que é a nomeação SQL. Os arquivos são qualificados usando o delimitador de ponto (.).
        Arquivos não qualificados são resolvidos usando a biblioteca padrão
        ou o ID do usuário atual.

    `i5_commit`
    :   O atributo `i5_commit` deve ser definido antes de
        **db2\_connect()**. Se o valor for alterado após a
        conexão ter sido estabelecida, e a conexão for para uma
        fonte de dados remota, a alteração não terá efeito até a próxima
        **db2\_connect()** bem-sucedida para o identificador de conexão.
        > **Nota**:
        >
        > A configuração php.ini `ibm_db2.i5_allow_commit`==0
        > ou `DB2_I5_TXN_NO_COMMIT` é o padrão, mas pode ser
        > substituída pela opção `i5_commit`.

        `DB2_I5_TXN_NO_COMMIT` - O controle de confirmação não é usado.

        `DB2_I5_TXN_READ_UNCOMMITTED` - Leituras sujas, leituras não repetíveis
        e fantasmas são possíveis.

        `DB2_I5_TXN_READ_COMMITTED` - Leituras sujas não são possíveis.
        Leituras não repetíveis e fantasmas são possíveis.

        `DB2_I5_TXN_REPEATABLE_READ` - Leituras sujas e leituras não repetíveis
        não são possíveis. Fantasmas são possíveis.

        `DB2_I5_TXN_SERIALIZABLE` - As transações são serializáveis.
        Leituras sujas, leituras não repetíveis e fantasmas não são possíveis.

    `i5_query_optimize`
    :   `DB2_FIRST_IO` Todas as consultas são otimizadas com o objetivo de
        retornar a primeira página de saída o mais rápido possível. Este objetivo funciona bem
        quando a saída é controlada por um usuário que tem mais probabilidade de cancelar a consulta
        após visualizar a primeira página de dados de saída. Consultas codificadas com uma
        cláusula OPTIMIZE FOR nnn ROWS honram o objetivo especificado pela cláusula.

        `DB2_ALL_IO` Todas as consultas são otimizadas com o objetivo de executar
        a consulta inteira até a conclusão no menor tempo decorrido. Esta é uma
        boa opção quando a saída de uma consulta está sendo gravada em um arquivo ou relatório, ou
        a interface está enfileirando os dados de saída. Consultas codificadas com uma cláusula OPTIMIZE FOR nnn
        ROWS honram o objetivo especificado pela cláusula. Este é o padrão.

    `i5_dbcs_alloc`
    :   O valor `DB2_I5_DBCS_ALLOC_ON` ativa o esquema de alocação DB2 6X
        para o crescimento do tamanho da coluna de tradução DBCS.

        O valor `DB2_I5_DBCS_ALLOC_OFF` desativa o esquema de alocação DB2 6X
        para o crescimento do tamanho da coluna de tradução DBCS.

        Nota: a configuração php.ini `ibm_db2.i5_dbcs_alloc`==0 ou
        `DB2_I5_DBCS_ALLOC_OFF` é o padrão, mas pode ser substituída
        pela opção `i5_dbcs_alloc`.

    `i5_date_fmt`
    :   `DB2_I5_FMT_ISO` - O formato de data da Organização Internacional para Padronização
        (ISO) aaaa-mm-dd é usado. Este é o padrão.

        `DB2_I5_FMT_USA` - O formato de data dos Estados Unidos mm/dd/aaaa é usado.

        `DB2_I5_FMT_EUR` - O formato de data europeu dd.mm.aaaa é usado.

        `DB2_I5_FMT_JIS` - O formato de data do Padrão Industrial Japonês
        aaaa-mm-dd é usado.

        `DB2_I5_FMT_MDY` - O formato de data mm/dd/aaaa é usado.

        `DB2_I5_FMT_DMY` - O formato de data dd/mm/aaaa é usado.

        `DB2_I5_FMT_YMD` - O formato de data aa/mm/dd é usado.

        `DB2_I5_FMT_JUL` - O formato de data juliano aa/ddd é usado.

        `DB2_I5_FMT_JOB` - O padrão da tarefa é usado.

    `i5_date_sep`
    :   `DB2_I5_SEP_SLASH` - Uma barra ( / ) é usada como separador de data.
        Este é o padrão.

        `DB2_I5_SEP_DASH` - Um traço ( - ) é usado como separador de data.

        `DB2_I5_SEP_PERIOD` - Um ponto ( . ) é usado como separador
        de data.

        `DB2_I5_SEP_COMMA` - Uma vírgula ( , ) é usada como separador de data.

        `DB2_I5_SEP_BLANK` - Um espaço em branco é usado como separador de data.

        `DB2_I5_SEP_JOB` - O padrão da tarefa é usado.

    `i5_time_fmt`
    :   `DB2_I5_FMT_ISO` - O formato de horário da Organização Internacional
        para Padronização (ISO) hh.mm.ss é usado. Este é o padrão.

        `DB2_I5_FMT_USA` - O formato de horário dos Estados Unidos
        hh:mmxx é usado, onde xx é AM ou PM.

        `DB2_I5_FMT_EUR` - O formato de horário europeu hh.mm.ss
        é usado.

        `DB2_I5_FMT_JIS` - O formato de horário do Padrão Industrial Japonês
        hh:mm:ss é usado.

        `DB2_I5_FMT_HMS` - O formato hh:mm:ss é usado.

    `i5_time_sep`
    :   `DB2_I5_SEP_COLON` - Dois pontos ( : ) são usados ​​como separador de
        horário. Este é o padrão.

        `DB2_I5_SEP_PERIOD` - Um ponto ( . ) é usado como separador de
        horário.

        `DB2_I5_SEP_COMMA` - Uma vírgula ( , ) é usada como separador de
        horário.

        `DB2_I5_SEP_BLANK` - Um espaço em branco é usado como separador de horário.

        `DB2_I5_SEP_JOB` - O padrão da tarefa é usado.

    `i5_decimal_sep`
    :   `DB2_I5_SEP_PERIOD` - Um ponto ( . ) é usado como
        separador decimal. Este é o padrão.

        `DB2_I5_SEP_COMMA` - Uma vírgula ( , ) é usada como
        separador decimal.

        `DB2_I5_SEP_JOB` - O padrão da tarefa é usado.

    A seguinte nova opção do i5/OS está disponível no ibm\_db2 versão 1.8.0
    e posteriores.

    `i5_libl`
    :   Um valor de caractere que indica a lista de bibliotecas que será usada para
        resolver referências de arquivo não qualificadas. Especifique os elementos da lista de bibliotecas
        separados por espaços em branco 'i5\_libl'=>"MINHA\_BIBLIOTECA SUA\_BIBLIOTECA QUALQUER\_BIBLIOTECA".

        > **Nota**:
        >
        > `i5_libl` chama qsys2/qcmdexc('cmd',cmdlen), que está disponível
        > somente no i5/OS V5R4 e posteriores.

### Valor Retornado

Retorna um recurso de identificador de conexão se a tentativa de conexão for
bem-sucedida. Se a tentativa de conexão falhar, **db2\_connect()**
retorna **`false`**.

### Examples

**Exemplo #1 Criando uma conexão catalogada**

As conexões catalogadas exigem que você tenha catalogado previamente o banco de dados de destino
por meio do Processador de Linha de Comando (CLP) do DB2 ou do Assistente de
Configuração do DB2.

```
<?php
$database = 'SAMPLE';
$user = 'db2inst1';
$password = 'ibmdb2';

$conn = db2_connect($database, $user, $password);

if ($conn) {
    echo "Conexão bem-sucedida.";
    db2_close($conn);
}
else {
    echo "Falha na conexão.";
}
?>
```

O exemplo acima produzirá:

```
Conexão bem-sucedida.
```

**Exemplo #2 Criando uma conexão não catalogada**

Uma conexão não catalogada permite que conexão dinâmica a um
banco de dados.

```
<?php
$database = 'SAMPLE';
$user = 'db2inst1';
$password = 'ibmdb2';
$hostname = 'localhost';
$port = 50000;

$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;" .
  "HOSTNAME=$hostname;PORT=$port;PROTOCOL=TCPIP;UID=$user;PWD=$password;";
$conn = db2_connect($conn_string, '', '');

if ($conn) {
    echo "Conexão bem-sucedida.";
    db2_close($conn);
}
else {
    echo "Falha na conexão.";
}
?>
```

O exemplo acima produzirá:

```
Conexão bem-sucedida.
```

**Exemplo #3 Criando uma conexão com autoconfirmação desativado por padrão**

Passar um array de opções para **db2\_connect()** permite
modificação do comportamento padrão do identificador de conexão.

```
<?php
$database = 'SAMPLE';
$user = 'db2inst1';
$password = 'ibmdb2';
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF);

$conn = db2_connect($database, $user, $password, $options);

if ($conn) {
    echo "Conexão bem-sucedida.\n";
    if (db2_autocommit($conn)) {
         echo "A autoconfirmação está ativada.\n";
    }
    else {
         echo "A autoconfirmação está desativada.\n";
    }
    db2_close($conn);
}
else {
    echo "Falha na conexão.";
}
?>
```

O exemplo acima produzirá:

```
Conexão bem-sucedida.
A autoconfirmação está desativada.
```

**Exemplo #4 Melhor desempenho do i5/OS**

Para obter o melhor desempenho para uma aplicação PHP i5/OS ibm\_db2 1.5.1,
use o host, o ID do usuário e a senha padrão para
**db2\_connect()**.

```
<?php
  $library = "ADC";
  $i5 = db2_connect("", "", "", array("i5_lib"=>"qsys2"));
  $result = db2_exec($i5,
       "select * from systables where table_schema = '$library'");
  while ($row = db2_fetch_both($result)) {
     echo $row['TABLE_NAME']."</br>";
  }
  db2_close($i5);
?>
```

O exemplo acima produzirá:

```
ANIMALS
NAMES
PICTURES
```

**Exemplo #5 Usando contexto confiável**

O exemplo a seguir mostra como habilitar o contexto confiável, alternar
usuários e obter o ID do usuário atual.

```
<?php

$database = "SAMPLE";
$hostname = "localhost";
$port = 50000;
$authID = "db2inst1";
$auth_pass = "ibmdb2";

$tc_user = "tcuser";
$tc_pass = "tcpassword";

$dsn = "DATABASE=$database;HOSTNAME=$hostname;PORT=$port;
  PROTOCOL=TCPIP;UID=$authID;PWD=$auth_pass;";
$options = array ("trustedcontext" => DB2_TRUSTED_CONTEXT_ENABLE);

$tc_conn = db2_connect($dsn, "", "", $options);
if($tc_conn) {
    echo "Conexão confiável explícita bem-sucedida.\n";

    if(db2_get_option($tc_conn, "trustedcontext")) {
        $userBefore = db2_get_option($tc_conn, "trusted_user");

        // Faz algo como usuário 1.

        // Trocando para usuário confiável.
        $parameters = array("trusted_user" => $tc_user,
          "trusted_password" => $tcuser_pass);
        $res = db2_set_option ($tc_conn, $parameters, 1);

        $userAfter = db2_get_option($tc_conn, "trusted_user");
        // Faz algo mais como usuário confiável.

        if($userBefore != $userAfter) {
            echo "O usuário foi trocado." . "\n";
        }
    }

    db2_close($tc_conn);
}
else {
    echo "Conexão confiável explícita falhou.\n";
}
?>
```

O exemplo acima produzirá:

```
Conexão confiável explícita bem-sucedida.
O usuário foi trocado.
```

### Veja também

- [db2\_close()](function.db2-close.md) - Fecha uma conexão de banco de dados
- [db2\_pconnect()](function.db2-pconnect.md) - Retorna uma conexão persistente a um banco de dados

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
