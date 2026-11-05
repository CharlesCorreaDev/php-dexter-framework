# MQCMIT de MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-cmit.php

---

# mqseries\_cmit

(PECL mqseries >= 0.10.0)

mqseries\_cmit — MQCMIT de MQSeries

### Descrição

function **mqseries\_cmit**([resource](language.types.resource.md) `$hconn`, [resource](language.types.resource.md) `&$compCode`, [resource](language.types.resource.md) `&$reason`): [void](language.types.void.md)

A chamada
**mqseries\_cmit()**
(MQCMIT) indica ao gerenciador de filas que o aplicativo atingiu
um ponto de sincronização, e que todas as obtenções e inclusões de mensagens que ocorreram
desde o último ponto de sincronização devem ser tornadas permanentes. Mensagens colocadas como parte de uma
unidade de trabalho são disponibilizadas para outros aplicativos; mensagens recuperadas como
parte de uma unidade de trabalho são excluídas.

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
**mqseries\_cmit()****

```
<?php
    mqseries_cmit($conn, $comp_code, $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("cmit CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    }
?>
```

### Notas

> **Nota**:
>
> [mqseries\_back()](function.mqseries-back.md)
> não funcionará ao usar o MQSeries Client para conectar-se a um gerenciador de filas.

### Veja também

- [mqseries\_begin()](function.mqseries-begin.md) - MQBEGIN de MQseries
- [mqseries\_back()](function.mqseries-back.md) - MQBACK de MQSeries
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
