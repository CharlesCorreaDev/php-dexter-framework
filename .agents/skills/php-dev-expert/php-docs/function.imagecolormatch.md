# Faz com que as cores da versão em paleta da imagem fiquem mais próximas da versão em cores verdadeiras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolormatch.php

---

# imagecolormatch

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

imagecolormatch — Faz com que as cores da versão em paleta da imagem fiquem mais próximas da versão em cores verdadeiras

### Descrição

function **imagecolormatch**([GdImage](class.gdimage.md) `$image1`, [GdImage](class.gdimage.md) `$image2`): [true](language.types.singleton.md)

Faz com que as cores da versão em paleta da imagem fiquem mais próximas da versão em cores verdadeiras.

### Parâmetros

`image1`
:   Um objeto de imagem em cores verdadeiras.

`image2`
:   Um objeto de imagem em paleta apontando para uma imagem que tenha o mesmo
    tamanho da `image1`.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `image1` e `image2` agora esperam instâncias de [GdImage](class.gdimage.md); anteriormente, [resource](language.types.resource.md)s eram esperados. |

### Examples

**Exemplo #1 Exemplo de **imagecolormatch()****

```
<?php
// Configura as imagens com cores verdadeiras e com paleta
$im1 = imagecreatefrompng('./gdlogo.png');
$im2 = imagecreate(imagesx($im1), imagesy($im1));

// Adiciona algumas cores a $im2
$colors   = Array();
$colors[] = imagecolorallocate($im2, 255, 36, 74);
$colors[] = imagecolorallocate($im2, 40, 0, 240);
$colors[] = imagecolorallocate($im2, 82, 100, 255);
$colors[] = imagecolorallocate($im2, 84, 63, 44);

// Faz correspondência dessas cores com a imagem em cores verdadeiras
imagecolormatch($im1, $im2);
?>
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras

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
