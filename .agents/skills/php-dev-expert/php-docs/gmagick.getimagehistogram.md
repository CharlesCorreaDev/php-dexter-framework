# Obtém o histograma da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimagehistogram.php

---

# Gmagick::getimagehistogram

(PECL gmagick >= Unknown)

Gmagick::getimagehistogram — Obtém o histograma da imagem

### Descrição

public function **Gmagick::getimagehistogram**(): [array](language.types.array.md)

Retorna o histograma da imagem como um array de objetos [GmagickPixel](class.gmagickpixel.md).
Lança uma **GmagickException** em caso de erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o histograma da imagem como um array de objetos [GmagickPixel](class.gmagickpixel.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
