# MQINQ MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-inq.php

---

# mqseries\_inq

(PECL mqseries >= 0.10.0)

mqseries\_inq — MQINQ MQSeries

### Descrição

function **mqseries\_inq**(  
    [resource](language.types.resource.md) `$hconn`,  
    [resource](language.types.resource.md) `$hobj`,  
    [int](language.types.integer.md) `$selectorCount`,  
    [array](language.types.array.md) `$selectors`,  
    [int](language.types.integer.md) `$intAttrCount`,  
    [resource](language.types.resource.md) `&$intAttr`,  
    [int](language.types.integer.md) `$charAttrLength`,  
    [resource](language.types.resource.md) `&$charAttr`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_inq()**
(MQINQ) retorna um array de inteiros e um conjunto de strings de caracteres
contendo os atributos de um objeto.

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`selectorCount`
:   Contagem de seletores.

`selectors`
:   Array de seletores de atributos.

`intAttrLength`
:   Contagem de atributos inteiros.

`intAttr`
:   Array de atributos inteiros.

`charAttrLength`
:   Comprimento do buffer de atributos de caracteres.

`charAttr`
:   Atributos de caracteres.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_inq()****

```
<?php
    $int_attr = array();
    $char_attr = "";

    mqseries_inq($conn, $obj, 1, array(MQSERIES_MQCA_Q_MGR_NAME), 0, $int_attr, 48, $char_attr, $comp_code, $reason);

    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("INQ CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    } else {
        echo "INQ QManager name result ".$char_attr."<br>\n";
    }
?>
```

### Veja também

- [mqseries\_conn()](function.mqseries-conn.md) - MQCONN MQSeries
- [mqseries\_connx()](function.mqseries-connx.md) - MQCONNX MQSeries
- [mqseries\_open()](function.mqseries-open.md) - MQOPEN MQSeries

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
