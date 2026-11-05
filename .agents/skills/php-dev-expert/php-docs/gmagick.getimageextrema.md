# Obtém os extremos da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimageextrema.php

---

# Gmagick::getimageextrema

(PECL gmagick >= Unknown)

Gmagick::getimageextrema — Obtém os extremos da imagem

### Descrição

public function **Gmagick::getimageextrema**(): [array](language.types.array.md)

Retorna um array associativo com as chaves "min" e "max". Lança uma exceção
**GmagickException** em caso de erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com as chaves "min" e "max".

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
