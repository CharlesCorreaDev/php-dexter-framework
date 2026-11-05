# Obtém a versão do módulo do CUBRID PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-version.php

---

# cubrid\_version

(PECL CUBRID >= 8.3.0)

cubrid\_version — Obtém a versão do módulo do CUBRID PHP

### Descrição

function **cubrid\_version**(): [string](language.types.string.md)

A função **cubrid\_version()** é usada para obter a versão
do módulo do CUBRID PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Informação de versão (ex.: "8.3.1.0001").

### Examples

**Exemplo #1 Exemplo de **cubrid\_version()****

```
<?php
printf("%-30s %s\n", "Versão do CUBRID PHP:", cubrid_version());

printf("\n");

$conn = cubrid_connect("localhost", 33088, "demodb", "dba");

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

printf("%-30s %s\n", "Informação do Servidor:", $server_info);
printf("%-30s %s\n", "Informação do Cliente:", $client_info);

printf("\n");

$charset = cubrid_get_charset($conn);

printf("%-30s %s\n", "Conjunto de Caracteres do CUBRID:", $charset);

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

Informação do Servidor:        9.1.0.0212
Informação do Cliente:         9.1.0

Conj. de Caracteres do CUBRID: iso8859-1
```

### Veja também

- [cubrid\_error\_code()](function.cubrid-error-code.md) - Obtém código de erro para a chamada de função mais recente
- [cubrid\_error\_code\_facility()](function.cubrid-error-code-facility.md) - Obtém o código do módulo do erro

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
