# SimpleXML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.simplexml.php

---

# SimpleXML

# Introdução

A extensão SimpleXML provê um conjunto de ferramentas fáceis e de simples
utilização para converter XML em objetos que podem ser processados
com seletores de propriedades e iteradores de arrays.

- [Instalação/Configuração](simplexml.setup.md)
  - [Dependências](simplexml.requirements.md)
  - [Instalação](simplexml.installation.md)
- [Examples](simplexml.examples.md)
  - [Uso Básico de SimpleXML](simplexml.examples-basic.md)
  - [Lidando com erros XML](simplexml.examples-errors.md)
- [SimpleXMLElement](class.simplexmlelement.md) — A classe SimpleXMLElement
  - [SimpleXMLElement::addAttribute](simplexmlelement.addattribute.md) — Adiciona um atributo a elemento SimpleXML
  - [SimpleXMLElement::addChild](simplexmlelement.addchild.md) — Adiciona um elemento filho à um nó XML
  - [SimpleXMLElement::asXML](simplexmlelement.asxml.md) — Retorna uma string XML bem formada (well-formed) baseada em um elemento SimpleXML
  - [SimpleXMLElement::attributes](simplexmlelement.attributes.md) — Identifica um atributo de um elemento
  - [SimpleXMLElement::children](simplexmlelement.children.md) — Encontra os nós filhos de um dado nó
  - [SimpleXMLElement::\_\_construct](simplexmlelement.construct.md) — Cria um novo objeto SimpleXMLElement
  - [SimpleXMLElement::count](simplexmlelement.count.md) — Conta os filhos de um elemento
  - [SimpleXMLElement::current](simplexmlelement.current.md) — Retorna o elemento atual
  - [SimpleXMLElement::getDocNamespaces](simplexmlelement.getdocnamespaces.md) — Retorna um namespace declarado no documento
  - [SimpleXMLElement::getName](simplexmlelement.getname.md) — Obtém o nome de um elemento XML
  - [SimpleXMLElement::getNamespaces](simplexmlelement.getnamespaces.md) — Retorna os namespaces utilizados no documento
  - [SimpleXMLElement::getChildren](simplexmlelement.getchildren.md) — Retorna os sub-elementos do elemento atual
  - [SimpleXMLElement::hasChildren](simplexmlelement.haschildren.md) — Verifica se o elemento atual tem sub-elementos
  - [SimpleXMLElement::key](simplexmlelement.key.md) — Retorna a chave atual
  - [SimpleXMLElement::next](simplexmlelement.next.md) — Passa para o próximo elemento
  - [SimpleXMLElement::registerXPathNamespace](simplexmlelement.registerxpathnamespace.md) — Cria um prefixo/namespace de contexto para a próxima consulta XPath
  - [SimpleXMLElement::rewind](simplexmlelement.rewind.md) — Retrocede ao primeiro elemento
  - [SimpleXMLElement::saveXML](simplexmlelement.savexml.md) — Sinônimo de SimpleXMLElement::asXML
  - [SimpleXMLElement::\_\_toString](simplexmlelement.tostring.md) — Retorna o conteúdo como uma string
  - [SimpleXMLElement::valid](simplexmlelement.valid.md) — Verifica se o elemento atual é válido
  - [SimpleXMLElement::xpath](simplexmlelement.xpath.md) — Executa uma consulta XPath em dados XML
- [SimpleXMLIterator](class.simplexmliterator.md) — A classe SimpleXMLIterator
- [Funções da SimpleXML](ref.simplexml.md)
  - [simplexml\_import\_dom](function.simplexml-import-dom.md) — Obtém um objeto SimpleXMLElement a partir de um nó XML ou HTML
  - [simplexml\_load\_file](function.simplexml-load-file.md) — Interpreta um arquivo XML e o transforma em um objeto
  - [simplexml\_load\_string](function.simplexml-load-string.md) — Interpreta uma string XML e a transforma em um objeto

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
