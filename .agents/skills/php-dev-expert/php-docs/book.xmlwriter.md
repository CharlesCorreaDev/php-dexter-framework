# XMLWriter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xmlwriter.php

---

# XMLWriter

# Introdução

Esta é a extensão XMLWriter. Ela encapsula a API xmlWriter da libxml.

Esta extensão representa um escritor que fornece um meio não armazenado em cache,
somente para encaminhamento, de gerar fluxos ou arquivos contendo dados XML.

Esta extensão pode ser usada em um estilo orientado a objetos ou procedural.
Cada método documentado descreve a chamada procedural alternativa.

- [Instalação/Configuração](xmlwriter.setup.md)
  - [Dependências](xmlwriter.requirements.md)
  - [Instalação](xmlwriter.installation.md)
  - [Tipos de Recurso](xmlwriter.resources.md)
- [Examples](xmlwriter.examples.md)
  - [Criando um documento XML simples](example.xmlwriter-simple.md)
  - [Trabalhando com namespaces XML](example.xmlwriter-namespace.md)
  - [Trabalhando com a API Orientada a Objeto](example.xmlwriter-oop.md)
- [XMLWriter](class.xmlwriter.md) — A classe XMLWriter
  - [XMLWriter::endAttribute](xmlwriter.endattribute.md) — Termina o atributo
  - [XMLWriter::endCdata](xmlwriter.endcdata.md) — Termina o CDATA atual
  - [XMLWriter::endComment](xmlwriter.endcomment.md) — Termina o comentário
  - [XMLWriter::endDocument](xmlwriter.enddocument.md) — Termina o documento atual
  - [XMLWriter::endDtd](xmlwriter.enddtd.md) — Termina o DTD atual
  - [XMLWriter::endDtdAttlist](xmlwriter.enddtdattlist.md) — Termina a a lista de atributos do DTD atual
  - [XMLWriter::endDtdElement](xmlwriter.enddtdelement.md) — Termina o elemento DTD atual
  - [XMLWriter::endDtdEntity](xmlwriter.enddtdentity.md) — Encerra a entidade DTD atual
  - [XMLWriter::endElement](xmlwriter.endelement.md) — Termina o elemento atual
  - [XMLWriter::endPi](xmlwriter.endpi.md) — Encerra a instrução de processamento atual
  - [XMLWriter::flush](xmlwriter.flush.md) — Limpa o buffer atual
  - [XMLWriter::fullEndElement](xmlwriter.fullendelement.md) — Termina o elemento atual
  - [XMLWriter::openMemory](xmlwriter.openmemory.md) — Cria um novo xmlwriter usando memória para saída de string
  - [XMLWriter::openUri](xmlwriter.openuri.md) — Cria um novo xmlwriter usando o URI de origem para saída
  - [XMLWriter::outputMemory](xmlwriter.outputmemory.md) — Retorna o buffer atual
  - [XMLWriter::setIndent](xmlwriter.setindent.md) — Ativa/desativa o recuo
  - [XMLWriter::setIndentString](xmlwriter.setindentstring.md) — Define a string usada para recuo
  - [XMLWriter::startAttribute](xmlwriter.startattribute.md) — Inicia um atributo
  - [XMLWriter::startAttributeNs](xmlwriter.startattributens.md) — Inicia um atributo com namespace
  - [XMLWriter::startCdata](xmlwriter.startcdata.md) — Cria tag de início de CDATA
  - [XMLWriter::startComment](xmlwriter.startcomment.md) — Cria tag de início de comentário
  - [XMLWriter::startDocument](xmlwriter.startdocument.md) — Cria tag de documento
  - [XMLWriter::startDtd](xmlwriter.startdtd.md) — Cria tag DTD inicial
  - [XMLWriter::startDtdAttlist](xmlwriter.startdtdattlist.md) — Inicia uma lista de atributos DTD
  - [XMLWriter::startDtdElement](xmlwriter.startdtdelement.md) — Cria elemento DTD inicial
  - [XMLWriter::startDtdEntity](xmlwriter.startdtdentity.md) — Cria entidade DTD inicial
  - [XMLWriter::startElement](xmlwriter.startelement.md) — Cria a tag de início de elemento
  - [XMLWriter::startElementNs](xmlwriter.startelementns.md) — Cria tag de elemento com namespace inicial
  - [XMLWriter::startPi](xmlwriter.startpi.md) — Cria tag PI inicial
  - [XMLWriter::text](xmlwriter.text.md) — Escreve texto
  - [XMLWriter::toMemory](xmlwriter.tomemory.md) — Cria um novo XMLWriter usando memória para saída de string
  - [XMLWriter::toStream](xmlwriter.tostream.md) — Cria um novo XMLWriter usando um fluxo para saída
  - [XMLWriter::toUri](xmlwriter.touri.md) — Cria um novo XMLWriter usando um URI para saída
  - [XMLWriter::writeAttribute](xmlwriter.writeattribute.md) — Escreve atributo completo
  - [XMLWriter::writeAttributeNs](xmlwriter.writeattributens.md) — Escreve atributo com namespace completo
  - [XMLWriter::writeCdata](xmlwriter.writecdata.md) — Escreve tag CDATA completa
  - [XMLWriter::writeComment](xmlwriter.writecomment.md) — Escreve tag de comentário completa
  - [XMLWriter::writeDtd](xmlwriter.writedtd.md) — Escreve tag DTD completa
  - [XMLWriter::writeDtdAttlist](xmlwriter.writedtdattlist.md) — Escreve a tag de lista de atributos DTD completa
  - [XMLWriter::writeDtdElement](xmlwriter.writedtdelement.md) — Escreve a tag completa do elemento DTD
  - [XMLWriter::writeDtdEntity](xmlwriter.writedtdentity.md) — Escreve a tag de entidade DTD completa
  - [XMLWriter::writeElement](xmlwriter.writeelement.md) — Escreve uma tag de elemento completa
  - [XMLWriter::writeElementNs](xmlwriter.writeelementns.md) — Escreve tag de elemento com namespace completo
  - [XMLWriter::writePi](xmlwriter.writepi.md) — Escreve uma instrução de processamento
  - [XMLWriter::writeRaw](xmlwriter.writeraw.md) — Escreve um texto XML bruto

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
