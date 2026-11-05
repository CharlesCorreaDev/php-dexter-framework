# Define o peso da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.setfontweight.php

---

# GmagickDraw::setfontweight

(PECL gmagick >= Unknown)

GmagickDraw::setfontweight — Define o peso da fonte

### Descrição

public function **GmagickDraw::setfontweight**([int](language.types.integer.md) `$weight`): [GmagickDraw](class.gmagickdraw.md)

Define a espessura da fonte a ser usada ao fazer anotações com texto.

### Parâmetros

`weight`
:   Peso da fonte (intervalo válido 100-900)

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
