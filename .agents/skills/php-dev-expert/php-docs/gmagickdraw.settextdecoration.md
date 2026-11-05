# Especifica uma decoração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.settextdecoration.php

---

# GmagickDraw::settextdecoration

(PECL gmagick >= Unknown)

GmagickDraw::settextdecoration — Especifica uma decoração

### Descrição

public function **GmagickDraw::settextdecoration**([int](language.types.integer.md) `$decoration`): [GmagickDraw](class.gmagickdraw.md)

Especifica uma decoração a ser aplicada ao fazer anotações com texto.

### Parâmetros

`int`
:   Decoração de texto. Uma das constantes NoDecoration, UnderlineDecoration, OverlineDecoration ou LineThroughDecoration.

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
