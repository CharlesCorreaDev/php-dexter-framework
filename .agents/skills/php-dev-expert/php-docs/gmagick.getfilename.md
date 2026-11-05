# Obtém o nome do arquivo associado a uma sequência de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getfilename.php

---

# Gmagick::getfilename

(PECL gmagick >= Unknown)

Gmagick::getfilename — Obtém o nome do arquivo associado a uma sequência de imagens

### Descrição

public function **Gmagick::getfilename**(): [string](language.types.string.md)

Retorna o nome do arquivo associado a uma sequência de imagens.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso.

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
