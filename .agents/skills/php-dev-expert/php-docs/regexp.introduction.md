# Introdução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.introduction.php

---

## Introdução

A sintaxe e a semântica das expressões regulares
suportadas pelo PCRE estão descritas nesta seção. Expressões regulares também
estão descritas na documentação Perl e em vários
outros livros, alguns dos quais possuem exemplos abundantes. "Dominando
Expressões Regulares" de Jeffrey Friedl, publicado pela
O'Reilly e Editora Alta Books (ISBN 978-85-7608-394-8), cobre-as com riqueza de detalhe.
A descrição aqui serve como documentação de referência.

Uma expressão regular é um padrão que corresponde a uma
string de entrada da esquerda para a direita. Na maior parte das vezes, um caractere representa
a si mesmo em uma expressão e casa com o caractere
correspondente na string de entrada. Como um exemplo trivial, a expressão
`The quick brown fox`
casa com uma parte de uma string de entrada que é idêntica a
si mesma.

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
