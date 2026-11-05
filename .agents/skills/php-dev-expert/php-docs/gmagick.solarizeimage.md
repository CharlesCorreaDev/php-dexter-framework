# Aplica um efeito de solarização à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.solarizeimage.php

---

# Gmagick::solarizeimage

(PECL gmagick >= Unknown)

Gmagick::solarizeimage — Aplica um efeito de solarização à imagem

### Descrição

public function **Gmagick::solarizeimage**([int](language.types.integer.md) `$threshold`): [Gmagick](class.gmagick.md)

Aplica um efeito especial à imagem, semelhante ao efeito obtido em uma
câmara escura fotográfica, expondo seletivamente áreas de papel fotossensível à luz.
O limite varia de 0 a QuantumRange e é uma medida da extensão da solarização.

### Parâmetros

`threshold`
:   Define a extensão da solarização.

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
