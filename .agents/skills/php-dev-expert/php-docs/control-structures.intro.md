# Introdução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.intro.php

---

## Introdução

Qualquer script PHP é construído por uma série de instruções. Uma instrução
pode ser uma atribuição, uma chamada de função, um laço de repetição, uma instrução
condicional, ou mesmo uma instrução que não faz nada (um comando vazio).
Instruções geralmente terminam com um ponto e vírgula. Além disso, as
instruções podem ser agrupadas em um bloco de comandos através do encapsulamento
de um grupo de comandos com chaves. Um grupo de comandos é uma instrução
também. Os vários tipos de instruções são
descritos neste capítulo.

### Veja também

Os itens a seguir são considerados como construtos da linguagem, mesmo que eles sejam
referenciados como funções neste manual.

- [list()](function.list.md)
- [array()](function.array.md)
- [echo](function.echo.md)
- [eval()](function.eval.md)
- [print](function.print.md)

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
