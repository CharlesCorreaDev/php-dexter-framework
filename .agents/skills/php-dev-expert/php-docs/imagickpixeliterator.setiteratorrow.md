# Define a linha do iterador de pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.setiteratorrow.php

---

# ImagickPixelIterator::setIteratorRow

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::setIteratorRow — Define a linha do iterador de pixel

### Descrição

public function **ImagickPixelIterator::setIteratorRow**([int](language.types.integer.md) `$row`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a linha do iterador de pixel.

### Parâmetros

`row`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickPixelIterator::setIteratorRow()****

```
<?php
function setIteratorRow($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imageIterator = $imagick->getPixelRegionIterator(200, 100, 200, 200);

    for ($x = 0; $x < 20; $x++) {
        $imageIterator->setIteratorRow($x * 5);
        $pixels = $imageIterator->getCurrentIteratorRow();
        /* Itera sobre os pixels na linha (colunas) */
        foreach ($pixels as $pixel) {
            /** @var $pixel \ImagickPixel */
            /* Pinta cada segundo pixel de preto */
            $pixel->setColor("rgba(0, 0, 0, 0)");
        }

        /* Sincroniza o iterador, importante fazer isso a cada iteração */
        $imageIterator->syncIterator();
    }

    header("Content-Type: image/jpg");
    echo $imagick;
}

?>
```

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
