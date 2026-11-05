# Define a cor para o índice da paleta especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorset.php

---

# imagecolorset

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorset — Define a cor para o índice da paleta especificado

### Descrição

function **imagecolorset**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$color`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`,  
    [int](language.types.integer.md) `$alpha` = 0  
): [?](language.types.null.md)[false](language.types.singleton.md)

Esta função atribui a cor especificada ao índice especificado na
paleta. Isto é útil para criar efeitos de preenchimento em imagens
de paleta sem a sobrecarga de realizar verdadeiramente
o preenchimento.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`color`
:   Um índice na paleta.

`red`
:   Valor do componente vermelho.

`green`
:   Valor do componente verde.

`blue`
:   Valor do componente azul.

`alpha`
:   Valor do componente alfa.

### Valor Retornado

A função retorna **`null`** em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagecolorset()****

```
<?php
// Cria uma imagem 300x100
$im = imagecreate(300, 100);

// Define o plano de fundo para vermelho
imagecolorallocate($im, 255, 0, 0);

// Obtém o índice de cor para o plano de fundo
$bg = imagecolorat($im, 0, 0);

// Define o plano de fundo para azul
imagecolorset($im, $bg, 0, 0, 255);

// Mostra a imagem no navegador
header('Content-Type: image/png');

imagepng($im);
?>
```

### Veja também

- [imagecolorat()](function.imagecolorat.md) - Obtém o índica da cor de um pixel

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
