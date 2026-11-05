# Desenha um ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.point.php

---

# GmagickDraw::point

(PECL gmagick >= Unknown)

GmagickDraw::point — Desenha um ponto

### Descrição

public function **GmagickDraw::point**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [GmagickDraw](class.gmagickdraw.md)

Desenha um ponto usando a cor e a espessura do traço atuais nas coordenadas especificadas.

### Parâmetros

`x`
:   Coordenada x do ponto.

`y`
:   Coordenada y do ponto.

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
