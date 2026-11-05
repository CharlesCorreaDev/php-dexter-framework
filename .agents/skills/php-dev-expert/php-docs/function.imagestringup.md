# Desenha uma string na vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagestringup.php

---

# imagestringup

(PHP 4, PHP 5, PHP 7, PHP 8)

imagestringup — Desenha uma string na vertical

### Descrição

function **imagestringup**(  
    [GdImage](class.gdimage.md) `$image`,  
    [GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha uma `string` na vertical nas coordenadas
informadas.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

`x`
:   Coordenada x do canto inferior esquerdo.

`y`
:   Coordenada y do canto inferior esquerdo.

`string`
:   O texto a ser desenhado.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `font` agora aceita uma instância de [GdFont](class.gdfont.md) ou um [int](language.types.integer.md); anteriormente, apenas [int](language.types.integer.md) era aceito. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagestringup()****

```
<?php
// cria uma imagem 100*100
$im = imagecreatetruecolor(100, 100);

// Desenha o texto
$textcolor = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
imagestringup($im, 3, 40, 80, 'gd library', $textcolor);

// Grava a imagem
imagepng($im, './stringup.png');
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagestringup()](images/21009b70229598c6a80eef8b45bf282b-imagestringup.png)

### Veja também

- [imagestring()](function.imagestring.md) - Desenha uma string na horizontal
- [imageloadfont()](function.imageloadfont.md) - Carrega uma nova fonte

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
