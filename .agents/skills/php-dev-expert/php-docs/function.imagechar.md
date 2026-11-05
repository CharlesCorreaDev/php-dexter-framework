# Desenha um caractere horizontalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagechar.php

---

# imagechar

(PHP 4, PHP 5, PHP 7, PHP 8)

imagechar — Desenha um caractere horizontalmente

### Descrição

function **imagechar**(  
    [GdImage](class.gdimage.md) `$image`,  
    [GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [string](language.types.string.md) `$char`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

**imagechar()** desenha o primeiro caractere de
`char` na imagem identificada por
`image` com seu canto superior esquerdo em
`x`,`y` (superior esquerdo é 0,
0) com a cor `color`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

`x`
:   Coordenada x do início.

`y`
:   Coordenada y do início.

`char`
:   O caractere a ser desenhado.

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

**Exemplo #1 Exemplo de **imagechar()****

```
<?php

$im = imagecreate(100, 100);

$string = 'PHP';

$bg = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);

// mostra um "P" na cor preta no canto superior esquerdo
imagechar($im, 1, 0, 0, $string, $black);

header('Content-type: image/png');
imagepng($im);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagechar()](images/21009b70229598c6a80eef8b45bf282b-imagechar.png)

### Veja também

- [imagecharup()](function.imagecharup.md) - Desenha um caractere verticalmente
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
