# Define o tipo de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagetype.php

---

# Gmagick::setimagetype

(PECL gmagick >= Unknown)

Gmagick::setimagetype — Define o tipo de imagem

### Descrição

public function **Gmagick::setimagetype**([int](language.types.integer.md) `$imgType`): [Gmagick](class.gmagick.md)

Define o tipo de imagem.

### Parâmetros

`imgType`
:   Uma das constantes [tipo de imagem](gmagick.constants.md#gmagick.constants.imagetype)
    (`Gmagick::IMGTYPE_*`).

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
