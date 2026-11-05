# Faz diferença binária de duas strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-bdiff.php

---

# xdiff\_string\_bdiff

(PECL xdiff >= 1.5.0)

xdiff\_string\_bdiff — Faz diferença binária de duas strings

### Descrição

function **xdiff\_string\_bdiff**([string](language.types.string.md) `$old_data`, [string](language.types.string.md) `$new_data`): [string](language.types.string.md)

Cria uma comparação binária de duas strings e retorna o resultado.
Esta função funciona tanto com texto quanto com dados binários. O patch resultante
pode ser aplicado posteriormente usando [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md)/[xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md).

### Parâmetros

`old_data`
:   Primeira sequência com dados binários. Atua como dados "antigos".

`new_data`
:   Segunda sequência com dados binários. Atua como dados "novos".

### Valor Retornado

Retorna uma string com diferença binária contendo diferenças entre os dados "antigo" e "novo"
ou **`false`** se ocorreu um erro interno.

### Veja também

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
