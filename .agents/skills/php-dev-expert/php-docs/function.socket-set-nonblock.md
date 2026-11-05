# Define o modo sem bloqueio para o descritor de arquivo fd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-set-nonblock.php

---

# socket\_set\_nonblock

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_set\_nonblock — Define o modo sem bloqueio para o descritor de arquivo fd

### Descrição

function **socket\_set\_nonblock**([Socket](class.socket.md) `$socket`): [bool](language.types.boolean.md)

A função **socket\_set\_nonblock()** define o sinalizador
**`O_NONBLOCK`** no soquete especificado pelo parâmetro
`socket`.

Quando uma operação (ex.: receber, enviar, conectar, aceitar, ...) é executada em
um soquete não bloqueante, o script não pausará sua execução até receber um
sinal ou poder executar a operação. Em vez disso, se a operação resultar
em um bloqueio, a função chamada falhará.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **socket\_set\_nonblock()****

```
<?php
$socket = socket_create_listen(1223);
socket_set_nonblock($socket);

socket_accept($socket);
?>
```

Este exemplo cria um soquete de escuta em todas as interfaces na porta 1223 e
define o soquete para o modo **`O_NONBLOCK`**.
[socket\_accept()](function.socket-accept.md) falhará imediatamente, a menos que haja uma
conexão pendente exatamente neste momento.

### Veja também

- [socket\_set\_block()](function.socket-set-block.md) - Define o modo de bloqueio em um soquete
- [socket\_set\_option()](function.socket-set-option.md) - Define opções para o soquete
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo

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
