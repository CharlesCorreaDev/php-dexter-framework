# Obtém o índice da cor especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorexact.php

---

# imagecolorexact

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorexact — Obtém o índice da cor especificada

### Descrição

function **imagecolorexact**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`  
): [int](language.types.integer.md)

Retorna o índice, na paleta da imagem, da cor
especificada.

Se a imagem foi criada a partir de um arquivo, apenas as cores usadas na imagem são resolvidas. As cores presentes apenas na paleta não serão resolvidas.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`red`
:   Valor do componente vermelho.

`green`
:   Valor do componente verde.

`blue`
:   Valor do componente azul.

### Valor Retornado

Retorna o índice, na paleta da imagem, da cor especificada, ou -1 se a
cor não existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Obtém cores da logomarca GD**

```
<?php
// Configura uma imagem
$im = imagecreatefrompng('./gdlogo.png');

$colors   = Array();
$colors[] = imagecolorexact($im, 255, 0, 0);
$colors[] = imagecolorexact($im, 0, 0, 0);
$colors[] = imagecolorexact($im, 255, 255, 255);
$colors[] = imagecolorexact($im, 100, 255, 52);

print_r($colors);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 16711680
    [1] => 0
    [2] => 16777215
    [3] => 6618932
)
```

### Veja também

- [imagecolorclosest()](function.imagecolorclosest.md) - Obtém o índice da cor mais próxima à especificada

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
