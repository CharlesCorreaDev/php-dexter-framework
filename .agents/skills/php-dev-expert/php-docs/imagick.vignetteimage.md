# Adiciona filtro de vinheta à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.vignetteimage.php

---

# Imagick::vignetteImage

(PECL imagick 2, PECL imagick 3)

Imagick::vignetteImage — Adiciona filtro de vinheta à imagem

### Descrição

public function **Imagick::vignetteImage**(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Suaviza as bordas da imagem no estilo vinheta.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`blackPoint`
:   O ponto preto.

`whitePoint`
:   O ponto branco.

`x`
:   Deslocamento X da elipse

`y`
:   Deslocamento Y da elipse

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::vignetteImage()****

```
<?php
function vignetteImage($imagePath, $blackPoint, $whitePoint, $x, $y) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->vignetteImage($blackPoint, $whitePoint, $x, $y);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::waveImage()](imagick.waveimage.md) - Aplica filtro de onda à imagem
- [Imagick::swirlImage()](imagick.swirlimage.md) - Gira os pixels em torno do centro da imagem

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
