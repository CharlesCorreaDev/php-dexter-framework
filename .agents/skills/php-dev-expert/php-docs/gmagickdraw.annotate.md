# Desenha texto na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.annotate.php

---

# GmagickDraw::annotate

(PECL gmagick >= Unknown)

GmagickDraw::annotate — Desenha texto na imagem

### Descrição

public function **GmagickDraw::annotate**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [string](language.types.string.md) `$text`): [GmagickDraw](class.gmagickdraw.md)

Desenha texto na imagem.

### Parâmetros

`x`
:   Coordenada x à esquerda do texto

`y`
:   Coordenada y da linha de base do texto

`text`
:   Texto a ser desenhado

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
