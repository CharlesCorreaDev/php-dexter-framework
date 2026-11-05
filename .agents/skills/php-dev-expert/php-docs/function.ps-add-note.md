# Adiciona nota à página atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-add-note.php

---

# ps\_add\_note

(PECL ps >= 1.1.0)

ps\_add\_note — Adiciona nota à página atual

### Descrição

function **ps\_add\_note**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$llx`,  
    [float](language.types.float.md) `$lly`,  
    [float](language.types.float.md) `$urx`,  
    [float](language.types.float.md) `$ury`,  
    [string](language.types.string.md) `$contents`,  
    [string](language.types.string.md) `$title`,  
    [string](language.types.string.md) `$icon`,  
    [int](language.types.integer.md) `$open`  
): [bool](language.types.boolean.md)

Adiciona uma nota em uma determinada posição na página. As notas são como pequenas
folhas retangulares com texto, que podem ser colocadas em qualquer lugar
da página. Elas
são exibidas dobradas ou desdobradas. Se dobradas, o ícone especificado
é usado como um espaço reservado.

A nota não ficará visível se o documento
for impresso ou visualizado, mas aparecerá se o documento for convertido para
PDF pelo Acrobat Distiller™ ou Ghostview.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`llx`
:   A coordenada x do canto inferior esquerdo.

`lly`
:   A coordenada y do canto inferior esquerdo.

`urx`
:   A coordenada x do canto superior direito.

`ury`
:   A coordenada y do canto superior direito.

`contents`
:   O texto da nota.

`title`
:   O título da nota conforme exibido no cabeçalho da nota.

`icon`
:   O ícone exibido se a nota estiver dobrada. Este parâmetro pode ser definido
    como `comment`, `insert`,
    `note`, `paragraph`,
    `newparagraph`, `key` ou
    `help`.

`open`
:   Se `open` for diferente de zero, a nota
    será exibida desdobrada após a abertura do documento com um visualizador de PDF.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_add\_pdflink()](function.ps-add-pdflink.md) - Adiciona link para uma página em um segundo documento PDF
- [ps\_add\_launchlink()](function.ps-add-launchlink.md) - Adiciona hiperlink que inicia o arquivo
- [ps\_add\_locallink()](function.ps-add-locallink.md) - Adiciona link para uma página no mesmo documento
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
