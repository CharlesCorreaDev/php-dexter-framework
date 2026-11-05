# Desloca o mapa de cores de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.cyclecolormapimage.php

---

# Gmagick::cyclecolormapimage

(PECL gmagick >= Unknown)

Gmagick::cyclecolormapimage — Desloca o mapa de cores de uma imagem

### Descrição

public function **Gmagick::cyclecolormapimage**([int](language.types.integer.md) `$displace`): [Gmagick](class.gmagick.md)

Desloca o mapa de cores de uma imagem em um determinado número de posições. Se o mapa de cores for alternado várias vezes, é possível
produzir um efeito psicodélico.

### Parâmetros

`displace`
:   A quantidade a deslocar o mapa de cores.

### Valor Retornado

Retorna o próprio objeto em caso de sucesso.

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
