# Conecta a um servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-xdevapi-getsession.php

---

# getSession

(No version information available, might only be in Git)

getSession — Conecta a um servidor MySQL

### Descrição

function **mysql\_xdevapi\getSession**([string](language.types.string.md) `$uri`): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

Conecta a um servidor MySQL.

### Parâmetros

`uri`
:   A URI para o servidor MySQL server, como `mysqlx://user:password@host`.

    Formato da URI:

    `scheme://[user[:[password]]@]target[:port][?attribute1=value1&attribute2=value2...`

    - `scheme`: requerido, o protocolo de conexão

      Na mysql\_xdevapi é sempre 'mysqlx' (para o Protocolo X)
    - `user`: opcional, a conta de usuário do MySQL para autenticação
    - `password`: opcional, a senha do usuário do MySQL para autenticação
    - `target`: requerido, a instância do servidor à qual a conexão se refere:

      \* Conexão TCP (nome de servidor, endereço IPv4 ou endereço IPv6)

      \* Caminho do soquete Unix (caminho de arquivo local)

      \* Pipe nomeado do Windows (caminho de arquivo local)
    - `port`: opcional, porta de rede do servidor MySQL.

      Por padrão a porta do Protocolo X é 33060
    - `?attribute=value`: este elemento é opcional e especifica um dicionário de dados
      que contém diferentes opções, incluindo:

      - O atributo `auth` (mecanismo de autenticação) relacionado a conexões criptografadas.
        Para informação adicional, consulte [» Opções de Comando
        para Conexões Criptografadas](https://dev.mysql.com/doc/refman/8.0/en/encrypted-connection-options.html).
        Os seguintes valores de 'auth' são suportados: `plain`,
        `mysql41`, `external` e `sha256_mem`.
      - O atributo `connect-timeout` afeta a conexão
        e não as operações subsequentes. É definido por conexão, seja
        em servidor único ou em múltiplos servidores.

        Passar um número inteiro positivo define o tempo limite da conexão em segundos,
        passar 0 (zero) desabilita o tempo limite (infinito). Não definir
        o tempo limite de conexão usa o valor padrão de 10.

        Relacionado, as variáveis ​​de ambiente MYSQLX\_CONNECTION\_TIMEOUT (tempo limite em segundos) e MYSQLX\_TEST\_CONNECTION\_TIMEOUT (usadas durante a execução de testes)
        podem ser definidas e usadas em vez do tempo limite de conexão na URI. A
        opção de URI de tempo limite de conexão tem precedência sobre essas variáveis ​​de ambiente.
      - O atributo opcional `compression` aceita estes valores:
        `preferred` (o cliente negocia com o servidor para encontrar um algoritmo suportado; a conexão é descompactada se um algoritmo mutuamente suportado não for encontrado),
        `required` (como "preferred", mas a conexão é terminada se um algoritmo mutuamente suportado não for encontrado), ou
        `disabled` (conexão é descompactada). O padrão é `preferred`.

        Esta opção foi adicionada na versão 8.0.20.
      - O atributo opcional `compression-algorithms` define
        os algortimos de compressão desejados (e sua ordem preferida de uso):
        `zstd_stream` (sinônimo: zstd),
        `lz4_message` (sinônimo: lz4), ou
        `deflate_stream` (sinônimos: deflate ou zlib).
        Por padrão, a ordem usada (dependendo da disponibilidade do sistema) é lz4\_message, zstd\_stream e depois deflate\_stream.
        Por exemplo, passar compression-algorithms=[lz4,zstd\_stream] usa lz4 se estiver disponível, caso contrário,
        zstd\_stream é usado. Se ambos estiverem indisponíveis, o comportamento dependerá do valor da compactação,
        por exemplo, se compression=required então falhará com um erro.

        Esta opção foi adicionada na versão 8.0.22.

    **Exemplo #1 Exemplos de URI**

    ```
    mysqlx://foobar
    mysqlx://root@localhost?socket=%2Ftmp%2Fmysqld.sock%2F
    mysqlx://foo:bar@localhost:33060
    mysqlx://foo:bar@localhost:33160?ssl-mode=disabled
    mysqlx://foo:bar@localhost:33260?ssl-mode=required
    mysqlx://foo:bar@localhost:33360?ssl-mode=required&auth=mysql41
    mysqlx://foo:bar@(/path/to/socket)
    mysqlx://foo:bar@(/path/to/socket)?auth=sha256_mem
    mysqlx://foo:bar@[localhost:33060, 127.0.0.1:33061]
    mysqlx://foobar?ssl-ca=(/path/to/ca.pem)&ssl-crl=(/path/to/crl.pem)
    mysqlx://foo:bar@[localhost:33060, 127.0.0.1:33061]?ssl-mode=disabled
    mysqlx://foo:bar@localhost:33160/?connect-timeout=0
    mysqlx://foo:bar@localhost:33160/?connect-timeout=10&compression=required
    mysqlx://foo:bar@localhost:33160/?connect-timeout=10&compression=required&compression-algorithms=[lz4,zstd_stream]
    ```

    Para informações relacionadas, consulte a documentação sobre
    [» Conectando com uma String de URI](https://dev.mysql.com/doc/refman/8.0/en/mysql-shell-connection-using-uri.html) do Shell do MySQL.

### Valor Retornado

Um objeto **Session**.

### Erros/Exceções

Uma falha de conexão lança uma [Exception](class.exception.md).

### Examples

**Exemplo #2 Exemplo de **mysql\_xdevapi\getSession()****

```
<?php
try {
    $session = mysql_xdevapi\getSession("mysqlx://user:password@host");
} catch(Exception $e) {
    die("A conexão não pode ser estabelecida: " . $e->getMessage());
}

$schemas = $session->getSchemas();
print_r($schemas);

$mysql_version = $session->getServerVersion();
print_r($mysql_version);

var_dump($collection->find("name = 'Alfred'")->execute()->fetchOne());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => mysql_xdevapi\Schema Object
        (
            [name] => helloworld
        )
    [1] => mysql_xdevapi\Schema Object
        (
            [name] => information_schema
        )
    [2] => mysql_xdevapi\Schema Object
        (
            [name] => mysql
        )
    [3] => mysql_xdevapi\Schema Object
        (
            [name] => performance_schema
        )
    [4] => mysql_xdevapi\Schema Object
        (
            [name] => sys
        )
)

80012

array(4) {
  ["_id"]=>
  string(28) "00005ad66abf0001000400000003"
  ["age"]=>
  int(42)
  ["job"]=>
  string(7) "Butler"
  ["name"]=>
  string(4) "Alfred"
}
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
