# Fecha uma instância de Socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-close.php

---

# socket\_close

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_close — Fecha uma instância de [Socket](class.socket.md)

### Descrição

function **socket\_close**([Socket](class.socket.md) `$socket`): [void](language.types.void.md)

**socket\_close()** fecha a instância de [Socket](class.socket.md)
informada por `socket`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

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
