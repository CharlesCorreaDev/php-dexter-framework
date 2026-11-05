# Verifica se o objeto possui uma imagem anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.haspreviousimage.php

---

# Imagick::hasPreviousImage

(PECL imagick 2, PECL imagick 3)

Imagick::hasPreviousImage — Verifica se o objeto possui uma imagem anterior

### Descrição

public function **Imagick::hasPreviousImage**(): [bool](language.types.boolean.md)

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista na direção inversa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista na
direção inversa, retorna **`false`** se não houver.

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
