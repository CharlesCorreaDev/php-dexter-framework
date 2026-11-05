# Desaloca uma cor de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolordeallocate.php

---

# imagecolordeallocate

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolordeallocate — Desaloca uma cor de uma imagem

### Descrição

function **imagecolordeallocate**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$color`): [true](language.types.singleton.md)

Desaloca uma cor previamente alocada com
[imagecolorallocate()](function.imagecolorallocate.md) ou
[imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`color`
:   O identificador da cor.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagecolordeallocate()****

```
<?php
$white = imagecolorallocate($im, 255, 255, 255);
imagecolordeallocate($im, $white);
?>
```

### Veja também

- [imagecolorallocate()](function.imagecolorallocate.md) - Aloca uma cor para uma imagem
- [imagecolorallocatealpha()](function.imagecolorallocatealpha.md) - Aloca uma cor para uma imagem

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
