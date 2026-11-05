# Desenha um retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagerectangle.php

---

# imagerectangle

(PHP 4, PHP 5, PHP 7, PHP 8)

imagerectangle — Desenha um retângulo

### Descrição

function **imagerectangle**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x1`,  
    [int](language.types.integer.md) `$y1`,  
    [int](language.types.integer.md) `$x2`,  
    [int](language.types.integer.md) `$y2`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

**imagerectangle()** cria um retângulo
nas coordenadas especificadas. 0, 0 é o canto superior esquerdo da imagem.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x1`
:   Coordenada x do canto superior esquerdo.

`y1`
:   Coordenada y do canto superior esquerdo.

`x2`
:   Coordenada x do canto inferior direito.

`y2`
:   Coordenada y do canto inferior direito.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo simples de **imagerectangle()****

```
<?php
// Cria uma imagem 200 x 200
$canvas = imagecreatetruecolor(200, 200);

// Aloca cores
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// Desenha três retângulos cada um com sua própria cor
imagerectangle($canvas, 50, 50, 150, 150, $pink);
imagerectangle($canvas, 45, 60, 120, 100, $white);
imagerectangle($canvas, 100, 120, 75, 160, $green);

// Mostra a imagem
header('Content-Type: image/jpeg');
imagejpeg($canvas);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Exemplo simples de imagerectangle()](images/21009b70229598c6a80eef8b45bf282b-imagerectangle.jpg)

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
