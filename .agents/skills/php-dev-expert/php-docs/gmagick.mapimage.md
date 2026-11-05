# Substitui as cores de uma imagem pela cor mais próxima de uma imagem de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.mapimage.php

---

# Gmagick::mapimage

(PECL gmagick >= Unknown)

Gmagick::mapimage — Substitui as cores de uma imagem pela cor mais próxima de uma imagem de referência

### Descrição

public function **Gmagick::mapimage**([gmagick](class.gmagick.md) `$gmagick`, [bool](language.types.boolean.md) `$dither`): [Gmagick](class.gmagick.md)

Substitui as cores de uma imagem pela cor mais próxima de uma imagem de referência.

### Parâmetros

`gmagick`
:   A imagem de referência.

`dither`
:   Defina esse valor inteiro como algo diferente de zero para pontilhar a imagem mapeada.

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
