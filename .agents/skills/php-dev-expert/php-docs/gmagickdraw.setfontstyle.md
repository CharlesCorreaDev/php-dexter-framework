# Define o estilo da fonte a ser usado ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.setfontstyle.php

---

# GmagickDraw::setfontstyle

(PECL gmagick >= Unknown)

GmagickDraw::setfontstyle — Define o estilo da fonte a ser usado ao fazer anotações com texto

### Descrição

public function **GmagickDraw::setfontstyle**([int](language.types.integer.md) `$style`): [GmagickDraw](class.gmagickdraw.md)

Define o estilo da fonte a ser usado ao fazer anotações com texto. A enumeração AnyStyle atua como uma opção curinga "tanto faz".

### Parâmetros

`style`
:   Estilo da fonte (NormalStyle, ItalicStyle, ObliqueStyle, AnyStyle)

### Valor Retornado

O objeto [GmagickDraw](class.gmagickdraw.md).

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
