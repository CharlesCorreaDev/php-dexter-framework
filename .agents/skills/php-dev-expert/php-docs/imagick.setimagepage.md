# Define a geometria da página da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagepage.php

---

# Imagick::setImagePage

(PECL imagick 2, PECL imagick 3)

Imagick::setImagePage — Define a geometria da página da imagem

### Descrição

public function **Imagick::setImagePage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Define a geometria da página da imagem.

### Parâmetros

`width`

`height`

`x`

`y`

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
