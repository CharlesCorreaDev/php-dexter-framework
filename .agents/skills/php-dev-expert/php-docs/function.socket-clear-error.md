# Limpa o erro no soquete ou o último código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-clear-error.php

---

# socket\_clear\_error

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

socket\_clear\_error — Limpa o erro no soquete ou o último código de erro

### Descrição

function **socket\_clear\_error**([?](language.types.null.md)[Socket](class.socket.md) `$socket` = **`null`**): [void](language.types.void.md)

Essa função limpa o código de erro ocorrido no soquete ou o
último erro de soquete global se nenhum for especificado.

Essa função permite redefinir explicitamente o valor do código de erro
de um soquete ou do último código de erro global da extensão. Isso pode ser útil
para detectar, dentro de uma parte da aplicação, se um erro ocorreu ou não.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `socket` agora pode ser nulo. |

### Veja também

- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
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
