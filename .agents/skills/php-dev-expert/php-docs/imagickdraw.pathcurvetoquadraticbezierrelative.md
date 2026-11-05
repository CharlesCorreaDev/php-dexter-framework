# Desenha uma curva quadrática de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetoquadraticbezierrelative.php

---

# ImagickDraw::pathCurveToQuadraticBezierRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToQuadraticBezierRelative — Desenha uma curva quadrática de Bézier

### Descrição

public function **ImagickDraw::pathCurveToQuadraticBezierRelative**(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x_end`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva Bézier quadrática do ponto atual até (x,y) usando
(x1,y1) como ponto de controle usando coordenadas relativas. No final do
comando, o novo ponto atual se torna o par de coordenadas final (x,y)
usado no polibézier.

### Parâmetros

`x1`
:   coordenada x inicial

`y1`
:   coordenada y inicial

`x_end`
:   coordenada x final

`y`
:   coordenada y final

### Valor Retornado

Nenhum valor é retornado.

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
