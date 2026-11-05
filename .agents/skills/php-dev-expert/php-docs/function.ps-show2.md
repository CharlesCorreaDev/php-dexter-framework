# Gera um texto na posição atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-show2.php

---

# ps\_show2

(PECL ps >= 1.1.0)

ps\_show2 — Gera um texto na posição atual

### Descrição

function **ps\_show2**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$text`, [int](language.types.integer.md) `$len`): [bool](language.types.boolean.md)

Exibe texto na posição atual. Não exibe mais que `len` caracteres.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto a ser exibido.

`len`
:   O número máximo de caracteres a serem exibidos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
