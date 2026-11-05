# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solr.requirements.php

---

## Dependências

As extensões libxml e curl também devem estar habilitadas para
que a extensão Apache Solr esteja disponível.

libxml2 2.6.31 ou posterior é necessário.

libcurl 7.18.0 ou posterior também é necessário.

As versões da biblioteca acima são necessárias e a tentativa de
adulterar o código para forçar sua compilação é fortemente desencorajada.
Ele falhará, possivelmente com erros que podem ser difíceis de depurar.

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
