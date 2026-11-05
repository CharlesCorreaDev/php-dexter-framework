# Define o estilo para desenho de linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetstyle.php

---

# imagesetstyle

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagesetstyle — Define o estilo para desenho de linhas

### Descrição

function **imagesetstyle**([GdImage](class.gdimage.md) `$image`, [array](language.types.array.md) `$style`): [bool](language.types.boolean.md)

**imagesetstyle()** define o estilo para ser usado por todas
as funções de desenho de linhas (tal como [imageline()](function.imageline.md)
e [imagepolygon()](function.imagepolygon.md)) ao desenhar com as cores
especiais **`IMG_COLOR_STYLED`** ou linhas de imagens com a cor
**`IMG_COLOR_STYLEDBRUSHED`**.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`style`
:   Um array de cores de pixel. Pode-se usar a constante
    **`IMG_COLOR_TRANSPARENT`** para adicionar um
    pixel transparente.
    Observe que `style` não pode ser um [array](language.types.array.md) vazio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

O exemplo a seguir desenha uma linha tracejada do canto superior esquerdo para
o inferior direito da imagem:

**Exemplo #1 Exemplo de **imagesetstyle()****

```
<?php
header("Content-type: image/jpeg");
$im  = imagecreatetruecolor(100, 100);
$w   = imagecolorallocate($im, 255, 255, 255);
$red = imagecolorallocate($im, 255, 0, 0);

/* Desenha uma linha tracejada, 5 pixels vermelhos, 5 brancos */
$style = array($red, $red, $red, $red, $red, $w, $w, $w, $w, $w);
imagesetstyle($im, $style);
imageline($im, 0, 0, 100, 100, IMG_COLOR_STYLED);

/* Desenha uma linha de rostos felizes usando imagesetbrush() com imagesetstyle */
$style = array($w, $w, $w, $w, $w, $w, $w, $w, $w, $w, $w, $w, $red);
imagesetstyle($im, $style);

$brush = imagecreatefrompng("http://www.libpng.org/pub/png/images/smile.happy.png");
$w2 = imagecolorallocate($brush, 255, 255, 255);
imagecolortransparent($brush, $w2);
imagesetbrush($im, $brush);
imageline($im, 100, 0, 0, 100, IMG_COLOR_STYLEDBRUSHED);

imagejpeg($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagesetstyle()](images/21009b70229598c6a80eef8b45bf282b-imagesetstyle.jpg)

### Veja também

- [imagesetbrush()](function.imagesetbrush.md) - Define o tipo de pincel para desenho de linhas
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
