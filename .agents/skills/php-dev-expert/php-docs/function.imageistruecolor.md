# Descobre se uma imagem está em cores verdadeiras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageistruecolor.php

---

# imageistruecolor

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

imageistruecolor — Descobre se uma imagem está em cores verdadeiras

### Descrição

function **imageistruecolor**([GdImage](class.gdimage.md) `$image`): [bool](language.types.boolean.md)

**imageistruecolor()** Descobre se a imagem
definida em `image` está em cores verdadeiras.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna **`true`** se `image` estiver em cores verdadeiras, **`false`**
caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Detecção simples de instâncias de imagem em cores verdadeiras usando **imageistruecolor()****

```
<?php
// $im é uma instância de imagem

// Verifica se a imagem está ou não em cores verdadeiras
if(!imageistruecolor($im))
{
    // Cria uma nova instância de imagem em cores verdadeiras
    $tc = imagecreatetruecolor(imagesx($im), imagesy($im));

    // Copia os pixels
    imagecopy($tc, $im, 0, 0, 0, 0, imagesx($im), imagesy($im));

    $im = $tc;
    $tc = NULL;

    // OU use imagepalettetotruecolor()
}

// Continua trabalhando com a instância de imagem
?>
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [imagepalettetotruecolor()](function.imagepalettetotruecolor.md) - Converte uma imagem baseada em paleta para cores verdadeiras

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
