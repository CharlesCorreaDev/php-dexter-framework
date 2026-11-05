# Desenha um pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetpixel.php

---

# imagesetpixel

(PHP 4, PHP 5, PHP 7, PHP 8)

imagesetpixel — Desenha um pixel

### Descrição

function **imagesetpixel**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

**imagesetpixel()** desenha um pixel na coordenada
especificada.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x`
:   Coordenada x.

`y`
:   Coordenada y.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagesetpixel()****

Um desenho aleatório que termina com uma imagem normal.

```
<?php

$x = 200;
$y = 200;

$gd = imagecreatetruecolor($x, $y);

$corners[0] = array('x' => 100, 'y' =>  10);
$corners[1] = array('x' =>   0, 'y' => 190);
$corners[2] = array('x' => 200, 'y' => 190);

$red = imagecolorallocate($gd, 255, 0, 0);

for ($i = 0; $i < 100000; $i++) {
  imagesetpixel($gd, round($x), round($y), $red);
  $a = rand(0, 2);
  $x = ($x + $corners[$a]['x']) / 2;
  $y = ($y + $corners[$a]['y']) / 2;
}

header('Content-Type: image/png');
imagepng($gd);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagesetpixel()](images/21009b70229598c6a80eef8b45bf282b-imagesetpixel.png)

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [imagecolorallocate()](function.imagecolorallocate.md) - Aloca uma cor para uma imagem
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
