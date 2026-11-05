# Adiciona link para uma página em um segundo documento PDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-add-pdflink.php

---

# ps\_add\_pdflink

(PECL ps >= 1.1.0)

ps\_add\_pdflink — Adiciona link para uma página em um segundo documento PDF

### Descrição

function **ps\_add\_pdflink**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$llx`,  
    [float](language.types.float.md) `$lly`,  
    [float](language.types.float.md) `$urx`,  
    [float](language.types.float.md) `$ury`,  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$page`,  
    [string](language.types.string.md) `$dest`  
): [bool](language.types.boolean.md)

Coloca um hiperlink na posição fornecida, apontando para um segundo documento PDF.
Clicar no link redirecionará para o documento na página fornecida. A
primeira página de um documento tem o número 1.

A posição de origem do hiperlink é um retângulo com seu canto inferior esquerdo em
(`llx`, `lly`) e seu canto
superior direito em (`urx`, `ury`).
O retângulo tem, por padrão, uma borda azul fina.

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

`filename`
:   O nome do documento PDF a ser aberto ao clicar
    neste link.

`page`
:   O número da página do documento PDF de destino.

`dest`
:   O parâmetro `dest` determina como o documento
    está sendo visualizado. Pode ser `fitpage`,
    `fitwidth`, `fitheight` ou
    `fitbbox`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

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
