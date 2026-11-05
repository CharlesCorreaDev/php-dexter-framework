# Cria um efeito 3D

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.shadeimage.php

---

# Imagick::shadeImage

(PECL imagick 2, PECL imagick 3)

Imagick::shadeImage — Cria um efeito 3D

### Descrição

public function **Imagick::shadeImage**([bool](language.types.boolean.md) `$gray`, [float](language.types.float.md) `$azimuth`, [float](language.types.float.md) `$elevation`): [bool](language.types.boolean.md)

Ilumina à distância uma imagem para criar um efeito tridimensional.
O controle do posicionamento da luz é feito com azimute e elevação;
o azimute é medido em graus em relação ao X e a elevação é medida
em pixels acima do eixo Z.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`gray`
:   Um valor diferente de zero reduz a intensidade de cada pixel.

`azimuth`
:   Azimute. Define a direção da fonte de luz.

`elevation`
:   Elevação. Define a altura da fonte de luz.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma ImagickException em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Imagick::shadeImage()****

```
<?php
function shadeImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->shadeImage(true, 45, 20);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
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
