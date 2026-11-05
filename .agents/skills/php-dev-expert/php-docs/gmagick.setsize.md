# Define o tamanho do objeto Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setsize.php

---

# Gmagick::setsize

(PECL gmagick >= Unknown)

Gmagick::setsize — Define o tamanho do objeto Gmagick

### Descrição

public function **Gmagick::setsize**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [Gmagick](class.gmagick.md)

Define o tamanho do objeto Gmagick. Defina-o antes de ler um formato de imagem bruto, como **`Gmagick::COLORSPACE_RGB`**,
**`Gmagick::COLORSPACE_GRAY`** ou **`Gmagick::COLORSPACE_CMYK`**.

### Parâmetros

`columns`
:   A largura em pixels.

`rows`
:   A altura em pixels.

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
