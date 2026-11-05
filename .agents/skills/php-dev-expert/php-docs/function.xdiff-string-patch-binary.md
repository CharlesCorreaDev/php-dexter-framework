# Sinônimo de xdiff_string_bpatch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-patch-binary.php

---

# xdiff\_string\_patch\_binary

(PECL xdiff >= 0.2.0)

xdiff\_string\_patch\_binary — Sinônimo de [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md)

### Descrição

function **xdiff\_string\_patch\_binary**([string](language.types.string.md) `$str`, [string](language.types.string.md) `$patch`): [string](language.types.string.md)

Corrige uma string `str` com um `patch` binário.
Esta função aceita patches criados tanto pelas funções [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md)
quanto [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md) ou suas contrapartes de arquivo.

A partir da versão 1.5.0, esta função é um alias de [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md).

### Parâmetros

`str`
:   A string binária original.

`patch`
:   A string de patch binária.

### Valor Retornado

Retorna a string corrigida ou **`false`** em caso de erro.

### Veja também

- [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md) - Corrige uma string com uma diferença binária
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
