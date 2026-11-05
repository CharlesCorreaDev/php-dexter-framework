# Retorna o formato de uma imagem específica em uma sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageformat.php

---

# Imagick::getImageFormat

(PECL imagick 2, PECL imagick 3)

Imagick::getImageFormat — Retorna o formato de uma imagem específica em uma sequência

### Descrição

public function **Imagick::getImageFormat**(): [string](language.types.string.md)

Retorna o formato de uma imagem específica em uma sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo o formato da imagem em caso de sucesso.

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
