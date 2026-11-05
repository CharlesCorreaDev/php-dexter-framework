# Retorna o ponto primário verde da cromaticidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimagegreenprimary.php

---

# Gmagick::getimagegreenprimary

(PECL gmagick >= Unknown)

Gmagick::getimagegreenprimary — Retorna o ponto primário verde da cromaticidade

### Descrição

public function **Gmagick::getimagegreenprimary**(): [array](language.types.array.md)

Retorna o ponto primário verde da cromaticidade. Retorna um array com as chaves "x" e "y".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com as chaves "x" e "y" em caso de sucesso.

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
