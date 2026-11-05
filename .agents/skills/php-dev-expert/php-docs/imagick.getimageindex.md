# Obtém o índice da imagem ativa atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageindex.php

---

# Imagick::getImageIndex

(PECL imagick 2, PECL imagick 3)

Imagick::getImageIndex — Obtém o índice da imagem ativa atual

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::getImageIndex**(): [int](language.types.integer.md)

Retorna o índice da imagem ativa atual dentro do objeto Imagick.
Este método foi preterido. Consulte
[Imagick::getIteratorIndex()](imagick.getiteratorindex.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro contendo o índice da imagem na pilha.

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
