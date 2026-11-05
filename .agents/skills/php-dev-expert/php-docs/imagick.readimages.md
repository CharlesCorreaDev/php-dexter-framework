# Lê imagens de um array de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.readimages.php

---

# Imagick::readimages

(PECL imagick 2, PECL imagick 3)

Imagick::readimages — Lê imagens de um array de arquivos

### Descrição

public function **Imagick::readImages**([array](language.types.array.md) `$filenames`): [bool](language.types.boolean.md)

Lê imagens a partir de um array de arquivos. Todas as imagens são mantidas em um único objeto Imagick.

### Parâmetros

`filenames`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
