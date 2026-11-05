# Novas Classes, Enumerações e Interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.new-classes.php

---

## Novas Classes, Enumerações e Interfaces

### Núcleo do PHP

- [Deprecated](class.deprecated.md)
- [RequestParseBodyException](class.requestparsebodyexception.md)

### BCMath

- [BcMath\Number](class.bcmath-number.md)

### DBA

- [Dba\Connection](class.dba-connection.md)

### DOM

- [Dom\HTMLDocument](class.dom-htmldocument.md)
- [Dom\XMLDocument](class.dom-xmldocument.md)
- [Dom\Document](class.dom-document.md)
- [Dom\ParentNode](class.dom-parentnode.md)
- [Dom\ChildNode](class.dom-childnode.md)
- [Dom\Implementation](class.dom-implementation.md)
- [Dom\Node](class.dom-node.md)
- [Dom\NodeList](class.dom-nodelist.md)
- [Dom\NamedNodeMap](class.dom-namednodemap.md)
- [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md)
- [Dom\HTMLCollection](class.dom-htmlcollection.md)
- [Dom\AdjacentPosition](enum.dom-adjacentposition.md)
- [Dom\Element](class.dom-element.md)
- [Dom\HTMLElement](class.dom-htmlelement.md)
- [Dom\Attr](class.dom-attr.md)
- [Dom\CharacterData](class.dom-characterdata.md)
- [Dom\Text](class.dom-text.md)
- [Dom\CDATASection](class.dom-cdatasection.md)
- [Dom\ProcessingInstruction](class.dom-processinginstruction.md)
- [Dom\Comment](class.dom-comment.md)
- [Dom\DocumentType](class.dom-documenttype.md)
- [Dom\DocumentFragment](class.dom-documentfragment.md)
- [Dom\Entity](class.dom-entity.md)
- [Dom\EntityReference](class.dom-entityreference.md)
- [Dom\Notation](class.dom-notation.md)
- [Dom\TokenList](class.dom-tokenlist.md)
- [Dom\NamespaceInfo](class.dom-namespaceinfo.md)
- [Dom\XPath](class.dom-xpath.md)

### ODBC

- [Odbc\Connection](class.odbc-connection.md)
- [Odbc\Result](class.odbc-result.md)

### PCNTL

- [Pcntl\QosClass](enum.pcntl-qosclass.md) (somente macOS)

### PDO\_DBLIB

- [Pdo\DbLib](class.pdo-dblib.md)

### PDO\_FIREBIRD

- [Pdo\Firebird](class.pdo-firebird.md)

### PDO\_MYSQL

- [Pdo\Mysql](class.pdo-mysql.md)

### PDO\_ODBC

- [Pdo\Odbc](class.pdo-odbc.md)

### PDO\_PGSQL

- [Pdo\Pgsql](class.pdo-pgsql.md)

### PDO\_SQLITE

- [Pdo\Sqlite](class.pdo-sqlite.md)

### Reflection

- [ReflectionConstant](class.reflectionconstant.md)

### SOAP

- [Soap\Url](class.soap-url.md)
- [Soap\Sdl](class.soap-sdl.md)

### Standard

- [RoundingMode](enum.roundingmode.md)
- [StreamBucket](class.streambucket.md)

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
