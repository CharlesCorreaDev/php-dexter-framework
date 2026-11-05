# Define cabeçalhos de saída específicos de FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-header.php

---

# fdf\_header

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVNf)

fdf\_header — Define cabeçalhos de saída específicos de FDF

### Descrição

function **fdf\_header**(): [void](language.types.void.md)

Esta é uma função de conveniência para definir cabeçalhos HTTP apropriados para saída FDF.
Ela define o `Content-type:` para
`application/vnd.fdf`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
