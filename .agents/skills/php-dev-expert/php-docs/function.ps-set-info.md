# Define campos de informação do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-info.php

---

# ps\_set\_info

(PECL ps >= 1.1.0)

ps\_set\_info — Define campos de informação do documento

### Descrição

function **ps\_set\_info**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define determinados campos de informação do documento. Esses campos serão exibidos
como um comentário no cabeçalho do arquivo PostScript. Se o documento for
convertido para PDF, esses campos também serão usados ​​para as informações
do documento.

A `BoundingBox` geralmente é definida com o valor atribuído à
primeira página. Isso só funciona se a [ps\_findfont()](function.ps-findfont.md) não tiver
sido chamada antes. Nesses casos, a BoundingBox permaneceria indefinida,
a menos que seja dadosefinida explicitamente com esta função.

Esta função não terá mais efeito quando o cabeçalho do arquivo postscript
já tiver sido escrito. Ela deve ser chamada antes da primeira página
ou da primeira chamada de [ps\_findfont()](function.ps-findfont.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`key`
:   O nome do campo de informações a ser definido. Os valores que podem ser
    definidos são `Keywords`, `Subject`,
    `Title`, `Creator`,
    `Author`, `BoundingBox` e
    `Orientation`. Esteja ciente de que alguns deles têm um
    significado para visualizadores PostScript.

`value`
:   O valor do campo de informação. O campo
    `Orientation` pode ser definido para
    `Portrait` ou `Landscape`. O campo
    `BoundingBox` é uma string consistindo em quatro números.
    Os dois primeiros números são as coordenadas do canto inferior esquerdo
    da página. Os dois últimos números são as coordenadas do canto superior
    direito.

    > **Nota**:
    >
    > Até a versão 0.2.6 do pslib, o BoundingBox e a Orientation
    > serão substituídos por [ps\_begin\_page()](function.ps-begin-page.md),
    > a menos que [ps\_findfont()](function.ps-findfont.md) tenha sido chamada antes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_findfont()](function.ps-findfont.md) - Carrega uma fonte
- [ps\_begin\_page()](function.ps-begin-page.md) - Inicia uma nova página

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
