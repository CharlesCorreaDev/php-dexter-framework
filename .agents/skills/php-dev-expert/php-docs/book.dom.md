# Document Object Model

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.dom.php

---

# Document Object Model

# Introdução

A extensão DOM permite operar em documentos XML e HTML através da API
DOM diretamente do PHP.

> **Nota**:
>
> A extensão DOM usa codificação UTF-8. Use [mb\_convert\_encoding()](function.mb-convert-encoding.md), [UConverter::transcode()](uconverter.transcode.md) ou [iconv()](function.iconv.md) para lidar com outras codificações.

- [Instalação/Configuração](dom.setup.md)
  - [Dependências](dom.requirements.md)
  - [Instalação](dom.installation.md)
- [Constantes predefinidas](dom.constants.md)
- [Examples](dom.examples.md)
- [DOMAttr](class.domattr.md) — Classe DOMAttr
  - [DOMAttr::\_\_construct](domattr.construct.md) — Cria um novo objeto DOMAttr
  - [DOMAttr::isId](domattr.isid.md) — Verifica se o atributo é um ID definido
- [DOMCdataSection](class.domcdatasection.md) — A classe DOMCdataSection
  - [DOMCdataSection::\_\_construct](domcdatasection.construct.md) — Constrói um novo objeto DOMCdataSection
- [DOMCharacterData](class.domcharacterdata.md) — A classe DOMCharacterData
  - [DOMCharacterData::after](domcharacterdata.after.md) — Adiciona nós após os dados de caracteres
  - [DOMCharacterData::appendData](domcharacterdata.appenddata.md) — Acrescenta a string ao final dos dados de caractere do nó
  - [DOMCharacterData::before](domcharacterdata.before.md) — Adiciona nós antes dos dados de caracteres
  - [DOMCharacterData::deleteData](domcharacterdata.deletedata.md) — Remove uma faixa de caracteres dos dados de caracteres
  - [DOMCharacterData::insertData](domcharacterdata.insertdata.md) — Insere uma string na posição de ponto de código UTF-8 especificada
  - [DOMCharacterData::remove](domcharacterdata.remove.md) — Remove o nó de dados de caractere
  - [DOMCharacterData::replaceData](domcharacterdata.replacedata.md) — Substitui uma substring dentro dos dados de caracteres
  - [DOMCharacterData::replaceWith](domcharacterdata.replacewith.md) — Substitui os dados de caracteres por novos nós
  - [DOMCharacterData::substringData](domcharacterdata.substringdata.md) — Extrai uma faixa de dados dos dados de caracteres
- [DOMChildNode](class.domchildnode.md) — A interface DOMChildNode
  - [DOMChildNode::after](domchildnode.after.md) — Adiciona nós após o nó
  - [DOMChildNode::before](domchildnode.before.md) — Adiciona nós antes do nó
  - [DOMChildNode::remove](domchildnode.remove.md) — Remove o nó
  - [DOMChildNode::replaceWith](domchildnode.replacewith.md) — Substitui o nó por novos nós
- [DOMComment](class.domcomment.md) — A classe DOMComment
  - [DOMComment::\_\_construct](domcomment.construct.md) — Cria um novo objeto DOMComment
