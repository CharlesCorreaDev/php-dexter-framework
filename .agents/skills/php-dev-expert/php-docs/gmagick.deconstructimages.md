# Retorna certas diferenças de pixels entre imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.deconstructimages.php

---

# Gmagick::deconstructimages

(PECL gmagick >= Unknown)

Gmagick::deconstructimages — Retorna certas diferenças de pixels entre imagens

### Descrição

public function **Gmagick::deconstructimages**(): [Gmagick](class.gmagick.md)

Compara cada imagem com a próxima em uma sequência e retorna a região delimitadora máxima de quaisquer diferenças de pixels descobertas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um novo objeto [Gmagick](class.gmagick.md).

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
