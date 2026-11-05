# Corrige uma string com uma diferença binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-bpatch.php

---

# xdiff\_string\_bpatch

(PECL xdiff >= 1.5.0)

xdiff\_string\_bpatch — Corrige uma string com uma diferença binária

### Descrição

function **xdiff\_string\_bpatch**([string](language.types.string.md) `$str`, [string](language.types.string.md) `$patch`): [string](language.types.string.md)

Corrige uma string `str` com um `patch` binário.
Esta função aceita patches criados tanto pelas funções [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md)
quanto [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md) ou suas contrapartes de arquivo.

### Parâmetros

`str`
:   A sequência binária original.

`patch`
:   A sequência de patch binária.

### Valor Retornado

Retorna a string corrigida ou **`false`** em caso de erro.

### Veja também

- [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) - Faz diferença binária de duas strings
- [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md) - Gera a diferença binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin

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
