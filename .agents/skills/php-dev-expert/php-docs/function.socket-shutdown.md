# Desliga um soquete para recebimento, envio ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-shutdown.php

---

# socket\_shutdown

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_shutdown — Desliga um soquete para recebimento, envio ou ambos

### Descrição

function **socket\_shutdown**([Socket](class.socket.md) `$socket`, [int](language.types.integer.md) `$mode` = 2): [bool](language.types.boolean.md)

A função **socket\_shutdown()** permite interromper
dados de entrada, saída ou ambos (o padrão) através do soquete informado em
`socket`.

> **Nota**:
>
> Os buffers associados podem ou não ser esvaziados.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

`mode`
:   O valor de `mode` pode ser um dos seguintes:

    **Valores possíveis para `mode`**

    |  |  |
    | --- | --- |
    | `0` | Desliga leitura no soquete |
    | `1` | Desliga escrita no soquete |
    | `2` | Desliga leitura e escrita no soquete |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
