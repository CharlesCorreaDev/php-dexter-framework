# MQDISC MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-disc.php

---

# mqseries\_disc

(PECL mqseries >= 0.10.0)

mqseries\_disc — MQDISC MQSeries

### Descrição

function **mqseries\_disc**([resource](language.types.resource.md) `$hconn`, [resource](language.types.resource.md) `&$compCode`, [resource](language.types.resource.md) `&$reason`): [void](language.types.void.md)

A chamada
**mqseries\_disc()**
(MQDISC) interrompe a conexão entre o gerenciador de filas e a
aplicação e é o inverso da chamada
[mqseries\_conn()](function.mqseries-conn.md)
(MQCONN) ou
[mqseries\_connx()](function.mqseries-connx.md)
(MQCONNX).

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_disc()****

```
<?php
    mqseries_disc($conn, $comp_code, $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("disc CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    }
?>
```

### Veja também

- [mqseries\_conn()](function.mqseries-conn.md) - MQCONN MQSeries
- [mqseries\_connx()](function.mqseries-connx.md) - MQCONNX MQSeries

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
