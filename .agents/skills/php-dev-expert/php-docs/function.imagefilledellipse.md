# Desenha uma elipse preenchida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilledellipse.php

---

# imagefilledellipse

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagefilledellipse — Desenha uma elipse preenchida

### Descrição

function **imagefilledellipse**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$center_x`,  
    [int](language.types.integer.md) `$center_y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha uma elipse centrada nas coordenadas especificadas na
imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`center_x`
:   Coordenada x do centro da elipse.

`center_y`
:   Coordenada y do centro da elipse.

`width`
:   Largura da elipse.

`height`
:   Altura da elipse.

`color`
:   Cor de preenchimento. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagefilledellipse()****

```
<?php

// cria uma imagem vazia
$image = imagecreatetruecolor(400, 300);

// preenche a cor de fundo
$bg = imagecolorallocate($image, 0, 0, 0);

// escolhe uma cor para a elipse
$col_ellipse = imagecolorallocate($image, 255, 255, 255);

// desenha a elipse branca
imagefilledellipse($image, 200, 150, 300, 200, $col_ellipse);

// mostra a figura
header("Content-type: image/png");
imagepng($image);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagefilledellipse()](images/21009b70229598c6a80eef8b45bf282b-imagefilledellipse.png)

### Notas

> **Nota**:
>
> **imagefilledellipse()** ignora [imagesetthickness()](function.imagesetthickness.md).

### Veja também

- [imageellipse()](function.imageellipse.md) - Desenha uma elipse
- [imagefilledarc()](function.imagefilledarc.md) - Desenha um arco parcial preenchido

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
