# Retorna um MagickPixelIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getpixeliterator.php

---

# Imagick::getPixelIterator

(PECL imagick 2, PECL imagick 3)

Imagick::getPixelIterator — Retorna um MagickPixelIterator

### Descrição

public function **Imagick::getPixelIterator**(): [ImagickPixelIterator](class.imagickpixeliterator.md)

Retorna um MagickPixelIterator.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um ImagickPixelIterator em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::getPixelIterator()****

```
<?php
function getPixelIterator($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imageIterator = $imagick->getPixelIterator();

    foreach ($imageIterator as $row => $pixels) { /* Faz um laço de repetição pelas linhas de pixels */
        foreach ($pixels as $column => $pixel) { /* Faz um laço de repetição pelos pixels na linha (colunas) */
            /** @var $pixel \ImagickPixel */
            if ($column % 2) {
                $pixel->setColor("rgba(0, 0, 0, 0)"); /* Pinta cada segundo pixel de preto */
            }
        }
        $imageIterator->syncIterator(); /* Sincroniza o iterador, é importante fazer isto em cada iteração */
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
