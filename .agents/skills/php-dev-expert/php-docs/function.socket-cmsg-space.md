# Calcula o tamanho do buffer de mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-cmsg-space.php

---

# socket\_cmsg\_space

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

socket\_cmsg\_space — Calcula o tamanho do buffer de mensagem

### Descrição

function **socket\_cmsg\_space**([int](language.types.integer.md) `$level`, [int](language.types.integer.md) `$type`, [int](language.types.integer.md) `$num` = 0): [?](language.types.null.md)[int](language.types.integer.md)

Calcula o tamanho do buffer que deveria ser alocado para
receber os dados auxiliares.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`level`

`type`

### Valor Retornado

### Veja também

- [socket\_recvmsg()](function.socket-recvmsg.md) - Lê uma mensagem
- [socket\_sendmsg()](function.socket-sendmsg.md) - Envia uma mensagem

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
