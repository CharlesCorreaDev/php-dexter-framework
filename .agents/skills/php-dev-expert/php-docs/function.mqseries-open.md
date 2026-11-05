# MQOPEN MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-open.php

---

# mqseries\_open

(PECL mqseries >= 0.10.0)

mqseries\_open — MQOPEN MQSeries

### Descrição

function **mqseries\_open**(  
    [resource](language.types.resource.md) `$hconn`,  
    [array](language.types.array.md) `&$objDesc`,  
    [int](language.types.integer.md) `$option`,  
    [resource](language.types.resource.md) `&$hobj`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_open()**
(MQOPEN) estabelece acesso a um objeto.

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`objDesc`
:   Descritor de objeto. (MQOD)

`options`
:   Opções que controlam a ação da função.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_open()****

```
<?php
    $mqods = array('ObjectName' => 'TESTQ');
    mqseries_open(
                $conn,
                $mqods,
                MQSERIES_MQOO_INPUT_AS_Q_DEF | MQSERIES_MQOO_FAIL_IF_QUIESCING | MQSERIES_MQOO_OUTPUT,
                $obj,
                $comp_code,
                $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("open CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
        exit;
    }
?>
```

### Veja também

- [mqseries\_close()](function.mqseries-close.md) - MQCLOSE de MQSeries

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
