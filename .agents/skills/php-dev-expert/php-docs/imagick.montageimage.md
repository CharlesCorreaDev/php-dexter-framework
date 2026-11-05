# Cria uma imagem composta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.montageimage.php

---

# Imagick::montageImage

(PECL imagick 2, PECL imagick 3)

Imagick::montageImage — Cria uma imagem composta

### Descrição

public function **Imagick::montageImage**(  
    [ImagickDraw](class.imagickdraw.md) `$draw`,  
    [string](language.types.string.md) `$tile_geometry`,  
    [string](language.types.string.md) `$thumbnail_geometry`,  
    [int](language.types.integer.md) `$mode`,  
    [string](language.types.string.md) `$frame`  
): [Imagick](class.imagick.md)

Cria uma imagem composta combinando várias imagens separadas.
As imagens são dispostas lado a lado na imagem composta, com o nome da
imagem aparecendo opcionalmente logo abaixo do bloco individual.

### Parâmetros

`draw`
:   O nome, tamanho e cor da fonte são obtidos deste objeto.

`tile_geometry`
:   O número de blocos por linha e página (por exemplo, 6x4+0+0).

`thumbnail_geometry`
:   Tamanho de imagem preferido e tamanho da borda de cada miniatura
    (por exemplo, 120x120+4+3).

`mode`
:   Modo de enquadramento de miniatura, consulte as [constantes de modos de montagem](imagick.constants.md#imagick.constants.montagemode).

`frame`
:   Envolve a imagem com uma borda ornamental (por exemplo, 15x15+3+3). A
    cor da moldura é a cor fosca da miniatura.

### Valor Retornado

Cria uma imagem composta e a retorna como um novo objeto [Imagick](class.imagick.md).

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
