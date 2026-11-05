# Coloca a imagem na página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-place-image.php

---

# ps\_place\_image

(PECL ps >= 1.1.0)

ps\_place\_image — Coloca a imagem na página

### Descrição

function **ps\_place\_image**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [int](language.types.integer.md) `$imageid`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$scale`  
): [bool](language.types.boolean.md)

Insere uma imagem carregada anteriormente na página. A imagem pode ser redimensionada.
Se a imagem também precisar ser rotacionada, será necessário antes rotacionar o
sistema de coordenadas com [ps\_rotate()](function.ps-rotate.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`imageid`
:   O identificador de recurso da imagem retornado por
    [ps\_open\_image()](function.ps-open-image.md) ou
    [ps\_open\_image\_file()](function.ps-open-image-file.md).

`x`
:   Coordenada x do canto inferior esquerdo da imagem.

`y`
:   Coordenada y do canto inferior esquerdo da imagem.

`scale`
:   O fator de escala da imagem. Uma escala de 1.0 resultará
    em uma resolução de 72 dpi, pois cada pixel equivale a
    1 ponto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_open\_image()](function.ps-open-image.md) - Lê uma imagem para posicionamento posterior
- [ps\_open\_image\_file()](function.ps-open-image-file.md) - Abre a imagem do arquivo

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
