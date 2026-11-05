# Termina um padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-end-pattern.php

---

# ps\_end\_pattern

(PECL ps >= 1.2.0)

ps\_end\_pattern — Termina um padrão

### Descrição

function **ps\_end\_pattern**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Termina um padrão iniciado com [ps\_begin\_pattern()](function.ps-begin-pattern.md).
Uma vez finalizado, um padrão pode ser usado como uma cor para preencher
áreas.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_begin\_pattern()](function.ps-begin-pattern.md) - Inicia um novo padrão

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
