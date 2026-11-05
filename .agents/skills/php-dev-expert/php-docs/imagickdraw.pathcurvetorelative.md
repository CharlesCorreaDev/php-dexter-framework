# Desenha uma curva cúbica de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetorelative.php

---

# ImagickDraw::pathCurveToRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToRelative — Desenha uma curva cúbica de Bézier

### Descrição

public function **ImagickDraw::pathCurveToRelative**(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva de Bézier cúbica do ponto atual até (x,y) usando (x1,y1)
como ponto de controle no início da curva e (x2,y2) como
ponto de controle no final da curva usando coordenadas relativas. No
final do comando, o novo ponto atual se torna o par de coordenadas final (x,y)
usado no polibézier.

### Parâmetros

`x1`
:   coordenada x do ponto de controle inicial

`y1`
:   coordenada y do ponto de controle inicial

`x2`
:   coordenada x do ponto de controle final

`y2`
:   coordenada y do ponto de controle final

`x`
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
