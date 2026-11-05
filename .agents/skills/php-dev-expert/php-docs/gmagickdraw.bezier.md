# Desenha uma curva de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.bezier.php

---

# GmagickDraw::bezier

(PECL gmagick >= Unknown)

GmagickDraw::bezier — Desenha uma curva de Bézier

### Descrição

public function **GmagickDraw::bezier**([array](language.types.array.md) `$coordinate_array`): [GmagickDraw](class.gmagickdraw.md)

Desenha uma curva de Bézier através de um conjunto de pontos na imagem.

### Parâmetros

`coordinate_array`
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
