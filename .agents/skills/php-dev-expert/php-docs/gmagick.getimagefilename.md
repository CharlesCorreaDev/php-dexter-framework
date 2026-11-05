# Retorna o nome do arquivo de uma imagem específica em uma sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimagefilename.php

---

# Gmagick::getimagefilename

(PECL gmagick >= Unknown)

Gmagick::getimagefilename — Retorna o nome do arquivo de uma imagem específica em uma sequência

### Descrição

public function **Gmagick::getimagefilename**(): [string](language.types.string.md)

Retorna o nome do arquivo de uma imagem específica em uma sequência

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com o nome do arquivo da imagem

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
