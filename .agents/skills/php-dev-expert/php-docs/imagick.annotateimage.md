# Cria anotação em uma imagem com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.annotateimage.php

---

# Imagick::annotateImage

(PECL imagick 2, PECL imagick 3)

Imagick::annotateImage — Cria anotação em uma imagem com texto

### Descrição

public function **Imagick::annotateImage**(  
    [ImagickDraw](class.imagickdraw.md) `$draw_settings`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$text`  
): [bool](language.types.boolean.md)

Cria anotação em imagem com texto.

### Parâmetros

`draw_settings`
:   O objeto ImagickDraw que contém configurações para desenhar o texto

`x`
:   Deslocamento horizontal em pixels à esquerda do texto

`y`
:   Deslocamento vertical em pixels até a linha de base do texto

`angle`
:   O ângulo em que o texto deve ser escrito

`text`
:   A string a ser desenhada

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::annotateImage()**:**

Anotando texto em uma imagem vazia

```
<?php
/* Cria alguns objetos */
$image = new Imagick();
$draw = new ImagickDraw();
$pixel = new ImagickPixel( 'gray' );

/* Nova imagem */
$image->newImage(800, 75, $pixel);

/* Texto preto */
$draw->setFillColor('black');

/* Propriedades da fonte */
$draw->setFont('Bookman-DemiItalic');
$draw->setFontSize( 30 );

/* Cria texto */
$image->annotateImage($draw, 10, 45, 0, 'The quick brown fox jumps over the lazy dog');

/* Dá um formato à imagem */
$image->setImageFormat('png');

/* Mostra a imagem com cabeçalho */
header('Content-type: image/png');
echo $image;

?>
```

### Veja também

- [ImagickDraw::annotation()](imagickdraw.annotation.md) - Desenha texto na imagem
- [ImagickDraw::setFont()](imagickdraw.setfont.md) - Define a fonte totalmente especificada a ser usada ao fazer anotações com texto

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
