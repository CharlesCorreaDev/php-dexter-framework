# Mescla camadas de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.mergeimagelayers.php

---

# Imagick::mergeImageLayers

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::mergeImageLayers — Mescla camadas de imagem

### Descrição

public function **Imagick::mergeImageLayers**([int](language.types.integer.md) `$layer_method`): [Imagick](class.imagick.md)

Mescla camadas de imagem em uma. Este método é útil ao trabalhar com formatos
de imagem que usam múltiplas camadas, como PSD. A fusão é controlada usando
o `layer_method` que define como as camadas são mescladas.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

### Parâmetros

`layer_method`
:   Uma das constantes **`Imagick::LAYERMETHOD_*`**.

### Valor Retornado

Retorna um objeto Imagick contendo a imagem mesclada.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::mergeImageLayers()****

```
<?php
function mergeImageLayers($layerMethodType, $imagePath1, $imagePath2) {

    $imagick = new \Imagick(realpath($imagePath1));

    $imagick2 = new \Imagick(realpath($imagePath2));
    $imagick->addImage($imagick2);
    $imagick->setImageFormat('png');

    $result = $imagick->mergeImageLayers($layerMethodType);
    header("Content-Type: image/png");
    echo $result->getImageBlob();
}

?>
```

### Veja também

- [Imagick::flattenImages()](imagick.flattenimages.md) - Mescla uma sequência de imagens

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
