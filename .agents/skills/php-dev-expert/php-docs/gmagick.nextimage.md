# Passa para a próxima imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.nextimage.php

---

# Gmagick::nextimage

(PECL gmagick >= Unknown)

Gmagick::nextimage — Passa para a próxima imagem

### Descrição

public function **Gmagick::nextimage**(): [bool](language.types.boolean.md)

Associa a próxima imagem na lista de imagens a um objeto [Gmagick](class.gmagick.md).

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