- [DOMDocument](class.domdocument.md) — A classe DOMDocument
  - [DOMDocument::adoptNode](domdocument.adoptnode.md) — Transfere um nó de outro documento
  - [DOMDocument::append](domdocument.append.md) — Adiciona nós após o último nó filho
  - [DOMDocument::\_\_construct](domdocument.construct.md) — Cria um novo objeto DOMDocument
  - [DOMDocument::createAttribute](domdocument.createattribute.md) — Cria um novo attribute
  - [DOMDocument::createAttributeNS](domdocument.createattributens.md) — Cria um novo nó de atributo com um namespace associado
  - [DOMDocument::createCDATASection](domdocument.createcdatasection.md) — Cria um novo nó de CDATA
  - [DOMDocument::createComment](domdocument.createcomment.md) — Cria novo nó de comentárioe
  - [DOMDocument::createDocumentFragment](domdocument.createdocumentfragment.md) — Cria novo fragmento de documento
  - [DOMDocument::createElement](domdocument.createelement.md) — Cria novo nó de elemento
  - [DOMDocument::createElementNS](domdocument.createelementns.md) — Cria novo nó de elemento com um namespace associado
  - [DOMDocument::createEntityReference](domdocument.createentityreference.md) — Cria novo nó de referência de entidade
  - [DOMDocument::createProcessingInstruction](domdocument.createprocessinginstruction.md) — Cria novo nó PI (Processing Instruction)
  - [DOMDocument::createTextNode](domdocument.createtextnode.md) — Cria novo nó de texto
  - [DOMDocument::getElementById](domdocument.getelementbyid.md) — Procura por um elemento com um determinado ID
  - [DOMDocument::getElementsByTagName](domdocument.getelementsbytagname.md) — Procura por todos os elementos com uma determinada tag name local
  - [DOMDocument::getElementsByTagNameNS](domdocument.getelementsbytagnamens.md) — Procura por todos os elementos com uma determinada tag name em um namespace específico
  - [DOMDocument::importNode](domdocument.importnode.md) — Importa um nó para o documento atual
  - [DOMDocument::load](domdocument.load.md) — Carrega XML de um arquivo
  - [DOMDocument::loadHTML](domdocument.loadhtml.md) — Carrega HTML a partir de uma string
  - [DOMDocument::loadHTMLFile](domdocument.loadhtmlfile.md) — Carrega HTML de um arquivo
  - [DOMDocument::loadXML](domdocument.loadxml.md) — Carrega XML a partir de uma string
  - [DOMDocument::normalizeDocument](domdocument.normalizedocument.md) — Normaliza o documento
  - [DOMDocument::prepend](domdocument.prepend.md) — Adiciona nós antes do primeiro nó filho
  - [DOMDocument::registerNodeClass](domdocument.registernodeclass.md) — Registra uma classe estendida usada para criar um tipo de nó base
  - [DOMDocument::relaxNGValidate](domdocument.relaxngvalidate.md) — Realiza a validação relaxNG no documento
  - [DOMDocument::relaxNGValidateSource](domdocument.relaxngvalidatesource.md) — Realiza a validação relaxNG no documento
  - [DOMDocument::replaceChildren](domdocument.replacechildren.md) — Substitui filhos no documento
  - [DOMDocument::save](domdocument.save.md) — Grava a árvore XML interna de volta em um arquivo
  - [DOMDocument::saveHTML](domdocument.savehtml.md) — Despeja o documento interno em uma string usando formatação HTML
  - [DOMDocument::saveHTMLFile](domdocument.savehtmlfile.md) — Despeja o documento interno em um arquivo usando formatação HTML
  - [DOMDocument::saveXML](domdocument.savexml.md) — Despeja a árvore XML interna de volta em uma string
  - [DOMDocument::schemaValidate](domdocument.schemavalidate.md) — Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.
  - [DOMDocument::schemaValidateSource](domdocument.schemavalidatesource.md) — Valida um documento com base em um esquema
  - [DOMDocument::validate](domdocument.validate.md) — Valida o documento com base em seu DTD
  - [DOMDocument::xinclude](domdocument.xinclude.md) — Substitui XIncludes em um objeto DOMDocument
- [DOMDocumentFragment](class.domdocumentfragment.md) — A classe DOMDocumentFragment
  - [DOMDocumentFragment::append](domdocumentfragment.append.md) — Acrescenta nós após o último nó filho
  - [DOMDocumentFragment::appendXML](domdocumentfragment.appendxml.md) — Anexa dados XML brutos
  - [DOMDocumentFragment::\_\_construct](domdocumentfragment.construct.md) — Constrói um objeto DOMDocumentFragment
  - [DOMDocumentFragment::prepend](domdocumentfragment.prepend.md) — Insere nós antes do primeiro nó filho
  - [DOMDocumentFragment::replaceChildren](domdocumentfragment.replacechildren.md) — Substitui filhos no fragmento
