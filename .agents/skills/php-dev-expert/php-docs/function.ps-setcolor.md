# Define a cor atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setcolor.php

---

# ps\_setcolor

(PECL ps >= 1.1.0)

ps\_setcolor — Define a cor atual

### Descrição

function **ps\_setcolor**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$type`,  
    [string](language.types.string.md) `$colorspace`,  
    [float](language.types.float.md) `$c1`,  
    [float](language.types.float.md) `$c2`,  
    [float](language.types.float.md) `$c3`,  
    [float](language.types.float.md) `$c4`  
): [bool](language.types.boolean.md)

Define a cor para desenho, preenchimento ou ambos.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   O parâmetro `type` pode ser
    `both`, `fill` ou
    `fillstroke`.

`colorspace`
:   O espaço de cores deve ser um dos seguintes: `gray`,
    `rgb`, `cmyk`,
    `spot` ou `pattern`. Dependendo do
    espaço de cores, apenas o primeiro, os três primeiros ou todos os parâmetros
    serão usados.

`c1`
:   Dependendo do espaço de cores, este pode ser o componente vermelho (rgb),
    o componente ciano (cmyk), o valor de cinza (gray), o identificador da
    cor especial ou o identificador do padrão.

`c2`
:   Dependendo do espaço de cores, este pode ser o componente verde (rgb)
    ou o componente magenta (cmyk).

`c3`
:   Dependendo do espaço de cores, este pode ser o componente azul (rgb) ou
    o componente amarelo (cmyk).

`c4`
:   Isso deve ser definido somente no espaço de cores cmyk e especifica o componente
    preto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

**Cuidado**

O segundo parâmetro nem sempre é avaliado atualmente. A cor é
às vezes definida para preenchimento e desenho, como se
`fillstroke` fosse passado.

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
