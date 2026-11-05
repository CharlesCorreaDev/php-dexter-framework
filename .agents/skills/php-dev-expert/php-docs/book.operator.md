# Sobrecarga de Operadores para Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.operator.php

---

# Sobrecarga de Operadores para Objetos

# Introdução

Esta extensão define e implementa sobrecarga de operadores para objetos.
Ela permite definir como um objeto reage quando um operador é usado nele.

Um exemplo é a criação de um objeto do tipo coleção que tem o operador de
adição sobrecarregado para permitir adicionar elementos à coleção ou adicionar
duas coleções.

Outro exemplo é a criação de uma classe de string melhorada que tem o operador de
multiplicação sobrecarregado para permitir a repetição de uma string um certo número de vezes.

- [Instalação/Configuração](operator.setup.md)
  - [Instalação](operator.installation.md)
- [Métodos Mágicos de Sobrecarga de Operadores](operator.overloading.md)

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
