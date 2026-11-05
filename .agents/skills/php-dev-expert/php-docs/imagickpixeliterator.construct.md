# O construtor de ImagickPixelIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixeliterator.construct.php

---

# ImagickPixelIterator::\_\_construct

(PECL imagick 2, PECL imagick 3)

ImagickPixelIterator::\_\_construct — O construtor de ImagickPixelIterator

### Descrição

public function **ImagickPixelIterator::\_\_construct**([Imagick](class.imagick.md) `$wand`)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

O construtor de ImagickPixelIterator

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickPixelIterator::construct()****

```
<?php
function construct($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imageIterator = new \ImagickPixelIterator($imagick);

    /* Itera sobre linhas de pixels */
    foreach ($imageIterator as $pixels) {
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
