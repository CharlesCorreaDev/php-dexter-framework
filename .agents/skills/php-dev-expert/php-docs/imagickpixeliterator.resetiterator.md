# Redefine o iterador de pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.resetiterator.php

---

# ImagickPixelIterator::resetIterator

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::resetIterator — Redefine o iterador de pixel

### Descrição

public function **ImagickPixelIterator::resetIterator**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Redefine o iterador de pixel. Use-o em conjunto com
ImagickPixelIterator::getNextIteratorRow() para iterar sobre todos os pixels
em um contêiner de pixels.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickPixelIterator::resetIterator()****

```
<?php
function resetIterator($imagePath) {

    $imagick = new \Imagick(realpath($imagePath));

    $imageIterator = $imagick->getPixelIterator();

    /* Itera sobre linhas de pixels */
    foreach ($imageIterator as $pixels) {
        /* Itera sobre os pixels na linha (colunas) */
        foreach ($pixels as $column => $pixel) {
            /** @var $pixel \ImagickPixel */
            if ($column % 2) {

                /* Torna cada segundo pixel vermelho 25% */
                $pixel->setColorValue(\Imagick::COLOR_RED, 64);
            }
        }
        /* Sincroniza o iterador, importante fazer isso a cada iteração */
        $imageIterator->syncIterator();
    }

    $imageIterator->resetiterator();

    /* Itera sobre linhas de pixels */
    foreach ($imageIterator as $pixels) {
        /* Itera sobre os pixels na linha (colunas) */
        foreach ($pixels as $column => $pixel) {
            /** @var $pixel \ImagickPixel */
            if ($column % 3) {
                $pixel->setColorValue(\Imagick::COLOR_BLUE, 64); /* Torna cada segundo pixel um pouco azul */
                //$pixel->setColor("rgba(0, 0, 128, 0)"); /* Pinta cada segundo pixel de preto */
            }
        }
        $imageIterator->syncIterator(); /* Sincroniza o iterador, importante fazer isso a cada iteração */
    }

    $imageIterator->clear();

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
