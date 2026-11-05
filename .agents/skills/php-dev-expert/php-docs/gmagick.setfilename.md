# Define o nome do arquivo antes de ler ou gravar a imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setfilename.php

---

# Gmagick::setfilename

(PECL gmagick >= Unknown)

Gmagick::setfilename — Define o nome do arquivo antes de ler ou gravar a imagem

### Descrição

public function **Gmagick::setfilename**([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

Define o nome do arquivo antes de ler ou gravar um arquivo de imagem.

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
