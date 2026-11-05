# Adiciona link para um local da web

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-add-weblink.php

---

# ps\_add\_weblink

(PECL ps >= 1.1.0)

ps\_add\_weblink — Adiciona link para um local da web

### Descrição

function **ps\_add\_weblink**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$llx`,  
    [float](language.types.float.md) `$lly`,  
    [float](language.types.float.md) `$urx`,  
    [float](language.types.float.md) `$ury`,  
    [string](language.types.string.md) `$url`  
): [bool](language.types.boolean.md)

Coloca um hiperlink na posição fornecida, apontando para uma página da web.
A posição de origem do hiperlink é um retângulo com seu canto inferior esquerdo em
(`llx`, `lly`) e
seu canto superior direito em (`urx`,
`ury`). O retângulo tem, por padrão, uma borda fina
azul.

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

`url`
:   A URL do hiperlink a ser aberto ao clicar
    neste link, por exemplo, `http://www.php.net`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_add\_launchlink()](function.ps-add-launchlink.md) - Adiciona hiperlink que inicia o arquivo
- [ps\_add\_locallink()](function.ps-add-locallink.md) - Adiciona link para uma página no mesmo documento
- [ps\_add\_pdflink()](function.ps-add-pdflink.md) - Adiciona link para uma página em um segundo documento PDF

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
