# Define o operador de composição de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagecompose.php

---

# Imagick::setImageCompose

(PECL imagick 2, PECL imagick 3)

Imagick::setImageCompose — Define o operador de composição de imagem

### Descrição

public function **Imagick::setImageCompose**([int](language.types.integer.md) `$compose`): [bool](language.types.boolean.md)

Define o operador de composição de imagem, útil para especificar como
compor a miniatura da imagem ao usar o
método Imagick::montageImage().

### Parâmetros

`compose`

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
