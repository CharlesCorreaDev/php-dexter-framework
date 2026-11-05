# A classe SolrDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrdocument.php

---

# A classe SolrDocument

(PECL solr >= 0.9.2)

## Introdução

Representa um documento Solr recuperado de uma resposta de consulta.

## Resumo da classe

final
class **SolrDocument**
implements
[ArrayAccess](class.arrayaccess.md), [Iterator](class.iterator.md), [Serializable](class.serializable.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[SORT\_DEFAULT](class.solrdocument.md#solrdocument.constants.sort-default) = 1;

const
[int](language.types.integer.md)
[SORT\_ASC](class.solrdocument.md#solrdocument.constants.sort-asc) = 1;

const
[int](language.types.integer.md)
[SORT\_DESC](class.solrdocument.md#solrdocument.constants.sort-desc) = 2;

const
[int](language.types.integer.md)
[SORT\_FIELD\_NAME](class.solrdocument.md#solrdocument.constants.sort-field-name) = 1;

const
[int](language.types.integer.md)
[SORT\_FIELD\_VALUE\_COUNT](class.solrdocument.md#solrdocument.constants.sort-field-value-count) = 2;

const
[int](language.types.integer.md)
[SORT\_FIELD\_BOOST\_VALUE](class.solrdocument.md#solrdocument.constants.sort-field-boost-value) = 4;

/\* Métodos \*/

public function [\_\_construct](solrdocument.construct.md)()

public function [addField](solrdocument.addfield.md)([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [bool](language.types.boolean.md)

public function [clear](solrdocument.clear.md)(): [bool](language.types.boolean.md)

public function [\_\_clone](solrdocument.clone.md)(): [void](language.types.void.md)

public function [current](solrdocument.current.md)(): [SolrDocumentField](class.solrdocumentfield.md)

public function [deleteField](solrdocument.deletefield.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [fieldExists](solrdocument.fieldexists.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [\_\_get](solrdocument.get.md)([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

public function [getChildDocuments](solrdocument.getchilddocuments.md)(): [array](language.types.array.md)

public function [getChildDocumentsCount](solrdocument.getchilddocumentscount.md)(): [int](language.types.integer.md)

public function [getField](solrdocument.getfield.md)([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

public function [getFieldCount](solrdocument.getfieldcount.md)(): [int](language.types.integer.md)

public function [getFieldNames](solrdocument.getfieldnames.md)(): [array](language.types.array.md)

public function [getInputDocument](solrdocument.getinputdocument.md)(): [SolrInputDocument](class.solrinputdocument.md)

public function [hasChildDocuments](solrdocument.haschilddocuments.md)(): [bool](language.types.boolean.md)

public function [\_\_isset](solrdocument.isset.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [key](solrdocument.key.md)(): [string](language.types.string.md)

public function [merge](solrdocument.merge.md)([SolrDocument](class.solrdocument.md) `$sourceDoc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**): [bool](language.types.boolean.md)

public function [next](solrdocument.next.md)(): [void](language.types.void.md)

public function [offsetExists](solrdocument.offsetexists.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [offsetGet](solrdocument.offsetget.md)([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

public function [offsetSet](solrdocument.offsetset.md)([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [void](language.types.void.md)

public function [offsetUnset](solrdocument.offsetunset.md)([string](language.types.string.md) `$fieldName`): [void](language.types.void.md)

public function [reset](solrdocument.reset.md)(): [bool](language.types.boolean.md)

public function [rewind](solrdocument.rewind.md)(): [void](language.types.void.md)

public function [serialize](solrdocument.serialize.md)(): [string](language.types.string.md)

public function [\_\_set](solrdocument.set.md)([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [bool](language.types.boolean.md)

public function [sort](solrdocument.sort.md)([int](language.types.integer.md) `$sortOrderBy`, [int](language.types.integer.md) `$sortDirection` = SolrDocument::SORT\_ASC): [bool](language.types.boolean.md)

public function [toArray](solrdocument.toarray.md)(): [array](language.types.array.md)

public function [unserialize](solrdocument.unserialize.md)([string](language.types.string.md) `$serialized`): [void](language.types.void.md)

public function [\_\_unset](solrdocument.unset.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [valid](solrdocument.valid.md)(): [bool](language.types.boolean.md)

public function [\_\_destruct](solrdocument.destruct.md)()

}

## Constantes predefinidas

**`SolrDocument::SORT_DEFAULT`**
:   Modo padrão para classificação de campos no documento.

**`SolrDocument::SORT_ASC`**
:   Classifica os campos em ordem crescente.

**`SolrDocument::SORT_DESC`**
:   Classifica os campos em ordem decrescente.

**`SolrDocument::SORT_FIELD_NAME`**
:   Classifica os campos por nome de campo.

**`SolrDocument::SORT_FIELD_VALUE_COUNT`**
:   Classifica os campos pelo número de valores em cada campo.

**`SolrDocument::SORT_FIELD_BOOST_VALUE`**
:   Classifica os campos por seus valores de aumento.

## Índice

- [SolrDocument::addField](solrdocument.addfield.md) — Adiciona um campo ao documento
- [SolrDocument::clear](solrdocument.clear.md) — Elimina todos os campos do documento
- [SolrDocument::\_\_clone](solrdocument.clone.md) — Cria uma cópia de um objeto SolrDocument
- [SolrDocument::\_\_construct](solrdocument.construct.md) — Construtor
- [SolrDocument::current](solrdocument.current.md) — Recupera o campo atual
- [SolrDocument::deleteField](solrdocument.deletefield.md) — Remove um campo do documento
- [SolrDocument::\_\_destruct](solrdocument.destruct.md) — Destrutor
- [SolrDocument::fieldExists](solrdocument.fieldexists.md) — Verifica se um campo existe no documento
- [SolrDocument::\_\_get](solrdocument.get.md) — Acessa o campo como uma propriedade
- [SolrDocument::getChildDocuments](solrdocument.getchilddocuments.md) — Retorna um array de documentos filhos (SolrDocument)
- [SolrDocument::getChildDocumentsCount](solrdocument.getchilddocumentscount.md) — Retorna o número de documentos filhos
- [SolrDocument::getField](solrdocument.getfield.md) — Recupera um campo por nome
- [SolrDocument::getFieldCount](solrdocument.getfieldcount.md) — Retorna o número de campos neste documento
- [SolrDocument::getFieldNames](solrdocument.getfieldnames.md) — Retorna um array de nomes de campos no documento
- [SolrDocument::getInputDocument](solrdocument.getinputdocument.md) — Retorna um SolrInputDocument equivalente ao objeto
- [SolrDocument::hasChildDocuments](solrdocument.haschilddocuments.md) — Verifica se o documento possui algum documento filho
- [SolrDocument::\_\_isset](solrdocument.isset.md) — Verifica se um campo existe
- [SolrDocument::key](solrdocument.key.md) — Recupera a chave atual
- [SolrDocument::merge](solrdocument.merge.md) — Mescla o documento de origem com o SolrDocument atual
- [SolrDocument::next](solrdocument.next.md) — Move o ponteiro interno para o próximo campo
- [SolrDocument::offsetExists](solrdocument.offsetexists.md) — Verifica se existe um campo específico
- [SolrDocument::offsetGet](solrdocument.offsetget.md) — Recupera um campo
- [SolrDocument::offsetSet](solrdocument.offsetset.md) — Adiciona um campo ao documento
- [SolrDocument::offsetUnset](solrdocument.offsetunset.md) — Remove um campo
- [SolrDocument::reset](solrdocument.reset.md) — Sinônimo de SolrDocument::clear
- [SolrDocument::rewind](solrdocument.rewind.md) — Redefine o ponteiro interno para o início
- [SolrDocument::serialize](solrdocument.serialize.md) — Usado para serialização personalizada
- [SolrDocument::\_\_set](solrdocument.set.md) — Adiciona outro campo ao documento
- [SolrDocument::sort](solrdocument.sort.md) — Classifica os campos do documento
- [SolrDocument::toArray](solrdocument.toarray.md) — Retorna uma representação de array do documento
- [SolrDocument::unserialize](solrdocument.unserialize.md) — Serialização personalizada de objetos SolrDocument
- [SolrDocument::\_\_unset](solrdocument.unset.md) — Remove um campo do documento
- [SolrDocument::valid](solrdocument.valid.md) — Verifica se a posição atual internamente ainda é válida

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
