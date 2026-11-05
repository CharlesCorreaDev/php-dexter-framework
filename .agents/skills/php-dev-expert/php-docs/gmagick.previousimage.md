# Passa para a imagem anterior no objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.previousimage.php

---

# Gmagick::previousimage

(PECL gmagick >= Unknown)

Gmagick::previousimage — Passa para a imagem anterior no objeto

### Descrição

public function **Gmagick::previousimage**(): [bool](language.types.boolean.md)

Associa a imagem anterior em uma lista de imagens ao objeto Gmagick.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
