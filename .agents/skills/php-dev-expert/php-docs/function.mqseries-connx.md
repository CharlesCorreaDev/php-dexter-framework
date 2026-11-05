# MQCONNX MQSeries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mqseries-connx.php

---

# mqseries\_connx

(PECL mqseries >= 0.10.0)

mqseries\_connx — MQCONNX MQSeries

### Descrição

function **mqseries\_connx**(  
    [string](language.types.string.md) `$qManagerName`,  
    [array](language.types.array.md) `&$connOptions`,  
    [resource](language.types.resource.md) `&$hconn`,  
    [resource](language.types.resource.md) `&$compCode`,  
    [resource](language.types.resource.md) `&$reason`  
): [void](language.types.void.md)

A chamada
**mqseries\_connx()**
(MQCONNX) conecta uma aplicação a um gerenciador de filas. Ela
fornece um identificador de conexão do gerenciador de filas, que é usado pela aplicação
em chamadas MQ subsequentes.

A chamada **mqseries\_connx()** é como a chamada
[mqseries\_conn()](function.mqseries-conn.md) (MQCONN), exceto que MQCONNX
permite que opções sejam especificadas para controlar a maneira como a chamada funciona.

### Parâmetros

`qManagerName`
:   Nome do gerenciador de filas.

    Nome do gerenciador de filas ao qual a aplicação deseja se conectar.

`connOps`
:   Opções que controlam a ação da função.

    Veja também a estrutura MQCNO.

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
**mqseries\_connx()****

```
<?php
    $mqcno = array(
        'Version' => MQSERIES_MQCNO_VERSION_2,
        'Options' => MQSERIES_MQCNO_STANDARD_BINDING,
        'MQCD' => array('ChannelName' => 'MQNX9420.CLIENT',
        'ConnectionName' => 'localhost',
        'TransportType' => MQSERIES_MQXPT_TCP)
    );

    mqseries_connx('MQNX9420', $mqcno, $conn, $comp_code,$reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("Connx CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
        exit;
    }

?>
```

**Exemplo #2
Exemplo de
**mqseries\_connx()** usando conexão SSL & URL de OCSP Responder**

```
<?php
    $mqcno = array(
        'Version' => 4, // MQCNO_VERSION_4
        'Options' => MQSERIES_MQCNO_STANDARD_BINDING,
        'MQCD' => array(
            'Version' => 7, // MQCD_VERSION_7
            'ConnectionName' => 'localhost',
            'TransportType' => MQSERIES_MQXPT_TCP,
            'ChannelName' => 'CONNECTIONCHANNEL',
            'SSLCipherSpec' => 'NULL_SHA'
        ),
        'MQSCO' => array(
            'KeyRepository' => '/var/mqm/qmgrs/QUEUEMGR/ssl/key', // Caminho local onde o repositório de chaves SSL pode ser encontrado
            'MQAIR' => array(
                'Version' => 2, //MQAIR_VERSION_2
                'AuthInfoType' => 2, //MQAIT_OCSP
                'OCSPResponderURL' => 'http://dummy.OCSP.responder'
            )
        )
    );

    mqseries_connx('QUEUEMGR', $mqcno, $conn, $comp_code,$reason);
    if ($comp_code !== MQSERIES_MQCC_OK) {
        printf("Connx CompCode:%d Reason:%d Text:%s<br>\n", $comp_code, $reason, mqseries_strerror($reason));
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
