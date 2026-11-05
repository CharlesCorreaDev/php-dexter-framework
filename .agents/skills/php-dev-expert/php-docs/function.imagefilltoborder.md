# Preenche até encontrar uma cor especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilltoborder.php

---

# imagefilltoborder

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefilltoborder — Preenche até encontrar uma cor especificada

### Descrição

function **imagefilltoborder**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$border_color`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

**imagefilltoborder()** realiza um preenchimento
cuja cor de borda é definida por `border_color`.
O ponto de início do preenchimento é `x`,
`y` (canto superior esquerdo é 0, 0) e a região é
preenchida com a cor informada em `color`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x`
:   Coordenada x do início.

`y`
:   Coordenada y do início.

`border_color`
:   A cor da borda. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

`color`
:   A cor de preenchimento. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Preenchendo uma elipse com uma cor**

```
<?php
// Cria a imagem, com fundo branco
$im = imagecreatetruecolor(100, 100);
imagefilledrectangle($im, 0, 0, 100, 100, imagecolorallocate($im, 255, 255, 255));

// Desenha uma elipse com borda preta para ser preenchida
imageellipse($im, 50, 50, 50, 50, imagecolorallocate($im, 0, 0, 0));

// Define a borda e a cor de preenchimento
$border = imagecolorallocate($im, 0, 0, 0);
$fill = imagecolorallocate($im, 255, 0, 0);

// Preenche a seleção
imagefilltoborder($im, 50, 50, $border, $fill);

// Exibe
header('Content-type: image/png');
imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Preenchendo uma elipse com uma cor](images/21009b70229598c6a80eef8b45bf282b-imagefilltoborder.png)

### Notas

O algoritmo não se lembra explicitamente de quais pixels já foram definidos,
mas infere isso a partir da cor do pixel, portanto ele não consegue
distinguir entre pixels que acabaram de ser definidos de pixels que
já estavam lá. Isto significa que ao escolher uma cor de preenchimento
que já existe na imagem pode gerar resultados indesejados.

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
