# Define a imagem de ladrilho para preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesettile.php

---

# imagesettile

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagesettile — Define a imagem de ladrilho para preenchimento

### Descrição

function **imagesettile**([GdImage](class.gdimage.md) `$image`, [GdImage](class.gdimage.md) `$tile`): [true](language.types.singleton.md)

**imagesettile()** define a imagem de ladrilho para ser
usada por todas as funções de preenchimento de região (tal como [imagefill()](function.imagefill.md)
e [imagefilledpolygon()](function.imagefilledpolygon.md)) ao preencher com a cor
especial **`IMG_COLOR_TILED`**.

O ladrilho é uma imagem usada para preencher uma área com um padrão repetido. *Qualquer*
imagem GD pode ser usada como ladrilho, e ao definir o índice de cor transparente da imagem de ladrilho
com [imagecolortransparent()](function.imagecolortransparent.md), permite-se que certas partes
da área subjacente apareçam.

**Cuidado**

Não é necessário tomar ações especiais ao terminar de usar uma imagem de ladrilho, mas se
ela for destruída, a cor **`IMG_COLOR_TILED`**
não poderá ser usada até que uma nova imagem de ladrilho seja definida!

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`tile`
:   O objeto imagem a ser usado como ladrilho.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `image` e `tile` agora esperam instâncias [GdImage](class.gdimage.md); anteriormente, [resource](language.types.resource.md)s eram esperados. |

### Examples

**Exemplo #1 Exemplo de **imagesettile()****

```
<?php
// Carrega uma imagem externa
$zend = imagecreatefromgif('./zend.gif');

// Cria uma imagem 200x200
$im = imagecreatetruecolor(200, 200);

// Define o ladrilho
imagesettile($im, $zend);

// Faz a imagem se repetir
imagefilledrectangle($im, 0, 0, 199, 199, IMG_COLOR_TILED);

// Mostra a imagem no navegador
header('Content-Type: image/png');

imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagesettile()](images/21009b70229598c6a80eef8b45bf282b-imagesettile.png)

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
