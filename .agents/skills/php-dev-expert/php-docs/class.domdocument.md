# A classe DOMDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domdocument.php

---

# A classe DOMDocument

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa um documento HTML ou XML inteiro; serve como a raiz da árvore do
documento.

## Resumo da classe

class ****DOMDocument****
extends
[DOMNode](class.domnode.md)
implements
[DOMParentNode](class.domparentnode.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_DISCONNECTED](class.domnode.md#domnode.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_PRECEDING](class.domnode.md#domnode.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_FOLLOWING](class.domnode.md#domnode.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINS](class.domnode.md#domnode.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINED\_BY](class.domnode.md#domnode.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.domnode.md#domnode.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
readonly
?[DOMDocumentType](class.domdocumenttype.md)
[$doctype](class.domdocument.md#domdocument.props.doctype);

public
readonly
[DOMImplementation](class.domimplementation.md)
[$implementation](class.domdocument.md#domdocument.props.implementation);

public
readonly
?[DOMElement](class.domelement.md)
[$documentElement](class.domdocument.md#domdocument.props.documentelement);

public
readonly
?[string](language.types.string.md)
[$actualEncoding](class.domdocument.md#domdocument.props.actualencoding);

public
?[string](language.types.string.md)
[$encoding](class.domdocument.md#domdocument.props.encoding);

public
readonly
?[string](language.types.string.md)
[$xmlEncoding](class.domdocument.md#domdocument.props.xmlencoding);

public
[bool](language.types.boolean.md)
[$standalone](class.domdocument.md#domdocument.props.standalone);

public
[bool](language.types.boolean.md)
[$xmlStandalone](class.domdocument.md#domdocument.props.xmlstandalone);

public
?[string](language.types.string.md)
[$version](class.domdocument.md#domdocument.props.version);

public
?[string](language.types.string.md)
[$xmlVersion](class.domdocument.md#domdocument.props.xmlversion);

public
[bool](language.types.boolean.md)
[$strictErrorChecking](class.domdocument.md#domdocument.props.stricterrorchecking);

public
?[string](language.types.string.md)
[$documentURI](class.domdocument.md#domdocument.props.documenturi);

public
readonly
[mixed](language.types.mixed.md)
[$config](class.domdocument.md#domdocument.props.config);

public
[bool](language.types.boolean.md)
[$formatOutput](class.domdocument.md#domdocument.props.formatoutput);

public
[bool](language.types.boolean.md)
[$validateOnParse](class.domdocument.md#domdocument.props.validateonparse);

public
[bool](language.types.boolean.md)
[$resolveExternals](class.domdocument.md#domdocument.props.resolveexternals);

public
[bool](language.types.boolean.md)
[$preserveWhiteSpace](class.domdocument.md#domdocument.props.preservewhitespace);

public
[bool](language.types.boolean.md)
[$recover](class.domdocument.md#domdocument.props.recover);

public
[bool](language.types.boolean.md)
[$substituteEntities](class.domdocument.md#domdocument.props.substituteentities);

public
readonly
?[DOMElement](class.domelement.md)
[$firstElementChild](class.domdocument.md#domdocument.props.firstelementchild);

public
readonly
?[DOMElement](class.domelement.md)
[$lastElementChild](class.domdocument.md#domdocument.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.domdocument.md#domdocument.props.childelementcount);

/\* Propriedades herdadas \*/

public
readonly
[string](language.types.string.md)
[$nodeName](class.domnode.md#domnode.props.nodename);

public
?[string](language.types.string.md)
[$nodeValue](class.domnode.md#domnode.props.nodevalue);

public
readonly
[int](language.types.integer.md)
[$nodeType](class.domnode.md#domnode.props.nodetype);

public
readonly
?[DOMNode](class.domnode.md)
[$parentNode](class.domnode.md#domnode.props.parentnode);

public
readonly
?[DOMElement](class.domelement.md)
[$parentElement](class.domnode.md#domnode.props.parentelement);

public
readonly
[DOMNodeList](class.domnodelist.md)
[$childNodes](class.domnode.md#domnode.props.childnodes);

public
readonly
?[DOMNode](class.domnode.md)
[$firstChild](class.domnode.md#domnode.props.firstchild);

public
readonly
?[DOMNode](class.domnode.md)
[$lastChild](class.domnode.md#domnode.props.lastchild);

public
readonly
?[DOMNode](class.domnode.md)
[$previousSibling](class.domnode.md#domnode.props.previoussibling);

public
readonly
?[DOMNode](class.domnode.md)
[$nextSibling](class.domnode.md#domnode.props.nextsibling);

public
readonly
?[DOMNamedNodeMap](class.domnamednodemap.md)
[$attributes](class.domnode.md#domnode.props.attributes);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.domnode.md#domnode.props.isconnected);

public
readonly
?[DOMDocument](class.domdocument.md)
[$ownerDocument](class.domnode.md#domnode.props.ownerdocument);

public
readonly
?[string](language.types.string.md)
[$namespaceURI](class.domnode.md#domnode.props.namespaceuri);

public
[string](language.types.string.md)
[$prefix](class.domnode.md#domnode.props.prefix);

public
readonly
?[string](language.types.string.md)
[$localName](class.domnode.md#domnode.props.localname);

public
readonly
?[string](language.types.string.md)
[$baseURI](class.domnode.md#domnode.props.baseuri);

public
[string](language.types.string.md)
[$textContent](class.domnode.md#domnode.props.textcontent);

/\* Métodos \*/

public function [\_\_construct](domdocument.construct.md)([string](language.types.string.md) `$version` = "1.0", [string](language.types.string.md) `$encoding` = "")

public function [adoptNode](domdocument.adoptnode.md)([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [append](domdocument.append.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [createAttribute](domdocument.createattribute.md)([string](language.types.string.md) `$localName`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

public function [createAttributeNS](domdocument.createattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

public function [createCDATASection](domdocument.createcdatasection.md)([string](language.types.string.md) `$data`): [DOMCdataSection](class.domcdatasection.md)|[false](language.types.singleton.md)

public function [createComment](domdocument.createcomment.md)([string](language.types.string.md) `$data`): [DOMComment](class.domcomment.md)

public function [createDocumentFragment](domdocument.createdocumentfragment.md)(): [DOMDocumentFragment](class.domdocumentfragment.md)

public function [createElement](domdocument.createelement.md)([string](language.types.string.md) `$localName`, [string](language.types.string.md) `$value` = ""): [DOMElement](class.domelement.md)|[false](language.types.singleton.md)

public function [createElementNS](domdocument.createelementns.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value` = ""): [DOMElement](class.domelement.md)|[false](language.types.singleton.md)

public function [createEntityReference](domdocument.createentityreference.md)([string](language.types.string.md) `$name`): [DOMEntityReference](class.domentityreference.md)|[false](language.types.singleton.md)

public function [createProcessingInstruction](domdocument.createprocessinginstruction.md)([string](language.types.string.md) `$target`, [string](language.types.string.md) `$data` = ""): [DOMProcessingInstruction](class.domprocessinginstruction.md)|[false](language.types.singleton.md)

public function [createTextNode](domdocument.createtextnode.md)([string](language.types.string.md) `$data`): [DOMText](class.domtext.md)

public function [getElementById](domdocument.getelementbyid.md)([string](language.types.string.md) `$elementId`): [?](language.types.null.md)[DOMElement](class.domelement.md)

public function [getElementsByTagName](domdocument.getelementsbytagname.md)([string](language.types.string.md) `$qualifiedName`): [DOMNodeList](class.domnodelist.md)

public function [getElementsByTagNameNS](domdocument.getelementsbytagnamens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMNodeList](class.domnodelist.md)

public function [importNode](domdocument.importnode.md)([DOMNode](class.domnode.md) `$node`, [bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [load](domdocument.load.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

public function [loadHTML](domdocument.loadhtml.md)([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

public function [loadHTMLFile](domdocument.loadhtmlfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

public function [loadXML](domdocument.loadxml.md)([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

public function [normalizeDocument](domdocument.normalizedocument.md)(): [void](language.types.void.md)

public function [prepend](domdocument.prepend.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [registerNodeClass](domdocument.registernodeclass.md)([string](language.types.string.md) `$baseClass`, [?](language.types.null.md)[string](language.types.string.md) `$extendedClass`): [true](language.types.singleton.md)

public function [relaxNGValidate](domdocument.relaxngvalidate.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [relaxNGValidateSource](domdocument.relaxngvalidatesource.md)([string](language.types.string.md) `$source`): [bool](language.types.boolean.md)

public function [replaceChildren](domdocument.replacechildren.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [save](domdocument.save.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [saveHTML](domdocument.savehtml.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$node` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [saveHTMLFile](domdocument.savehtmlfile.md)([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [saveXML](domdocument.savexml.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$node` = **`null`**, [int](language.types.integer.md) `$options` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [schemaValidate](domdocument.schemavalidate.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [schemaValidateSource](domdocument.schemavalidatesource.md)([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [validate](domdocument.validate.md)(): [bool](language.types.boolean.md)

public function [xinclude](domdocument.xinclude.md)([int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

/\* Métodos herdados \*/

public function [DOMNode::appendChild](domnode.appendchild.md)([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::C14N](domnode.c14n.md)(  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [DOMNode::C14NFile](domnode.c14nfile.md)(  
    [string](language.types.string.md) `$uri`,  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [DOMNode::cloneNode](domnode.clonenode.md)([bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::compareDocumentPosition](domnode.comparedocumentposition.md)([DOMNode](class.domnode.md) `$other`): [int](language.types.integer.md)

public function [DOMNode::contains](domnode.contains.md)([DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md) `$other`): [bool](language.types.boolean.md)

public function [DOMNode::getLineNo](domnode.getlineno.md)(): [int](language.types.integer.md)

public function [DOMNode::getNodePath](domnode.getnodepath.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::getRootNode](domnode.getrootnode.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [DOMNode](class.domnode.md)

public function [DOMNode::hasAttributes](domnode.hasattributes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::hasChildNodes](domnode.haschildnodes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::insertBefore](domnode.insertbefore.md)([DOMNode](class.domnode.md) `$node`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$child` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::isDefaultNamespace](domnode.isdefaultnamespace.md)([string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [DOMNode::isEqualNode](domnode.isequalnode.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSameNode](domnode.issamenode.md)([DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSupported](domnode.issupported.md)([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

public function [DOMNode::lookupNamespaceURI](domnode.lookupnamespaceuri.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::lookupPrefix](domnode.lookupprefix.md)([string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::normalize](domnode.normalize.md)(): [void](language.types.void.md)

public function [DOMNode::removeChild](domnode.removechild.md)([DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::replaceChild](domnode.replacechild.md)([DOMNode](class.domnode.md) `$node`, [DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::\_\_sleep](domnode.sleep.md)(): [array](language.types.array.md)

public function [DOMNode::\_\_wakeup](domnode.wakeup.md)(): [void](language.types.void.md)

}

## Propriedades

actualEncoding
:   *Descontinuado a partir do PHP 8.4.0*.
    Codificação real do documento, é uma equivalente somente-leitura de
    encoding.

childElementCount
:   O número de elementos filhos.

config
:   *Descontinuado a partir do PHP 8.4.0*.
    Configuração usada quando
    [DOMDocument::normalizeDocument()](domdocument.normalizedocument.md) é
    invocada.

doctype
:   A Declaração de Tipo de Documento associada a este documento.

documentElement
:   O objeto [DOMElement](class.domelement.md) que é o primeiro
    elemento do documento. Se não encontrado, é avaliado como **`null`**.

documentURI
:   A localização do documento ou **`null`** se indefinido.

encoding
:   Codificação do documento, conforme especificado pela declaração XML. Este
    atributo não está presente na especificação final do DOM Nível 3, mas
    é a única maneira de manipular a codificação do documento XML nesta
    implementação.

firstElementChild
:   Primeiro elemento filho ou **`null`**.

formatOutput
:   Formata a saída com espaçamento e recuo adicionais.
    Isso não tem efeito se o documento foi carregado com
    preserveWhitespace habilitado.

implementation
:   O objeto [DOMImplementation](class.domimplementation.md) que manipula
    este documento.

lastElementChild
:   Último elemento filho ou **`null`**.

preserveWhiteSpace
:   Não remover espaços em branco redundantes. O padrão é **`true`**.
    Definir isso como **`false`** tem o mesmo efeito que passar **`LIBXML_NOBLANKS`**
    como `option` para [DOMDocument::load()](domdocument.load.md) etc.

recover
:   *Proprietário*. Ativa o modo de recuperação, ou seja, tenta
    analisar documentos mal formados. Este atributo não faz parte da
    especificação DOM e é específico para o libxml.

resolveExternals
:   Configure como **`true`** para carregar entidades externas de uma declaração de tipo de
    documento (doctype). Isso é útil para incluir entidades de caracteres em
    seu documento XML.

standalone
:   *Descontinuado*. Se o documento é
    ou não independente, conforme especificado pela declaração XML, corresponde a
    xmlStandalone.

strictErrorChecking
:   Lança [DOMException](class.domexception.md) em caso de erro. Padrão é **`true`**.

substituteEntities
:   *Proprietário*. Informa de entidades devem ou não
    ser subtituídas. Este atributo não faz parte da
    especificação DOM e é específico para o libxml. Padrão é **`false`**.

    **Cuidado**

    A ativação da substituição de entidades pode facilitar ataques de XML External Entity (XXE).

validateOnParse
:   Carrega e valida em relação ao DTD. Padrão é **`false`**.

    **Cuidado**

    Ativar a validação do DTD pode facilitar ataques de XML External Entity (XXE).

version
:   *Descontinuado*. Versão do XML, corresponde a
    xmlVersion.

xmlEncoding
:   Um atributo especificando, como parte da declaração XML, a
    codificação deste documento. Isso é **`null`** quando não especificado ou quando
    não é conhecido, como quando o Documento foi criado na memória.

xmlStandalone
:   Um atributo que especifica, como parte da declaração XML, se
    este documento é independente.
    Isso é **`false`** quando não especificado.
    Um documento independente é aquele que não possui declarações de marcações externas.
    Um exemplo de tal declaração de marcação é quando o DTD declara um atributo com um valor padrão.

xmlVersion
:   Um atributo que especifica, como parte da declaração XML, o
    número da versão deste documento. Se não houver declaração e se
    este documento suportar o recurso "XML", o valor é "1.0".

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | actualEncoding e config agora estão formalmente descontinuados. |
| 8.0.0 | **DOMDocument** agora implementa [DOMParentNode](class.domparentnode.md). |
| 8.0.0 | O método não implementado **DOMDocument::renameNode()** foi removido. |

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8. Use [mb\_convert\_encoding()](function.mb-convert-encoding.md), [UConverter::transcode()](uconverter.transcode.md) ou [iconv()](function.iconv.md) para lidar com outras codificações.

> **Nota**:
>
> Ao usar [json\_encode()](function.json-encode.md) em um objeto **DOMDocument**, o resultado será a codificação de um objeto vazio.

## Veja também

- [» Especificação do W3C para Documento.](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-i-Document)

## Índice

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