- [DOMDocumentType](class.domdocumenttype.md) — A classe DOMDocumentType
- [DOMElement](class.domelement.md) — A classe DOMElement
  - [DOMElement::after](domelement.after.md) — Adiciona nós após o elemento
  - [DOMElement::append](domelement.append.md) — Adiciona nós após o último nó filho
  - [DOMElement::before](domelement.before.md) — Adiciona nós antes do elemento
  - [DOMElement::\_\_construct](domelement.construct.md) — Cria um novo objeto DOMElement
  - [DOMElement::getAttribute](domelement.getattribute.md) — Retorna o valor do atributo
  - [DOMElement::getAttributeNames](domelement.getattributenames.md) — Obtém nomes de atributos
  - [DOMElement::getAttributeNode](domelement.getattributenode.md) — Retorna o nó do atributo
  - [DOMElement::getAttributeNodeNS](domelement.getattributenodens.md) — Retorna o nó do atributo
  - [DOMElement::getAttributeNS](domelement.getattributens.md) — Retorna o valor do atributo
  - [DOMElement::getElementsByTagName](domelement.getelementsbytagname.md) — Obtém elementos pelo nome da tag
  - [DOMElement::getElementsByTagNameNS](domelement.getelementsbytagnamens.md) — Obtém elementos por namespaceURI e localName
  - [DOMElement::hasAttribute](domelement.hasattribute.md) — Verifica se o atributo existe
  - [DOMElement::hasAttributeNS](domelement.hasattributens.md) — Verifica se o atributo existe
  - [DOMElement::insertAdjacentElement](domelement.insertadjacentelement.md) — Insere um elemento adjacente
  - [DOMElement::insertAdjacentText](domelement.insertadjacenttext.md) — Insere texto adjacente
  - [DOMElement::prepend](domelement.prepend.md) — Adiciona nós antes do primeiro nó filho
  - [DOMElement::remove](domelement.remove.md) — Remove o elemento
  - [DOMElement::removeAttribute](domelement.removeattribute.md) — Remove atributo
  - [DOMElement::removeAttributeNode](domelement.removeattributenode.md) — Remove atributo
  - [DOMElement::removeAttributeNS](domelement.removeattributens.md) — Remove atributo
  - [DOMElement::replaceChildren](domelement.replacechildren.md) — Substitui filhos no elemento
  - [DOMElement::replaceWith](domelement.replacewith.md) — Substitui o elemento por novos nodes
  - [DOMElement::setAttribute](domelement.setattribute.md) — Adiciona ou modifica um atributo existente
  - [DOMElement::setAttributeNode](domelement.setattributenode.md) — Adiciona um novo nó de atributo ao elemento
  - [DOMElement::setAttributeNodeNS](domelement.setattributenodens.md) — Adiciona um novo nó de atributo ao elemento
  - [DOMElement::setAttributeNS](domelement.setattributens.md) — Adiciona um novo atributo
  - [DOMElement::setIdAttribute](domelement.setidattribute.md) — Declara que o atributo especificado pelo nome é do tipo ID
  - [DOMElement::setIdAttributeNode](domelement.setidattributenode.md) — Declara que o atributo especificado pelo nó é do tipo ID
  - [DOMElement::setIdAttributeNS](domelement.setidattributens.md) — Declara que o atributo especificado pelo nome local e pelo URI do namespace é do tipo ID
  - [DOMElement::toggleAttribute](domelement.toggleattribute.md) — Alterna atributo
- [DOMEntity](class.domentity.md) — A classe DOMEntity
- [DOMEntityReference](class.domentityreference.md) — A classe DOMEntityReference
  - [DOMEntityReference::\_\_construct](domentityreference.construct.md) — Cria um novo objeto DOMEntityReference
- [DOMException](class.domexception.md) — A classe DOMException / Dom\Exception
- [DOMImplementation](class.domimplementation.md) — A classe DOMImplementation
  - [DOMImplementation::\_\_construct](domimplementation.construct.md) — Cria um novo objeto DOMImplementation
  - [DOMImplementation::createDocument](domimplementation.createdocument.md) — Cria um objeto DOMDocument do tipo especificado com seu elemento de documento
  - [DOMImplementation::createDocumentType](domimplementation.createdocumenttype.md) — Cria um objeto DOMDocumentType vazio
  - [DOMImplementation::hasFeature](domimplementation.hasfeature.md) — Testa se a implementação DOM implementa um recurso específico
- [DOMNamedNodeMap](class.domnamednodemap.md) — A classe DOMNamedNodeMap
  - [DOMNamedNodeMap::count](domnamednodemap.count.md) — Obtém o número de nós no mapa
  - [DOMNamedNodeMap::getIterator](domnamednodemap.getiterator.md) — Recupera um iterador externo
  - [DOMNamedNodeMap::getNamedItem](domnamednodemap.getnameditem.md) — Recupera um nó especificado pelo nome
  - [DOMNamedNodeMap::getNamedItemNS](domnamednodemap.getnameditemns.md) — Recupera um nó especificado pelo nome local e URI do namespace
  - [DOMNamedNodeMap::item](domnamednodemap.item.md) — Recupera um nó especificado pelo índice
