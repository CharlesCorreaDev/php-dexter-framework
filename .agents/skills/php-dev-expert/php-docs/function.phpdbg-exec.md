# Tenta definir o contexto de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-exec.php

---

# phpdbg\_exec

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

phpdbg\_exec — Tenta definir o contexto de execução

### Descrição

function **phpdbg\_exec**([string](language.types.string.md) `$context`): [string](language.types.string.md)|[bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`context`

### Valor Retornado

Se o contexto de execução foi definido anteriormente, ele é retornado.
Se o contexto de execução não foi definido anteriormente, **`true`** é retornado.
Se a solicitação para definir o contexto falhar, **`false`** será retornado e um
**`E_WARNING`** será gerado.

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
