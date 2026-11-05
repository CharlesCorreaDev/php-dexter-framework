# Usando imagecopymerge para criar uma marca d'água translúcida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.examples.merged-watermark.php

---

## Usando [imagecopymerge()](function.imagecopymerge.md) para criar uma marca d'água translúcida

**Exemplo #1 Usando [imagecopymerge()](function.imagecopymerge.md) para criar uma marca d'água translúcida**

```
<?php
// Carrega o carimbo e a foto para aplicar a marca d'água
$im = imagecreatefromjpeg('photo.jpeg');

// Primeiro cria-se a imagem do carimbo manualmente a partir da GD
$stamp = imagecreatetruecolor(100, 70);
imagefilledrectangle($stamp, 0, 0, 99, 69, 0x0000FF);
imagefilledrectangle($stamp, 9, 9, 90, 60, 0xFFFFFF);
imagestring($stamp, 5, 20, 20, 'libGD', 0x0000FF);
imagestring($stamp, 3, 20, 40, '(c) 2007-9', 0x0000FF);

// Define-se as margens para o carimbo e obtém-se a altura/largura da imagem do carimbo
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Funde o carimbo com a foto usando uma opacidade de 50%
imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 50);

// Salva a imagem em arquivo
imagepng($im, 'photo_stamp.png');

?>
```

![Usando imagecopymerge() para criar uma marca d'água translúcida](images/21009b70229598c6a80eef8b45bf282b-watermark-merged.png)

Este exemplo usa [imagecopymerge()](function.imagecopymerge.md) para fundir a estampa
com a imagem original. Desta forma pode-se definir a opacidade do carimbo -
no exemplo foi definido para 50%. Na prática isto pode ser útil
em proteção contra cópia já que marcas d'água semi-transparentes são difíceis de se remover
mas ainda permitem que a imagem seja visualizada.

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
