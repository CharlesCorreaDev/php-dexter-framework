# Retorna a cor de fundo a imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagebackgroundcolor.php

---

# Imagick::getImageBackgroundColor

(PECL imagick 2, PECL imagick 3)

Imagick::getImageBackgroundColor — Retorna a cor de fundo a imagem

### Descrição

public function **Imagick::getImageBackgroundColor**(): [ImagickPixel](class.imagickpixel.md)

Retorna a cor de fundo a imagem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retornma um objeto ImagickPixel definido com a cor de fundo da imagem.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
