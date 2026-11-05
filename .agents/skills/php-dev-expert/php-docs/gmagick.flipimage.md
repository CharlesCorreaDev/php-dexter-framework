# Cria uma imagem espelhada vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.flipimage.php

---

# Gmagick::flipimage

(PECL gmagick >= Unknown)

Gmagick::flipimage — Cria uma imagem espelhada vertical

### Descrição

public function **Gmagick::flipimage**(): [Gmagick](class.gmagick.md)

Cria uma imagem espelhada vertical refletindo os pixels em torno do eixo x central.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) espelhado.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

### Veja também

- [Gmagick::flopimage()](gmagick.flopimage.md) - Cria uma imagem espelhada horizontal

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
