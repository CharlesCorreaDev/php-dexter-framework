# Define o tamanho da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageextent.php

---

# Imagick::setImageExtent

(PECL imagick 2, PECL imagick 3)

Imagick::setImageExtent — Define o tamanho da imagem

### Descrição

public function **Imagick::setImageExtent**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

Define o tamanho da imagem (ou seja, colunas e linhas).

### Parâmetros

`columns`

`rows`

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
