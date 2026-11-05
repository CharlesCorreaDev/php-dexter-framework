# Envia dados para um soquete conectado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-send.php

---

# socket\_send

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_send — Envia dados para um soquete conectado

### Descrição

function **socket\_send**(  
    [Socket](class.socket.md) `$socket`,  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$flags`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_send()** envia o número
de bytes definido em `length` para o soquete
`socket` a partir dos dados em `data`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

`data`
:   Um buffer contendo os dados que serão enviados ao servidor remoto.

`length`
:   O número de bytes que serão enviados ao servidor remoto a partir de
    `data`.

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

### Valor Retornado

**socket\_send()** retorna o número de bytes enviados ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_sendto()](function.socket-sendto.md) - Envia uma mensagem para um soquete, esteja ele conectado ou não

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
