# include_once

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.include-once.php

---

## include\_once

(PHP 4, PHP 5, PHP 7, PHP 8)

A expressão `include_once` inclui e avalia
o arquivo informado durante a execução do script.
Este comportamento é similar à expressão [include](function.include.md),
com a única diferença que, se o código do arquivo já foi
incluído, não o fará novamente, e a include\_once retornará **`true`**. Como o nome sugere,
o arquivo será incluído somente uma vez.

A `include_once` pode ser utilizada em casos em que
o mesmo arquivo pode ser incluído e validado mais de uma vez durante uma
execução de um script em particular, neste caso, ajudará a evitar
problemas como redefinição de funções, reatribuição de valores de variáveis, etc.

Consulte a documentação da expressão [include](function.include.md) para informações sobre
como ela funciona.

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
