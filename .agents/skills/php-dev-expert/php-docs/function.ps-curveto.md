# Desenha uma curva

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-curveto.php

---

# ps\_curveto

(PECL ps >= 1.1.0)

ps\_curveto — Desenha uma curva

### Descrição

function **ps\_curveto**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x3`,  
    [float](language.types.float.md) `$y3`  
): [bool](language.types.boolean.md)

Adiciona uma seção de uma curva de Bézier cúbica descrita pelos três pontos de controle
fornecidos para o caminho atual.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x1`
:   Coordenada x do primeiro ponto de controle.

`y1`
:   Coordenada y do primeiro ponto de controle.

`x2`
:   Coordenada x do segundo ponto de controle.

`y2`
:   Coordenada y do segundo ponto de controle.

`x3`
:   Coordenada x do terceiro ponto de controle.

`y3`
:   Coordenada y do terceiro ponto de controle.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_lineto()](function.ps-lineto.md) - Desenha uma linha

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
