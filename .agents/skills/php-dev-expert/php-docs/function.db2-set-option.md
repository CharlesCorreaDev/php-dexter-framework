# Define opções para recursos de conexão ou instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-set-option.php

---

# db2\_set\_option

(PECL ibm\_db2 >= 1.0.0)

db2\_set\_option — Define opções para recursos de conexão ou instrução

### Descrição

function **db2\_set\_option**([resource](language.types.resource.md) `$resource`, [array](language.types.array.md) `$options`, [int](language.types.integer.md) `$type`): [bool](language.types.boolean.md)

Define opções para recursos de conexão ou instrução.
Não é possível definir opções para recursos de conjunto de resultados.

### Parâmetros

`resource`
:   Um recurso de instrução válido conforme retornado por
    [db2\_prepare()](function.db2-prepare.md) ou um recurso de conexão válido conforme
    retornado por [db2\_connect()](function.db2-connect.md) ou
    [db2\_pconnect()](function.db2-pconnect.md).

`options`
:   Um array associativo contendo opções de instrução ou conexão válidas.
    Este parâmetro pode ser usado para alterar valores de autoconfirmação,
    tipos de cursor (rolável ou de avanço) e para especificar a forma
    dos nomes de coluna (minúsculas, maiúsculas ou natural) que aparecerão em um
    conjunto de resultados.

    `autocommit`
    :   Passar **`DB2_AUTOCOMMIT_ON`** ativa
        a autoconfirmação para o recurso de conexão especificado.

        Passar **`DB2_AUTOCOMMIT_OFF`** desativa
        a autoconfirmação para o recurso de conexão especificado.

    `cursor`
    :   Passar **`DB2_FORWARD_ONLY`** especifica um
        cursor somente de avanço para um recurso de instrução. Este é o
        tipo de cursor padrão e é suportado por todos os servidores
        de banco de dados.

        Passar **`DB2_SCROLLABLE`** especifica um
        cursor rolável para um recurso de instrução. Cursores roláveis
        permitem que linhas de conjunto de resultados sejam acessadas em
        ordem não sequencial, mas são suportados apenas por
        bancos de dados IBM DB2 Universal Database.

    `binmode`
    :   Passar **`DB2_BINARY`** especifica que
        dados binários serão retornados como estiverem. Este é o modo
        padrão. Isto é o equivalente a definir
        `ibm_db2.binmode=1` no php.ini.

        Passar **`DB2_CONVERT`** especifica que
        dados binários serão convertidos para codificação hexadecimal,
        e serão retornados como tal. Isso é o equivalente a
        definir `ibm_db2.binmode=2` no php.ini.

        Passar **`DB2_PASSTHRU`** especifica que
        dados binários serão convertidos para **`null`**. Isso é o
        equivalente a definir `ibm_db2.binmode=3`
        no php.ini.

    `db2_attr_case`
    :   Passar **`DB2_CASE_LOWER`** especifica que
        nomes de colunas do conjunto de resultados são retornados em minúsculas.

        Passar **`DB2_CASE_UPPER`** especifica que
        nomes de colunas do conjunto de resultados são retornados em maiúsculas.

        Passar **`DB2_CASE_NATURAL`** especifica que
        nomes de colunas do conjunto de resultados são retornados de
        forma natural.

    `deferred_prepare`
    :   Passar **`DB2_DEFERRED_PREPARE_ON`** ativa a preparação
        adiada para o recurso de instrução especificado.

        Passar **`DB2_DEFERRED_PREPARE_OFF`** desativa o preparação
        adiada para o recurso de instrução especificado.

    As seguintes novas opções do i5/OS estão disponíveis no ibm\_db2 versão 1.5.1
    e posteriores. Essas opções se aplicam somente ao executar PHP e ibm\_db2 nativamente em sistemas i5.

    `i5_fetch_only`
    :   `DB2_I5_FETCH_ON` - Os cursores são somente leitura
        e não podem ser usados ​​para atualizações ou exclusões posicionadas. Este
        é o padrão, a menos que o ambiente `SQL_ATTR_FOR_FETCH_ONLY`
        tenha sido definido como `SQL_FALSE`.

        `DB2_I5_FETCH_OFF` - Os cursores podem ser usados
        para atualizações e exclusões posicionadas.

    A nova opção a seguir está disponível no ibm\_db2 versão 1.8.0 e posteriores.

    `rowcount`
    :   `DB2_ROWCOUNT_PREFETCH_ON` - O cliente pode solicitar
        a contagem completa de linhas antes da busca, o que significa que
        [db2\_num\_rows()](function.db2-num-rows.md) retorna o número de linhas selecionadas
        mesmo quando um cursor `ROLLFORWARD_ONLY` é usado.

        `DB2_ROWCOUNT_PREFETCH_OFF` - O cliente não pode solicitar
        a contagem completa de linhas antes da busca.

    As seguintes novas opções estão disponíveis no ibm\_db2 versão 1.7.0 e posteriores.

    `trusted_user`
    :   Para alternar o usuário para um usuário confiável, passe o ID (string)
        do usuário confiável como o valor desta chave. Esta opção pode
        ser definida somente em um recurso de conexão. Para usar esta opção, o contexto confiável
        deve estar habilitado no recurso de conexão.

    `trusted_password`
    :   A senha (string) que corresponde ao usuário especificado
        pela chave trusted\_user.

    As seguintes novas opções estão disponíveis no ibm\_db2 versão 1.6.0 e posteriores.
    Essas opções fornecem informações úteis de rastreamento que podem ser acessadas durante
    a execução com [db2\_get\_option()](function.db2-get-option.md).
    > **Nota**:
    >
    > Quando o valor em cada opção está sendo definido, alguns servidores podem não lidar
    > com o todo o comprimento fornecido e podem truncar o valor.
    >
    > Para garantir que os dados especificados em cada opção sejam convertidos corretamente
    > quando transmitidos para um sistema host, use apenas os caracteres de A a Z,
    > 0 a 9 e o sublinhado (\_) ou ponto (.).

    `userid`
    :   `SQL_ATTR_INFO_USERID` - Um ponteiro para uma string
        terminada em nulo usada para identificar o ID do usuário cliente enviado ao servidor de banco de dados
        host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 16 caracteres.
        > Este ID de usuário não deve ser confundido com o ID do usuário de autenticação, ele serve para
        > identificação apenas e não é usado para nenhuma autorização.

    `acctstr`
    :   `SQL_ATTR_INFO_ACCTSTR` - Um ponteiro para uma string
        terminada em nulo usada para identificar a string de contabilidade do cliente enviada ao
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 200 caracteres.

    `applname`
    :   `SQL_ATTR_INFO_APPLNAME` - Um ponteiro para uma string
        terminada em nulo usada para identificar o nome do aplicativo cliente enviado ao
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 32 caracteres.

    `wrkstnname`
    :   `SQL_ATTR_INFO_WRKSTNNAME` - Um ponteiro para uma string
        terminada em nulo usada para identificar o nome da estação de trabalho cliente enviado ao
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 18 caracteres.

