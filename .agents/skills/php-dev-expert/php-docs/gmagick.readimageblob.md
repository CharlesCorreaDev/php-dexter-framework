# Lê imagem a partir de uma string binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.readimageblob.php

---

# Gmagick::readimageblob

(PECL gmagick >= Unknown)

Gmagick::readimageblob — Lê imagem a partir de uma string binária

### Descrição

public function **Gmagick::readimageblob**([string](language.types.string.md) `$imageContents`, [string](language.types.string.md) `$filename` = ?): [Gmagick](class.gmagick.md)

Lê imagem a partir de uma string binária

### Parâmetros

`imageContents`
:   Conteúdo da imagem.

`filename`
:   O nome do arquivo da imagem.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
