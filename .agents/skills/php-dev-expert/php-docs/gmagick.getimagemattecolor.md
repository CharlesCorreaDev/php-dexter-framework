# Retorna a cor fosca da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimagemattecolor.php

---

# Gmagick::getimagemattecolor

(PECL gmagick >= Unknown)

Gmagick::getimagemattecolor — Retorna a cor fosca da imagem

### Descrição

public function **Gmagick::getimagemattecolor**(): [GmagickPixel](class.gmagickpixel.md)

Retorna o objeto GmagickPixel em caso de sucesso. Lança uma GmagickException em caso de erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o objeto GmagickPixel em caso de sucesso.

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
