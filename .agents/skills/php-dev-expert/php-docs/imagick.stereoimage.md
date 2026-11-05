# Compõe duas imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.stereoimage.php

---

# Imagick::stereoImage

(PECL imagick 2, PECL imagick 3)

Imagick::stereoImage — Compõe duas imagens

### Descrição

public function **Imagick::stereoImage**([Imagick](class.imagick.md) `$offset_wand`): [bool](language.types.boolean.md)

Compõe duas imagens e produz uma única imagem que é a composição
de uma imagem esquerda e direita de um par estéreo.

### Parâmetros

`offset_wand`

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
