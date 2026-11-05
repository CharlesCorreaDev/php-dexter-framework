# A classe XMLWriter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmlwriter.php

---

# A classe XMLWriter

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

## Introdução

## Resumo da classe

class ****XMLWriter****
{

/\* Métodos \*/

public function [endAttribute](xmlwriter.endattribute.md)(): [bool](language.types.boolean.md)

public function [endCdata](xmlwriter.endcdata.md)(): [bool](language.types.boolean.md)

public function [endComment](xmlwriter.endcomment.md)(): [bool](language.types.boolean.md)

public function [endDocument](xmlwriter.enddocument.md)(): [bool](language.types.boolean.md)

public function [endDtd](xmlwriter.enddtd.md)(): [bool](language.types.boolean.md)

public function [endDtdAttlist](xmlwriter.enddtdattlist.md)(): [bool](language.types.boolean.md)

public function [endDtdElement](xmlwriter.enddtdelement.md)(): [bool](language.types.boolean.md)

public function [endDtdEntity](xmlwriter.enddtdentity.md)(): [bool](language.types.boolean.md)

public function [endElement](xmlwriter.endelement.md)(): [bool](language.types.boolean.md)

public function [endPi](xmlwriter.endpi.md)(): [bool](language.types.boolean.md)

public function [flush](xmlwriter.flush.md)([bool](language.types.boolean.md) `$empty` = **`true`**): [string](language.types.string.md)|[int](language.types.integer.md)

public function [fullEndElement](xmlwriter.fullendelement.md)(): [bool](language.types.boolean.md)

public function [openMemory](xmlwriter.openmemory.md)(): [bool](language.types.boolean.md)

public function [openUri](xmlwriter.openuri.md)([string](language.types.string.md) `$uri`): [bool](language.types.boolean.md)

public function [outputMemory](xmlwriter.outputmemory.md)([bool](language.types.boolean.md) `$flush` = **`true`**): [string](language.types.string.md)

public function [setIndent](xmlwriter.setindent.md)([bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

public function [setIndentString](xmlwriter.setindentstring.md)([string](language.types.string.md) `$indentation`): [bool](language.types.boolean.md)

public function [startAttribute](xmlwriter.startattribute.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [startAttributeNs](xmlwriter.startattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [startCdata](xmlwriter.startcdata.md)(): [bool](language.types.boolean.md)

public function [startComment](xmlwriter.startcomment.md)(): [bool](language.types.boolean.md)

public function [startDocument](xmlwriter.startdocument.md)([?](language.types.null.md)[string](language.types.string.md) `$version` = "1.0", [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$standalone` = **`null`**): [bool](language.types.boolean.md)

public function [startDtd](xmlwriter.startdtd.md)([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**): [bool](language.types.boolean.md)

public function [startDtdAttlist](xmlwriter.startdtdattlist.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [startDtdElement](xmlwriter.startdtdelement.md)([string](language.types.string.md) `$qualifiedName`): [bool](language.types.boolean.md)

public function [startDtdEntity](xmlwriter.startdtdentity.md)([string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$isParam`): [bool](language.types.boolean.md)

public function [startElement](xmlwriter.startelement.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [startElementNs](xmlwriter.startelementns.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [startPi](xmlwriter.startpi.md)([string](language.types.string.md) `$target`): [bool](language.types.boolean.md)

public function [text](xmlwriter.text.md)([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public static function [toMemory](xmlwriter.tomemory.md)(): static

public static function [toStream](xmlwriter.tostream.md)([resource](language.types.resource.md) `$stream`): static

public static function [toUri](xmlwriter.touri.md)([string](language.types.string.md) `$uri`): static

public function [writeAttribute](xmlwriter.writeattribute.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [writeAttributeNs](xmlwriter.writeattributens.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [string](language.types.string.md) `$value`  
): [bool](language.types.boolean.md)

public function [writeCdata](xmlwriter.writecdata.md)([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public function [writeComment](xmlwriter.writecomment.md)([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public function [writeDtd](xmlwriter.writedtd.md)(  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

public function [writeDtdAttlist](xmlwriter.writedtdattlist.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public function [writeDtdElement](xmlwriter.writedtdelement.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public function [writeDtdEntity](xmlwriter.writedtdentity.md)(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$content`,  
    [bool](language.types.boolean.md) `$isParam` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$notationData` = **`null`**  
): [bool](language.types.boolean.md)

public function [writeElement](xmlwriter.writeelement.md)([string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**): [bool](language.types.boolean.md)

public function [writeElementNs](xmlwriter.writeelementns.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

public function [writePi](xmlwriter.writepi.md)([string](language.types.string.md) `$target`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

public function [writeRaw](xmlwriter.writeraw.md)([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

}

## Índice

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
