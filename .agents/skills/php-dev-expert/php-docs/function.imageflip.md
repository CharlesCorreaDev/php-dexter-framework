# Vira uma imagem usando um modo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageflip.php

---

# imageflip

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imageflip — Vira uma imagem usando um modo especificado

### Descrição

function **imageflip**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$mode`): [true](language.types.singleton.md)

Vira a imagem definida por `image` usando o modo informado em
`mode`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`mode`
:   Modo para virar a imagem, pode ser uma das constantes **`IMG_FLIP_*`**:

    | Constante | Significado |
    | --- | --- |
    | **`IMG_FLIP_HORIZONTAL`** | Vira a imagem horizontalmente. |
    | **`IMG_FLIP_VERTICAL`** | Vira a imagem verticalmente. |
    | **`IMG_FLIP_BOTH`** | Vira a imagem tanto verticalmente quanto horizontalmente. |

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Vira uma imagem verticalmente**

Este exemplo usa a constante
**`IMG_FLIP_VERTICAL`**.

```
<?php
// Arquivo
$filename = 'phplogo.png';

// Tipo de conteúdo
header('Content-type: image/png');

// Carrega
$im = imagecreatefrompng($filename);

// Vira verticalmente
imageflip($im, IMG_FLIP_VERTICAL);

// Mostra
imagejpeg($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Imagem virada verticalmente](images/21009b70229598c6a80eef8b45bf282b-imageflipvertical.png)

**Exemplo #2 Vira uma imagem horizontalmente**

Este exemplo usa a constante **`IMG_FLIP_HORIZONTAL`**.

```
<?php
// Arquivo
$filename = 'phplogo.png';

// Tipo de conteúdo
header('Content-type: image/png');

// Carrega
$im = imagecreatefrompng($filename);

// Vira horizontalmente
imageflip($im, IMG_FLIP_HORIZONTAL);

// Mostra
imagejpeg($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Imagem virada horizontalmente](images/21009b70229598c6a80eef8b45bf282b-imagefliphorizontal.png)

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
