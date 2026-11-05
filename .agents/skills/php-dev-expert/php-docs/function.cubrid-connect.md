# Abre uma conexão a um servidor CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-connect.php

---

# cubrid\_connect

(PECL CUBRID >= 8.3.1)

cubrid\_connect — Abre uma conexão a um servidor CUBRID

### Descrição

function **cubrid\_connect**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$dbname`,  
    [string](language.types.string.md) `$userid` = ?,  
    [string](language.types.string.md) `$passwd` = ?,  
    [bool](language.types.boolean.md) `$new_link` = **`false`**  
): [resource](language.types.resource.md)

A função **cubrid\_connect()** é usada para estabelecer o
ambiente para conexão ao servidor usando o endereço do servidor,
número da porta, nome do banco de dados, nome de usuário e senha. Se o nome de usuário e
a senha não forem informados, a conexão "PUBLIC" será realizada por
padrão.

### Parâmetros

`host`
:   Nome de servidor ou endereço IP do servidor CUBRID CAS.

`port`
:   Número da porta do servidor CUBRID CAS (BROKER\_PORT configurado em $CUBRID/conf/cubrid\_broker.conf).

`dbname`
:   Nome do banco de dados.

`userid`
:   Nome de usuário do banco de dados. Se não for
    informado, o valor padrão será “público”.

`passwd`
:   Senha do usuário. Se não for informado, o valor padrão será "".

`new_link`
:   Se uma segunda chamada for feita a
    **cubrid\_connect()** com os mesmos argumentos, nenhuma nova
    conexão será estabelecida, mas em vez disso, o identificador da conexão
    já aberta será retornado. O parâmetro
    `new_link` modifica este comportamento e
    faz com que **cubrid\_connect()** sempre abra uma nova conexão,
    mesmo que **cubrid\_connect()** tenha sido chamada antes com
    os mesmos parâmetros.

### Valor Retornado

Identificador da conexão em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_connect()****

```
<?php
printf("%-34s %s\n", "Versão do CUBRID PHP:", cubrid_version());

printf("\n");

$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

if (!$conn) {
    die('Erro de conexão ('. cubrid_error_code() .')' . cubrid_error_msg());
}

$db_params = cubrid_get_db_parameter($conn);

while (list($param_name, $param_value) = each($db_params)) {
    printf("%-34s %s\n", $param_name, $param_value);
}

printf("\n");

$server_info = cubrid_get_server_info($conn);
$client_info = cubrid_get_client_info();

printf("%-34s %s\n", "Informação do Servidor:", $server_info);
printf("%-34s %s\n", "Informação do Cliente:", $client_info);

printf("\n");

$charset = cubrid_get_charset($conn);

printf("%-34s %s\n", "Conjunto de caracteres do CUBRID:", $charset);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Versão do CUBRID PHP:              9.1.0.0001

PARAM_ISOLATION_LEVEL              3
LOCK_TIMEOUT                       -1
MAX_STRING_LENGTH                  1073741823
PARAM_AUTO_COMMIT                  1

Informação do Servidor:            9.1.0.0212
Informação do Cliente:             9.1.0

Conjunto de caracteres do CUBRID:  iso8859-1
```

### Veja também

- [cubrid\_pconnect()](function.cubrid-pconnect.md) - Abre uma conexão persistente a um servidor CUBRID
- [cubrid\_connect\_with\_url()](function.cubrid-connect-with-url.md) - Prepara o ambiente para conexão ao servidor CUBRID
- [cubrid\_pconnect\_with\_url()](function.cubrid-pconnect-with-url.md) - Abre uma conexão persistente com o servidor CUBRID
- [cubrid\_disconnect()](function.cubrid-disconnect.md) - Fecha uma conexão ao banco de dados
- [cubrid\_close()](function.cubrid-close.md) - Fecha conexão CUBRID

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
