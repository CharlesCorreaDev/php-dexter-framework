# Obtém o valor normalizado do canal de cores fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickpixel.getcolorvalue.php

---

# GmagickPixel::getcolorvalue

(PECL gmagick >= Unknown)

GmagickPixel::getcolorvalue — Obtém o valor normalizado do canal de cores fornecido

### Descrição

public function **GmagickPixel::getcolorvalue**([int](language.types.integer.md) `$color`): [float](language.types.float.md)

Recupera o valor do canal de cores especificado, como um número em ponto flutuante entre 0 e 1.

### Parâmetros

`color`
:   O canal a ser verificado, especificado como uma das constantes de canal Gmagick.

### Valor Retornado

O valor do canal, como um número em ponto flutuante normalizado, lança uma **GmagickPixelException** em caso de erro.

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
