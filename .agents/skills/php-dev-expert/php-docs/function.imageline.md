# Desenha uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageline.php

---

# imageline

(PHP 4, PHP 5, PHP 7, PHP 8)

imageline — Desenha uma linha

### Descrição

function **imageline**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x1`,  
    [int](language.types.integer.md) `$y1`,  
    [int](language.types.integer.md) `$x2`,  
    [int](language.types.integer.md) `$y2`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha uma linha entre dois pontos informados.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x1`
:   Coordenada x do primeiro ponto.

`y1`
:   Coordenada y do primeiro ponto.

`x2`
:   Coordenada x do segundo ponto.

`y2`
:   Coordenada y do segundo ponto.

`color`
:   A cor da linha. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Desenhando uma linha espessa**

```
<?php

function imagelinethick($image, $x1, $y1, $x2, $y2, $color, $thick = 1)
{
    /* desta forma só funciona bem com linhas ortogonais
    imagesetthickness($image, $thick);
    return imageline($image, $x1, $y1, $x2, $y2, $color);
    */
    if ($thick == 1) {
        return imageline($image, $x1, $y1, $x2, $y2, $color);
    }
    $t = $thick / 2 - 0.5;
    if ($x1 == $x2 || $y1 == $y2) {
        return imagefilledrectangle($image, round(min($x1, $x2) - $t), round(min($y1, $y2) - $t), round(max($x1, $x2) + $t), round(max($y1, $y2) + $t), $color);
    }
    $k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
    $a = $t / sqrt(1 + pow($k, 2));
    $points = array(
        round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
        round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
        round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
        round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
    );
    imagefilledpolygon($image, $points, 4, $color);
    return imagepolygon($image, $points, 4, $color);
}

?>
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [imagecolorallocate()](function.imagecolorallocate.md) - Aloca uma cor para uma imagem

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
