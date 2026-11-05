# Obtém o índice da imagem ativa atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimageindex.php

---

# Gmagick::getimageindex

(PECL gmagick >= Unknown)

Gmagick::getimageindex — Obtém o índice da imagem ativa atual

### Descrição

public function **Gmagick::getimageindex**(): [int](language.types.integer.md)

Retorna o índice da imagem ativa atual dentro do objeto [Gmagick](class.gmagick.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Índice da imagem ativa atual.

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
