# Obtém o índice da cor e alfa especificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorexactalpha.php

---

# imagecolorexactalpha

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecolorexactalpha — Obtém o índice da cor e alfa especificados

### Descrição

function **imagecolorexactalpha**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`,  
    [int](language.types.integer.md) `$alpha`  
): [int](language.types.integer.md)

Retorna o índice, na paleta da imagem, da cor
e do alfa especificados.

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

`alpha`
:   Um valor entre `0` e `127`.
    `0` indica completamente opaco enquanto que
    `127` indica completamente transparente.

Os parâmetros de cores são inteiros entre 0 e 255 ou hexadecimais
entre 0x00 e 0xFF.

### Valor Retornado

Retorna o índice, na paleta da imagem, da cor + alfa especificados, ou -1 se a
cor + alfa não existir na paleta.

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
$colors[] = imagecolorexactalpha($im, 255, 0, 0, 0);
$colors[] = imagecolorexactalpha($im, 0, 0, 0, 127);
$colors[] = imagecolorexactalpha($im, 255, 255, 255, 55);
$colors[] = imagecolorexactalpha($im, 100, 255, 52, 20);

print_r($colors);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 16711680
    [1] => 2130706432
    [2] => 939524095
    [3] => 342163252
)
```

### Veja também

- [imagecolorclosestalpha()](function.imagecolorclosestalpha.md) - Obtém o índice da cor mais próxima à especificada (incluindo alfa)

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
