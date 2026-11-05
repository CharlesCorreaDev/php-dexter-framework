# Desloca o mapa de cores de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.cyclecolormapimage.php

---

# Imagick::cycleColormapImage

(PECL imagick 2, PECL imagick 3)

Imagick::cycleColormapImage — Desloca o mapa de cores de uma imagem

### Descrição

public function **Imagick::cycleColormapImage**([int](language.types.integer.md) `$displace`): [bool](language.types.boolean.md)

Desloca o mapa de cores de uma imagem em um determinado número de posições. Se o
mapa de cores for ciclado várias vezes, pode-se produzir um efeito
psicodélico.

### Parâmetros

`displace`
:   A quantidade para deslocar o mapa de cores.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
