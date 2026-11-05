# Sets a millisecond timeout for database calls

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-call-timout.php

---

# oci\_set\_call\_timeout

(PHP 7.2 >= 7.2.14, PHP 8, PHP 7 >= 7.3.1, PHP 8, PECL OCI8 >= 2.2.0)

oci\_set\_call\_timeout — Sets a millisecond timeout for database calls

### Descrição

function **oci\_set\_call\_timeout**([resource](language.types.resource.md) `$connection`, [int](language.types.integer.md) `$timeout`): [bool](language.types.boolean.md)

Define um tempo limite máximo que uma viagem de ida e volta ao banco de dados usando esta conexão pode levar.

Cada operação OCI8 pode fazer zero ou mais chamadas à biblioteca cliente
da Oracle. Essas chamadas internas podem, então, fazer zero ou mais
viagens de ida e volta ao banco de dados Oracle. Se qualquer uma dessas viagens de ida e volta
levar mais de `time_out` milissegundos, a
operação será cancelada e um erro será retornado ao aplicativo.

O valor `time_out` se aplica a cada viagem de ida e volta
individualmente, não à soma de todas as viagens de ida e volta. O tempo gasto
no processamento em PHP OCI8 antes ou depois da conclusão de cada
viagem de ida e volta não é contabilizado.

Quando uma chamada é interrompida, a Oracle tentará limpar a
conexão para reutilização. Esta operação pode ser executada por
outro período de `time_out`. Dependendo do
resultado da limpeza, a conexão pode ou não ser reutilizável.

Quando conexões persistentes são usadas, o valor de tempo limite será
mantido em todas as solicitações PHP.

A função **oci\_set\_call\_timeout()** está disponível
quando o OCI8 usa bibliotecas de cliente Oracle 18 (ou posterior).

### Parâmetros

`connection`
:   Um identificador de conexão Oracle,
    retornado por [oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
    ou [oci\_new\_connect()](function.oci-new-connect.md).

`timeout`
:   O tempo máximo em milissegundos que qualquer viagem de ida e volta entre PHP e Oracle Database pode levar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo o tempo limite**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
oci_set_call_timeout($conn, 5000);

?>
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
