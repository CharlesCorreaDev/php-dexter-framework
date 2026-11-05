# Define a profundidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagedepth.php

---

# Gmagick::setimagedepth

(PECL gmagick >= Unknown)

Gmagick::setimagedepth — Define a profundidade da imagem

### Descrição

public function **Gmagick::setimagedepth**([int](language.types.integer.md) `$depth`): [Gmagick](class.gmagick.md)

Define a profundidade da imagem.

### Parâmetros

`depth`
:   A profundidade da imagem em bits: 8, 16 ou 32.

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
