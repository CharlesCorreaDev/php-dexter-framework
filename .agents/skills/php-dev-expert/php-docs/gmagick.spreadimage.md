# Desloca aleatoriamente cada pixel em um bloco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.spreadimage.php

---

# Gmagick::spreadimage

(PECL gmagick >= Unknown)

Gmagick::spreadimage — Desloca aleatoriamente cada pixel em um bloco

### Descrição

public function **Gmagick::spreadimage**([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

Método de efeitos especiais que desloca aleatoriamente cada pixel em um bloco definido pelo raio.

### Parâmetros

`radius`
:   Escolhe um pixel aleatório em uma vizinhança desta extensão.

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
