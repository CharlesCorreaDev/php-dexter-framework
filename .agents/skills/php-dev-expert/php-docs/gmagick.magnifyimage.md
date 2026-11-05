# Amplia uma imagem para o dobro de seu tamanho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.magnifyimage.php

---

# Gmagick::magnifyimage

(PECL gmagick >= Unknown)

Gmagick::magnifyimage — Amplia uma imagem para o dobro de seu tamanho

### Descrição

public function **Gmagick::magnifyimage**(): [mixed](language.types.mixed.md)

Dimensiona convenientemente uma imagem proporcionalmente ao dobro do seu tamanho original.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Objeto [Gmagick](class.gmagick.md) ampliado.

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
