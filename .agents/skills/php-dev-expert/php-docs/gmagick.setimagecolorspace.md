# Define o espaço de cores da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagecolorspace.php

---

# Gmagick::setimagecolorspace

(PECL gmagick >= Unknown)

Gmagick::setimagecolorspace — Define o espaço de cores da imagem

### Descrição

public function **Gmagick::setimagecolorspace**([int](language.types.integer.md) `$colorspace`): [Gmagick](class.gmagick.md)

Define o espaço de cores da imagem.

### Parâmetros

`colorspace`
:   Uma das constantes [Colorspace](gmagick.constants.md#gmagick.constants.colorspace)
    (`Gmagick::COLORSPACE_*`).

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
