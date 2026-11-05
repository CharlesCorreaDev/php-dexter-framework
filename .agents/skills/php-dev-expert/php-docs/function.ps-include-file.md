# Lê um arquivo externo com código PostScript bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-include-file.php

---

# ps\_include\_file

(PECL ps >= 1.3.4)

ps\_include\_file — Lê um arquivo externo com código PostScript bruto

### Descrição

function **ps\_include\_file**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$file`): [bool](language.types.boolean.md)

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`file`

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
