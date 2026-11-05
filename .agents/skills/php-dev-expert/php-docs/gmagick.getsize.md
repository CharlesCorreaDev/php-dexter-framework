# Retorna o tamanho associado ao objeto Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getsize.php

---

# Gmagick::getsize

(PECL gmagick >= Unknown)

Gmagick::getsize — Retorna o tamanho associado ao objeto Gmagick

### Descrição

public function **Gmagick::getsize**(): [array](language.types.array.md)

Retorna o tamanho associado ao objeto [Gmagick](class.gmagick.md) como um array com as chaves "columns" (colunas) e "rows" (linhas).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho associado ao objeto [Gmagick](class.gmagick.md) como um array com as chaves "columns" (colunas) e "rows" (linhas).

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
