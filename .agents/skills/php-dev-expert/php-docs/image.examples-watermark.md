# Adicionando marcas d'água a imagens usando canais alfa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.examples-watermark.php

---

## Adicionando marcas d'água a imagens usando canais alfa

**Exemplo #1 Adicionando marcas d'água a imagens usando canais alfa**

```
<?php
// Carrega o carimbo e a foto para aplicar a marca d'água
$stamp = imagecreatefrompng('stamp.png'); // carimbo
$im = imagecreatefromjpeg('photo.jpeg'); // foto

// Define as margens para o carimbo e obtém a altura/largura da imagem
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copia a imagem do carimbo na foto usando os deslocamentos das margens e a largura
// da foto para calcular o posicionamento do carimbo.
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Mostra a imagem
header('Content-type: image/png');
imagepng($im);
?>
```

![Adicionando marcas d'água a imagens usando canais alfa](images/21009b70229598c6a80eef8b45bf282b-watermarks.png)

Este exemplo é uma forma comum de adicionar marcas d'água e carimbos a fotos
e imagens com direitos autorais. Note que a presença de um canal alfa na
imagem do carimbo tem suavização de serrilhado. Isto é preservado durante a cópia.

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
