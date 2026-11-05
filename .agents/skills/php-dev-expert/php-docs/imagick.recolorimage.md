# Recolore imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.recolorimage.php

---

# Imagick::recolorImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::recolorImage — Recolore imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::recolorImage**([array](language.types.array.md) `$matrix`): [bool](language.types.boolean.md)

Traslada, dimensiona, cisalha ou rotaciona as cores da imagem. Este método suporta matrizes de tamanho variável, mas normalmente
a matriz 5x5 é usada para RGBA e 6x6 é usada para CMYK. A última linha deve conter os valores normalizados.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`matrix`
:   A matriz contendo os valores das cores

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::recolorImage()****

```
<?php
function recolorImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $remapColor = [ 1, 0, 0,
        0, 0, 1,
        0, 1, 0,];

//$remapColor = [
//    1.438, -0.122, -0.016,  0, 0, -0.03,
//    -0.062,  1.378, -0.016,  0, 0,  0.05,
//    -0.062, -0.122, 1.483,   0, 0, -0.02,
//];

    @$imagick->recolorImage($remapColor);

    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::displayImage()](imagick.displayimage.md) - Exibe uma imagem

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
