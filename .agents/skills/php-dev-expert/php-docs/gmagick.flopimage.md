# Cria uma imagem espelhada horizontal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.flopimage.php

---

# Gmagick::flopimage

(PECL gmagick >= Unknown)

Gmagick::flopimage — Cria uma imagem espelhada horizontal

### Descrição

public function **Gmagick::flopimage**(): [Gmagick](class.gmagick.md)

Cria uma imagem espelhada horizontal refletindo os pixels em torno do eixo y central.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) espelhado.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

### Veja também

- [Gmagick::flipimage()](gmagick.flipimage.md) - Cria uma imagem espelhada vertical

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
