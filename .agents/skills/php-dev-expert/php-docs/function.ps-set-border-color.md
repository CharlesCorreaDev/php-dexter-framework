# Define a cor da borda para anotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-border-color.php

---

# ps\_set\_border\_color

(PECL ps >= 1.1.0)

ps\_set\_border\_color — Define a cor da borda para anotações

### Descrição

function **ps\_set\_border\_color**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$red`,  
    [float](language.types.float.md) `$green`,  
    [float](language.types.float.md) `$blue`  
): [bool](language.types.boolean.md)

Links adicionados com uma das funções [ps\_add\_weblink()](function.ps-add-weblink.md),
[ps\_add\_pdflink()](function.ps-add-pdflink.md), etc. serão exibidos com um
retângulo ao redor quando o documento PostScript for convertido para
PDF e exibido em um visualizador de PDF. Este retângulo não é visível
no documento PostScript.
Esta função define a cor da linha da borda do retângulo.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`red`
:   O componente vermelho da cor da borda.

`green`
:   O componente verde da cor da borda.

`blue`
:   O componente azul da cor da borda.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_set\_border\_dash()](function.ps-set-border-dash.md) - Define o comprimento dos traços para a borda das anotações
- [ps\_set\_border\_style()](function.ps-set-border-style.md) - Define o estilo de borda das anotações

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
