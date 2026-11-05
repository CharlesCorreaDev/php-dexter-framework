# Lê imagem a partir de um descritor de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.readimagefile.php

---

# Gmagick::readimagefile

(PECL gmagick >= Unknown)

Gmagick::readimagefile — Lê imagem a partir de um descritor de arquivo

### Descrição

public function **Gmagick::readimagefile**([resource](language.types.resource.md) `$fp`, [string](language.types.string.md) `$filename` = ?): [Gmagick](class.gmagick.md)

Lê uma imagem ou sequência de imagens de um descritor de arquivo aberto.

### Parâmetros

`fp`
:   O descritor de arquivo.

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