`type`
:   Um valor inteiro que especifica o tipo de recurso que foi
    passado para a função. O tipo de recurso e este valor
    devem corresponder.

    Passar `1` como o valor especifica que
    um recurso de conexão foi passado para a função.

    Passar qualquer inteiro diferente de `1` como
    o valor especifica que um recurso de instrução foi
    passado para a função.

A tabela a seguir especifica quais opções são compatíveis com
os tipos de recursos disponíveis:

**Matriz de Parâmetros-Recursos**

| Chave | Valor | Tipo de Recurso | | |
| --- | --- | --- | --- | --- |
|  |  | Conexão | Instrução | Conjunto de Resultados |
| autocommit | **`DB2_AUTOCOMMIT_ON`** | X | - | - |
| autocommit | **`DB2_AUTOCOMMIT_OFF`** | X | - | - |
| cursor | **`DB2_SCROLLABLE`** | - | X | - |
| cursor | **`DB2_FORWARD_ONLY`** | - | X | - |
| binmode | **`DB2_BINARY`** | X | X | - |
| binmode | **`DB2_CONVERT`** | X | X | - |
| binmode | **`DB2_PASSTHRU`** | X | X | - |
| db2\_attr\_case | **`DB2_CASE_LOWER`** | X | X | - |
| db2\_attr\_case | **`DB2_CASE_UPPER`** | X | X | - |
| db2\_attr\_case | **`DB2_CASE_NATURAL`** | X | X | - |
| deferred\_prepare | **`DB2_DEFERRED_PREPARE_ON`** | - | X | - |
| deferred\_prepare | **`DB2_DEFERRED_PREPARE_OFF`** | - | X | - |
| i5\_fetch\_only | `DB2_I5_FETCH_ON` | - | X | - |
| i5\_fetch\_only | `DB2_I5_FETCH_OFF` | - | X | - |
| rowcount | `DB2_ROWCOUNT_PREFETCH_ON` | - | X | - |
| rowcount | `DB2_ROWCOUNT_PREFETCH_OFF` | - | X | - |
| trusted\_user | `<USER NAME> (String)` | X | - | - |
| trusted\_password | `<PASSWORD> (String)` | X | - | - |
| userid | `SQL_ATTR_INFO_USERID` | X | X | - |
| acctstr | `SQL_ATTR_INFO_ACCTSTR` | X | X | - |
| applname | `SQL_ATTR_INFO_APPLNAME` | X | X | - |
| wrkstnname | `SQL_ATTR_INFO_WRKSTNNAME` | X | X | - |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo um parâmetro com um recurso de conexão**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_ON);

