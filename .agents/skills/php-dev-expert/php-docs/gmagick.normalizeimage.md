# Melhora o contraste de uma imagem colorida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.normalizeimage.php

---

# Gmagick::normalizeimage

(PECL gmagick >= Unknown)

Gmagick::normalizeimage — Melhora o contraste de uma imagem colorida

### Descrição

public function **Gmagick::normalizeimage**([int](language.types.integer.md) `$channel` = ?): [Gmagick](class.gmagick.md)

Melhora o contraste de uma imagem colorida ajustando a cor dos pixels para abranger toda a gama de cores disponíveis.

### Parâmetros

`channel`
:   Identifica qual canal será normalizado.

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
