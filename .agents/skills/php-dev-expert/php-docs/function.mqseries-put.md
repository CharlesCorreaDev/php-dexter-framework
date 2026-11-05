# MQPUT MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-put.php

---

# mqseries\_put

(PECL mqseries >= 0.10.0)

mqseries\_put — MQPUT MQSeries

### Descrição

function **mqseries\_put**(  
    [resource](language.types.resource.md) `$hConn`,  
    [resource](language.types.resource.md) `$hObj`,  
    [array](language.types.array.md) `&$md`,  
    [array](language.types.array.md) `&$pmo`,  
    [string](language.types.string.md) `$message`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_put()**
(MQPUT) insere uma mensagem em uma fila ou lista de distribuição. A fila ou
lista de distribuição já deve estar aberta.

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`md`
:   Descritor de mensagem (MQMD).

`pmo`
:   Opções de mensagem de inserção (MQPMO).

`message`
:   A mensagem real a ser inserida na fila.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_put()****

```
<?php
// abre conexão com o gerenciador de filas
    mqseries_conn('WMQ1', $conn, $comp_code, $reason);
// $conn agora contém a referência à conexão com o gerenciador de filas

// abre a conexão com a fila de testes
    mqseries_open(
                $conn,
                array('ObjectName' => 'TESTQ'),
                MQSERIES_MQOO_INPUT_AS_Q_DEF | MQSERIES_MQOO_FAIL_IF_QUIESCING | MQSERIES_MQOO_OUTPUT,
                $obj,
                $comp_code,
                $reason);
// $obj agora contém a referência ao objeto (TESTQ)

// configura o array do descritor de mensagem, verifique os manuais de referência do MQSeries
    $md = array(
                'Version' => MQSERIES_MQMD_VERSION_1,
                'Expiry' => MQSERIES_MQEI_UNLIMITED,
                'Report' => MQSERIES_MQRO_NONE,
                'MsgType' => MQSERIES_MQMT_DATAGRAM,
                'Format' => MQSERIES_MQFMT_STRING,
                'Priority' => 1,
                'Persistence' => MQSERIES_MQPER_PERSISTENT);

// configura as opções de mensagens de inserção
    $pmo = array('Options' => MQSERIES_MQPMO_NEW_MSG_ID|MQSERIES_MQPMO_SYNCPOINT);

// insere a mensagem 'Ping' na fila
    mqseries_put($conn, $obj, $md, $pmo, 'Ping', $comp_code, $reason);

    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("put CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
    }

// fecha a referência do objeto $obj
    mqseries_close($conn, $obj, MQSERIES_MQCO_NONE, $comp_code, $reason);

// desconecta do gerenciador de filas
    mqseries_disc($conn, $comp_code, $reason);

?>
```

### Veja também

- [mqseries\_conn()](function.mqseries-conn.md) - MQCONN MQSeries
- [mqseries\_connx()](function.mqseries-connx.md) - MQCONNX MQSeries
- [mqseries\_open()](function.mqseries-open.md) - MQOPEN MQSeries
- [mqseries\_get()](function.mqseries-get.md) - MQGET MQSeries

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
