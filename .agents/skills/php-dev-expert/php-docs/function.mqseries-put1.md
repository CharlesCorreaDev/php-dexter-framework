# MQPUT1 MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-put1.php

---

# mqseries\_put1

(PECL mqseries >= 0.10.0)

mqseries\_put1 — MQPUT1 MQSeries

### Descrição

function **mqseries\_put1**(  
    [resource](language.types.resource.md) `$hconn`,  
    [resource](language.types.resource.md) `&$objDesc`,  
    [resource](language.types.resource.md) `&$msgDesc`,  
    [resource](language.types.resource.md) `&$pmo`,  
    [string](language.types.string.md) `$buffer`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_put1()**
(MQPUT1) insere uma mensagem em uma fila. A fila não precisa estar aberta.

As chamadas [mqseries\_put()](function.mqseries-put.md) e **mqseries\_put1()** podem ser usadas
para inserir mensagens em uma fila; qual chamada usar depende das circunstâncias.
Use a chamada [mqseries\_put()](function.mqseries-put.md) (MQPUT) para inserir várias mensagens na mesma fila.
Use a chamada **mqseries\_put1()** (MQPUT1) para inserir apenas uma mensagem em uma fila.
Esta chamada encapsula as chamadas MQOPEN, MQPUT e MQCLOSE em uma única chamada, minimizando o
número de chamadas que devem ser emitidas.

### Parâmetros

`hConn`
:   Identificador de conexão.

    Este identificador representa a conexão ao gerenciador de filas.

`objDesc`
:   Descritor de objeto (MQOD).

    Esta é uma estrutura que identifica a fila à qual a mensagem é
    adicionada.

`msgDesc`
:   Descritor de mensagem (MQMD).

`pmo`
:   Opções de mensagem de inserção (MQPMO).

`compCode`
:   Código de conclusão.

`reason`
:   Código de razão que qualifica o código de conclusão.

### Valor Retornado

Nenhum valor é retornado.

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
