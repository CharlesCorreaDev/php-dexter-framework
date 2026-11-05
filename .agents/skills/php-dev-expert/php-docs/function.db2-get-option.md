# Recupera um valor de opção para um recurso de instrução ou um recurso de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-get-option.php

---

# db2\_get\_option

(PECL ibm\_db2 >= 1.6.0)

db2\_get\_option — Recupera um valor de opção para um recurso de instrução ou um recurso de conexão

### Descrição

function **db2\_get\_option**([resource](language.types.resource.md) `$resource`, [string](language.types.string.md) `$option`): [string](language.types.string.md)|[false](language.types.singleton.md)

Recupera o valor de uma opção especificada para um recurso de instrução
ou um recurso de conexão.

### Parâmetros

`resource`
:   Um recurso de instrução válido conforme retornado de
    [db2\_prepare()](function.db2-prepare.md) ou um recurso de conexão válido conforme
    retornado por [db2\_connect()](function.db2-connect.md) ou
    [db2\_pconnect()](function.db2-pconnect.md).

`option`
:   Uma instrução válida ou opções de conexão. As seguintes novas opções estão disponíveis
    a partir do ibm\_db2 versão 1.6.0. Elas fornecem informações úteis de rastreamento
    que podem ser definidas durante a execução com **db2\_get\_option()**.
    > **Nota**:
    >
    > Versões anteriores do ibm\_db2 não oferecem suporte a essas novas opções.
    >
    > Quando o valor em cada opção está sendo definido, alguns servidores podem não lidar
    > com todo o comprimento fornecido e podem truncar o valor.
    >
    > Para garantir que os dados especificados em cada opção sejam convertidos corretamente
    > quando transmitidos para um sistema host, use apenas os caracteres de A a Z,
    > de 0 a 9 e o sublinhado (\_) ou ponto (.).

    `userid`
    :   `SQL_ATTR_INFO_USERID` - Um ponteiro para uma string terminada em nulo
        usada para identificar o ID do usuário cliente enviado ao servidor de banco de dados host
        ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 16 caracteres.
        > Este ID do usuário não deve ser confundido com o ID do usuário de autenticação, ele é para
        > propósitos de identificação apenas e não é usado para nenhuma autorização.

    `acctstr`
    :   `SQL_ATTR_INFO_ACCTSTR` - Um ponteiro para uma string
        terminada em nulo usada para identificar a sequência de contabilidade do cliente enviada ao
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 200 caracteres.

    `applname`
    :   `SQL_ATTR_INFO_APPLNAME` - Um ponteiro para uma string terminada em nulo
        usada para identificar o nome do aplicativo cliente enviado ao
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 32 caracteres.

    `wrkstnname`
    :   `SQL_ATTR_INFO_WRKSTNNAME` - Um ponteiro para uma string terminada em nulo
        usada para identificar o nome da estação de trabalho do cliente enviado para o
        servidor de banco de dados host ao usar o DB2 Connect.
        > **Nota**:
        >
        > Os servidores DB2 para z/OS e OS/390 suportam até 18 caracteres.

A tabela a seguir especifica quais opções são compatíveis com
os tipos de recursos disponíveis:

**Matriz Recurso-Parâmetro**

| Chave | Valor | Tipo de recurso | | |
| --- | --- | --- | --- | --- |
|  |  | Conexão | Instrução | Conjunto de Resultados |
| userid | `SQL_ATTR_INFO_USERID` | X | X | - |
| acctstr | `SQL_ATTR_INFO_ACCTSTR` | X | X | - |
| applname | `SQL_ATTR_INFO_APPLNAME` | X | X | - |
| wrkstnname | `SQL_ATTR_INFO_WRKSTNNAME` | X | X | - |

### Valor Retornado

Retorna a configuração atual do atributo de conexão fornecido em caso de sucesso
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo e recuperando parâmetros por meio de um recurso de conexão**

```
<?php
/* Parâmetros de conexão do banco de dados */
$database = 'SAMPLE';
$user     = 'db2inst1';
$password = 'ibmdb2';

/* Obtém Recurso de Conexão */
$conn = db2_connect($database, $user, $password);

echo "Atributos do cliente passados ​​pela string de conexão:\n";

/* Cria o array associativo de opções com pares de chave-valor válidos */
/* Atribui os atributos por meio da string de conexão */
/* Acessa as opções especificadas */
$options1 = array('userid' => 'db2inst1');
$conn1 = db2_connect($database, $user, $password, $options1);
$val = db2_get_option($conn1, 'userid');
echo $val . "\n";

$options2 = array('acctstr' => 'account');
$conn2 = db2_connect($database, $user, $password, $options2);
$val = db2_get_option($conn2, 'acctstr');
echo $val . "\n";

$options3 = array('applname' => 'myapp');
$conn3 = db2_connect($database, $user, $password, $options3);
$val = db2_get_option($conn3, 'applname');
echo $val . "\n";

$options4 = array('wrkstnname' => 'workstation');
$conn4 = db2_connect($database, $user, $password, $options4);
$val = db2_get_option($conn4, 'wrkstnname');
echo $val . "\n";

echo "Atributos do cliente transmitidos após a conexão:\n";

/* Cria o array associativo de opções com pares de chave-valor válidos */
/* Atribui os atributos depois que a conexão é feita */
/* Acessa as opções especificadas */
$options5 = array('userid' => 'db2inst1');
$conn5 = db2_connect($database, $user, $password);
$rc = db2_set_option($conn5, $options5, 1);
$val = db2_get_option($conn5, 'userid');
echo $val . "\n";

$options6 = array('acctstr' => 'account');
$conn6 = db2_connect($database, $user, $password);
$rc = db2_set_option($conn6, $options6, 1);
$val = db2_get_option($conn6, 'acctstr');
echo $val . "\n";

$options7 = array('applname' => 'myapp');
$conn7 = db2_connect($database, $user, $password);
$rc = db2_set_option($conn7, $options7, 1);
$val = db2_get_option($conn7, 'applname');
echo $val . "\n";

$options8 = array('wrkstnname' => 'workstation');
$conn8 = db2_connect($database, $user, $password);
$rc = db2_set_option($conn8, $options8, 1);
$val = db2_get_option($conn8, 'wrkstnname');
echo $val . "\n";
?>
```

O exemplo acima produzirá:

```
Atributos do cliente passados ​​pela string de conexão:
db2inst1
account
myapp
workstation
Atributos do cliente transmitidos após a conexão:
db2inst1
account
myapp
workstation
```

### Veja também

- [db2\_connect()](function.db2-connect.md) - Retorna uma conexão com um banco de dados
- [db2\_cursor\_type()](function.db2-cursor-type.md) - Retorna o tipo de cursor usado por um recurso de instrução
- [db2\_exec()](function.db2-exec.md) - Executa uma instrução SQL diretamente
- [db2\_set\_option()](function.db2-set-option.md) - Define opções para recursos de conexão ou instrução
- [db2\_pconnect()](function.db2-pconnect.md) - Retorna uma conexão persistente a um banco de dados
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada

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
