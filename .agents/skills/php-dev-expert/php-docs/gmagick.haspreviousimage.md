# Verifica se o objeto possui uma imagem anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.haspreviousimage.php

---

# Gmagick::haspreviousimage

(PECL gmagick >= Unknown)

Gmagick::haspreviousimage — Verifica se o objeto possui uma imagem anterior

### Descrição

public function **Gmagick::haspreviousimage**(): [mixed](language.types.mixed.md)

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista na direção inversa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista no sentido inverso, retorna **`false`** se não houver nenhum.

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
