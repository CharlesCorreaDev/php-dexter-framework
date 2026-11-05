# Descompressão LZF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lzf-decompress.php

---

# lzf\_decompress

(PECL lzf >= 0.1.0)

lzf\_decompress — 
Descompressão LZF

### Descrição

function **lzf\_decompress**([string](language.types.string.md) `$data`): [string](language.types.string.md)

[lzf\_compress()](function.lzf-compress.md) descomprime a string
informada em `data` que contém dados com codificação lzf.

### Parâmetros

`data`
:   A string comprimida.

### Valor Retornado

Retorna a informação descomprimida ou **`false`** se um erro ocorreu.

### Veja também

- [lzf\_compress()](function.lzf-compress.md) - Compressão LZF

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
