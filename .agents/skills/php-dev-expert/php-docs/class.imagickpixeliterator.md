# A classe ImagickPixelIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.imagickpixeliterator.php

---

# A classe [ImagickPixelIterator](class.imagickpixeliterator.md)

(PECL imagick 2, PECL imagick 3)

## Resumo da classe

class **ImagickPixelIterator**
{

public function [clear](imagickpixeliterator.clear.md)(): [bool](language.types.boolean.md)

public function [\_\_construct](imagickpixeliterator.construct.md)([Imagick](class.imagick.md) `$wand`)

public function [destroy](imagickpixeliterator.destroy.md)(): [bool](language.types.boolean.md)

public function [getCurrentIteratorRow](imagickpixeliterator.getcurrentiteratorrow.md)(): [array](language.types.array.md)

public function [getIteratorRow](imagickpixeliterator.getiteratorrow.md)(): [int](language.types.integer.md)

public function [getNextIteratorRow](imagickpixeliterator.getnextiteratorrow.md)(): [array](language.types.array.md)

public function [getPreviousIteratorRow](imagickpixeliterator.getpreviousiteratorrow.md)(): [array](language.types.array.md)

public function [newPixelIterator](imagickpixeliterator.newpixeliterator.md)([Imagick](class.imagick.md) `$wand`): [bool](language.types.boolean.md)

public function [newPixelRegionIterator](imagickpixeliterator.newpixelregioniterator.md)(  
    [Imagick](class.imagick.md) `$wand`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`  
): [bool](language.types.boolean.md)

public function [resetIterator](imagickpixeliterator.resetiterator.md)(): [bool](language.types.boolean.md)

public function [setIteratorFirstRow](imagickpixeliterator.setiteratorfirstrow.md)(): [bool](language.types.boolean.md)

public function [setIteratorLastRow](imagickpixeliterator.setiteratorlastrow.md)(): [bool](language.types.boolean.md)

public function [setIteratorRow](imagickpixeliterator.setiteratorrow.md)([int](language.types.integer.md) `$row`): [bool](language.types.boolean.md)

public function [syncIterator](imagickpixeliterator.synciterator.md)(): [bool](language.types.boolean.md)

}

## Índice

- [ImagickPixelIterator::clear](imagickpixeliterator.clear.md) — Limpa recursos associados a um PixelIterator
- [ImagickPixelIterator::\_\_construct](imagickpixeliterator.construct.md) — O construtor de ImagickPixelIterator
- [ImagickPixelIterator::destroy](imagickpixeliterator.destroy.md) — Desaloca recursos associados a um PixelIterator
- [ImagickPixelIterator::getCurrentIteratorRow](imagickpixeliterator.getcurrentiteratorrow.md) — Retorna a linha atual de objetos ImagickPixel
- [ImagickPixelIterator::getIteratorRow](imagickpixeliterator.getiteratorrow.md) — Retorna a linha atual do iterador de pixel
- [ImagickPixelIterator::getNextIteratorRow](imagickpixeliterator.getnextiteratorrow.md) — Retorna a próxima linha do iterador de pixel
- [ImagickPixelIterator::getPreviousIteratorRow](imagickpixeliterator.getpreviousiteratorrow.md) — Retorna a linha anterior
- [ImagickPixelIterator::newPixelIterator](imagickpixeliterator.newpixeliterator.md) — Retorna um novo iterador de pixel
- [ImagickPixelIterator::newPixelRegionIterator](imagickpixeliterator.newpixelregioniterator.md) — Retorna um novo iterador de pixel
- [ImagickPixelIterator::resetIterator](imagickpixeliterator.resetiterator.md) — Redefine o iterador de pixel
- [ImagickPixelIterator::setIteratorFirstRow](imagickpixeliterator.setiteratorfirstrow.md) — Define o iterador de pixels para a primeira linha de pixels
- [ImagickPixelIterator::setIteratorLastRow](imagickpixeliterator.setiteratorlastrow.md) — Define o iterador de pixels para a última linha de pixels
- [ImagickPixelIterator::setIteratorRow](imagickpixeliterator.setiteratorrow.md) — Define a linha do iterador de pixel
- [ImagickPixelIterator::syncIterator](imagickpixeliterator.synciterator.md) — Sincroniza o iterador de pixel

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
