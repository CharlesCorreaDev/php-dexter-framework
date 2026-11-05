# Obtém o índice da cor + alfa especificados ou a alternativa mais próxima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorresolvealpha.php

---

# imagecolorresolvealpha

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecolorresolvealpha — Obtém o índice da cor + alfa especificados ou a alternativa mais próxima

### Descrição

function **imagecolorresolvealpha**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`,  
    [int](language.types.integer.md) `$alpha`  
): [int](language.types.integer.md)

Esta função garantidamente retorna um índice para uma
cor solicitada, pode ser a cor exata ou a cor mais alternativa
mais próxima.

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

Retorna um índice de cor.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagecoloresolvealpha()** para obter cores de uma imagem**

```
<?php
// Carrega uma imagem
$im = imagecreatefromgif('phplogo.gif');

// Obtém as cores mais próximas da imagem
$colors = array();
$colors[] = imagecolorresolvealpha($im, 255, 255, 255, 0);
$colors[] = imagecolorresolvealpha($im, 0, 0, 200, 127);

// Saída
print_r($colors);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 89
    [1] => 85
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
