# Define uma cor como transparente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolortransparent.php

---

# imagecolortransparent

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolortransparent — Define uma cor como transparente

### Descrição

function **imagecolortransparent**([GdImage](class.gdimage.md) `$image`, [?](language.types.null.md)[int](language.types.integer.md) `$color` = **`null`**): [int](language.types.integer.md)

Obtém ou define a cor transparente na imagem fornecida em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

O identificador da nova (ou atual se nenhuma for especificada)
cor transparente é retornado. Se `color`
for **`null`**, e a imagem não tiver cor transparente, o
identificador retornado será `-1`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | `color` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **imagecolortransparent()****

```
<?php
// Cria uma image 55 x 30
$im = imagecreatetruecolor(55, 30);
$red = imagecolorallocate($im, 255, 0, 0);
$black = imagecolorallocate($im, 0, 0, 0);

// Define o fundo para transparente
imagecolortransparent($im, $black);

// Desenha um retângulo vermelho
imagefilledrectangle($im, 4, 4, 50, 25, $red);

// Grava a imagem
imagepng($im, './imagecolortransparent.png');
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagecolortransparent()](images/21009b70229598c6a80eef8b45bf282b-imagecolortransparent.png)

### Notas

> **Nota**:
>
> Transparência é copiada apenas com [imagecopymerge()](function.imagecopymerge.md) e
> imagens com cores verdadeiras, e não com [imagecopy()](function.imagecopy.md) ou imagens com paleta.

> **Nota**:
>
> A cor transparente é uma propriedade da imagem, a transparência não é uma
> propriedade da cor. Uma vez definida uma cor transparente,
> as regiões da imagem com essa cor que foram desenhadas anteriormente
> serão transparentes.

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
