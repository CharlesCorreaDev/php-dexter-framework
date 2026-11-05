# Obtém um ImagickPixelIterator para uma seção de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getpixelregioniterator.php

---

# Imagick::getPixelRegionIterator

(PECL imagick 2, PECL imagick 3)

Imagick::getPixelRegionIterator — Obtém um ImagickPixelIterator para uma seção de imagem

### Descrição

public function **Imagick::getPixelRegionIterator**(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`  
): [ImagickPixelIterator](class.imagickpixeliterator.md)

Obtém um ImagickPixelIterator para uma seção de imagem.

### Parâmetros

`x`
:   A coordenada X da região.

`y`
:   A coordenada Y da região.

`columns`
:   A largura da região.

`rows`
:   A altura da região.

### Valor Retornado

Retorna um ImagickPixelIterator para uma seção de imagem.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::getPixelRegionIterator()****

Itera sobre os pixels no canto superior esquerdo da imagem, alterando-os para pretos.

```
<?php
$im = new Imagick(realpath("./testImage.png"));
$areaIterator = $im->getPixelRegionIterator(0, 0, 10, 10);

foreach ($areaIterator as $rowIterator) {
    foreach ($rowIterator as $pixel) {
        // Paint every pixel black
        $pixel->setColor("rgba(0, 0, 0, 0)");
    }
    $areaIterator->syncIterator();
}
$im->writeImage("./output.png");
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
