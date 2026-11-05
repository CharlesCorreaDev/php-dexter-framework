# Define a opção de mesclagem alfa para usar efeitos de camada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagelayereffect.php

---

# imagelayereffect

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

imagelayereffect — Define a opção de mesclagem alfa para usar efeitos de camada

### Descrição

function **imagelayereffect**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$effect`): [true](language.types.singleton.md)

Define a opção de mesclagem alfa para usar efeitos de camada.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`effect`
:   Uma das constantes a seguir:

    **`IMG_EFFECT_REPLACE`**
    :   Usa substituição de pixel (equivalente a passar **`true`** para
        [imagealphablending()](function.imagealphablending.md))

    **`IMG_EFFECT_ALPHABLEND`**
    :   Usa mesclagem de pixel normal (equivalent a passar **`false`** para
        [imagealphablending()](function.imagealphablending.md))

    **`IMG_EFFECT_NORMAL`**
    :   O mesmo que **`IMG_EFFECT_ALPHABLEND`**.

    **`IMG_EFFECT_OVERLAY`**
    :   Sobreposição tem o efeito em que os pixels do fundo preto permanecerão
        pretos, pixels de fundo branco permanecerão brancos, mas pixels
        de fundo cinza tomarão a cor do pixel de primeiro plano.

    **`IMG_EFFECT_MULTIPLY`**
    :   Sobrepõe com efeito de multiplicação.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 7.2.0 | Adicionada a constante **`IMG_EFFECT_MULTIPLY`** (requer libgd de sistema >= 2.1.1 ou a libgd incluída no pacote). |

### Examples

**Exemplo #1 Exemplo de **imagelayereffect()****

```
<?php
// Configura uma imagem
$im = imagecreatetruecolor(100, 100);

// Define a cor de fundo
imagefilledrectangle($im, 0, 0, 100, 100, imagecolorallocate($im, 220, 220, 220));

// Applica a opção de mesclagem alfa de sobreposição
imagelayereffect($im, IMG_EFFECT_OVERLAY);

// Desenha duas elipses cinzas
imagefilledellipse($im, 50, 50, 40, 40, imagecolorallocate($im, 100, 255, 100));
imagefilledellipse($im, 50, 50, 50, 80, imagecolorallocate($im, 100, 100, 255));
imagefilledellipse($im, 50, 50, 80, 50, imagecolorallocate($im, 255, 100, 100));

// Mostra
header('Content-type: image/png');

imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagelayereffect()](images/21009b70229598c6a80eef8b45bf282b-imagelayereffect.png)

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
