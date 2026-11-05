# Extrai uma região da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageregion.php

---

# Imagick::getImageRegion

(PECL imagick 2, PECL imagick 3)

Imagick::getImageRegion — Extrai uma região da imagem

### Descrição

public function **Imagick::getImageRegion**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Imagick](class.imagick.md)

Extrai uma região da imagem e a retorna como um novo objeto Imagick.

### Parâmetros

`width`
:   A largura da região extraída.

`height`
:   A altura da região extraída.

`x`
:   Coordenada X do canto superior esquerdo da região extraída.

`y`
:   Coordenada Y do canto superior esquerdo da região extraída.

### Valor Retornado

Extrai uma região da imagem e a retorna como uma nova varinha.

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
