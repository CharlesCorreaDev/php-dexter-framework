# Notas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.notes.php

---

# Notas

Esta seção fornece uma coleção de notas miscelâneas sobre o uso
do Driver Nativo MySQL.

- Usar `mysqlnd`significa usar fluxos PHP
  para conectividades subjacente. Para `mysqlnd`, a documentação
  de fluxos do PHP ([Fluxos](book.stream.md)) deve ser consultada
  sobre detalhes como configurações de limites de tempo, e não a documentação para a
  Biblioteca Cliente do MySQL.

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
