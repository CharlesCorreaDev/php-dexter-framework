# Exibe uma imagem ou sequência de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.displayimages.php

---

# Imagick::displayImages

(PECL imagick 2, PECL imagick 3)

Imagick::displayImages — Exibe uma imagem ou sequência de imagens

### Descrição

public function **Imagick::displayImages**([string](language.types.string.md) `$servername`): [bool](language.types.boolean.md)

Exibe uma imagem ou sequência de imagens em um servidor X.

### Parâmetros

`servername`
:   O nome do servidor X

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
