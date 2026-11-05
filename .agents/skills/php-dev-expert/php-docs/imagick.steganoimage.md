# Oculta uma marca d'água digital na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.steganoimage.php

---

# Imagick::steganoImage

(PECL imagick 2, PECL imagick 3)

Imagick::steganoImage — Oculta uma marca d'água digital na imagem

### Descrição

public function **Imagick::steganoImage**([Imagick](class.imagick.md) `$watermark_wand`, [int](language.types.integer.md) `$offset`): [Imagick](class.imagick.md)

Oculta uma marca d’água digital na imagem. Recupere a marca d'água oculta
posteriormente para provar a autenticidade de uma imagem. O deslocamento define a posição
inicial na imagem para ocultar a marca d’água.

### Parâmetros

`watermark_wand`

`offset`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
