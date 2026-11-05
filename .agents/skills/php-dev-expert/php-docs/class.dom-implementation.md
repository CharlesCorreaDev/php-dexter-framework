# A Classe Dom\Implementation

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-implementation.php

---

# A Classe Dom\Implementation

(PHP 8 >= 8.4.0)

## Introdução

Esta classe fornece vários
métodos para realizar operações independentes de qualquer
instância específica do modelo de objeto de documento.

Este é o equivalente moderno e compatível com as especificações de
[DOMImplementation](class.domimplementation.md).

## Resumo da classe

class ****Dom\Implementation****
{

/\* Métodos \*/

/\* Not documented yet \*/

}

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
