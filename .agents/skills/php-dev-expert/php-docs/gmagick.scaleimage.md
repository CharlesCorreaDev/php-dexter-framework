# Dimensiona o tamanho de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.scaleimage.php

---

# Gmagick::scaleimage

(PECL gmagick >= Unknown)

Gmagick::scaleimage — Dimensiona o tamanho de uma imagem

### Descrição

public function **Gmagick::scaleimage**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$fit` = **`false`**): [Gmagick](class.gmagick.md)

Dimensiona o tamanho de uma imagem para as dimensões fornecidas. O outro parâmetro será calculado se 0 for passado como qualquer um dos parâmetros.

### Parâmetros

`width`
:   O número de colunas na imagem dimensionada.

`height`
:   O número de linhas na imagem dimensionada.

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
