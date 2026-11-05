# Desenha um retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.rectangle.php

---

# GmagickDraw::rectangle

(PECL gmagick >= Unknown)

GmagickDraw::rectangle — Desenha um retângulo

### Descrição

public function **GmagickDraw::rectangle**(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`  
): [GmagickDraw](class.gmagickdraw.md)

Desenha um retângulo com duas coordenadas e usando as configurações atuais de traçado, largura do traçado e preenchimento.

### Parâmetros

`x1`
:   Coordenada x do primeiro ponto.

`y1`
:   Coordenada y do primeiro ponto.

`x2`
:   Coordenada x do segundo ponto.

`y2`
:   Coordenada y do segundo ponto.

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
