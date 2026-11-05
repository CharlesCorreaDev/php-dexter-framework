# A classe Pdo\Mysql

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdo-mysql.php

---

# A classe Pdo\Mysql

(PHP 8 >= 8.4.0)

## Introdução

Um subclasse [PDO](class.pdo.md) representando uma conexão que usa
o driver PDO MySQL.

Este driver oferece suporte a um analisador de consulta SQL dedicado para o dialeto MySQL.
Ele pode lidar com o seguinte:

- Literais entre aspas simples e duplas com duplicação e barra invertida como mecanismos de escape
- Literais entre acentos graves com duplicação como mecanismo de escape
- Dois travessões, comentários em estilo C e comentários em hash.

## Resumo da classe

class ****Pdo\Mysql****
extends
[PDO](class.pdo.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[PDO::PARAM\_NULL](pdo.constants.md#pdo.constants.param-null);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_BOOL](pdo.constants.md#pdo.constants.param-bool) = 5;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_INT](pdo.constants.md#pdo.constants.param-int) = 1;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR](pdo.constants.md#pdo.constants.param-str) = 2;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_LOB](pdo.constants.md#pdo.constants.param-lob) = 3;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STMT](pdo.constants.md#pdo.constants.param-stmt) = 4;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_INPUT\_OUTPUT](pdo.constants.md#pdo.constants.param-input-output);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR\_NATL](pdo.constants.md#pdo.constants.param-str-natl);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR\_CHAR](pdo.constants.md#pdo.constants.param-str-char);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_ALLOC](pdo.constants.md#pdo.constants.param-evt-alloc);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FREE](pdo.constants.md#pdo.constants.param-evt-free);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_EXEC\_PRE](pdo.constants.md#pdo.constants.param-evt-exec-pre);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_EXEC\_POST](pdo.constants.md#pdo.constants.param-evt-exec-post);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FETCH\_PRE](pdo.constants.md#pdo.constants.param-evt-fetch-pre);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FETCH\_POST](pdo.constants.md#pdo.constants.param-evt-fetch-post);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_NORMALIZE](pdo.constants.md#pdo.constants.param-evt-normalize);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_DEFAULT](pdo.constants.fetch-modes.md#pdo.constants.fetch-default);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_LAZY](pdo.constants.fetch-modes.md#pdo.constants.fetch-lazy);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ASSOC](pdo.constants.fetch-modes.md#pdo.constants.fetch-assoc);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_NUM](pdo.constants.fetch-modes.md#pdo.constants.fetch-num);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_BOTH](pdo.constants.fetch-modes.md#pdo.constants.fetch-both);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_OBJ](pdo.constants.fetch-modes.md#pdo.constants.fetch-obj);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_BOUND](pdo.constants.fetch-modes.md#pdo.constants.fetch-bound);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_COLUMN](pdo.constants.fetch-modes.md#pdo.constants.fetch-column);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_CLASS](pdo.constants.fetch-modes.md#pdo.constants.fetch-class);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_INTO](pdo.constants.fetch-modes.md#pdo.constants.fetch-into);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_FUNC](pdo.constants.fetch-modes.md#pdo.constants.fetch-func);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_GROUP](pdo.constants.fetch-modes.md#pdo.constants.fetch-group);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_UNIQUE](pdo.constants.fetch-modes.md#pdo.constants.fetch-unique);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_KEY\_PAIR](pdo.constants.fetch-modes.md#pdo.constants.fetch-key-pair);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_CLASSTYPE](pdo.constants.fetch-modes.md#pdo.constants.fetch-classtype);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_SERIALIZE](pdo.constants.fetch-modes.md#pdo.constants.fetch-serialize);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_PROPS\_LATE](pdo.constants.fetch-modes.md#pdo.constants.fetch-props-late);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_NAMED](pdo.constants.fetch-modes.md#pdo.constants.fetch-named);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_AUTOCOMMIT](pdo.constants.md#pdo.constants.attr-autocommit);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_PREFETCH](pdo.constants.md#pdo.constants.attr-prefetch);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_TIMEOUT](pdo.constants.md#pdo.constants.attr-timeout);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_ERRMODE](pdo.constants.md#pdo.constants.attr-errmode);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_SERVER\_VERSION](pdo.constants.md#pdo.constants.attr-server-version);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CLIENT\_VERSION](pdo.constants.md#pdo.constants.attr-client-version);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_SERVER\_INFO](pdo.constants.md#pdo.constants.attr-server-info);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CONNECTION\_STATUS](pdo.constants.md#pdo.constants.attr-connection-status);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CASE](pdo.constants.md#pdo.constants.attr-case);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CURSOR\_NAME](pdo.constants.md#pdo.constants.attr-cursor-name);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CURSOR](pdo.constants.md#pdo.constants.attr-cursor);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_ORACLE\_NULLS](pdo.constants.md#pdo.constants.attr-oracle-nulls);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_PERSISTENT](pdo.constants.md#pdo.constants.attr-persistent);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_STATEMENT\_CLASS](pdo.constants.md#pdo.constants.attr-statement-class);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_FETCH\_TABLE\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-table-names);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_FETCH\_CATALOG\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-catalog-names);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DRIVER\_NAME](pdo.constants.md#pdo.constants.attr-driver-name);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_STRINGIFY\_FETCHES](pdo.constants.md#pdo.constants.attr-stringify-fetches);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_MAX\_COLUMN\_LEN](pdo.constants.md#pdo.constants.attr-max-column-len);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_EMULATE\_PREPARES](pdo.constants.md#pdo.constants.attr-emulate-prepares);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DEFAULT\_FETCH\_MODE](pdo.constants.md#pdo.constants.attr-default-fetch-mode);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DEFAULT\_STR\_PARAM](pdo.constants.md#pdo.constants.attr-default-str-param);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_SILENT](pdo.constants.md#pdo.constants.errmode-silent);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_WARNING](pdo.constants.md#pdo.constants.errmode-warning);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_EXCEPTION](pdo.constants.md#pdo.constants.errmode-exception);

public
const
[int](language.types.integer.md)
[PDO::CASE\_NATURAL](pdo.constants.md#pdo.constants.case-natural);

public
const
[int](language.types.integer.md)
[PDO::CASE\_LOWER](pdo.constants.md#pdo.constants.case-lower);

public
const
[int](language.types.integer.md)
[PDO::CASE\_UPPER](pdo.constants.md#pdo.constants.case-upper);

public
const
[int](language.types.integer.md)
[PDO::NULL\_NATURAL](pdo.constants.md#pdo.constants.null-natural);

public
const
[int](language.types.integer.md)
[PDO::NULL\_EMPTY\_STRING](pdo.constants.md#pdo.constants.null-empty-string);

public
const
[int](language.types.integer.md)
[PDO::NULL\_TO\_STRING](pdo.constants.md#pdo.constants.null-to-string);

public
const
[string](language.types.string.md)
[PDO::ERR\_NONE](pdo.constants.md#pdo.constants.err-none);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_NEXT](pdo.constants.md#pdo.constants.fetch-ori-next);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_PRIOR](pdo.constants.md#pdo.constants.fetch-ori-prior);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_FIRST](pdo.constants.md#pdo.constants.fetch-ori-first);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_LAST](pdo.constants.md#pdo.constants.fetch-ori-last);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_ABS](pdo.constants.md#pdo.constants.fetch-ori-abs);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_REL](pdo.constants.md#pdo.constants.fetch-ori-rel);

public
const
[int](language.types.integer.md)
[PDO::CURSOR\_FWDONLY](pdo.constants.md#pdo.constants.cursor-fwdonly);

public
const
[int](language.types.integer.md)
[PDO::CURSOR\_SCROLL](pdo.constants.md#pdo.constants.cursor-scroll);

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[ATTR\_USE\_BUFFERED\_QUERY](class.pdo-mysql.md#pdo-mysql.constants.attr-use-buffered-query);

public
const
[int](language.types.integer.md)
[ATTR\_LOCAL\_INFILE](class.pdo-mysql.md#pdo-mysql.constants.attr-local-infile);

public
const
[int](language.types.integer.md)
[ATTR\_LOCAL\_INFILE\_DIRECTORY](class.pdo-mysql.md#pdo-mysql.constants.attr-local-infile-directory);

public
const
[int](language.types.integer.md)
[ATTR\_INIT\_COMMAND](class.pdo-mysql.md#pdo-mysql.constants.attr-init-command);

public
const
[int](language.types.integer.md)
[ATTR\_MAX\_BUFFER\_SIZE](class.pdo-mysql.md#pdo-mysql.constants.attr-max-buffer-size);

public
const
[int](language.types.integer.md)
[ATTR\_READ\_DEFAULT\_FILE](class.pdo-mysql.md#pdo-mysql.constants.attr-read-default-file);

public
const
[int](language.types.integer.md)
[ATTR\_READ\_DEFAULT\_GROUP](class.pdo-mysql.md#pdo-mysql.constants.attr-read-default-group);

public
const
[int](language.types.integer.md)
[ATTR\_COMPRESS](class.pdo-mysql.md#pdo-mysql.constants.attr-compress);

public
const
[int](language.types.integer.md)
[ATTR\_DIRECT\_QUERY](class.pdo-mysql.md#pdo-mysql.constants.attr-direct-query);

public
const
[int](language.types.integer.md)
[ATTR\_FOUND\_ROWS](class.pdo-mysql.md#pdo-mysql.constants.attr-found-rows);

public
const
[int](language.types.integer.md)
[ATTR\_IGNORE\_SPACE](class.pdo-mysql.md#pdo-mysql.constants.attr-ignore-space);

public
const
[int](language.types.integer.md)
[ATTR\_MULTI\_STATEMENTS](class.pdo-mysql.md#pdo-mysql.constants.attr-multi-statements);

public
const
[int](language.types.integer.md)
[ATTR\_SERVER\_PUBLIC\_KEY](class.pdo-mysql.md#pdo-mysql.constants.attr-server-public-key);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_KEY](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-key);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_CERT](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-cert);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_CA](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-ca);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_CAPATH](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-capath);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_CIPHER](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-cipher);

public
const
[int](language.types.integer.md)
[ATTR\_SSL\_VERIFY\_SERVER\_CERT](class.pdo-mysql.md#pdo-mysql.constants.attr-ssl-verify-server-cert);

/\* Métodos \*/

public function [getWarningCount](pdo-mysql.getwarningcount.md)(): [int](language.types.integer.md)

/\* Métodos herdados \*/

public function [PDO::\_\_construct](pdo.construct.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
)

public function [PDO::beginTransaction](pdo.begintransaction.md)(): [bool](language.types.boolean.md)

public function [PDO::commit](pdo.commit.md)(): [bool](language.types.boolean.md)

public static function [PDO::connect](pdo.connect.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): static

public function [PDO::errorCode](pdo.errorcode.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [PDO::errorInfo](pdo.errorinfo.md)(): [array](language.types.array.md)

public function [PDO::exec](pdo.exec.md)([string](language.types.string.md) `$statement`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [PDO::getAttribute](pdo.getattribute.md)([int](language.types.integer.md) `$attribute`): [mixed](language.types.mixed.md)

public static function [PDO::getAvailableDrivers](pdo.getavailabledrivers.md)(): [array](language.types.array.md)

public function [PDO::inTransaction](pdo.intransaction.md)(): [bool](language.types.boolean.md)

public function [PDO::lastInsertId](pdo.lastinsertid.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [PDO::prepare](pdo.prepare.md)([string](language.types.string.md) `$query`, [array](language.types.array.md) `$options` = []): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = **`null`**): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$colno`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)(  
    [string](language.types.string.md) `$query`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_CLASS,  
    [string](language.types.string.md) `$classname`,  
    [array](language.types.array.md) `$constructorArgs`  
): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_INTO, [object](language.types.object.md) `$object`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::quote](pdo.quote.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [PDO::rollBack](pdo.rollback.md)(): [bool](language.types.boolean.md)

public function [PDO::setAttribute](pdo.setattribute.md)([int](language.types.integer.md) `$attribute`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Pdo\Mysql::ATTR_USE_BUFFERED_QUERY`**
:   Por padrão, todas as instruções são executadas em
    [modo buffer](mysqlinfo.concepts.buffering.md).
    Se este atributo estiver definido como **`false`** em um
    objeto **Pdo\Mysql**,
    o driver MySQL usará o modo sem buffer.

    **Exemplo #1 Configurando o modo sem buffer do MySQL**

    ```
    <?php
    $pdo = new Pdo\Mysql("mysql:host=localhost;dbname=world", 'my_user', 'my_password');
    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

    $unbufferedResult = $pdo->query("SELECT Name FROM City");
    foreach ($unbufferedResult as $row) {
        echo $row['Name'] . PHP_EOL;
    }
    ?>
    ```

**`Pdo\Mysql::ATTR_LOCAL_INFILE`**
:   Habilita `LOAD LOCAL INFILE`.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_LOCAL_INFILE_DIRECTORY`**
:   Permite restringir o carregamento de LOCAL DATA a arquivos localizados neste
    diretório designado.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_INIT_COMMAND`**
:   Comando a ser executado ao conectar-se ao servidor MySQL.
    Será reexecutado automaticamente ao reconectar.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_READ_DEFAULT_FILE`**
:   Lê as opções do arquivo de opções nomeado em vez de
    my.cnf.

    > **Nota**:
    >
    > Esta opção não está disponível se mysqlnd for usado,
    > porque o mysqlnd não lê os arquivos de configuração do mysql.

**`Pdo\Mysql::ATTR_READ_DEFAULT_GROUP`**
:   Lê opções do grupo nomeado de my.cnf ou
    do arquivo especificado com
    **`Pdo\Mysql::ATTR_READ_DEFAULT_FILE`**.

    > **Nota**:
    >
    > Esta opção não está disponível se mysqlnd for usado,
    > porque o mysqlnd não lê os arquivos de configuração do mysql.

**`Pdo\Mysql::ATTR_COMPRESS`**
:   Ativa a compactação de comunicação de rede.

**`Pdo\Mysql::ATTR_DIRECT_QUERY`**
:   Sinônimo de **`PDO::ATTR_EMULATE_PREPARES`**.

**`Pdo\Mysql::ATTR_FOUND_ROWS`**
:   Retorna o número de linhas encontradas (correspondidas),
    não o número de linhas alteradas.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_IGNORE_SPACE`**
:   Permite espaços após nomes de funções SQL.
    Torna todos os nomes de funções SQL palavras reservadas.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_MAX_BUFFER_SIZE`**
:   Tamanho máximo do buffer. O padrão é 1 MiB.

    > **Nota**:
    >
    > Esta constante não é suportada quando compilada no mysqlnd.

**`Pdo\Mysql::ATTR_MULTI_STATEMENTS`**
:   Desativa a execução de múltiplas consultas em
    [PDO::prepare()](pdo.prepare.md) e
    [PDO::query()](pdo.query.md) quando definido como **`false`**.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SERVER_PUBLIC_KEY`**
:   Arquivo de chave pública RSA usado com autenticação baseada em SHA-256.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_KEY`**
:   O caminho do arquivo para a chave SSL.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_CERT`**
:   O caminho do arquivo para o certificado SSL.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_CA`**
:   O caminho do arquivo para a autoridade de certificação SSL.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_CAPATH`**
:   O caminho do arquivo para o diretório que contém os certificados
    CA SSL confiáveis,
    que são armazenados no formato PEM.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_CIPHER`**
:   Uma lista de uma ou mais cifras permitidas para uso na
    criptografia SSL, em um formato compreendido pelo OpenSSL.
    Por exemplo, `DHE-RSA-AES256-SHA:AES128-SHA`.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

**`Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT`**
:   Fornece uma maneira de desabilitar a verificação do certificado SSL do servidor.

    > **Nota**:
    >
    > Esta opção está disponível apenas com mysqlnd.

    > **Nota**:
    >
    > Só pode ser usado no array `driver_options`
    > ao construir um novo identificador de banco de dados.

## Índice

- [Pdo\Mysql::getWarningCount](pdo-mysql.getwarningcount.md) — Retorna o número de alertas da última consulta executada

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
