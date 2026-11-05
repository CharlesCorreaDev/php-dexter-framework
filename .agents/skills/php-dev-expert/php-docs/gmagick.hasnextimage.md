# Verifica se o objeto possui mais imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.hasnextimage.php

---

# Gmagick::hasnextimage

(PECL gmagick >= Unknown)

Gmagick::hasnextimage — Verifica se o objeto possui mais imagens

### Descrição

public function **Gmagick::hasnextimage**(): [mixed](language.types.mixed.md)

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista na direção direta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o objeto tiver mais imagens ao percorrer a lista na direção direta, retorna **`false`** se não houver nenhum.

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
