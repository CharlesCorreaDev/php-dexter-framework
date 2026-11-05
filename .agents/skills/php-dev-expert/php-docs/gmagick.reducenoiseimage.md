# Suaviza os contornos de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.reducenoiseimage.php

---

# Gmagick::reducenoiseimage

(PECL gmagick >= Unknown)

Gmagick::reducenoiseimage — Suaviza os contornos de uma imagem

### Descrição

public function **Gmagick::reducenoiseimage**([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

Suaviza os contornos de uma imagem enquanto preserva as informações das bordas. O algoritmo funciona substituindo cada pixel pelo seu vizinho de valor mais próximo. Um vizinho é definido pelo raio.
Com um raio de 0, **Gmagick::reducenoiseimage()** seleciona um raio adequado automaticamente.

### Parâmetros

`radius`
:   O raio da vizinhança do pixel.

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
