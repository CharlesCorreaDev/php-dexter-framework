# Define o estilo de borda das anotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-border-style.php

---

# ps\_set\_border\_style

(PECL ps >= 1.1.0)

ps\_set\_border\_style — Define o estilo de borda das anotações

### Descrição

function **ps\_set\_border\_style**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$style`, [float](language.types.float.md) `$width`): [bool](language.types.boolean.md)

Links adicionados com uma das funções [ps\_add\_weblink()](function.ps-add-weblink.md),
[ps\_add\_pdflink()](function.ps-add-pdflink.md), etc. serão exibidos com um
retângulo ao redor quando o documento PostScript for convertido para
PDF e exibido em um visualizador de PDF. Este retângulo não é visível
no documento PostScript.
Esta função define a aparência e a largura da linha da borda.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`style`
:   `style` pode ser `solid` ou
    `dashed`.

`width`
:   A largura da linha da borda.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_set\_border\_color()](function.ps-set-border-color.md) - Define a cor da borda para anotações
- [ps\_set\_border\_dash()](function.ps-set-border-dash.md) - Define o comprimento dos traços para a borda das anotações

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
