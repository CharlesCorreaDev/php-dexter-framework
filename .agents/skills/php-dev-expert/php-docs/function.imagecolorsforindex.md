# Obtém as cores para um índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorsforindex.php

---

# imagecolorsforindex

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorsforindex — Obtém as cores para um índice

### Descrição

function **imagecolorsforindex**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$color`): [array](language.types.array.md)

Obtém a cor para um índice especificado.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`color`
:   O índice de cor.

### Valor Retornado

Retorna um array associativo com chaves para vermelho, verde, azul e alfa
que contêm os valores correspondentes à cor do índice especificado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | **imagecolorsforindex()** agora lança uma exceção [ValueError](class.valueerror.md) se `color` estiver fora dos limites; anteriormente, **`false`** era retornado. |

### Examples

**Exemplo #1 Exemplo de **imagecolorsforindex()****

```
<?php

// abre uma imagem
$im = imagecreatefrompng('nexen.png');

// obtém uma cor
$start_x = 40;
$start_y = 50;
$color_index = imagecolorat($im, $start_x, $start_y);

// torna legível
$color_tran = imagecolorsforindex($im, $color_index);

// que cor é essa ?
print_r($color_tran);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
   [red] => 226
   [green] => 222
   [blue] => 252
   [alpha] => 0
)
```

### Veja também

- [imagecolorat()](function.imagecolorat.md) - Obtém o índica da cor de um pixel
- [imagecolorexact()](function.imagecolorexact.md) - Obtém o índice da cor especificada

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
