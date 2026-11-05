# Define o tipo de pincel para desenho de linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetbrush.php

---

# imagesetbrush

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagesetbrush — Define o tipo de pincel para desenho de linhas

### Descrição

function **imagesetbrush**([GdImage](class.gdimage.md) `$image`, [GdImage](class.gdimage.md) `$brush`): [true](language.types.singleton.md)

**imagesetbrush()** define a imagem de pincel para ser
usada por todas as funções de desenho de linhas (como [imageline()](function.imageline.md)
e [imagepolygon()](function.imagepolygon.md)) ao desenhar com as cores
especiais **`IMG_COLOR_BRUSHED`** ou
**`IMG_COLOR_STYLEDBRUSHED`**.

**Cuidado**

Não é necessário tomar medidas especiais ao terminar de usar um pincel, mas
se a imagem do pincel for destruída (ou se o PHP destruí-la), as cores
**`IMG_COLOR_BRUSHED`** ou
**`IMG_COLOR_STYLEDBRUSHED`** não podem ser usadas até que uma nova
imagem de pincel seja definida!

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`brush`
:   Um objeto de imagem.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `image` e `brush` agora esperam instâncias de [GdImage](class.gdimage.md) anteriormente, [resource](language.types.resource.md)s eram esperados. |

### Examples

**Exemplo #1 Exemplo de **imagesetbrush()****

```
<?php

// Carrega uma mini logomarca do PHP
$php = imagecreatefrompng('./php.png');

// Cria a imagem principal, 100x100
$im = imagecreatetruecolor(100, 100);

// Preenche o fundo com a cor branca
$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 99, 99, $white);

// Define o pincel
imagesetbrush($im, $php);

// Desenha um par de pincéis, um sobrepondo o outro
imageline($im, 50, 50, 50, 60, IMG_COLOR_BRUSHED);

// Mostra a imagem no navegador
header('Content-type: image/png');

imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagesetbrush()](images/21009b70229598c6a80eef8b45bf282b-imagesetbrush.png)

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
