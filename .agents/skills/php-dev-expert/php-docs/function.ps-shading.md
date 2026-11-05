# Cria um sombreamento para uso posterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-shading.php

---

# ps\_shading

(PECL ps >= 1.3.0)

ps\_shading — Cria um sombreamento para uso posterior

### Descrição

function **ps\_shading**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$type`,  
    [float](language.types.float.md) `$x0`,  
    [float](language.types.float.md) `$y0`,  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$c1`,  
    [float](language.types.float.md) `$c2`,  
    [float](language.types.float.md) `$c3`,  
    [float](language.types.float.md) `$c4`,  
    [string](language.types.string.md) `$optlist`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Cria um sombreamento, que pode ser usado por [ps\_shfill()](function.ps-shfill.md) ou
[ps\_shading\_pattern()](function.ps-shading-pattern.md).

A cor do sombreamento pode estar em qualquer espaço de cor, exceto
`pattern`.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   O tipo de sombreamento pode ser `radial` ou
    `axial`. Cada sombreamento começa com a cor de preenchimento atual
    e termina com os valores de cor fornecidos nos parâmetros
    `c1` a `c4`
    (consulte [ps\_setcolor()](function.ps-setcolor.md) para saber o significado).

`x0, x1, y0, y1`
:   As coordenadas `x0`, `y0`,
    `x1`, `y1` são os pontos inicial e
    final do sombreamento. Se o tipo de sombreamento for
    `radial`, os dois pontos serão os pontos médios de
    um círculo inicial e final.

`c1, c2, c3, c4`
:   Veja [ps\_setcolor()](function.ps-setcolor.md) para saber seu significado.

`optlist`
:   Se o sombreamento for do tipo `radial`, o
    `optlist` também deve conter os parâmetros
    `r0` e `r1` com o raio do
    círculo inicial e final.

### Valor Retornado

Retorna o identificador do padrão ou **`false`** em caso de falha.

### Veja também

- [ps\_shading\_pattern()](function.ps-shading-pattern.md) - Cria um padrão com base em um sombreamento
- [ps\_shfill()](function.ps-shfill.md) - Preenche uma área com um sombreamento

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
