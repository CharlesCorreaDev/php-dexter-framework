# Transformação em Maiúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.case-folding.php

---

# Transformação em Maiúsculas

As funções manipuladoras de elementos podem ter seus nomes de elemento
transformados em maiúsculas. O termo case-folded, do inglês, é definido
como "um processo aplicado a uma sequência de
caracteres, no qual aqueles identificados como não sendo letras maiúsculas são
substituídos por seus equivalentes em maiúsculas". Em outras palavras, quando
se trata de XML, case-folded simplesmente significa transformar em maiúsculas.

Por padrão, todos os nomes de elementos que são passados para as funções
manipuladoras são transformados em maiúsculas. Este comportamento pode ser consultado e
controlado por interpretador XML com as funções
[xml\_parser\_get\_option()](function.xml-parser-get-option.md) e
[xml\_parser\_set\_option()](function.xml-parser-set-option.md),
respectivamente.

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
