# Converte uma imagem em cores verdadeiras em uma imagem de paleta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagetruecolortopalette.php

---

# imagetruecolortopalette

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagetruecolortopalette — Converte uma imagem em cores verdadeiras em uma imagem de paleta

### Descrição

function **imagetruecolortopalette**([GdImage](class.gdimage.md) `$image`, [bool](language.types.boolean.md) `$dither`, [int](language.types.integer.md) `$num_colors`): [bool](language.types.boolean.md)

**imagetruecolortopalette()** converte uma imagem em cores verdadeiras
em uma imagem de paleta. O código para esta função foi originalmente escrito a partir
do código da biblioteca do Independent JPEG Group, que é excelente. O código
foi modificado para preservar o máximo possível de informação do canal alfa
na paleta resultante, além de preservar as cores da melhor maneira
possível. Isto não funciona tão bem quanto esperado. Normalmente
é melhor simplesmente produzir uma imagem em cores verdadeiras, o que
garante a qualidade de saída mais alta possível.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`dither`
:   Indica se a imagem deve ser pontilhada - se for **`true`** o
    pontilhamento será usado, o que resultará em uma imagem mais salpicada mas com
    uma melhor aproximação de cores.

`num_colors`
:   Define o número máximo de cores que deve sem mantido na paleta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Convertendo uma imagem em cores verdadeiras em uma imagem de paleta**

```
<?php
// Cria uma nova imagem em cores verdadeiras
$im = imagecreatetruecolor(100, 100);

// Converte para paleta sem pontilhamento e com 255 cores
imagetruecolortopalette($im, false, 255);

// Grava a imagem
imagepng($im, './paletteimage.png');
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
