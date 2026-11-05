# Dimensiona uma imagem com amostragem de pixels

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sampleimage.php

---

# Imagick::sampleImage

(PECL imagick 2, PECL imagick 3)

Imagick::sampleImage — Dimensiona uma imagem com amostragem de pixels

### Descrição

public function **Imagick::sampleImage**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

Dimensiona uma imagem para as dimensões desejadas com amostragem de pixels.
Ao contrário de outros métodos de dimensionamento, este método não introduz
nenhuma cor adicional na imagem dimensionada.

### Parâmetros

`columns`

`rows`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
