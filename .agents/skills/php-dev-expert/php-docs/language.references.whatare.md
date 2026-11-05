# O que são referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.whatare.php

---

## O que são referências

Referência em PHP significa acessar o mesmo conteúdo de variável
através de vários nomes. Isto não é parecido com os ponteiros em C. Por exemplo,
não é possível efetuar aritmética de ponteiros com referências, já que elas
não são endereços de memória. Consulte
[O que referências não são](language.references.arent.md) para mais
informações. Ao invés disso, elas são
apelidos para [tabela de símbolos](features.gc.refcounting-basics.md).
Observe que no PHP, um nome de variável e um conteúdo de variável são coisas diferentes, portanto o mesmo
conteúdo pode ter nomes diferentes. A analogia mais próxima é com arquivos
e nomes de arquivos Unix - os nomes de variáveis são como entradas de diretórios,
enquanto que o conteúdo de variável é com o conteúdo do arquivo em si. Referências são
parecidas com ligações concretas no sistema de arquivo Unix.

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
