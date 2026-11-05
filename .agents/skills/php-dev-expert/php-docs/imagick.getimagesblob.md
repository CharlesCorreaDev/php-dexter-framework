# Retorna todas as sequências de imagens como um BLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagesblob.php

---

# Imagick::getImagesBlob

(PECL imagick 2, PECL imagick 3)

Imagick::getImagesBlob — Retorna todas as sequências de imagens como um BLOB

### Descrição

public function **Imagick::getImagesBlob**(): [string](language.types.string.md)

Implementa formatos de imagem com acesso direto na memória. Ela retorna todas as sequências
de imagens como uma string. O formato da imagem determina o
formato do BLOB retornado (GIF, JPEG, PNG, etc.). Para retornar um
formato de imagem diferente, use Imagick::setImageFormat().

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo as imagens. Em caso de falha, lança
uma ImagickException.

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
