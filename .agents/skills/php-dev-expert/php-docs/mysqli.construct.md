# Abre uma nova conexão com o servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.construct.php

---

# mysqli::\_\_construct

# mysqli::connect

# mysqli\_connect

(PHP 5, PHP 7, PHP 8)

mysqli::\_\_construct -- mysqli::connect -- mysqli\_connect — Abre uma nova conexão com o servidor MySQL

### Descrição

Estilo orientado a objetos

public function **mysqli::\_\_construct**(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**  
)

public function **mysqli::connect**(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**  
): [bool](language.types.boolean.md)

Estilo procedural

function [mysqli\_connect](function.mysqli-connect.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**  
): [mysqli](class.mysqli.md)|[false](language.types.singleton.md)

Abre uma conexão com o servidor MySQL.

### Parâmetros

`hostname`
:   Pode ser um nome de host ou um endereço IP. Ao passar **`null`**, o valor é recuperado de
    [mysqli.default\_host](mysqli.configuration.md#ini.mysqli.default-host).
    Quando possível, serão usados pipes em vez do protocolo TCP/IP.
    O protocolo TCP/IP é usado se um nome de host e um número de porta forem fornecidos juntos, por ex. `localhost:3308`.

    Prefixar o host com `p:` abre uma conexão persistente.
    [mysqli\_change\_user()](mysqli.change-user.md) é chamado automaticamente em
    conexões abertas a partir do pool de conexões.

`username`
:   O nome de usuário do MySQL ou **`null`** para assumir o nome de usuário com base na
    opção ini [mysqli.default\_user](mysqli.configuration.md#ini.mysqli.default-user).

`password`
:   A senha do MySQL ou **`null`** para assumir a senha com base na opção ini
    [mysqli.default\_pw](mysqli.configuration.md#ini.mysqli.default-pw).

`database`
:   O banco de dados padrão a ser utilizado ao realizar consultas ou **`null`**.

`port`
:   O número da porta para tentar conectar ao servidor MySQL ou **`null`** para assumir a porta com base na opção ini
    [mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port).

`socket`
:   O socket ou pipe nomeado que deve ser usado ou **`null`** para assumir o socket com base na opção ini
    [mysqli.default\_socket](mysqli.configuration.md#ini.mysqli.default-socket).

    > **Nota**:
    >
    > A especificação do parâmetro `socket` não determinará
    > explicitamente o tipo de conexão a ser usada ao conectar-se
    > ao servidor MySQL. A maneira com a qual a conexão é feita com o banco de
    > dados MySQL é determinada pelo parâmetro
    > `hostname`.

### Valor Retornado

**mysqli::\_\_construct()** sempre retorna um objeto
que representa a conexão a um servidor MySQL,
independente se teve sucesso ou não.

[mysqli\_connect()](function.mysqli-connect.md) retorna um objeto que representa a conexão com um servidor MySQL,
ou **`false`** em caso de falha.

**mysqli::connect()** retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Antes do PHP 8.1.0, ele retornava **`null`** em caso de sucesso.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora, o método **mysqli::connect()** retorna **`true`** em vez de **`null`** em caso de sucesso. |
| 7.4.0 | Todos os parâmetros podem ser null. |

### Examples

**Exemplo #1 Exemplo de **mysqli::\_\_construct()****

Estilo orientado a objetos

```
<?php

/* O relatório de erros para mysqli deve ser ativado antes de tentar fazer uma conexão */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

/* Defina o conjunto de caracteres desejado após estabelecer uma conexão */
$mysqli->set_charset('utf8mb4');

printf("Success... %s\n", $mysqli->host_info);
```

Estilo procedural

```
<?php

/* O relatório de erros para mysqli deve ser ativado antes de tentar fazer uma conexão */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');

/* Defina o conjunto de caracteres desejado após estabelecer uma conexão */
mysqli_set_charset($mysqli, 'utf8mb4');

printf("Sucesso... %s\n", mysqli_get_host_info($mysqli));
```

Os exemplos acima produzirão
algo semelhante a:

```
Sucesso... localhost via TCP/IP
```

**Exemplo #2 Estendendo a classe mysqli**

```
<?php

class FooMysqli extends mysqli {
    public function __construct($host, $user, $pass, $db, $port, $socket, $charset) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        parent::__construct($host, $user, $pass, $db, $port, $socket);
        $this->set_charset($charset);
    }
}

$db = new FooMysqli('localhost', 'my_user', 'my_password', 'my_db', 3306, null, 'utf8mb4');
```

**Exemplo #3 Tratamento manual de erros**

Se o relatório de erros estiver desabilitado, o desenvolvedor é responsável por verificar e tratar as falhas

Estilo orientado a objetos

```
<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
if ($mysqli->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $mysqli->connect_error);
}

/* Defina o conjunto de caracteres desejado após estabelecer uma conexão */
$mysqli->set_charset('utf8mb4');
if ($mysqli->errno) {
    throw new RuntimeException('mysqli error: ' . $mysqli->error);
}
```

Estilo procedural

```
<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
if (mysqli_connect_errno()) {
    throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
}

/* Defina o conjunto de caracteres desejado após estabelecer uma conexão */
mysqli_set_charset($mysqli, 'utf8mb4');
if (mysqli_errno($mysqli)) {
    throw new RuntimeException('mysqli error: ' . mysqli_error($mysqli));
}
```

### Notas

> **Nota**:
>
> O MySQLnd sempre assume o conjunto de caracteres padrão do servidor. Este conjunto de caracteres é enviado durante a
> criação/autenticação da conexão e será usado pelo mysqlnd.
>
> A libmysqlclient usa o conjunto de caracteres padrão definido no
> arquivo my.cnf ou definido por uma chamada explícita a [mysqli\_options()](mysqli.options.md) antes de
> chamar [mysqli\_real\_connect()](mysqli.real-connect.md), mas depois de chamar [mysqli\_init()](mysqli.init.md).

> **Nota**:
>
> Estilo orientado a objetos apenas: Se a conexão falhar, um objeto ainda será retornado. Para verificar
> se a conexão falhou, use a função
> [mysqli\_connect\_error()](mysqli.connect-error.md) ou a propriedade [mysqli->connect\_error](mysqli.connect-error.md)
> como nos exemplos anteriores.

> **Nota**:
>
> Se for necessário definir opções, como o tempo limite de conexão,
> [mysqli\_real\_connect()](mysqli.real-connect.md) deve ser usado.

> **Nota**:
>
> Chamar o construtor sem parâmetros é o mesmo que chamar
> [mysqli\_init()](mysqli.init.md).

> **Nota**:
>
> O erro "Can't create TCP/IP socket (10106)" geralmente significa que a diretiva de configuração [variables\_order](ini.core.md#ini.variables-order)
> não contém o caractere `E`. No Windows, se o
> ambiente não for copiado, a variável de ambiente `SYSTEMROOT`
> não estará disponível e o PHP terá problemas para carregar o Winsock.

### Veja também

- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL
- [mysqli\_options()](mysqli.options.md) - Define opções
- [mysqli\_connect\_errno()](mysqli.connect-errno.md) - Retorna o código de erro da última chamada de conexão
- [mysqli\_connect\_error()](mysqli.connect-error.md) - Retorna uma descrição do último erro de conexão
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
