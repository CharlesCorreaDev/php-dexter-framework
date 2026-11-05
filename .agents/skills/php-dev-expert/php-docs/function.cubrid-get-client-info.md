# Retorna a versão da biblioteca cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-client-info.php

---

# cubrid\_get\_client\_info

(PECL CUBRID >= 8.3.0)

cubrid\_get\_client\_info — Retorna a versão da biblioteca cliente

### Descrição

function **cubrid\_get\_client\_info**(): [string](language.types.string.md)

Esta função retorna uma string que representa a versão da biblioteca cliente.

### Parâmetros

### Valor Retornado

Uma string que representa a versão da biblioteca cliente em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_get\_client\_info()****

```
<?php
printf("%-30s %s\n", "Versão do CUBRID PHP:", cubrid_version());

printf("\n");

$conn = cubrid_connect("localhost", 33088, "demodb");

if (!$conn) {
    die('Erro de conexão ('. cubrid_error_code() .')' . cubrid_error_msg());
}

$db_params = cubrid_get_db_parameter($conn);

while (list($param_name, $param_value) = each($db_params)) {
    printf("%-30s %s\n", $param_name, $param_value);
}

printf("\n");

$server_info = cubrid_get_server_info($conn);
$client_info = cubrid_get_client_info();

printf("%-30s %s\n", "Informação do servidor:", $server_info);
printf("%-30s %s\n", "Informação do cliente:", $client_info);

printf("\n");

$charset = cubrid_get_charset($conn);

printf("%-30s %s\n", "Conjunto de caracteres CUBRID:", $charset);

cubrid_disconnect($conn);

?>
```

O exemplo acima produzirá:

```
Versão do CUBRID PHP:          9.1.0.0001

PARAM_ISOLATION_LEVEL          3
LOCK_TIMEOUT                   -1
MAX_STRING_LENGTH              1073741823
PARAM_AUTO_COMMIT              1

Informação do servidor:        9.1.0.0212
Informação do cliente:         9.1.0

Conjunto de caracteres CUBRID: iso8859-1
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
