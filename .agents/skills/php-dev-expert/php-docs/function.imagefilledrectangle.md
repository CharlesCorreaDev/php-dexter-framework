# Desenha um retângulo preenchido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilledrectangle.php

---

# imagefilledrectangle

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefilledrectangle — Desenha um retângulo preenchido

### Descrição

function **imagefilledrectangle**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x1`,  
    [int](language.types.integer.md) `$y1`,  
    [int](language.types.integer.md) `$x2`,  
    [int](language.types.integer.md) `$y2`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Cria um retângulo preenchido com a cor informada no parâmetro `color` na
imagem fornecida em `image`, iniciando no ponto 1 e terminando no ponto 2.
0, 0 é o canto superior esquerdo da imagem.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x1`
:   Coordenada x do ponto 1.

`y1`
:   Coordenada y do ponto 1.

`x2`
:   Coordenada x do ponto 2.

`y2`
:   Coordenada y do ponto 2.

`color`
:   A cor de preenchimento. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Uso de **imagefilledrectangle()****

```
<?php
// Cria uma imagem 55x30
$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);

// Desenha um retângulo branco
imagefilledrectangle($im, 4, 4, 50, 25, $white);

// Grava a imagem
imagepng($im, './imagefilledrectangle.png');
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagefilledrectangle()](images/21009b70229598c6a80eef8b45bf282b-imagefilledrectangle.png)

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