/* Chama a função usando o recurso correto, o array de opções e os valores de tipo */
$result = db2_set_option($conn, $options, 1);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Opções definidas com sucesso
```

**Exemplo #2 Definindo vários parâmetros com um recurso de conexão**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF,
                   'binmode' => DB2_PASSTHRU,
             'db2_attr_case' => DB2_CASE_UPPER,
                    'cursor' => DB2_SCROLLABLE);

/* Chama a função usando o recurso correto, o array de opções e os valores de tipo */
$result = db2_set_option($conn, $options, 1);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Opções definidas com sucesso
```

**Exemplo #3 Definindo vários parâmetros com uma chave inválida**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF,
            'MY_INVALID_KEY' => DB2_PASSTHRU,
             'db2_attr_case' => DB2_CASE_UPPER,
                    'cursor' => DB2_SCROLLABLE);

/* Chama a função usando o recurso correto, o array de opções e os valores de tipo */
$result = db2_set_option($conn, $options, 1);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Não foi possível definir as opções
```

**Exemplo #4 Definindo vários parâmetros com um valor inválido**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF,
                   'binmode' => 'INVALID_VALUE',
             'db2_attr_case' => DB2_CASE_UPPER,
                    'cursor' => DB2_SCROLLABLE);

/* Chama a função usando o recurso correto, o array de opções e os valores de tipo */
$result = db2_set_option($conn, $options, 1);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Não foi possível definir as opções
```

**Exemplo #5 Definindo vários parâmetros com um recurso de conexão e o tipo errado**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF,
                   'binmode' => DB2_PASSTHRU,
             'db2_attr_case' => DB2_CASE_UPPER,
                    'cursor' => DB2_SCROLLABLE);

