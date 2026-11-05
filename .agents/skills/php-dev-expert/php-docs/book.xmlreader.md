# XMLReader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xmlreader.php

---

# XMLReader

# Introdução

A extensão XMLReader é um analisador XML Pull. O leitor atua como um
cursor que avança no fluxo de documentos e para em cada nó ao longo
do caminho.

## Codificação

É importante observar que, internamente, o libxml usa a codificação UTF-8 e,
como tal, a codificação do conteúdo recuperado sempre será em
codificação UTF-8.

- [Instalação/Configuração](xmlreader.setup.md)
  - [Dependências](xmlreader.requirements.md)
  - [Instalação](xmlreader.installation.md)
- [XMLReader](class.xmlreader.md) — A classe XMLReader
  - [XMLReader::close](xmlreader.close.md) — Fecha a entrada XMLReader
  - [XMLReader::expand](xmlreader.expand.md) — Retorna uma cópia do nó atual como um objeto DOM
  - [XMLReader::fromStream](xmlreader.fromstream.md) — Cria um XMLReader a partir de um fluxo para leitura
  - [XMLReader::fromString](xmlreader.fromstring.md) — Cria um XMLReader a partir de uma string XML
  - [XMLReader::fromUri](xmlreader.fromuri.md) — Cria um XMLReader a partir de um URI para leitura
  - [XMLReader::getAttribute](xmlreader.getattribute.md) — Obtém o valor de um atributo nomeado
  - [XMLReader::getAttributeNo](xmlreader.getattributeno.md) — Obtém o valor de um atributo pelo índice
  - [XMLReader::getAttributeNs](xmlreader.getattributens.md) — Obtém o valor de um atributo pelo nome local e URI do namespace
  - [XMLReader::getParserProperty](xmlreader.getparserproperty.md) — Indica se a propriedade especificada foi definida
  - [XMLReader::isValid](xmlreader.isvalid.md) — Indica se o documento analisado é válido
  - [XMLReader::lookupNamespace](xmlreader.lookupnamespace.md) — Busca namespace para um prefixo
  - [XMLReader::moveToAttribute](xmlreader.movetoattribute.md) — Move o cursor para um atributo nomeado
  - [XMLReader::moveToAttributeNo](xmlreader.movetoattributeno.md) — Move o cursor para um atributo pelo índice
  - [XMLReader::moveToAttributeNs](xmlreader.movetoattributens.md) — Move o cursor para um atributo nomeado
  - [XMLReader::moveToElement](xmlreader.movetoelement.md) — Posiciona o cursor no elemento pai do atributo atual
  - [XMLReader::moveToFirstAttribute](xmlreader.movetofirstattribute.md) — Posiciona o cursor no primeiro atributo
  - [XMLReader::moveToNextAttribute](xmlreader.movetonextattribute.md) — Posiciona o cursor no próximo atributo
  - [XMLReader::next](xmlreader.next.md) — Move o cursor para o próximo nó pulando todas as subárvores
  - [XMLReader::open](xmlreader.open.md) — Define o URI que contém o XML a ser analisado
  - [XMLReader::read](xmlreader.read.md) — Move para o próximo nó no documento
  - [XMLReader::readInnerXml](xmlreader.readinnerxml.md) — Obtém XML do nó atual
  - [XMLReader::readOuterXml](xmlreader.readouterxml.md) — Obtém XML do nó atual, incluindo ele mesmo
  - [XMLReader::readString](xmlreader.readstring.md) — Lê o conteúdo do nó atual como uma string
  - [XMLReader::setParserProperty](xmlreader.setparserproperty.md) — Define opções do analisador
  - [XMLReader::setRelaxNGSchema](xmlreader.setrelaxngschema.md) — Define o nome do arquivo ou URI para um esquema RelaxNG
  - [XMLReader::setRelaxNGSchemaSource](xmlreader.setrelaxngschemasource.md) — Define os dados contendo um esquema RelaxNG
  - [XMLReader::setSchema](xmlreader.setschema.md) — Valida documento contra XSD
  - [XMLReader::XML](xmlreader.xml.md) — Define os dados contendo o XML a ser analisado

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
