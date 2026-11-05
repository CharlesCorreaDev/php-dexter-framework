# Desenha um retângulo arredondado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.roundrectangle.php

---

# GmagickDraw::roundrectangle

(PECL gmagick >= Unknown)

GmagickDraw::roundrectangle — Desenha um retângulo arredondado

### Descrição

public function **GmagickDraw::roundrectangle**(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`  
): [GmagickDraw](class.gmagickdraw.md)

Desenha um retângulo arredondado com duas coordenadas e raios de canto, usando as configurações atuais de traço, largura de traço e preenchimento.

### Parâmetros

`x1`
:   Coordenada x do primeiro ponto.

`y1`
:   Coordenada y do primeiro ponto.

`x2`
:   Coordenada x do segundo ponto.

`y2`
:   Coordenada y do segundo ponto.

`rx`
:   Raio do canto na direção horizontal.

`ry`
:   Raio do canto na direção vertical.

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
