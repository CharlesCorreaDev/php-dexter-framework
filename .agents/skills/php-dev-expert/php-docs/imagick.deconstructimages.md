# Retorna certas diferenças de pixels entre imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.deconstructimages.php

---

# Imagick::deconstructImages

(PECL imagick 2, PECL imagick 3)

Imagick::deconstructImages — Retorna certas diferenças de pixels entre imagens

### Descrição

public function **Imagick::deconstructImages**(): [Imagick](class.imagick.md)

Compara cada imagem com a próxima em uma sequência e retorna a região
delimitadora máxima de quaisquer diferenças de pixels que encontradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um novo objeto Imagick em caso de sucesso.

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
