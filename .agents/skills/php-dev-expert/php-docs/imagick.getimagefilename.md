# Retorna o nome do arquivo de uma imagem específica em uma sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagefilename.php

---

# Imagick::getImageFilename

(PECL imagick 2, PECL imagick 3)

Imagick::getImageFilename — Retorna o nome do arquivo de uma imagem específica em uma sequência

### Descrição

public function **Imagick::getImageFilename**(): [string](language.types.string.md)

Retorna o nome do arquivo de uma imagem específica em uma sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

RRetorna uma string com o nome do arquivo da imagem.

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
