# Habilita ou desabilita entrelace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageinterlace.php

---

# imageinterlace

(PHP 4, PHP 5, PHP 7, PHP 8)

imageinterlace — Habilita ou desabilita entrelace

### Descrição

function **imageinterlace**([GdImage](class.gdimage.md) `$image`, [?](language.types.null.md)[bool](language.types.boolean.md) `$enable` = **`null`**): [bool](language.types.boolean.md)

**imageinterlace()** liga ou desliga o bit de entrelace.

Se o bit de entrelace estiver ligado e a imagem for usada como JPEG,
a imagem é criada como um JPEG progressivo.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`enable`
:   Se **`true`**, a imagem será entrelaçada, se **`false`** o bit de entrelace é desligado.
    Passar **`null`** fará com que o comportamento de entrelace não seja alterado.

### Valor Retornado

Retorna **`true`** se o bit de entrelace estiver ligador para a imagem, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.5 | **imageinterlace()** agora retorna um [bool](language.types.boolean.md); anteriormente retornava um [int](language.types.integer.md) (não zero para imagens entrelaçadas, zero caso contrário). |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | `enable` agora espera um [bool](language.types.boolean.md); anteriormente esperava um [int](language.types.integer.md). |

### Examples

**Exemplo #1 Ligando o entrelace usando **imageinterlace()****

```
<?php
// Cria uma instância de imagem
$im = imagecreatefromgif('php.gif');

// Habilita entrelace
imageinterlace($im, true);

// Grava a imagem entrelaçada
imagegif($im, './php_interlaced.gif');
?>
```

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