- [DOMNameSpaceNode](class.domnamespacenode.md) — A classe DOMNameSpaceNode
  - [DOMNameSpaceNode::\_\_sleep](domnamespacenode.sleep.md) — Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse
  - [DOMNameSpaceNode::\_\_wakeup](domnamespacenode.wakeup.md) — Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse
- [DOMNode](class.domnode.md) — A classe DOMNode
  - [DOMNode::appendChild](domnode.appendchild.md) — Adiciona um novo filho ao final dos filhos
  - [DOMNode::C14N](domnode.c14n.md) — Canonicaliza nós para uma string
  - [DOMNode::C14NFile](domnode.c14nfile.md) — Canonicaliza nós para um arquivo
  - [DOMNode::cloneNode](domnode.clonenode.md) — Clona um nó
  - [DOMNode::compareDocumentPosition](domnode.comparedocumentposition.md) — Compara a posição de dois nós
  - [DOMNode::contains](domnode.contains.md) — Verifica se o nó contém outro nó
  - [DOMNode::getLineNo](domnode.getlineno.md) — Obtém o número da linha para um nó
  - [DOMNode::getNodePath](domnode.getnodepath.md) — Obtém um XPath para um nó
  - [DOMNode::getRootNode](domnode.getrootnode.md) — Obtém o nó raiz
  - [DOMNode::hasAttributes](domnode.hasattributes.md) — Verifica se o nó possui atributos
  - [DOMNode::hasChildNodes](domnode.haschildnodes.md) — Verifica se o nó possui filhos
  - [DOMNode::insertBefore](domnode.insertbefore.md) — Adiciona um novo filho antes de um nó de referência
  - [DOMNode::isDefaultNamespace](domnode.isdefaultnamespace.md) — Verifica se o namespaceURI especificado é o namespace padrão ou não
  - [DOMNode::isEqualNode](domnode.isequalnode.md) — Verifica se ambos os nós são iguais
  - [DOMNode::isSameNode](domnode.issamenode.md) — Indica se dois nós são o mesmo nó
  - [DOMNode::isSupported](domnode.issupported.md) — Verifica se o recurso é suportado para a versão especificada
  - [DOMNode::lookupNamespaceURI](domnode.lookupnamespaceuri.md) — Obtém o URI do namespace do nó com base no prefixo
  - [DOMNode::lookupPrefix](domnode.lookupprefix.md) — Obtém o prefixo do namespace do nó com base no URI do namespace
  - [DOMNode::normalize](domnode.normalize.md) — Normaliza o nó
  - [DOMNode::removeChild](domnode.removechild.md) — Remove um filho da lista de filhos
  - [DOMNode::replaceChild](domnode.replacechild.md) — Substitui um filho
  - [DOMNode::\_\_sleep](domnode.sleep.md) — Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse
  - [DOMNode::\_\_wakeup](domnode.wakeup.md) — Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse
- [DOMNodeList](class.domnodelist.md) — A classe DOMNodeList
  - [DOMNodeList::count](domnodelist.count.md) — Obtém o número de nós na lista
  - [DOMNodeList::getIterator](domnodelist.getiterator.md) — Retorna um iterador externo
  - [DOMNodeList::item](domnodelist.item.md) — Recupera um nó especificado pelo índice
- [DOMNotation](class.domnotation.md) — A classe DOMNotation
- [DOMParentNode](class.domparentnode.md) — A interface DOMParentNode
  - [DOMParentNode::append](domparentnode.append.md) — Acrescenta nós após o último nó filho
  - [DOMParentNode::prepend](domparentnode.prepend.md) — Insere nós antes do primeiro nó filho
  - [DOMParentNode::replaceChildren](domparentnode.replacechildren.md) — Substitui filhos no nó
- [DOMProcessingInstruction](class.domprocessinginstruction.md) — A classe DOMProcessingInstruction
  - [DOMProcessingInstruction::\_\_construct](domprocessinginstruction.construct.md) — Cria um novo objeto DOMProcessingInstruction
- [DOMText](class.domtext.md) — A classe DOMText
  - [DOMText::\_\_construct](domtext.construct.md) — Cria um novo objeto DOMText
  - [DOMText::isElementContentWhitespace](domtext.iselementcontentwhitespace.md) — Retorna se este nó de texto contém espaços em branco no conteúdo do elemento
  - [DOMText::isWhitespaceInElementContent](domtext.iswhitespaceinelementcontent.md) — Indica se este nó de texto contém espaços em branco
  - [DOMText::splitText](domtext.splittext.md) — Quebra este nó em dois nós no deslocamento especificado
