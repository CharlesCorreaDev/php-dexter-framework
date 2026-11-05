# Retorna um novo iterador de pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.newpixelregioniterator.php

---

# ImagickPixelIterator::newPixelRegionIterator

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::newPixelRegionIterator — Retorna um novo iterador de pixel

### Descrição

public function **ImagickPixelIterator::newPixelRegionIterator**(  
    [Imagick](class.imagick.md) `$wand`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna um novo iterador de pixel.

### Parâmetros

`wand`

`x`

`y`

`columns`

`rows`

### Valor Retornado

Retorna um novo ImagickPixelIterator em caso de sucesso; em caso de falha, lança
uma ImagickPixelIteratorException.

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
