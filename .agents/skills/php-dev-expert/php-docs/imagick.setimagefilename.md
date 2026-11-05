# Define o nome do arquivo de uma imagem específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagefilename.php

---

# Imagick::setImageFilename

(PECL imagick 2, PECL imagick 3)

Imagick::setImageFilename — Define o nome do arquivo de uma imagem específica

### Descrição

public function **Imagick::setImageFilename**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Define o nome do arquivo de uma imagem específica em uma sequência.

### Parâmetros

`filename`

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
