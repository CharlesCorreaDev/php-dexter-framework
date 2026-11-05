# Retorna uma string que descreve o último erro associado a um recurso de requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-get-last-error.php

---

# eio\_get\_last\_error

(PECL eio >= 1.0.0)

eio\_get\_last\_error — Retorna uma string que descreve o último erro associado a um recurso de requisição

### Descrição

function **eio\_get\_last\_error**([resource](language.types.resource.md) `$req`): [string](language.types.string.md)

**eio\_get\_last\_error()** retorna uma string que descreve o último erro associado a um recurso `req`.

### Parâmetros

`req`
:   O recurso da requisição.

### Valor Retornado

**eio\_get\_last\_error()** retorna uma string que descreve o último erro associado ao recurso da requisição especificado por `req`.

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

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
