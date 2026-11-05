# A classe CommonMark\CQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.commonmark-cql.php

---

# A classe CommonMark\CQL

(cmark >= 1.1.0)

## Introdução

CommonMark Query Language (CQL) é uma DSL para descrever como navegar por uma árvore de Nós CommonMark implementada como um analisador e compilador para um pequeno conjunto de instruções e uma máquina virtual para executar essas instruções.

##### Paths:

Em sua forma mais simplista, uma consulta CQL combina os caminhos a seguir e o caminho `/` para descrever como navegar em uma árvore:

- firstChild
- lastChild
- previous
- next
- parent

Por exemplo, `/firstChild/lastChild` navegaria para o último nó filho (lastChild) do primeiro nó filho (firstChild).

##### Laços de repetição

A CQL pode ser instruída para fazer laços de repetição, por exemplo passando pelos filhos ou irmãos de um nó em particular, usando o caminho `children` (filhos), ou `siblings` (irmãos). Por exemplo, `/firstChild/children` navegará para todos os filhos do primeiro nó filho.

##### Sub-consultas

A CQL pode ser instruída sobre como navegar usando uma sub-consulta como `[/firstChild]`. Por exemplo, `/firstChild/children[/firstChild]` navegará até o primeiro nó filho de todos os filhos do primeiro nó filho.

##### Restrições nos Laços

Durante um laço de repetição, a CQL pode ser instruída a restringir o caminho percorrido a nós de um determinado tipo. Por exemplo, `/children(BlockQuote)` navegará até os filhos de um nó onde o tipo seja `BlockQuote`. Os tipos a seguir são reconhecidos (insensíveis a maiúsculas/minúsculas):

- BlockQuote
- List
- Item
- CodeBlock
- HtmlBlock
- CustomBlock
- Paragraph
- Heading
- ThematicBreak
- Text
- SoftBreak
- LineBreak
- Code
- HtmlInline
- CustomInline
- Emphasis
- Strong
- Link
- Image

Tipos podem ser usados como uma união, por exemplo, `/children(BlockQuote|List)` navegará até os filhos de um nó onde o tipo seja `BlockQuote` ou `List`. Tipos ou uniões de tipos também podem ser negados. Por exemplo, `/children(~BlockQuote)` navegará até os filhos de um nó onde o tipo não seja `BlockQuote`, e `/children(~BlockQuote|Paragraph)` navegará até os filhos de um nó onde o tipo não seja `BlockQuote` ou `Paragraph`.

##### Restrições em Caminhos

A CQL pode ser instruída a criar um laço para navegar até um nó de um determinado tipo, em um determinado caminho. Por exemplo, `/firstChild(BlockQuote)` navegará até o primeiro nó filho onde o tipo seja `BlockQuote`. Observe que como em outros laços para `children` e `siblings`, este tipo de caminho só pode ser seguido por uma sub-consulta.

##### Notas de Implementação

Mesmo que a CQL tenha sido implementada como parte da extensão PHP CommonMark, ela é separada do PHP e não usa a máquina virtual ou a representação interna de valores do PHP.

## Resumo da classe

class **CommonMark\CQL**
{

/\* Construtor \*/

public function [\_\_construct](commonmark-cql.construct.md)([string](language.types.string.md) `$query`)

/\* Métodos \*/

public function [\_\_invoke](commonmark-cql.invoke.md)([CommonMark\Node](class.commonmark-node.md) `$root`, [callable](language.types.callable.md) `$handler`)

}

## Índice

- [CommonMark\CQL::\_\_construct](commonmark-cql.construct.md) — Construção CQL
- [CommonMark\CQL::\_\_invoke](commonmark-cql.invoke.md) — Execução CQL

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
