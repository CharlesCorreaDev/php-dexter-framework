# Retorna a cor do índice especificado do mapa de cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagecolormapcolor.php

---

# Imagick::getImageColormapColor

(PECL imagick 2, PECL imagick 3)

Imagick::getImageColormapColor — Retorna a cor do índice especificado do mapa de cores

### Descrição

public function **Imagick::getImageColormapColor**([int](language.types.integer.md) `$index`): [ImagickPixel](class.imagickpixel.md)

Retorna a cor do índice especificado do mapa de cores.

### Parâmetros

`index`
:   A posição no mapa de cores da imagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
