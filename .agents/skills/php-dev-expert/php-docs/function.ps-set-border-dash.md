# Define o comprimento dos traços para a borda das anotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-border-dash.php

---

# ps\_set\_border\_dash

(PECL ps >= 1.1.0)

ps\_set\_border\_dash — Define o comprimento dos traços para a borda das anotações

### Descrição

function **ps\_set\_border\_dash**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$black`, [float](language.types.float.md) `$white`): [bool](language.types.boolean.md)

Links adicionados com uma das funções [ps\_add\_weblink()](function.ps-add-weblink.md),
[ps\_add\_pdflink()](function.ps-add-pdflink.md), etc. serão exibidos com um
retângulo arredondado quando o documento PostScript for convertido para
PDF e exibido em um visualizador de PDF. Este retângulo não é visível
no documento PostScript.
Esta função define o comprimento da parte preta e branca de uma
linha de borda tracejada.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`black`
:   O comprimento do traço.

`white`
:   O comprimento do espaço entre os traços.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_set\_border\_color()](function.ps-set-border-color.md) - Define a cor da borda para anotações
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
