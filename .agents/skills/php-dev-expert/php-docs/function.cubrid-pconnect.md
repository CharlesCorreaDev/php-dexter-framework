# Abre uma conexão persistente a um servidor CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-pconnect.php

---

# cubrid\_pconnect

(PECL CUBRID >= 8.3.1)

cubrid\_pconnect — Abre uma conexão persistente a um servidor CUBRID

### Descrição

function **cubrid\_pconnect**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$dbname`,  
    [string](language.types.string.md) `$userid` = ?,  
    [string](language.types.string.md) `$passwd` = ?  
): [resource](language.types.resource.md)

Estabelece uma conexão persistente a um servidor CUBRID.

**cubrid\_pconnect()** funciona de forma muito similar a
[cubrid\_connect()](function.cubrid-connect.md) com duas diferenças principais.

Primeiro, ao conectar, a função tentará primeiro encontrar uma conexão (persistente)
já aberta com o mesmo servidor, porta, nome do banco de dados e ID do usuário. Se
for encontrada, um identificador será retornado em vez de abrir uma nova
conexão.

Segundo, a conexão com o servidor SQL não será encerrada quando a
execução do script terminar. Em vez disso, a conexão permanecerá aberta para
uso futuro ([cubrid\_close()](function.cubrid-close.md) ou
[cubrid\_disconnect()](function.cubrid-disconnect.md) não fecharão conexões estabelecidas por
**cubrid\_pconnect()**).

Este tipo de conexão é, portanto, denominada 'persistente'.

### Parâmetros

`host`
:   Nome de servidor ou endereço IP do servidor CUBRID CAS.

`port`
:   Número da porta do servidor CUBRID CAS (BROKER\_PORT configurado em $CUBRID/conf/cubrid\_broker.conf).

`dbname`
:   Nome do banco de dados.

`userid`
:   Nome de usuário do banco de dados.

`passwd`
:   Senha do usuário.

### Valor Retornado

Identificador da conexão em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_pconnect()****

```
<?php
printf("%-34s %s\n", "Versão do CUBRID PHP:", cubrid_version());

printf("\n");

$conn = cubrid_pconnect("localhost", 33000, "demodb", "dba");

if (!$conn) {
    die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
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

- [cubrid\_connect()](function.cubrid-connect.md) - Abre uma conexão a um servidor CUBRID
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
