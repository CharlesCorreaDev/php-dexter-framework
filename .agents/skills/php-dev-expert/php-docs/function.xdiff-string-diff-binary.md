# Sinônimo de xdiff_string_bdiff

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-diff-binary.php

---

# xdiff\_string\_diff\_binary

(PECL xdiff >= 0.2.0)

xdiff\_string\_diff\_binary — Sinônimo de [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md)

### Descrição

function [xdiff\_string\_bdiff](function.xdiff-string-bdiff.md)([string](language.types.string.md) `$old_data`, [string](language.types.string.md) `$new_data`): [string](language.types.string.md)

Cria uma comparação binária de duas strings e retorna o resultado.
Esta função funciona tanto com texto quanto com dados binários. O patch resultante
pode ser aplicado posteriormente usando [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md)/[xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md).

A partir da versão 1.5.0, esta função é um sinônimo de [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md).

### Parâmetros

`old_data`
:   Primeira sequência com dados binários. Atua como dados "antigos".

`new_data`
:   Segunda sequência com dados binários. Atua como dados "novos".

### Valor Retornado

Retorna uma string com resultado ou **`false`** se ocorrer um erro interno.

### Veja também

- [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) - Faz diferença binária de duas strings
- [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md) - Corrige uma string com uma diferença binária

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
