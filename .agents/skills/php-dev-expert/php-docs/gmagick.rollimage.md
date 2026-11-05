# Desloca uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.rollimage.php

---

# Gmagick::rollimage

(PECL gmagick >= Unknown)

Gmagick::rollimage — Desloca uma imagem

### Descrição

public function **Gmagick::rollimage**([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [Gmagick](class.gmagick.md)

Desloca uma imagem conforme definido por x e y.

### Parâmetros

`x`
:   O deslocamento em x.

`y`
:   O deslocamento em y.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
