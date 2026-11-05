# Obtém o tipo potencial da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagetype.php

---

# Imagick::getImageType

(PECL imagick 2, PECL imagick 3)

Imagick::getImageType — Obtém o tipo potencial da imagem

### Descrição

public function **Imagick::getImageType**(): [int](language.types.integer.md)

Obtém o tipo potencial da imagem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tipo potencial da imagem

- **`imagick::IMGTYPE_UNDEFINED`**
- **`imagick::IMGTYPE_BILEVEL`**
- **`imagick::IMGTYPE_GRAYSCALE`**
- **`imagick::IMGTYPE_GRAYSCALEMATTE`**
- **`imagick::IMGTYPE_PALETTE`**
- **`imagick::IMGTYPE_PALETTEMATTE`**
- **`imagick::IMGTYPE_TRUECOLOR`**
- **`imagick::IMGTYPE_TRUECOLORMATTE`**
- **`imagick::IMGTYPE_COLORSEPARATION`**
- **`imagick::IMGTYPE_COLORSEPARATIONMATTE`**
- **`imagick::IMGTYPE_OPTIMIZE`**

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
