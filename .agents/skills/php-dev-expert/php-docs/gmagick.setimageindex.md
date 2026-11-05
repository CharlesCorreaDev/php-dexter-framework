# Defina o iterador para a posição na lista de imagens especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageindex.php

---

# Gmagick::setimageindex

(PECL gmagick >= Unknown)

Gmagick::setimageindex — Defina o iterador para a posição na lista de imagens especificada

### Descrição

public function **Gmagick::setimageindex**([int](language.types.integer.md) `$index`): [Gmagick](class.gmagick.md)

Defina o iterador para a posição definida pelo índice na lista de imagens especificada.

### Parâmetros

`index`
:   Índice da cena.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

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
