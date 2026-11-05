# Desenha uma curva cúbica de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetoabsolute.php

---

# ImagickDraw::pathCurveToAbsolute

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToAbsolute — Desenha uma curva cúbica de Bézier

### Descrição

public function **ImagickDraw::pathCurveToAbsolute**(  
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
ponto de controle no final da curva usando coordenadas absolutas. No
final do comando, o novo ponto atual se torna o par de coordenadas final (x,y)
usado no polibézier.

### Parâmetros

`x1`
:   coordenada x do primeiro ponto de controle

`y1`
:   coordenada y do primeiro ponto de controle

`x2`
:   coordenada x do segundo ponto de controle

`y2`
:   coordenada y do segundo ponto de controle

`x`
:   coordenada x do final da curva

`y`
:   coordenada y do final da curva

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
