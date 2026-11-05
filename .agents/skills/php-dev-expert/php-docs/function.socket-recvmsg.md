# Lê uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-recvmsg.php

---

# socket\_recvmsg

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

socket\_recvmsg — Lê uma mensagem

### Descrição

function **socket\_recvmsg**([Socket](class.socket.md) `$socket`, [array](language.types.array.md) `&$message`, [int](language.types.integer.md) `$flags` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`socket`

`message`

`flags`

### Valor Retornado

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_sendmsg()](function.socket-sendmsg.md) - Envia uma mensagem
- [socket\_cmsg\_space()](function.socket-cmsg-space.md) - Calcula o tamanho do buffer de mensagem

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
