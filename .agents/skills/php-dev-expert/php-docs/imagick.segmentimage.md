# Segmenta uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.segmentimage.php

---

# Imagick::segmentImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::segmentImage — Segmenta uma imagem

### Descrição

public function **Imagick::segmentImage**(  
    [int](language.types.integer.md) `$COLORSPACE`,  
    [float](language.types.float.md) `$cluster_threshold`,  
    [float](language.types.float.md) `$smooth_threshold`,  
    [bool](language.types.boolean.md) `$verbose` = **`false`**  
): [bool](language.types.boolean.md)

Analisa a imagem e identifica unidades semelhantes. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.5 ou superior.

### Parâmetros

`COLORSPACE`
:   Uma das [constantes COLORSPACE](imagick.constants.md#imagick.constants.colorspace).

`cluster_threshold`
:   Uma porcentagem que descreve o número mínimo de pixels contidos
    em um hexaedro antes de ser considerado válido.

`smooth_threshold`
:   Elimina o ruído do histograma.

`verbose`
:   Informa se devem ser geradas informações detalhadas sobre classes reconhecidas.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Imagick::segmentImage()****

```
<?php
function segmentImage($imagePath, $colorSpace, $clusterThreshold, $smoothThreshold) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->segmentImage($colorSpace, $clusterThreshold, $smoothThreshold);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

segmentImage($imagePath, \Imagick::COLORSPACE_RGB, 5, 5);

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
