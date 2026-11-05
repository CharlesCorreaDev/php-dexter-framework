# Lê imagem a partir de um descritor de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.readimagefile.php

---

# Imagick::readImageFile

(PECL imagick 2, PECL imagick 3)

Imagick::readImageFile — Lê imagem a partir de um descritor de arquivo

### Descrição

public function **Imagick::readImageFile**([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$fileName` = **`null`**): [bool](language.types.boolean.md)

Lê uma imagem a partir de um descritor de arquivo aberto.

### Parâmetros

`filehandle`

`fileName`

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
