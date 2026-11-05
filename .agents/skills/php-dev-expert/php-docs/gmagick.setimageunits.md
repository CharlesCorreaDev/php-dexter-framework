# Define as unidades de resolução da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageunits.php

---

# Gmagick::setimageunits

(PECL gmagick >= Unknown)

Gmagick::setimageunits — Define as unidades de resolução da imagem

### Descrição

public function **Gmagick::setimageunits**([int](language.types.integer.md) `$resolution`): [Gmagick](class.gmagick.md)

Define as unidades de resolução da imagem.

### Parâmetros

`resolution`
:   Uma das constantes de [resolução](gmagick.constants.md#gmagick.constants.resolution)
    (`Gmagick::RESOLUTION_*`).

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
