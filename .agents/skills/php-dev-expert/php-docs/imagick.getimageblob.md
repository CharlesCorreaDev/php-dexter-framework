# Retorna a sequência de imagem como um BLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageblob.php

---

# Imagick::getImageBlob

(PECL imagick 2, PECL imagick 3)

Imagick::getImageBlob — Retorna a sequência de imagem como um BLOB

### Descrição

public function **Imagick::getImageBlob**(): [string](language.types.string.md)

Implementa formatos de imagem direto para a memória. Retorna a sequência de imagem
como uma string. O formato da imagem determina o
formato do BLOB retornado (GIF, JPEG, PNG, etc.). Para retornar um
formato de imagem diferente, use Imagick::setImageFormat().

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a imagem.

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
