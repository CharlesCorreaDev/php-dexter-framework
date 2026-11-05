# Define o modo de combinação para uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagealphablending.php

---

# imagealphablending

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagealphablending — Define o modo de combinação para uma imagem

### Descrição

function **imagealphablending**([GdImage](class.gdimage.md) `$image`, [bool](language.types.boolean.md) `$enable`): [true](language.types.singleton.md)

**imagealphablending()** permite dois modos
diferentes para desenhar em imagens com cores verdadeiras. No modo de combinação, o
componente alfa da cor fornecida para todas as funções de desenho,
tal como [imagesetpixel()](function.imagesetpixel.md), determina o quanto da
cor subjacente deve ser permitido passar. Como resultado, GD
automaticamente combina a cor existente naquele ponto com a cor de desenho,
e grava o resultado na imagem. O pixel resultante é opaco. Em modo de
não-combinação, a cor de desenho é copiada literalmente com sua informação do
canal alfa, substituindo o pixel de destino. O modo de combinação não está disponível
ao desenhar em imagens com paletas de cores.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`enable`
:   Informa se o modo de combinação deve ser habilitado ou não. Em imagens com cores verdadeiras,
    o padrão é **`true`** caso contrário o valor padrão é **`false`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de uso de **imagealphablending()****

```
<?php
// Cria a imagem
$im = imagecreatetruecolor(100, 100);

// Define a combinação de alfa para habilitado
imagealphablending($im, true);

// Desenha um quadrado
imagefilledrectangle($im, 30, 30, 70, 70, imagecolorallocate($im, 255, 0, 0));

// Mostra o resultado
header('Content-Type: image/png');

imagepng($im);
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
