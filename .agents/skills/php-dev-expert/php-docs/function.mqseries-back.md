# MQBACK de MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-back.php

---

# mqseries\_back

(PECL mqseries >= 0.10.0)

mqseries\_back — MQBACK de MQSeries

### Descrição

function **mqseries\_back**([resource](language.types.resource.md) `$hconn`, [resource](language.types.resource.md) `&$compCode`, [resource](language.types.resource.md) `&$reason`): [void](language.types.void.md)

A chamada
**mqseries\_back()**
(MQBACK) indica ao gerenciador de filas que todas as obtenções e inclusões de
mensagens que ocorreram desde o último ponto de sincronização devem ser desfeitas.
Mensagens incluídas como parte de uma unidade de trabalho são excluídas; mensagens recuperadas como
parte de uma unidade de trabalho são restabelecidas na fila.

Usar
**mqseries\_back()**
só funciona em conjunto com
[mqseries\_begin()](function.mqseries-begin.md)
e somente ao conectar diretamente a um gerenciador de filas. Não funciona através
da interface mqclient.

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
**mqseries\_back()****

```
<?php
    mqseries_back($conn, $comp_code, $reason);

    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    }
?>
```

### Notas

> **Nota**:
>
> **mqseries\_back()**
> não funcionará ao usar o MQSeries Client para conectar-se a um gerenciador de filas.

### Veja também

- [mqseries\_conn()](function.mqseries-conn.md) - MQCONN MQSeries
- [mqseries\_connx()](function.mqseries-connx.md) - MQCONNX MQSeries
- [mqseries\_begin()](function.mqseries-begin.md) - MQBEGIN de MQseries

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
