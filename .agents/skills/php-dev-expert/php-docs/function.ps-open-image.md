# Lê uma imagem para posicionamento posterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-open-image.php

---

# ps\_open\_image

(PECL ps >= 1.1.0)

ps\_open\_image — Lê uma imagem para posicionamento posterior

### Descrição

function **ps\_open\_image**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$type`,  
    [string](language.types.string.md) `$source`,  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$components`,  
    [int](language.types.integer.md) `$bpc`,  
    [string](language.types.string.md) `$params`  
): [int](language.types.integer.md)

Lê uma imagem que já está disponível na memória. O parâmetro
`source` não é avaliado atualmente e assume-se que é
`memory`. Os dados da imagem são uma sequência de pixels que começa
no canto superior esquerdo e termina no canto inferior direito. Cada pixel
consiste em `components` componentes de cor, e cada
componente possui bits `bpc`.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   O tipo da imagem. Os valores possíveis são `png`,
    `jpeg` ou `eps`.

`source`
:   Não usado.

`data`
:   Os dados da imagem.

`length`
:   O comprimento dos dados da imagem.

`width`
:   A largura da imagem.

`height`
:   A altura da imagem.

`components`
:   O número de componentes para cada pixel. Pode ser
    1 (imagens em escala de cinza), 3 (imagens RGB) ou 4 (imagens CMYK, RGBA).

`bpc`
:   Número de bits por componente (geralmente 8).

`params`

### Valor Retornado

Retorna o identificador da imagem ou zero em caso de erro. O identificador é
um número positivo maior que 0.

### Veja também

- [ps\_open\_image\_file()](function.ps-open-image-file.md) - Abre a imagem do arquivo
- [ps\_place\_image()](function.ps-place-image.md) - Coloca a imagem na página
- [ps\_close\_image()](function.ps-close-image.md) - Fecha a imagem e libera memória

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
