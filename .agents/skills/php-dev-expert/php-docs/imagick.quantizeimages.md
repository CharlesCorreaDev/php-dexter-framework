# Analisa as cores dentro de uma sequência de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.quantizeimages.php

---

# Imagick::quantizeImages

(PECL imagick 2, PECL imagick 3)

Imagick::quantizeImages — Analisa as cores dentro de uma sequência de imagens

### Descrição

public function **Imagick::quantizeImages**(  
    [int](language.types.integer.md) `$numberColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treedepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [bool](language.types.boolean.md)

### Parâmetros

`numberColors`

`colorspace`

`treedepth`

`dither`

`measureError`

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
