# MQGET MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-get.php

---

# mqseries\_get

(PECL mqseries >= 0.10.0)

mqseries\_get — MQGET MQSeries

### Descrição

function **mqseries\_get**(  
    [resource](language.types.resource.md) `$hConn`,  
    [resource](language.types.resource.md) `$hObj`,  
    [array](language.types.array.md) `&$md`,  
    [array](language.types.array.md) `&$gmo`,  
    [int](language.types.integer.md) `&$bufferLength`,  
    [string](language.types.string.md) `&$msg`,  
    [int](language.types.integer.md) `&$data_length`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_get()**
(MQGET) recupera uma mensagem de uma fila local que foi aberta
usando a chamada
[mqseries\_open()](function.mqseries-open.md)
(MQOPEN).

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`hObj`
:   Identificador de objeto.

    Este identificador representa o objeto a ser usado.

`md`
:   Descritor de mensagem (MQMD).

`gmo`
:   Opções de mensagem de obtenção (MQGMO).

`bufferLength`
:   Comprimento esperado do buffer de resultado.

`msg`
:   Buffer contendo a mensagem que foi recuperada do objeto.

`data_length`
:   Comprimento real do buffer.

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de
**mqseries\_get()****

```
<?php
// abre conexão com o gerenciador de filas
    mqseries_conn('WMQ1', $conn, $comp_code, $reason);
// $conn agora contém a referência à conexão com o gerenciador de filas

// abre a conexão com a fila testq
    mqseries_open(
                $conn,
                array('ObjectName' => 'TESTQ'),
                MQSERIES_MQOO_INPUT_AS_Q_DEF | MQSERIES_MQOO_FAIL_IF_QUIESCING | MQSERIES_MQOO_OUTPUT,
                $obj,
                $comp_code,
                $reason);
// $obj agora contém a referência ao objeto (TESTQ)

// configura um descritor de mensagem vazio
    $mdg = array();
// configura opções de recebimento de mensagens
    $gmo = array('Options' => MQSERIES_MQGMO_FAIL_IF_QUIESCING | MQSERIES_MQGMO_WAIT, 'WaitInterval' => 3000);

// recebe a mensagem da fila
    mqseries_get($conn, $obj, $mdg, $gmo, 255, $msg, $data_length, $comp_code, $reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("GET CompCode:%d Reason:%d Text:%s<br>", $comp_code, $reason, mqseries_strerror($reason));
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
- [mqseries\_put()](function.mqseries-put.md) - MQPUT MQSeries

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
