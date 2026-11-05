# Obtém o número de cores em uma paleta de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorstotal.php

---

# imagecolorstotal

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorstotal — Obtém o número de cores em uma paleta de imagem

### Descrição

function **imagecolorstotal**([GdImage](class.gdimage.md) `$image`): [int](language.types.integer.md)

Retorna o número de cores em uma paleta de imagem.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna o número de cores em uma paleta de imagem especificada ou 0 para
imagens em cores verdadeiras.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Obtendo o número total de cores em uma imagem usando **imagecolorstotal()****

```
<?php
// Cria uma instência de imagem
$im = imagecreatefromgif('php.gif');

echo 'Total de cores na imagem: ' . imagecolorstotal($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Total de cores na imagem: 128
```

### Veja também

- [imagecolorat()](function.imagecolorat.md) - Obtém o índica da cor de um pixel
- [imagecolorsforindex()](function.imagecolorsforindex.md) - Obtém as cores para um índice
- [imageistruecolor()](function.imageistruecolor.md) - Descobre se uma imagem está em cores verdadeiras

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
