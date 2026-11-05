# Abre uma conexão a um servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.real-connect.php

---

# mysqli::real\_connect

# mysqli\_real\_connect

(PHP 5, PHP 7, PHP 8)

mysqli::real\_connect -- mysqli\_real\_connect — Abre uma conexão a um servidor MySQL

### Descrição

Estilo orientado a objetos

public function **mysqli::real\_connect**(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_real\_connect**(  
    [mysqli](class.mysqli.md) `$mysql`,  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Abre uma conexão a um servidor de banco de dados MySQL
com várias opções de conexão.

Esta função difere de [mysqli\_connect()](function.mysqli-connect.md):

- **mysqli\_real\_connect()** precisa de um objeto válido que deve
  ser criado por [mysqli\_init()](mysqli.init.md).
- Existe um parâmetro `flags`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`hostname`
:   Pode ser um nome de host ou um endereço IP. Ao passar **`null`**, o valor é recuperado de
    [mysqli.default\_host](mysqli.configuration.md#ini.mysqli.default-host).
    Quando possível, serão usados pipes em vez do protocolo TCP/IP.
    O protocolo TCP/IP é usado se um nome de host e um número de porta forem fornecidos juntos, por ex. `localhost:3308`.

`username`
:   O nome de usuário do MySQL, ou **`null`** para assumir o nome de usuário com base na opção ini
    [mysqli.default\_user](mysqli.configuration.md#ini.mysqli.default-user).

`password`
:   A senha do MySQL, ou **`null`** para assumir a senha com base na opção ini
    [mysqli.default\_pw](mysqli.configuration.md#ini.mysqli.default-pw).

`database`
:   O banco de dados padrão a ser usado ao realizar consultas ou **`null`**.

`port`
:   O número da porta para tentar conectar ao servidor MySQL ou **`null`** para assumir a porta com base na opção
    [mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port).

`socket`
:   O socket ou pipe nomeado que deve ser usado ou **`null`** para assumir o socket com base na opção ini
    [mysqli.default\_socket](mysqli.configuration.md#ini.mysqli.default-socket).

    > **Nota**:
    >
    > A especificação do parâmetro `socket` não determinará
    > explicitamente o tipo de conexão a ser usada ao
    > conectar-se ao servidor MySQL. A forma como a conexão é feita com o
    > banco de dados MySQL é determinada pelo parâmetro
    > `hostname`.

`flags`
:   Com o parâmetro `flags`, pode-se definir diferentes
    opções de conexão:

    **Opções suportadas**

    | Nome | Descrição |
    | --- | --- |
    | **`MYSQLI_CLIENT_COMPRESS`** | Usa protocolo de compressão |
    | **`MYSQLI_CLIENT_FOUND_ROWS`** | Retorna o número de linhas correspondentes, não o número de linhas afetadas |
    | **`MYSQLI_CLIENT_IGNORE_SPACE`** | Permite espaços após os nomes das funções. Faz com que todos os nomes de funções sejam palavras reservadas. |
    | **`MYSQLI_CLIENT_INTERACTIVE`** | Permite segundos de `interactive_timeout` (em vez de segundos de `wait_timeout`) de inatividade antes de fechar a conexão |
    | **`MYSQLI_CLIENT_SSL`** | Usa SSL (criptografia) |
    | **`MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT`** | Como **`MYSQLI_CLIENT_SSL`**, mas desabilita a validação do certificado SSL fornecido. Isso é apenas para instalações usando o driver nativo do MySQL e MySQL 5.6 ou posterior. |

    > **Nota**:
    >
    > Por motivos de segurança, a opção **`MULTI_STATEMENT`**
    > não é suportado no PHP. Se for desejado executar várias consultas, use a
    > função [mysqli\_multi\_query()](mysqli.multi-query.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Todos os parâmetros agora são anuláveis. |

### Examples

**Exemplo #1 Exemplo de **mysqli::real\_connect()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_init();

$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0');
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);

$mysqli->real_connect('localhost', 'my_user', 'my_password', 'my_db', null, null, MYSQLI_CLIENT_COMPRESS|MYSQLI_CLIENT_FOUND_ROWS);

echo 'Sucesso... ' . $mysqli->host_info . "\n";
```

Estilo orientado a objetos ao estender a classe mysqli

```
<?php

class foo_mysqli extends mysqli {
    public function __construct($host, $user, $pass, $db)
    {
        parent::__construct();

        parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0');
        parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);

        parent::real_connect($host, $user, $pass, $db, null, null, MYSQLI_CLIENT_COMPRESS|MYSQLI_CLIENT_FOUND_ROWS);
    }
}

$db = new foo_mysqli('localhost', 'my_user', 'my_password', 'my_db');

echo 'Sucesso... ' . $db->host_info . "\n";
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_init();

mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0');
mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5);

mysqli_real_connect($link, 'localhost', 'my_user', 'my_password', 'my_db', null, null, MYSQLI_CLIENT_COMPRESS|MYSQLI_CLIENT_FOUND_ROWS);

echo 'Sucesso... ' . mysqli_get_host_info($link) . "\n";
```

Os exemplos acima produzirão:

```
Sucesso... MySQL host info: localhost via TCP/IP
```

### Notas

> **Nota**:
>
> O MySQLnd sempre assume o conjunto de caracteres padrão do servidor. Este conjunto de caracteres é enviado durante a
> criação/autenticação da conexão e será usado pelo mysqlnd.
>
> A libmysqlclient usa o conjunto de caracteres padrão definido no
> arquivo my.cnf ou definido por uma chamada explícita a [mysqli\_options()](mysqli.options.md) antes de
> chamar **mysqli\_real\_connect()**, mas depois de chamar [mysqli\_init()](mysqli.init.md).

### Veja também

- [mysqli\_connect()](function.mysqli-connect.md) - Sinônimo de mysqli::\_\_construct
- [mysqli\_init()](mysqli.init.md) - Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli\_real\_connect()
- [mysqli\_options()](mysqli.options.md) - Define opções
- [mysqli\_ssl\_set()](mysqli.ssl-set.md) - Usado para estabelecer conexões seguras usando SSL
- [mysqli\_close()](mysqli.close.md) - Fecha uma conexão ao banco de dados previamente aberta

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
