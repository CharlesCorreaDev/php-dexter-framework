# Renderiza o objeto GmagickDraw na imagem atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.drawimage.php

---

# Gmagick::drawimage

(PECL gmagick >= Unknown)

Gmagick::drawimage — Renderiza o objeto GmagickDraw na imagem atual

### Descrição

public function **Gmagick::drawimage**([GmagickDraw](class.gmagickdraw.md) `$GmagickDraw`): [Gmagick](class.gmagick.md)

Renderiza o objeto [GmagickDraw](class.gmagickdraw.md) na imagem atual.

### Parâmetros

`GmagickDraw`
:   As operações de desenho a serem renderizadas na imagem.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) desenhado.

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
