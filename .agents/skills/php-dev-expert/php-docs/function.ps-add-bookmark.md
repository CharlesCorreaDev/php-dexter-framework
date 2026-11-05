# Adiciona marcador à página atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-add-bookmark.php

---

# ps\_add\_bookmark

(PECL ps >= 1.1.0)

ps\_add\_bookmark — Adiciona marcador à página atual

### Descrição

function **ps\_add\_bookmark**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$parent` = 0,  
    [int](language.types.integer.md) `$open` = 0  
): [int](language.types.integer.md)

Adiciona um marcador para a página atual. Os marcadores geralmente aparecem
em visualizadores de PDF à esquerda da página, em uma árvore hierárquica. Clicar em um
marcador irá para a página especificada.

A nota não ficará visível se o documento
for impresso ou visualizado, mas aparecerá se o documento for convertido para
PDF pelo Acrobat Distiller™ ou Ghostview.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto usado para exibir o marcador.

`parent`
:   Um marcador criado anteriormente por esta função que
    é usado como pai do novo marcador.

`open`
:   Se `open` for diferente de zero, o marcador
    será mostrado como aberto pelo visualizador de PDF.

### Valor Retornado

O valor retornado é uma referência para o marcador. Ele só é usado se
o marcador for usado como pai. O valor será maior que zero se
a função for bem-sucedida. Em caso de erro, zero será
retornado.

### Veja também

- [ps\_add\_launchlink()](function.ps-add-launchlink.md) - Adiciona hiperlink que inicia o arquivo
- [ps\_add\_pdflink()](function.ps-add-pdflink.md) - Adiciona link para uma página em um segundo documento PDF
- [ps\_add\_weblink()](function.ps-add-weblink.md) - Adiciona link para um local da web

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