- [DOMXPath](class.domxpath.md) — A classe DOMXPath
  - [DOMXPath::\_\_construct](domxpath.construct.md) — Cria um novo objeto DOMXPath
  - [DOMXPath::evaluate](domxpath.evaluate.md) — Avalia a expressão XPath fornecida e retorna um resultado tipado se possível
  - [DOMXPath::query](domxpath.query.md) — Avalia a expressão XPath fornecida
  - [DOMXPath::quote](domxpath.quote.md) — Envolve uma string com aspas para uso em uma expressão XPath
  - [DOMXPath::registerNamespace](domxpath.registernamespace.md) — Registra o namespace com o objeto DOMXPath
  - [DOMXPath::registerPhpFunctionNS](domxpath.registerphpfunctionns.md) — Registra uma função PHP como função XPath com namespace
  - [DOMXPath::registerPhpFunctions](domxpath.registerphpfunctions.md) — Registra funções PHP como funções XPath
- [Dom\AdjacentPosition](enum.dom-adjacentposition.md) — A Enumeração Dom\AdjacentPosition
- [Dom\Attr](class.dom-attr.md) — A Classe Dom\Attr
  - [Dom\Attr::isId](dom-attr.isid.md) — Verifica se o atributo é um ID definido
  - [Dom\Attr::rename](dom-attr.rename.md) — Altera o nome qualificado ou namespace de um atributo
- [Dom\CDATASection](class.dom-cdatasection.md) — A Classe Dom\CDATASection
- [Dom\CharacterData](class.dom-characterdata.md) — A Classe Dom\CharacterData
  - [Dom\CharacterData::after](dom-characterdata.after.md) — Adiciona nós após os dados de caracteres
  - [Dom\CharacterData::appendData](dom-characterdata.appenddata.md) — Acrescenta a string ao final dos dados de caractere do nó
  - [Dom\CharacterData::before](dom-characterdata.before.md) — Adiciona nós antes dos dados de caracteres
  - [Dom\CharacterData::deleteData](dom-characterdata.deletedata.md) — Remove uma faixa de caracteres dos dados de caracteres
  - [Dom\CharacterData::insertData](dom-characterdata.insertdata.md) — Insere uma string na posição de ponto de código UTF-8 especificada
  - [Dom\CharacterData::remove](dom-characterdata.remove.md) — Remove o nó de dados de caractere
  - [Dom\CharacterData::replaceData](dom-characterdata.replacedata.md) — Substitui uma substring dentro dos dados de caracteres
  - [Dom\CharacterData::replaceWith](dom-characterdata.replacewith.md) — Substitui os dados de caracteres por novos nós
  - [Dom\CharacterData::substringData](dom-characterdata.substringdata.md) — Extrai uma faixa de dados dos dados de caracteres
- [Dom\ChildNode](class.dom-childnode.md) — A Interface Dom\ChildNode
  - [Dom\ChildNode::after](dom-childnode.after.md) — Adiciona nós após o nó
  - [Dom\ChildNode::before](dom-childnode.before.md) — Adiciona nós antes do nó
  - [Dom\ChildNode::remove](dom-childnode.remove.md) — Remove o nó
  - [Dom\ChildNode::replaceWith](dom-childnode.replacewith.md) — Substitui o nó por novos nós
- [Dom\Comment](class.dom-comment.md) — A Classe Dom\Comment
- [Dom\Document](class.dom-document.md) — A Classe Dom\Document
- [Dom\DocumentFragment](class.dom-documentfragment.md) — A Classe Dom\DocumentFragment
- [Dom\DocumentType](class.dom-documenttype.md) — A Classe Dom\DocumentType
- [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md) — A Classe Dom\DtdNamedNodeMap
- [Dom\Element](class.dom-element.md) — A Classe Dom\Element
- [Dom\Entity](class.dom-entity.md) — A Classe Dom\Entity
- [Dom\EntityReference](class.dom-entityreference.md) — A Classe Dom\EntityReference
- [Dom\HTMLCollection](class.dom-htmlcollection.md) — A Classe Dom\HTMLCollection
- [Dom\HTMLDocument](class.dom-htmldocument.md) — A Classe Dom\HTMLDocument
  - [Dom\HTMLDocument::createEmpty](dom-htmldocument.createempty.md) — Cria um documento HTML vazio
  - [Dom\HTMLDocument::createFromFile](dom-htmldocument.createfromfile.md) — Analisa um documento HTML a partir de um arquivo
  - [Dom\HTMLDocument::createFromString](dom-htmldocument.createfromstring.md) — Analisa um documento HTML a partir de uma string
  - [Dom\HTMLDocument::saveHtml](dom-htmldocument.savehtml.md) — Serializa o documento como uma string HTML
  - [Dom\HTMLDocument::saveHtmlFile](dom-htmldocument.savehtmlfile.md) — Serializa o documento como um arquivo HTML
  - [Dom\HTMLDocument::saveXml](dom-htmldocument.savexml.md) — Serializa o documento como uma string XML
  - [Dom\HTMLDocument::saveXmlFile](dom-htmldocument.savexmlfile.md) — Serializa o documento como um arquivo XML
