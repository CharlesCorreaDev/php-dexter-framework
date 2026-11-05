# Obtém o índice da cor mais próxima à especificada (incluindo alfa)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorclosestalpha.php

---

# imagecolorclosestalpha

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecolorclosestalpha — Obtém o índice da cor mais próxima à especificada (incluindo alfa)

### Descrição

function **imagecolorclosestalpha**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`,  
    [int](language.types.integer.md) `$alpha`  
): [int](language.types.integer.md)

Retorna o índice da cor na paleta da imagem que for
a mais "próxima" ao valor RGB e ao nível
`alpha` especificados.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`red`
:   Valor do componente vermelho.

`green`
:   Valor do componente verde.

`blue`
:   Valor do componente azul.

`alpha`
:   Um valor entre `0` e `127`.
    `0` indica completamente opaco enquanto que
    `127` indica completamente transparente.

Os parâmetros de cores são inteiros entre 0 e 255 ou hexadecimais
entre 0x00 e 0xFF.

### Valor Retornado

Retorna o índice na paleta da imagem da cor mais próxima à especificada.

### Examples

**Exemplo #1 Procura por um conjunto de cores em uma imagem**

```
<?php
// Inicia com uma imagem e converte-a para uma baseada em paleta
$im = imagecreatefrompng('figures/imagecolorclosest.png');
imagetruecolortopalette($im, false, 255);

// Cores que serão procuradas (RGB)
$colors = array(
    array(254, 145, 154, 50),
    array(153, 145, 188, 127),
    array(153, 90, 145, 0),
    array(255, 137, 92, 84)
);

// Faz uma repeticação para cada procura e encontra a cor mais próxima na paleta.
// Retorna o número da procura, a cor RGB sendo procurada e a cor correspondente encontrada, convertida para RGB
foreach($colors as $id => $rgb)
{
    $result = imagecolorclosestalpha($im, $rgb[0], $rgb[1], $rgb[2], $rgb[3]);
    $result = imagecolorsforindex($im, $result);
    $result = "({$result['red']}, {$result['green']}, {$result['blue']}, {$result['alpha']})";

    echo "#$id: Cor procurada: ($rgb[0], $rgb[1], $rgb[2], $rgb[3]); Cor mais próxima: $result.\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
#0: Cor procurada: (254, 145, 154, 50); Cor mais próxima: (252, 150, 148, 0).
#1: Cor procurada: (153, 145, 188, 127); Cor mais próxima: (148, 150, 196, 0).
#2: Cor procurada: (153, 90, 145, 0); Cor mais próxima: (148, 90, 156, 0).
#3: Cor procurada: (255, 137, 92, 84); Cor mais próxima: (252, 150, 92, 0).
```

### Veja também

- [imagecolorexactalpha()](function.imagecolorexactalpha.md) - Obtém o índice da cor e alfa especificados
- [imagecolorclosest()](function.imagecolorclosest.md) - Obtém o índice da cor mais próxima à especificada
- [imagecolorclosesthwb()](function.imagecolorclosesthwb.md) - Obtém o índice da cor que tem a matiz, brancura e negritude mais próximas de uma cor informada

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
