# Dimensiona uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.resizeimage.php

---

# Gmagick::resizeimage

(PECL gmagick >= Unknown)

Gmagick::resizeimage — Dimensiona uma imagem

### Descrição

public function **Gmagick::resizeimage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`,  
    [bool](language.types.boolean.md) `$fit` = **`false`**  
): [Gmagick](class.gmagick.md)

Dimensiona uma imagem para as dimensões desejadas com um filtro.

### Parâmetros

`width`
:   O número de colunas na imagem dimensionada.

`height`
:   O número de linhas na imagem dimensionada.

`filter`
:   Filtro de imagem a ser usado.

`blur`
:   O fator de desfoque onde maior que 1 é desfocado, menor que 1 é nítido.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
