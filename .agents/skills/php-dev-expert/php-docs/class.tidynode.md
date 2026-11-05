# A classe tidyNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.tidynode.php

---

# A classe [tidyNode](class.tidynode.md)

(PHP 5, PHP 7, PHP 8)

## Introdução

Um nó HTML em um arquivo HTML, conforme detectado pelo tidy.

## Resumo da classe

final
class ****tidyNode****
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$value](class.tidynode.md#tidynode.props.value);

public
readonly
[string](language.types.string.md)
[$name](class.tidynode.md#tidynode.props.name);

public
readonly
[int](language.types.integer.md)
[$type](class.tidynode.md#tidynode.props.type);

public
readonly
[int](language.types.integer.md)
[$line](class.tidynode.md#tidynode.props.line);

public
readonly
[int](language.types.integer.md)
[$column](class.tidynode.md#tidynode.props.column);

public
readonly
[bool](language.types.boolean.md)
[$proprietary](class.tidynode.md#tidynode.props.proprietary);

public
readonly
?[int](language.types.integer.md)
[$id](class.tidynode.md#tidynode.props.id);

public
readonly
?[array](language.types.array.md)
[$attribute](class.tidynode.md#tidynode.props.attribute);

public
readonly
?[array](language.types.array.md)
[$child](class.tidynode.md#tidynode.props.child);

/\* Métodos \*/

private function [\_\_construct](tidynode.construct.md)()

public function [getNextSibling](tidynode.getnextsibling.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [getParent](tidynode.getparent.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [getPreviousSibling](tidynode.getprevioussibling.md)(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

public function [hasChildren](tidynode.haschildren.md)(): [bool](language.types.boolean.md)

public function [hasSiblings](tidynode.hassiblings.md)(): [bool](language.types.boolean.md)

public function [isAsp](tidynode.isasp.md)(): [bool](language.types.boolean.md)

public function [isComment](tidynode.iscomment.md)(): [bool](language.types.boolean.md)

public function [isHtml](tidynode.ishtml.md)(): [bool](language.types.boolean.md)

public function [isJste](tidynode.isjste.md)(): [bool](language.types.boolean.md)

public function [isPhp](tidynode.isphp.md)(): [bool](language.types.boolean.md)

public function [isText](tidynode.istext.md)(): [bool](language.types.boolean.md)

}

## Propriedades

value
:   A representação HTML do nó, incluindo as tags delimitadoras.

name
:   O nome do nó HTML

type
:   O tipo do nó (uma das [constantes nodetype](tidy.constants.md#tidy.constants.nodetype), por exemplo, **`TIDY_NODETYPE_PHP`**)

line
:   O número da linha em que as tags estão localizadas no arquivo

column
:   O número da coluna em que as tags estão localizadas no arquivo

proprietary
:   Indica se o nó é uma tag proprietária

id
:   O ID do nó (uma das [constantes de tag](tidy.constants.md#tidy.constants.tag), por exemplo, **`TIDY_TAG_FRAME`**)

attribute
:   Um array de strings, representando
    os nomes dos atributos (como chaves) do nó atual.

child
:   Um array de **tidyNode**, representando
    os filhos do nó atual.

## Índice

- [tidyNode::\_\_construct](tidynode.construct.md) — Construtor privado para proibir instanciação direta
- [tidyNode::getNextSibling](tidynode.getnextsibling.md) — Retorna o próximo nó irmão do nó atual
- [tidyNode::getParent](tidynode.getparent.md) — Retorna o nó pai do nó atual
- [tidyNode::getPreviousSibling](tidynode.getprevioussibling.md) — Retorna o nó irmão anterior do nó atual
- [tidyNode::hasChildren](tidynode.haschildren.md) — Verifica se um nó tem filhos
- [tidyNode::hasSiblings](tidynode.hassiblings.md) — Verifica se um nó tem irmãos
- [tidyNode::isAsp](tidynode.isasp.md) — Verifica se este nó é ASP
- [tidyNode::isComment](tidynode.iscomment.md) — Verifica se um nó representa um comentário
- [tidyNode::isHtml](tidynode.ishtml.md) — Verifica se um nó é um nó de elemento
- [tidyNode::isJste](tidynode.isjste.md) — Verifica se este nó é JSTE
- [tidyNode::isPhp](tidynode.isphp.md) — Verifica se um nó é PHP
- [tidyNode::isText](tidynode.istext.md) — Verifica se um nó representa texto (sem marcação)

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
