# Aplica uma matriz de convolução 3x3, usando coeficiente e deslocamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageconvolution.php

---

# imageconvolution

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

imageconvolution — Aplica uma matriz de convolução 3x3, usando coeficiente e deslocamento

### Descrição

function **imageconvolution**(  
    [GdImage](class.gdimage.md) `$image`,  
    [array](language.types.array.md) `$matrix`,  
    [float](language.types.float.md) `$divisor`,  
    [float](language.types.float.md) `$offset`  
): [bool](language.types.boolean.md)

Aplica uma matriz de convolução à imagem, usando o coeficiente e o deslocamento
fornecidos.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`matrix`
:   Um matriz 3x3: um array de três arrays de três números em ponto flutuante.

`divisor`
:   O divisor do resultado da convolução, usado para normalização.

`offset`
:   Deslocamento de cor.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Gravando em relevo a logomarca do PHP.net**

```
<?php
$image = imagecreatefromgif('http://www.php.net/images/php.gif');

$emboss = array(array(2, 0, 0), array(0, -1, 0), array(0, 0, -1));
imageconvolution($image, $emboss, 1, 127);

header('Content-Type: image/png');
imagepng($image, null, 9);
?>
```

O exemplo acima produzirá:

![Saída do exemplo:  of example: Gravando em relevo a logomarca do PHP.net](images/21009b70229598c6a80eef8b45bf282b-imageconvolution_emboss.png)

**Exemplo #2 Desfoque gaussiano**

```
<?php
$image = imagecreatetruecolor(180,40);

// Escreve o texto e aplica um desfoque gaussiano na imagem
imagestring($image, 5, 10, 8, 'Gaussian Blur Text', 0x00ff00);
$gaussian = array(array(1.0, 2.0, 1.0), array(2.0, 4.0, 2.0), array(1.0, 2.0, 1.0));
imageconvolution($image, $gaussian, 16, 0);

// Re-escreve o texto para comparação
imagestring($image, 5, 10, 18, 'Gaussian Blur Text', 0x00ff00);

header('Content-Type: image/png');
imagepng($image, null, 9);
?>
```

O exemplo acima produzirá:

![Saída do exemplo: Desfoque gaussiano](images/21009b70229598c6a80eef8b45bf282b-imageconvolution_gaussian.png)

### Veja também

- [imagefilter()](function.imagefilter.md) - Aplica um filtro a uma imagem

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
