# Define o tamanho do objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setsize.php

---

# Imagick::setSize

(PECL imagick 2, PECL imagick 3)

Imagick::setSize — Define o tamanho do objeto Imagick

### Descrição

public function **Imagick::setSize**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

Define o tamanho do objeto Imagick. Deve ser definido antes da leitura de um formato
bruto como RGB, escala de cinza ou CMYK.

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
