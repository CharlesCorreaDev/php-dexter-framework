# Retorna a contagem de cores associada a esta cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolorcount.php

---

# ImagickPixel::getColorCount

(PECL imagick 2, PECL imagick 3)

ImagickPixel::getColorCount — Retorna a contagem de cores associada a esta cor

### Descrição

public function **ImagickPixel::getColorCount**(): [int](language.types.integer.md)

Retorna a contagem de cores associada a esta cor.

A contagem de cores é o número de pixels na imagem que possuem a mesma cor deste ImagickPixel.

ImagickPixel::getColorCount parece funcionar apenas para objetos ImagickPixel criados por meio de Imagick::getImageHistogram()

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a contagem de cores como um número inteiro em caso de sucesso, lança
uma exceção ImagickPixelException em caso de falha.

### Examples

**Exemplo #1 Exemplo de ImagickPixel::**getColorCount()****

```
<?php
    $imagick = new \Imagick();
    $imagick->newPseudoImage(640, 480, "magick:logo");
    $histogramElements = $imagick->getImageHistogram();
    $lastColor = array_pop($histogramElements);
    echo "A última contagem de cores de pixel é: ".$lastColor->getColorCount();
?>
```

A saída para isso será semelhante a:

```
A última contagem de cores de pixel é: 256244
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
