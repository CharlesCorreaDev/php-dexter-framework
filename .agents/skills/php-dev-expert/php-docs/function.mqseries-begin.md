# MQBEGIN de MQseries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-begin.php

---

# mqseries\_begin

(PECL mqseries >= 0.10.0)

mqseries\_begin — MQBEGIN de MQseries

### Descrição

function **mqseries\_begin**(  
    [resource](language.types.resource.md) `$hconn`,  
    [array](language.types.array.md) `$beginOptions`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_begin()**
(MQBEGIN) inicia uma unidade de trabalho que é coordenada pelo gerenciador
de filas e que pode envolver gerenciadores de recursos externos.

Usar
**mqseries\_begin()**
inicia a unidade de trabalho.
[mqseries\_back()](function.mqseries-back.md)
ou
[mqseries\_cmit()](function.mqseries-cmit.md)
finaliza a unidade de trabalho.

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
**mqseries\_begin()****

```
<?php
    $mqbo = array();
    mqseries_begin( $conn,
                    $mqbo,
                    $comp_code,
                    $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        /* o código de razão 2121 é um aviso para mais informações consulte o manual de referência do MQSeries. */
        if ($reason !== 2121) {
            printf("CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
        }
    }
?>
```

### Notas

> **Nota**:
>
> **mqseries\_begin()**
> não funcionará ao usar o MQSeries Client para conectar-se a um gerenciador de filas.

### Veja também

- [mqseries\_conn()](function.mqseries-conn.md) - MQCONN MQSeries
- [mqseries\_connx()](function.mqseries-connx.md) - MQCONNX MQSeries
- [mqseries\_back()](function.mqseries-back.md) - MQBACK de MQSeries
- [mqseries\_cmit()](function.mqseries-cmit.md) - MQCMIT de MQSeries

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
