# Desenha uma linha tracejada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagedashedline.php

---

# imagedashedline

(PHP 4, PHP 5, PHP 7, PHP 8)

imagedashedline — Desenha uma linha tracejada

### Descrição

function **imagedashedline**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x1`,  
    [int](language.types.integer.md) `$y1`,  
    [int](language.types.integer.md) `$x2`,  
    [int](language.types.integer.md) `$y2`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Esta função foi descontinuada. Use uma combinação de
[imagesetstyle()](function.imagesetstyle.md) e [imageline()](function.imageline.md)
em seu lugar. 0, 0 é o canto superior esquerdo da imagem.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x1`
:   Coordenada x do primeiro ponto.

`y1`
:   Coordenada y do primeiro ponto.

`x2`
:   Coordenada x do segundo ponto.

`y2`
:   Coordenada y do segundo ponto.

`color`
:   A cor de preenchimento. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagedashedline()****

```
<?php
// Cria uma imagem 100x100
$im = imagecreatetruecolor(100, 100);
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);

// Desenha uma linha tracejada vertical
imagedashedline($im, 50, 25, 50, 75, $white);

// Grava a imagem
imagepng($im, './dashedline.png');
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagedashedline()](images/21009b70229598c6a80eef8b45bf282b-imagedashedline.png)

**Exemplo #2 Alternativa a **imagedashedline()****

```
<?php
// Cria uma imagem 100x100
$im = imagecreatetruecolor(100, 100);
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);

// Define o estilo: primeiros 4 pixels brancos e os 4
// seguintes transparentes. Isto cria o efeito tracejado.
$style = Array(
                $white,
                $white,
                $white,
                $white,
                IMG_COLOR_TRANSPARENT,
                IMG_COLOR_TRANSPARENT,
                IMG_COLOR_TRANSPARENT,
                IMG_COLOR_TRANSPARENT
                );

imagesetstyle($im, $style);

// Desenha a linha tracejada
imageline($im, 50, 25, 50, 75, IMG_COLOR_STYLED);

// Grava a imagem
imagepng($im, './imageline.png');
?>
```

### Veja também

- [imagesetstyle()](function.imagesetstyle.md) - Define o estilo para desenho de linhas
- [imageline()](function.imageline.md) - Desenha uma linha

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
