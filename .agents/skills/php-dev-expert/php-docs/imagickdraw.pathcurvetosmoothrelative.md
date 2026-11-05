# Desenha uma curva cúbica de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetosmoothrelative.php

---

# ImagickDraw::pathCurveToSmoothRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToSmoothRelative — Desenha uma curva cúbica de Bézier

### Descrição

public function **ImagickDraw::pathCurveToSmoothRelative**(  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva de Bézier cúbica do ponto atual até (x,y) usando coordenadas
relativas. Assume-se que o primeiro ponto de controle seja o reflexo do
segundo ponto de controle no comando anterior em relação ao ponto atual.
(Se não houver nenhum comando anterior ou se o comando anterior não for
DrawPathCurveToAbsolute, DrawPathCurveToRelative,
DrawPathCurveToSmoothAbsolute ou DrawPathCurveToSmoothRelative, assume que o
primeiro ponto de controle é coincidente com o ponto atual.) (x2,y2) é o
segundo ponto de controle (ou seja, o ponto de controle no final da curva).
No final do comando, o novo ponto atual se torna o par de coordenadas final (x,y)
usado no polibézier.

### Parâmetros

`x2`
:   coordenada x do segundo ponto de controle

`y2`
:   coordenada y do segundo ponto de controle

`x`
:   coordenada x do ponto final

`y`
:   coordenada y do ponto final

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
