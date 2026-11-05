# Define o gama da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagegamma.php

---

# Gmagick::setimagegamma

(PECL gmagick >= Unknown)

Gmagick::setimagegamma — Define o gama da imagem

### Descrição

public function **Gmagick::setimagegamma**([float](language.types.float.md) `$gamma`): [Gmagick](class.gmagick.md)

Define o gama da imagem.

### Parâmetros

`gamma`
:   O gama da imagem.

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
