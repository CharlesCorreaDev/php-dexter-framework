# Execução CQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/commonmark-cql.invoke.php

---

# CommonMark\CQL::\_\_invoke

(cmark >= 1.1.0)

CommonMark\CQL::\_\_invoke — Execução CQL

### Descrição

public function **CommonMark\CQL::\_\_invoke**([CommonMark\Node](class.commonmark-node.md) `$root`, [callable](language.types.callable.md) `$handler`)

Invoca a função CQL atual na raiz fornecida em `root`,
executando o manipulador informado em `handler` na entrada para um [CommonMark\Node](class.commonmark-node.md).

### Parâmetros

`root`
:   o nó raiz de uma árvore

`handler`
:   deve ter o protótipo:

    function **handler**([CommonMark\Node](class.commonmark-node.md) `$root`, [CommonMark\Node](class.commonmark-node.md) `$entering`): [?](language.types.null.md)[bool](language.types.boolean.md)

    - Se `handler` tiver falha ao retornar (void), ou retornar [null](language.types.null.md), a CQL continuará executando.
    - Se o manipulador reornar um valor verdadeiro, a CQL continuará executando.
    - Se o manipulador reornar um valor falso, a CQL irá parar a execução.

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
