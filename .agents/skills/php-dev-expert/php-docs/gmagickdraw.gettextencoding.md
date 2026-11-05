# Retorna o conjunto de caracteres usado para anotações de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.gettextencoding.php

---

# GmagickDraw::gettextencoding

(PECL gmagick >= Unknown)

GmagickDraw::gettextencoding — Retorna o conjunto de caracteres usado para anotações de texto

### Descrição

public function **GmagickDraw::gettextencoding**(): [mixed](language.types.mixed.md)

Retorna uma string que especifica o conjunto de caracteres usado para anotações de texto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string especificando o conjunto de caracteres ou **`false`** se a codificação do texto não estiver definida.

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
