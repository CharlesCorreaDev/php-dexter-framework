# Define o formato de uma imagem específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageformat.php

---

# Gmagick::setimageformat

(PECL gmagick >= Unknown)

Gmagick::setimageformat — Define o formato de uma imagem específica

### Descrição

public function **Gmagick::setimageformat**([string](language.types.string.md) `$imageFormat`): [Gmagick](class.gmagick.md)

Define o formato de uma imagem específica em uma sequência.

### Parâmetros

`imageFormat`
:   O formato da imagem

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
