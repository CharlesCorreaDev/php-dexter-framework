# MQCLOSE de MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-close.php

---

# mqseries\_close

(PECL mqseries >= 0.10.0)

mqseries\_close — MQCLOSE de MQSeries

### Descrição

function **mqseries\_close**(  
    [resource](language.types.resource.md) `$hconn`,  
    [resource](language.types.resource.md) `$hobj`,  
    [int](language.types.integer.md) `$options`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_close()**
(MQCLOSE) abre mão do acesso a um objeto e é o inverso da chamada
[mqseries\_open()](function.mqseries-open.md)
(MQOPEN).

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`options`

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_close()****

```
<?php
    mqseries_close($conn, $obj, MQSERIES_MQCO_NONE, $comp_code, $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("close CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    }
?>
```

### Veja também

- [mqseries\_open()](function.mqseries-open.md) - MQOPEN MQSeries
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
