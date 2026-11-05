# Lê imagem a partir de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.readimage.php

---

# Gmagick::readimage

(PECL gmagick >= Unknown)

Gmagick::readimage — Lê imagem a partir de um arquivo

### Descrição

public function **Gmagick::readimage**([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

Lê imagem a partir de um arquivo.

### Parâmetros

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
