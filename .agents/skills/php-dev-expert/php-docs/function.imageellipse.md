# Desenha uma elipse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageellipse.php

---

# imageellipse

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imageellipse — Desenha uma elipse

### Descrição

function **imageellipse**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$center_x`,  
    [int](language.types.integer.md) `$center_y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha uma elipse centrada nas coordenadas especificadas.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`center_x`
:   Coordenada x do centro.

`center_y`
:   Coordenada y do centro.

`width`
:   Largura da elipse.

`height`
:   Altura da elipse.

`color`
:   Cor da elipse. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imageellipse()****

```
<?php

// Cria uma imagem vazia.
$image = imagecreatetruecolor(400, 300);

// Seleciona a cor de fundo.
$bg = imagecolorallocate($image, 0, 0, 0);

// Preenche o fundo com a cor selecionada acima.
imagefill($image, 0, 0, $bg);

// Escolhe uma cor para a elipse.
$col_ellipse = imagecolorallocate($image, 255, 255, 255);

// Desenha a elipse.
imageellipse($image, 200, 150, 300, 200, $col_ellipse);

// Mostra a imagem.
header("Content-type: image/png");
imagepng($image);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imageellipse()](images/21009b70229598c6a80eef8b45bf282b-imageellipse.png)

### Notas

> **Nota**:
>
> **imageellipse()** ignora [imagesetthickness()](function.imagesetthickness.md).

### Veja também

- [imagefilledellipse()](function.imagefilledellipse.md) - Desenha uma elipse preenchida
- [imagearc()](function.imagearc.md) - Desenha um arco

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
