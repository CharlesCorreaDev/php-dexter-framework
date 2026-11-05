# Desenha um polígono

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.polygon.php

---

# GmagickDraw::polygon

(PECL gmagick >= Unknown)

GmagickDraw::polygon — Desenha um polígono

### Descrição

public function **GmagickDraw::polygon**([array](language.types.array.md) `$coordinates`): [GmagickDraw](class.gmagickdraw.md)

Desenha um polígono usando o traço, a largura do traço e a cor ou textura de preenchimento atuais, usando o array de coordenadas especificado.

### Parâmetros

`coordinates`
:   Array de coordenadas.

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