- [Dom\HTMLElement](class.dom-htmlelement.md) — A Classe Dom\HTMLElement
- [Dom\Implementation](class.dom-implementation.md) — A Classe Dom\Implementation
- [Dom\NamedNodeMap](class.dom-namednodemap.md) — A Classe Dom\NamedNodeMap
- [Dom\NamespaceInfo](class.dom-namespaceinfo.md) — A Classe Dom\NamespaceInfo
- [Dom\Node](class.dom-node.md) — A Classe Dom\Node
- [Dom\NodeList](class.dom-nodelist.md) — A Classe Dom\NodeList
- [Dom\Notation](class.dom-notation.md) — A Classe Dom\Notation
- [Dom\ParentNode](class.dom-parentnode.md) — A Interface Dom\ParentNode
  - [Dom\ParentNode::append](dom-parentnode.append.md) — Acrescenta nós após o último nó filho
  - [Dom\ParentNode::prepend](dom-parentnode.prepend.md) — Insere nós antes do primeiro nó filho
  - [Dom\ParentNode::querySelector](dom-parentnode.queryselector.md) — Retorna o primeiro elemento que corresponde aos seletores CSS
  - [Dom\ParentNode::querySelectorAll](dom-parentnode.queryselectorall.md) — Retorna uma coleção de elementos que correspondem aos seletores CSS
  - [Dom\ParentNode::replaceChildren](dom-parentnode.replacechildren.md) — Substitui filhos no nó
- [Dom\ProcessingInstruction](class.dom-processinginstruction.md) — A Classe Dom\ProcessingInstruction
- [Dom\Text](class.dom-text.md) — A Classe Dom\Text
  - [Dom\Text::splitText](dom-text.splittext.md) — Quebra este nó em dois nós no deslocamento especificado
- [Dom\TokenList](class.dom-tokenlist.md) — A Classe Dom\TokenList
  - [Dom\TokenList::add](dom-tokenlist.add.md) — Adiciona os tokens informados à lista
  - [Dom\TokenList::contains](dom-tokenlist.contains.md) — Informa se a lista contém um token específico
  - [Dom\TokenList::count](dom-tokenlist.count.md) — Retorna o número de tokens na lista
  - [Dom\TokenList::getIterator](dom-tokenlist.getiterator.md) — Retorna um iterador sobre a lista de tokens
  - [Dom\TokenList::item](dom-tokenlist.item.md) — Retorna um token da lista
  - [Dom\TokenList::remove](dom-tokenlist.remove.md) — Remove da lista os tokens informados
  - [Dom\TokenList::replace](dom-tokenlist.replace.md) — Substitui um token por outro na lista
  - [Dom\TokenList::supports](dom-tokenlist.supports.md) — Informa se o token informado é suportado
  - [Dom\TokenList::toggle](dom-tokenlist.toggle.md) — Alterna a presença de um token na lista
- [Dom\XMLDocument](class.dom-xmldocument.md) — A Classe Dom\XMLDocument
- [Dom\XPath](class.dom-xpath.md) — A Classe Dom\XPath
- [DOM Funções](ref.dom.md)
  - [dom\_import\_simplexml](function.dom-import-simplexml.md) — Obtém um objeto DOMAttr ou DOMElement a partir de um
    objeto SimpleXMLElement
  - [Dom\import\_simplexml](function.dom-ns-import-simplexml.md) — Obtém um objeto Dom\Attr ou Dom\Element a partir de um
    objeto SimpleXMLElement

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
