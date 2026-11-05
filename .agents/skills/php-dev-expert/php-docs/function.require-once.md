# require_once

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.require-once.php

---

## require\_once

(PHP 4, PHP 5, PHP 7, PHP 8)

A expressão `require_once` é idêntica à
[require](function.require.md), exceto que o PHP verificará
se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente.

Veja a documentação [include\_once](function.include-once.md) para informação
sobre o comportamento `_once`, e como ele difere de
seus irmãos `_once`.

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
