# Limpa recursos associados a um PixelIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.clear.php

---

# ImagickPixelIterator::clear

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::clear — Limpa recursos associados a um PixelIterator

### Descrição

public function **ImagickPixelIterator::clear**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Limpa recursos associados a um PixelIterator.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickPixelIterator::clear()****

```
<?php
function clear($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));

    $imageIterator = $imagick->getPixelRegionIterator(100, 100, 250, 200);

    /* Itera sobre as linhas de pixels */
    foreach ($imageIterator as $pixels) {
        /** @var $pixel \ImagickPixel */
        /* Itera sobre os pixels na linha (colunas) */
        foreach ($pixels as $column => $pixel) {
            if ($column % 2) {
                /* Pinta cada segundo pixel de preto */
                $pixel->setColor("rgba(0, 0, 0, 0)");
            }
        }
        /* Sincroniza o iterador, importante fazer isso a cada iteração */
        $imageIterator->syncIterator();
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
