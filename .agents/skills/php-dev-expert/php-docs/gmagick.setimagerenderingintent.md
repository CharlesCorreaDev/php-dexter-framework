# Define a intenção de renderização da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagerenderingintent.php

---

# Gmagick::setimagerenderingintent

(PECL gmagick >= Unknown)

Gmagick::setimagerenderingintent — Define a intenção de renderização da imagem

### Descrição

public function **Gmagick::setimagerenderingintent**([int](language.types.integer.md) `$rendering_intent`): [Gmagick](class.gmagick.md)

Define a intenção de renderização da imagem.

### Parâmetros

`rendering_intent`
:   Uma das constantes de [intenção de renderização](gmagick.constants.md#gmagick.constants.renderingintent)
    (`Gmagick::RENDERINGINTENT_*`).

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
