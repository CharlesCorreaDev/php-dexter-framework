# Envolve a imagem com uma borda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.borderimage.php

---

# Gmagick::borderimage

(PECL gmagick >= Unknown)

Gmagick::borderimage — Envolve a imagem com uma borda

### Descrição

public function **Gmagick::borderimage**([GmagickPixel](class.gmagickpixel.md) `$color`, [int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [Gmagick](class.gmagick.md)

Envolve a imagem com uma borda da cor definida pelo objeto [GmagickPixel](class.gmagickpixel.md) da cor da borda ou por uma sequência de cores.

### Parâmetros

`color`
:   Objeto [GmagickPixel](class.gmagickpixel.md) ou uma string contendo a cor da borda.

`width`
:   Largura da borda.

`height`
:   Altura da borda.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com borda definida.

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
