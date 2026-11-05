# Aplica um filtro digital

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.medianfilterimage.php

---

# Gmagick::medianfilterimage

(PECL gmagick >= Unknown)

Gmagick::medianfilterimage — Aplica um filtro digital

### Descrição

public function **Gmagick::medianfilterimage**([float](language.types.float.md) `$radius`): [void](language.types.void.md)

Aplica um filtro digital que melhora a qualidade de uma imagem com ruído. Cada pixel é substituído pela mediana em um conjunto de pixels vizinhos conforme definido pelo raio.

### Parâmetros

`radius`
:   O raio da vizinhança do pixel.

### Valor Retornado

Objeto [Gmagick](class.gmagick.md) com filtro de mediana aplicado.

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
