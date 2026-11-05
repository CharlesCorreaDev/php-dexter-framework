# Funções de runkit7

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.runkit7.php

---

# Funções de runkit7

## Índice

- [runkit7\_constant\_add](function.runkit7-constant-add.md) — Semelhante a define(), mas permite definir também em definições de classe
- [runkit7\_constant\_redefine](function.runkit7-constant-redefine.md) — Redefine uma constante já definida
- [runkit7\_constant\_remove](function.runkit7-constant-remove.md) — Remove/exclui uma constante já definida
- [runkit7\_function\_add](function.runkit7-function-add.md) — Adiciona uma nova função, semelhante a create\_function
- [runkit7\_function\_copy](function.runkit7-function-copy.md) — Copia uma função para um novo nome de função
- [runkit7\_function\_redefine](function.runkit7-function-redefine.md) — Substitui uma definição de função por uma nova implementação
- [runkit7\_function\_remove](function.runkit7-function-remove.md) — Remove uma definição de função
- [runkit7\_function\_rename](function.runkit7-function-rename.md) — Altera o nome de uma função
- [runkit7\_import](function.runkit7-import.md) — Processa um arquivo PHP importando definições de função e classe, substituindo quando apropriado
- [runkit7\_method\_add](function.runkit7-method-add.md) — Adiciona dinamicamente um novo método a uma determinada classe
- [runkit7\_method\_copy](function.runkit7-method-copy.md) — Copia um método de uma classe para outra
- [runkit7\_method\_redefine](function.runkit7-method-redefine.md) — Altera dinamicamente o código do método fornecido
- [runkit7\_method\_remove](function.runkit7-method-remove.md) — Remove dinamicamente o método fornecido
- [runkit7\_method\_rename](function.runkit7-method-rename.md) — Altera dinamicamente o nome do método fornecido
- [runkit7\_object\_id](function.runkit7-object-id.md) — Retorna o identificador inteiro do objeto fornecido
- [runkit7\_superglobals](function.runkit7-superglobals.md) — Retorna um array indexado numericamente de superglobais registradas
- [runkit7\_zval\_inspect](function.runkit7-zval-inspect.md) — Retorna informações sobre o valor passado com tipos de dados, contagens de referência, etc.

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
