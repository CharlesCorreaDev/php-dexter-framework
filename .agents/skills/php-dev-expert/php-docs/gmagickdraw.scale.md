# Ajusta o fator de escala

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.scale.php

---

# GmagickDraw::scale

(PECL gmagick >= Unknown)

GmagickDraw::scale — Ajusta o fator de escala

### Descrição

public function **GmagickDraw::scale**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [GmagickDraw](class.gmagickdraw.md)

Ajusta o fator de escala para aplicar nas direções horizontal e vertical ao espaço de coordenadas atual.

### Parâmetros

`x`
:   Fator de escala horizontal.

`y`
:   Fator de escala vertical.

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
