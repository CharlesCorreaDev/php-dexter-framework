# Obtém o índice da cor mais próxima à especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorclosest.php

---

# imagecolorclosest

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorclosest — Obtém o índice da cor mais próxima à especificada

### Descrição

function **imagecolorclosest**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`  
): [int](language.types.integer.md)

Retorna o índice da cor na paleta da imagem que for
a mais "próxima" ao valor RGB especificado.

A "distância" entre a cor desejada em relação a cada cor da
paleta é calculada como se os valores RGB
representassem pontos no espaço tridimensional.

Se a imagem foi criada a partir de um arquivo, apenas as cores usadas na imagem são resolvidas. As cores presentes apenas na paleta não serão resolvidas.

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

Os parâmetros de cores são inteiros entre 0 e 255 ou hexadecimais
entre 0x00 e 0xFF.

### Valor Retornado

Retorna o índice na paleta da imagem da cor mais próxima à
especificada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Procura por um conjunto de cores em uma imagem**

```
<?php
// Inicia com uma imagem e converte-a para uma baseada em paleta
$im = imagecreatefrompng('figures/imagecolorclosest.png');
imagetruecolortopalette($im, false, 255);

// Cores que serão procuradas (RGB)
$colors = array(
    array(254, 145, 154),
    array(153, 145, 188),
    array(153, 90, 145),
    array(255, 137, 92)
);

// Faz uma repeticação para cada procura e encontra a cor mais próxima na paleta.
// Retorna o número da procura, a cor RGB sendo procurada e a cor correspondente encontrada, convertida para RGB
foreach($colors as $id => $rgb)
{
    $result = imagecolorclosest($im, $rgb[0], $rgb[1], $rgb[2]);
    $result = imagecolorsforindex($im, $result);
    $result = "({$result['red']}, {$result['green']}, {$result['blue']})";

    echo "#$id: Cor procurada: ($rgb[0], $rgb[1], $rgb[2]); Cor mais próxima: $result.\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
#0: Cor procurada: (254, 145, 154); Cor mais próxima: (252, 150, 148).
#1: Cor procurada: (153, 145, 188); Cor mais próxima: (148, 150, 196).
#2: Cor procurada: (153, 90, 145); Cor mais próxima: (148, 90, 156).
#3: Cor procurada: (255, 137, 92); Cor mais próxima: (252, 150, 92).
```

### Veja também

- [imagecolorexact()](function.imagecolorexact.md) - Obtém o índice da cor especificada
- [imagecolorclosestalpha()](function.imagecolorclosestalpha.md) - Obtém o índice da cor mais próxima à especificada (incluindo alfa)
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
