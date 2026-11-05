# Envia uma mensagem para um soquete, esteja ele conectado ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-sendto.php

---

# socket\_sendto

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_sendto — Envia uma mensagem para um soquete, esteja ele conectado ou não

### Descrição

function **socket\_sendto**(  
    [Socket](class.socket.md) `$socket`,  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$flags`,  
    [string](language.types.string.md) `$address`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_sendto()** envia o número de bytes especificado em
`length` a partir dos dados informados em `data`
através do soquete `socket` para a porta definida em
`port` no endereço `address`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada usando [socket\_create()](function.socket-create.md).

`data`
:   Os dados serão enviados a partir do buffer definido em `data`.

`length`
:   O número de bytes definido em `length` a partir dos dados em `data` será
    enviado.

`flags`
:   O valor de `flags` pode ser qualquer combinação das
    opções a seguir, combinadas com o operador binário OR
    (`|`).

    **Valores possíveis para `flags`**

    |  |  |
    | --- | --- |
    | **`MSG_OOB`** | Envia dados OOB (fora-de-banda). |
    | **`MSG_EOR`** | Indica uma marca de registro. Os dados enviados completam o registro. |
    | **`MSG_EOF`** | Fecha o lado do remetente do soquete e inclui uma notificação apropriada no final dos dados enviados. Os dados enviados completam a transação. |
    | **`MSG_DONTROUTE`** | Ignora o roteamento, usa interface direta. |

`address`
:   Endereço IP do servidor remoto.

`port`
:   `port` é o número da porta remota para a qual os dados
    serão enviados.

### Valor Retornado

**socket\_sendto()** retorna o número de bytes enviados para o
servidor remoto ou **`false`** se ocorrer um erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `port` é menor que 0 ou maior que 65535. |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `port` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **socket\_sendto()****

```
<?php
    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

    $msg = "Ping !";
    $len = strlen($msg);

    socket_sendto($sock, $msg, $len, 0, '127.0.0.1', 1223);
    socket_close($sock);
?>
```

### Veja também

- [socket\_send()](function.socket-send.md) - Envia dados para um soquete conectado

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
