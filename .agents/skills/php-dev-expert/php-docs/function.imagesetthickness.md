# Define a espessura para desenho de linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetthickness.php

---

# imagesetthickness

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagesetthickness — Define a espessura para desenho de linhas

### Descrição

function **imagesetthickness**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$thickness`): [true](language.types.singleton.md)

**imagesetthickness()** define a espessura para as linhas
ao desenhar retângulos, polígonos, arcos, etc. para
o valor de `thickness` em pixels.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`thickness`
:   Espessura, em pixels.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagesetthickness()****

```
<?php

// Cria uma imagem 200x100
$im = imagecreatetruecolor(200, 100);
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);

// Fundo branco
imagefilledrectangle($im, 0, 0, 199, 99, $white);

// Espessura da linha de 5 pixels
imagesetthickness($im, 5);

// Desenha o retângulo
imagerectangle($im, 14, 14, 185, 85, $black);

// Mostra no navegador
header('Content-Type: image/png');

imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagesetthickness()](images/21009b70229598c6a80eef8b45bf282b-imagesetthickness.png)

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