/* Chama a função usando o recurso correto, o array de opções e o valor de tipo errado */
$result = db2_set_option($conn, $options, 2);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Não foi possível definir as opções
```

**Exemplo #6 Definindo vários parâmetros com o recurso errado**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF,
                   'binmode' => DB2_PASSTHRU,
             'db2_attr_case' => DB2_CASE_UPPER,
                    'cursor' => DB2_SCROLLABLE);

$stmt = db2_prepare($conn, 'SELECT * FROM EMPLOYEE');

/* Chama a função usando o recurso errado, o array de opções correto e os valores de tipo */
$result = db2_set_option($stmt, $options, 1);

/* Verifica se todas as opções foram definidas corretamente */
if($result)
{
 echo 'Opções definidas com sucesso';
}
else
{
 echo 'Não foi possível definir as opções';
}
?>
```

O exemplo acima produzirá:

```
Não foi possível definir as opções
```

**Exemplo #7 Juntando tudo**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$hostname = 'localhost';
$port = 50000;
$protocol = 'TCPIP';
$username = 'db2inst1';
$password = 'ibmdb2';

/* String de conexão */
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;";
$conn_string .= "HOSTNAME=$hostname;PORT=$port;PROTOCOL=$protocol;";
$conn_string .= "UID=$username;PWD=$password;";

/* Obtém recurso de conexão */
$conn = db2_connect($conn_string, '', '');

/* Cria o array associativo de opções com pares válidos de chave-valor */
$options = array('db2_attr_case' => DB2_CASE_LOWER,
                       'cursor' => DB2_SCROLLABLE);

$stmt = db2_prepare($conn, 'SELECT * FROM EMPLOYEE WHERE EMPNO = ? OR EMPNO = ?');

/* Chama a função usando o recurso correto, o array de opções e os valores de tipo */
$option_result = db2_set_option($stmt, $options, 2);
$result = db2_execute($stmt, array('000130', '000140'));

/* Obtém a linha 2 antes da linha 1, pois o cursor é rolável */
print_r(db2_fetch_assoc($stmt, 2));
print '<br /><br />';
print_r(db2_fetch_assoc($stmt, 1));

?>
```

O exemplo acima produzirá:

```
Array
(
   [empno] => 000140
   [firstnme] => HEATHER
   [midinit] => A
   [lastname] => NICHOLLS
   [workdept] => C01
   [phoneno] => 1793
   [hiredate] => 1976-12-15
   [job] => ANALYST
   [edlevel] => 18
   [sex] => F
   [birthdate] => 1946-01-19
   [salary] => 28420.00
   [bonus] => 600.00
   [comm] => 2274.00
)

Array
(
   [empno] => 000130
   [firstnme] => DELORES
   [midinit] => M
   [lastname] => QUINTANA
   [workdept] => C01
   [phoneno] => 4578
   [hiredate] => 1971-07-28
   [job] => ANALYST
   [edlevel] => 16
   [sex] => F
   [birthdate] => 1925-09-15
   [salary] => 23800.00
   [bonus] => 500.00
   [comm] => 1904.00
)
```

**Exemplo #8 Os cursores do i5/OS são somente leitura**

```
<?php
 $conn = db2_connect("", "", "", array("i5_lib"=>"nobody"));
 $stmt = db2_prepare($conn, 'select * from names where first = ?');
 $name = "first2";
 db2_bind_param($stmt, 1, "name", DB2_PARAM_IN);
 $options = array("i5_fetch_only"=>DB2_I5_FETCH_ON);
 db2_set_option($stmt,$options,0);
 if (db2_execute($stmt)) {
   while ($row = db2_fetch_array($stmt)) {
     echo "{$row[0]} {$row[1]}";
   }
 }
?>
```

O exemplo acima produzirá:

```
first2 last2
```

### Veja também

- [db2\_connect()](function.db2-connect.md) - Retorna uma conexão com um banco de dados
- [db2\_pconnect()](function.db2-pconnect.md) - Retorna uma conexão persistente a um banco de dados
- [db2\_exec()](function.db2-exec.md) - Executa uma instrução SQL diretamente
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada
- [db2\_cursor\_type()](function.db2-cursor-type.md) - Retorna o tipo de cursor usado por um recurso de instrução

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
