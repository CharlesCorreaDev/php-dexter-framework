# Driver PDO do CUBRID (PDO_CUBRID)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-cubrid.php

---

# Driver PDO do CUBRID (PDO\_CUBRID)

## Introdução

PDO\_CUBRID é um driver que implementa a
[interface PHP Data Objects (PDO)](book.pdo.md#intro.pdo)
para permitir acesso do PHP a bancos de dados CUBRID.

> **Nota**:
>
> A versão atual do PDO\_CUBRID não suporta conexão persistente agora.

## Instalação

Para construir a extensão PDO\_CUBRID, o SGBD CUBRID deve estar instalado no
mesmo sistema que o PHP.
O PDO\_CUBRID é uma extensão [» PECL](https://pecl.php.net/), então siga as instruções em
[Instalação das extensões PECL](install.pecl.md)
para instalar a extensão PDO\_CUBRID.
Emita o comando **configure** para apontar para a localização do
diretório base do CUBRID da seguinte forma:

```
   $ ./configure --with-pdo-cubrid=/path/to/CUBRID[,shared]
```

O comando **configure** utiliza por padrão o valor da
variável de ambiente
CUBRID.

Uma DLL para esta
extensão PECL não está disponível no momento. Veja também a seção
[Compilando no Windows](install.windows.building.md).
Para informações detalhadas sobre a instalação no Linux e
Windows manualmente, leia o arquivo build-guide.html no pacote PECL CUBRID para
referência.

## Recursos do PDO\_CUBRID

## Cursores Roláveis

PDO\_CUBRID suporta cursores roláveis. O tipo de cursor padrão é
somente para frente, e você pode usar a opção do driver em
[PDO::prepare()](pdo.prepare.md) para mudar o tipo de cursor.

## Timeout

PDO\_CUBRID suporta definição de tempo limite de execução de declarações SQL;
Você pode usar [PDO::setAttribute()](pdo.setattribute.md) para definir o valor do timeout.

## Modo de Autocommit e Transação

PDO\_CUBRID suporta tanto o modo de autocommit quanto transações, e
o modo de autocommit está habilitado por padrão. Você pode usar
[PDO::setAttribute()](pdo.setattribute.md) para mudar seu estado.

Se você usar [PDO::beginTransaction()](pdo.begintransaction.md) para iniciar uma
transação, ela desabilitará automaticamente o modo de autocommit e
restaurará após [PDO::commit()](pdo.commit.md) ou
[PDO::rollBack()](pdo.rollback.md).

> **Nota**:
>
> Antes de desabilitar o modo de autocommit,
> qualquer instrução pendente é automaticamente processada.

## Múltiplas Declarações SQL

PDO\_CUBRID suporta Múltiplas declarações SQL.
declarações SQL são separadas por ponto e vírgula (`;`).

## Informações de Esquema

PDO\_CUBRID implementa [PDO::cubrid\_schema()](pdo.cubrid-schema.md)
para obter informações de esquema.

## LOBs

PDO\_CUBRID suporta tipo de dado BLOB/CLOB. O LOB no PDO é
representado como um fluxo, de forma que LOBs possam ser inseridos através de vinculação a um fluxo,
e obtidos pela leitura de um fluxo retornado pelo CUBRID PDO.
Por exemplo:

**Exemplo #1 Inserir LOBs no CUBRID PDO**

```
<?php
$fp = fopen('lob_test.png', 'rb');

$sql_stmt = "INSERT INTO lob_test(name, content) VALUES('lob_test.png', ?)";

$stmt = $dbh->prepare($sql_stmt);
$ret = $stmt->bindParam(1, $fp, PDO::PARAM_LOB);
$ret = $stmt->execute();
?>
```

**Exemplo #2 Buscar LOBs no CUBRID PDO**

```
<?php
$sql_stmt = "SELECT content FROM lob_test WHERE name='lob_test.png'";

$stmt = $dbh->prepare($sql_stmt);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_NUM);

header("Content-Type: image/png");
fpassthru($result[0]);
?>
```

## Meta-dados de Coluna

O [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) no CUBRID PDO
retornará um array associativo contendo os seguintes valores:

- type
- name
- table
- def
- precision
- scale
- not\_null
- auto\_increment
- unique\_key
- multiple\_key
- primary\_key
- foreign\_key
- reverse\_index
- reverse\_unique

## Tipo de Dados de Coleção

PDO\_CUBRID suporta tipo de dados SET/MULTISET/SEQUENCE.
Se o tipo de dados não for especificado, o padrão será char.
Por exemplo:

**Exemplo #3 Inserir conjunto no CUBRID PDO com tipo de dado padrão.**

```
<?php
$conn_str ="cubrid:dbname=demodb;host=localhost;port=33000";
$cubrid_pdo = new PDO($conn_str, 'dba', '');

$cubrid_pdo->exec("DROP TABLE if exists test_tbl");
$cubrid_pdo->exec("CREATE TABLE test_tbl (col_1 SET(VARCHAR))");

$sql_stmt_insert = "INSERT INTO test_tbl VALUES (?);";
$stmt = $cubrid_pdo->prepare($sql_stmt_insert);
$data = array("abc","def","ghi");
$ret = $stmt->bindParam(1, $data, PDO::PARAM_NULL);
$ret = $stmt->execute();
var_Dump($ret);
?>
```

**Exemplo #4 Especificar tipo de dado ao inserir conjunto no CUBRID PDO**

```
<?php
$conn_str ="cubrid:dbname=demodb;host=localhost;port=33000";
$cubrid_pdo = new PDO($conn_str, 'dba', '');

$cubrid_pdo->exec("DROP TABLE if exists test_tbl");
$cubrid_pdo->exec("CREATE TABLE test_tbl (col_1 SET(int))");

$sql_stmt_insert = "INSERT INTO test_tbl VALUES (?);";
$stmt = $cubrid_pdo->prepare($sql_stmt_insert);
$data = array(1,2,3,4);
$ret = $stmt->bindParam(1, $data, 0,0,"int");
$ret = $stmt->execute();
var_Dump($ret);
?>
```

Tipos de Dados Vinculados CUBRID para o quinto parâmetro de
[PDOStatement::bindParam()](pdostatement.bindparam.md):

- CHAR
- STRING
- NCHAR
- VARNCHAR
- BIT
- VARBIT
- NUMERIC
- NUMBER
- INT
- SHORT
- BIGINT
- MONETARY
- FLOAT
- DOUBLE
- DATE
- TIME
- DATETIME
- TIMESTAMP

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

As seguintes constantes podem ser usadas ao definir o atributo do banco de dados.
Elas podem ser passadas para [PDO::getAttribute()](pdo.getattribute.md) ou
[PDO::setAttribute()](pdo.setattribute.md).

**PDO::CUBRID attribute flags**

| Constante | Descrição |
| --- | --- |
| **`PDO::CUBRID_ATTR_ISOLATION_LEVEL`** | Nível de isolamento de transação para a conexão do banco de dados. |
| **`PDO::CUBRID_ATTR_LOCK_TIMEOUT`** | Tempo limite de transação em segundos. |
| **`PDO::CUBRID_ATTR_MAX_STRING_LENGTH`** | Somente leitura. O comprimento máximo da string para bit, varbit, char, varchar, nchar, tipos de dados nchar ao usar a API PDO CUBRID. |

As seguintes constantes podem ser usadas ao definir o nível de isolamento da transação.
Elas podem ser passadas para [PDO::getAttribute()](pdo.getattribute.md) ou
retornadas por [PDO::setAttribute()](pdo.setattribute.md).

**Flags de nível de isolamento do PDO::CUBRID**

| Constante | Descrição |
| --- | --- |
| **`PDO::TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE`** | O nível de isolamento mais baixo (1). Uma leitura suja, não repetível ou leitura fantasma pode ocorrer para a tupla e uma leitura não repetível pode ocorrer para a tabela também. |
| **`PDO::TRAN_COMMIT_CLASS_COMMIT_INSTANCE`** | Um nível de isolamento relativamente baixo (2). Uma leitura suja não ocorre, mas uma leitura não repetível ou fantasma pode ocorrer. |
| **`PDO::TRAN_REP_CLASS_UNCOMMIT_INSTANCE`** | O isolamento padrão do CUBRID (3). Uma leitura suja, não repetível ou leitura fantasma pode ocorrer para a tupla, mas uma leitura repetível é garantida para a tabela. |
| **`PDO::TRAN_REP_CLASS_COMMIT_INSTANCE`** | Um nível de isolamento relativamente baixo (4). Uma leitura suja não ocorre, mas uma leitura não repetível ou fantasma pode ocorrer. |
| **`PDO::TRAN_REP_CLASS_REP_INSTANCE`** | Um nível de isolamento relativamente alto (5). Uma leitura suja ou não repetível não ocorre, mas uma leitura fantasma pode. |
| **`PDO::TRAN_SERIALIZABLE`** | O mais alto nível de isolamento (6). Problemas relacionados à concorrência (por exemplo, leitura suja, leitura não repetível, leitura fantasma, etc.) não ocorrem. |

As seguintes constantes podem ser usadas ao obter informações de esquema. Elas
podem ser passadas para [PDO::cubrid\_schema()](pdo.cubrid-schema.md).

**PDO::CUBRID schema flags**

| Constante | Descrição |
| --- | --- |
| **`PDO::CUBRID_SCH_TABLE`** | Obtém o nome e o tipo da tabela no CUBRID. |
| **`PDO::CUBRID_SCH_VIEW`** | Obtém o nome e o tipo da visão no CUBRID. |
| **`PDO::CUBRID_SCH_QUERY_SPEC`** | Obtém a definição da consulta da visão. |
| **`PDO::CUBRID_SCH_ATTRIBUTE`** | Obtém os atributos da coluna da tabela. |
| **`PDO::CUBRID_SCH_TABLE_ATTRIBUTE`** | Obtém os atributos da tabela. |
| **`PDO::CUBRID_SCH_METHOD`** | Obtém o método de instância. O método de instância é um método chamado por uma instância de classe. É usado com mais frequência do que o método de classe porque a maioria das operações é executada na instância. |
| **`PDO::CUBRID_SCH_TABLE_METHOD`** | Obtém o método de classe. O método de classe é um método chamado por um objeto de classe. Geralmente é usado para criar uma nova instância de classe ou inicializá-la. Também é usado para acessar ou atualizar atributos de classe. |
| **`PDO::CUBRID_SCH_METHOD_FILE`** | Obtém as informações do arquivo onde o método da tabela está definido. |
| **`PDO::CUBRID_SCH_SUPER_TABLE`** | Obtém o nome e o tipo da tabela que herda atributos. |
| **`PDO::CUBRID_SCH_SUB_TABLE`** | Obtém o nome e o tipo da tabela que herda atributos desta tabela. |
| **`PDO::CUBRID_SCH_CONSTRAINT`** | Obtém as restrições (constraints) da tabela. |
| **`PDO::CUBRID_SCH_TRIGGER`** | Obtém os disparadores (triggers) da tabela. |
| **`PDO::CUBRID_SCH_TABLE_PRIVILEGE`** | Obtém informações de privilégio da tabela. |
| **`PDO::CUBRID_SCH_COL_PRIVILEGE`** | Obtém informações de privilégio da coluna. |
| **`PDO::CUBRID_SCH_DIRECT_SUPER_TABLE`** | Obtém a tabela super direta da tabela. |
| **`PDO::CUBRID_SCH_PRIMARY_KEY`** | Obtém a chave primária da tabela. |
| **`PDO::CUBRID_SCH_IMPORTED_KEYS`** | Obtém chaves importadas da tabela. |
| **`PDO::CUBRID_SCH_EXPORTED_KEYS`** | Obtém chaves exportadas da tabela. |
| **`PDO::CUBRID_SCH_CROSS_REFERENCE`** | Obtém relação de referência de duas tabelas. |

## Índice

- [PDO\_CUBRID DSN](ref.pdo-cubrid.connection.md) — Conectando-se a bancos de dados CUBRID
- [PDO::cubrid\_schema](pdo.cubrid-schema.md) — Obtém as informações do esquema solicitadas

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
