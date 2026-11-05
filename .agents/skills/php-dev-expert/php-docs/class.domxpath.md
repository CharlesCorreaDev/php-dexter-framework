# A classe DOMXPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domxpath.php

---

# A classe DOMXPath

(PHP 5, PHP 7, PHP 8)

## Introdução

Permite usar consultas XPath 1.0 em documentos HTML ou XML.

## Resumo da classe

class ****DOMXPath****
{

/\* Propriedades \*/

public
readonly
[DOMDocument](class.domdocument.md)
[$document](class.domxpath.md#domxpath.props.document);

public
[bool](language.types.boolean.md)
[$registerNodeNamespaces](class.domxpath.md#domxpath.props.registernodenamespaces);

/\* Métodos \*/

public function [\_\_construct](domxpath.construct.md)([DOMDocument](class.domdocument.md) `$document`, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**)

public function [evaluate](domxpath.evaluate.md)([string](language.types.string.md) `$expression`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$contextNode` = **`null`**, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**): [mixed](language.types.mixed.md)

public function [query](domxpath.query.md)([string](language.types.string.md) `$expression`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$contextNode` = **`null`**, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**): [mixed](language.types.mixed.md)

public static function [quote](domxpath.quote.md)([string](language.types.string.md) `$str`): [string](language.types.string.md)

public function [registerNamespace](domxpath.registernamespace.md)([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [registerPhpFunctionNS](domxpath.registerphpfunctionns.md)([string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callable`): [void](language.types.void.md)

public function [registerPhpFunctions](domxpath.registerphpfunctions.md)([string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md) `$restrict` = **`null`**): [void](language.types.void.md)

}

## Propriedades

document
:   O documento que está vinculado a este objeto.

registerNodeNamespaces
:   Quando definido como **`true`**, os namespaces no nó são registrados.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Não é mais possível clonar um objeto **DOMXPath**. Fazer isso resultará no lançamento de uma exceção. Antes do PHP 8.4.0 isso resultava em um objeto não utilizável. |
| 8.0.0 | A propriedade registerNodeNamespaces foi adicionada. |

## Índice

- [DOMXPath::\_\_construct](domxpath.construct.md) — Cria um novo objeto DOMXPath
- [DOMXPath::evaluate](domxpath.evaluate.md) — Avalia a expressão XPath fornecida e retorna um resultado tipado se possível
- [DOMXPath::query](domxpath.query.md) — Avalia a expressão XPath fornecida
- [DOMXPath::quote](domxpath.quote.md) — Envolve uma string com aspas para uso em uma expressão XPath
- [DOMXPath::registerNamespace](domxpath.registernamespace.md) — Registra o namespace com o objeto DOMXPath
- [DOMXPath::registerPhpFunctionNS](domxpath.registerphpfunctionns.md) — Registra uma função PHP como função XPath com namespace
- [DOMXPath::registerPhpFunctions](domxpath.registerphpfunctions.md) — Registra funções PHP como funções XPath

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
