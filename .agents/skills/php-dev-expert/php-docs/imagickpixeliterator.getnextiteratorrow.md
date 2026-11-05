# Retorna a próxima linha do iterador de pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.getnextiteratorrow.php

---

# ImagickPixelIterator::getNextIteratorRow

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::getNextIteratorRow — Retorna a próxima linha do iterador de pixel

### Descrição

public function **ImagickPixelIterator::getNextIteratorRow**(): [array](language.types.array.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna a próxima linha como um array de varinhas de pixels do iterador de pixels.

### Valor Retornado

Retorna a próxima linha como um array de objetos ImagickPixel, lançando
uma ImagickPixelIteratorException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **ImagickPixelIterator::getNextIteratorRow()****

```
<?php
function getNextIteratorRow($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imageIterator = $imagick->getPixelIterator();

    $count = 0;
    while ($pixels = $imageIterator->getNextIteratorRow()) {
        if (($count % 3) == 0) {
            /* Itera sobre os pixels na linha (colunas) */
            foreach ($pixels as $column => $pixel) {
                /** @var $pixel \ImagickPixel */
                if ($column % 2) {
                    /* Pinta cada segundo pixel de preto */
                    $pixel->setColor("rgba(0, 0, 0, 0)");
                }
            }
            /* Sincroniza o iterador, importante fazer isso a cada iteração */
            $imageIterator->syncIterator();
        }

        $count += 1;
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
