# Define o nome do arquivo de uma imagem específica em uma sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagefilename.php

---

# Gmagick::setimagefilename

(PECL gmagick >= Unknown)

Gmagick::setimagefilename — Define o nome do arquivo de uma imagem específica em uma sequência

### Descrição

public function **Gmagick::setimagefilename**([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

Define o nome do arquivo de uma imagem específica em uma sequência.

### Parâmetros

`filename`
:   O nome do arquivo da imagem

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
