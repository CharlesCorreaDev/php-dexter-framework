# Desenha uma string na horizontal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagestring.php

---

# imagestring

(PHP 4, PHP 5, PHP 7, PHP 8)

imagestring — Desenha uma string na horizontal

### Descrição

function **imagestring**(  
    [GdImage](class.gdimage.md) `$image`,  
    [GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha uma `string` nas coordenadas informadas.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

`x`
:   Coordenada x do canto superior esquerdo.

`y`
:   Coordenada y do canto superior esquerdo.

`string`
:   A string a ser desenhada.

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

**Exemplo #1 Exemplo de **imagestring()****

```
<?php
// Cria uma imagem 100*30
$im = imagecreate(100, 30);

// Fundo branco e texto azul
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Desenha o texto no canto superior esquerdo
imagestring($im, 5, 0, 0, 'Hello world!', $textcolor);

// Mostra a imagem
header('Content-type: image/png');

imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagestring()](images/21009b70229598c6a80eef8b45bf282b-imagestring.png)

### Veja também

- [imagestringup()](function.imagestringup.md) - Desenha uma string na vertical
- [imageloadfont()](function.imageloadfont.md) - Carrega uma nova fonte
- [imagettftext()](function.imagettftext.md) - Escreve texto na imagem usando fontes TrueType

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
