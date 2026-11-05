# Retorna a imagem como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.tostring.php

---

# Imagick::\_\_toString

(PECL imagick 2, PECL imagick 3)

Imagick::\_\_toString — Retorna a imagem como uma string

### Descrição

public function **Imagick::\_\_toString**(): [string](language.types.string.md)

Retorna a imagem atual como uma string. Isso retornará apenas uma única imagem; não deve ser usado para objetos Imagick que contenham múltiplas imagens, por exemplo, um GIF animado ou PDF com várias páginas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo da string em caso de sucesso ou uma string vazia em caso de falha.

### Veja também

- [Imagick::getImageBlob()](imagick.getimageblob.md) - Retorna a sequência de imagem como um BLOB
- [Imagick::getImagesBlob()](imagick.getimagesblob.md) - Retorna todas as sequências de imagens como um BLOB

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
