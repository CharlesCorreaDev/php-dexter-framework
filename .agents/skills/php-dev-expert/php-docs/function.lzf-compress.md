# Compressão LZF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lzf-compress.php

---

# lzf\_compress

(PECL lzf >= 0.1.0)

lzf\_compress — 
Compressão LZF

### Descrição

function **lzf\_compress**([string](language.types.string.md) `$data`): [string](language.types.string.md)

**lzf\_compress()** comprime a string
`data` usando a codificação LZF.

### Parâmetros

`data`
:   Retorna a string comprimida.

### Valor Retornado

Retorna a informação comprimida ou **`false`** se um erro ocorreu.

### Veja também

- [lzf\_decompress()](function.lzf-decompress.md) - Descompressão LZF

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
