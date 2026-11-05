# MQCONN MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-conn.php

---

# mqseries\_conn

(PECL mqseries >= 0.10.0)

mqseries\_conn — MQCONN MQSeries

### Descrição

function **mqseries\_conn**(  
    [string](language.types.string.md) `$qManagerName`,  
    [resource](language.types.resource.md) `&$hconn`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_conn()**
(MQCONN) conecta uma aplicação a um gerenciador de filas. Ela fornece
um identificador de conexão do gerenciador de filas, que é usado pela aplicação em
chamadas subsequentes de enfileiramento de mensagens.

### Parâmetros

`qManagerName`
:   Nome do gerenciador de filas.

    Nome do gerenciador de filas ao qual a aplicação deseja se conectar.

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
**mqseries\_conn()****

```
<?php
    mqseries_conn('WMQ1', $conn, $comp_code, $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("conn CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
        exit;
    }
?>
```

### Veja também

- [mqseries\_disc()](function.mqseries-disc.md) - MQDISC MQSeries

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
