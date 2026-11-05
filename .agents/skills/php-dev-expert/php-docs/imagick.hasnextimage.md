# Verifica se o objeto possui mais imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.hasnextimage.php

---

# Imagick::hasNextImage

(PECL imagick 2, PECL imagick 3)

Imagick::hasNextImage — Verifica se o objeto possui mais imagens

### Descrição

public function **Imagick::hasNextImage**(): [bool](language.types.boolean.md)

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista para a frente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista
para a frente, retorna **`false`** se não tiver.

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
