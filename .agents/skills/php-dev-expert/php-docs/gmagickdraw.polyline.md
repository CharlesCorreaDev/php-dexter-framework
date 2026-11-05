# Desenha uma polilinha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.polyline.php

---

# GmagickDraw::polyline

(PECL gmagick >= Unknown)

GmagickDraw::polyline — Desenha uma polilinha

### Descrição

public function **GmagickDraw::polyline**([array](language.types.array.md) `$coordinate_array`): [GmagickDraw](class.gmagickdraw.md)

Desenha uma polilinha usando o traço, a largura do traço e a cor ou textura de preenchimento atuais, usando o array de coordenadas especificado.

### Parâmetros

`coordinate_array`
:   O array de coordenadas.

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
