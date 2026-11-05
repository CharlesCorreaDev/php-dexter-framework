# Define o método de interpolação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetinterpolation.php

---

# imagesetinterpolation

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imagesetinterpolation — Define o método de interpolação

### Descrição

function **imagesetinterpolation**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$method` = **`IMG_BILINEAR_FIXED`**): [bool](language.types.boolean.md)

Define o método de interpolação, que afeta a renderização
de várias funções da GD, tal como a função [imagerotate()](function.imagerotate.md).

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`method`
:   O método de interpolação, que pode ser um dos seguintes:

    - **`IMG_BELL`**: Filtro Bell.
    - **`IMG_BESSEL`**: Filtro Bessel.
    - **`IMG_BICUBIC`**: Interpolação bicúbica.
    - **`IMG_BICUBIC_FIXED`**: Implementação de ponto fixo da interpolação bicúbica.
    - **`IMG_BILINEAR_FIXED`**: Implementação de ponto fixo da interpolação bilinear (`padrão (também na criação da imagem)`).
    - **`IMG_BLACKMAN`**: Função de janela Blackman.
    - **`IMG_BOX`**: Filtro de desfoque de caixa.
    - **`IMG_BSPLINE`**: Interpolação Spline.
    - **`IMG_CATMULLROM`**: Interpolação Spline Hermite cúbica.
    - **`IMG_GAUSSIAN`**: Função gaussiana.
    - **`IMG_GENERALIZED_CUBIC`**: Interpolação fractal spline cúbica generalizada.
    - **`IMG_HERMITE`**: Interpolação Hermite.
    - **`IMG_HAMMING`**: Filtro Hamming.
    - **`IMG_HANNING`**: Filtro Hanning.
    - **`IMG_MITCHELL`**: Filtro Mitchell.
    - **`IMG_POWER`**: Interpolation de potência.
    - **`IMG_QUADRATIC`**: Interpolação quadrática inversa.
    - **`IMG_SINC`**: Função sinc.
    - **`IMG_NEAREST_NEIGHBOUR`**: Interpolação do ponto mais próximo.
    - **`IMG_WEIGHTED4`**: Filtro ponderado.
    - **`IMG_TRIANGLE`**: Interpolação triangular.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagesetinterpolation()****

```
<?php
// Carrega uma imagem
$im = imagecreate(500, 500);

// Por padrão a interpolação é IMG_BILINEAR_FIXED, trocando
// para o filtro 'Mitchell':
imagesetinterpolation($im, IMG_MITCHELL);

// Continua o trabalho com $im ...
?>
```

### Notas

Alterar o método de interpolação afeta as seguintes funções
durante a renderização:

- [imageaffine()](function.imageaffine.md)
- [imagerotate()](function.imagerotate.md)

### Veja também

- [imagegetinterpolation()](function.imagegetinterpolation.md) - Obtém o método de interpolação

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
