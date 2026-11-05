# Recorta uma imagem no retângulo informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecrop.php

---

# imagecrop

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imagecrop — Recorta uma imagem no retângulo informado

### Descrição

function **imagecrop**([GdImage](class.gdimage.md) `$image`, [array](language.types.array.md) `$rectangle`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Recorta uma imagem na área retangular informada e retorna a imagem resultante.
A imagem fornecida em `image` não é modificada.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`rectangle`
:   O retângulo de recorte com um [array](language.types.array.md) com chaves
    `x`, `y`, `width` e
    `height`.

### Valor Retornado

Retorna o objeto da imagem recortada em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **imagecrop()****

Este exemplo mostra como recortar uma imagem em uma área quadrada.

```
<?php
$im = imagecreatefrompng('example.png');
$size = min(imagesx($im), imagesy($im));
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
if ($im2 !== FALSE) {
    imagepng($im2, 'example-cropped.png');
}
?>
```

### Veja também

- [imagecropauto()](function.imagecropauto.md) - Recorta uma imagem automaticamente usando um dos modos disponíveis

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
