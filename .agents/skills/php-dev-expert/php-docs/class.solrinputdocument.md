# A classe SolrInputDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrinputdocument.php

---

# A classe SolrInputDocument

(PECL solr >= 0.9.2)

## Introdução

Esta classe representa um documento Solr que está prestes a ser submetido ao índice Solr.

## Resumo da classe

final
class **SolrInputDocument**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[SORT\_DEFAULT](class.solrinputdocument.md#solrinputdocument.constants.sort-default) = 1;

const
[int](language.types.integer.md)
[SORT\_ASC](class.solrinputdocument.md#solrinputdocument.constants.sort-asc) = 1;

const
[int](language.types.integer.md)
[SORT\_DESC](class.solrinputdocument.md#solrinputdocument.constants.sort-desc) = 2;

const
[int](language.types.integer.md)
[SORT\_FIELD\_NAME](class.solrinputdocument.md#solrinputdocument.constants.sort-field-name) = 1;

const
[int](language.types.integer.md)
[SORT\_FIELD\_VALUE\_COUNT](class.solrinputdocument.md#solrinputdocument.constants.sort-field-value-count) = 2;

const
[int](language.types.integer.md)
[SORT\_FIELD\_BOOST\_VALUE](class.solrinputdocument.md#solrinputdocument.constants.sort-field-boost-value) = 4;

/\* Métodos \*/

public function [\_\_construct](solrinputdocument.construct.md)()

public function [addChildDocument](solrinputdocument.addchilddocument.md)([SolrInputDocument](class.solrinputdocument.md) `$child`): [void](language.types.void.md)

public function [addChildDocuments](solrinputdocument.addchilddocuments.md)([array](language.types.array.md) `&$docs`): [void](language.types.void.md)

public function [addField](solrinputdocument.addfield.md)([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`, [float](language.types.float.md) `$fieldBoostValue` = 0.0): [bool](language.types.boolean.md)

public function [clear](solrinputdocument.clear.md)(): [bool](language.types.boolean.md)

public function [\_\_clone](solrinputdocument.clone.md)(): [void](language.types.void.md)

public function [deleteField](solrinputdocument.deletefield.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [fieldExists](solrinputdocument.fieldexists.md)([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

public function [getBoost](solrinputdocument.getboost.md)(): [float](language.types.float.md)

public function [getChildDocuments](solrinputdocument.getchilddocuments.md)(): [array](language.types.array.md)

public function [getChildDocumentsCount](solrinputdocument.getchilddocumentscount.md)(): [int](language.types.integer.md)

public function [getField](solrinputdocument.getfield.md)([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

public function [getFieldBoost](solrinputdocument.getfieldboost.md)([string](language.types.string.md) `$fieldName`): [float](language.types.float.md)

public function [getFieldCount](solrinputdocument.getfieldcount.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getFieldNames](solrinputdocument.getfieldnames.md)(): [array](language.types.array.md)

public function [hasChildDocuments](solrinputdocument.haschilddocuments.md)(): [bool](language.types.boolean.md)

public function [merge](solrinputdocument.merge.md)([SolrInputDocument](class.solrinputdocument.md) `$sourceDoc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**): [bool](language.types.boolean.md)

public function [reset](solrinputdocument.reset.md)(): [bool](language.types.boolean.md)

public function [setBoost](solrinputdocument.setboost.md)([float](language.types.float.md) `$documentBoostValue`): [bool](language.types.boolean.md)

public function [setFieldBoost](solrinputdocument.setfieldboost.md)([string](language.types.string.md) `$fieldName`, [float](language.types.float.md) `$fieldBoostValue`): [bool](language.types.boolean.md)

public function [sort](solrinputdocument.sort.md)([int](language.types.integer.md) `$sortOrderBy`, [int](language.types.integer.md) `$sortDirection` = SolrInputDocument::SORT\_ASC): [bool](language.types.boolean.md)

public function [toArray](solrinputdocument.toarray.md)(): [array](language.types.array.md)

public function [\_\_destruct](solrinputdocument.destruct.md)()

}

## Constantes predefinidas

## Constantes da classe SolrInputDocument

**`SolrInputDocument::SORT_DEFAULT`**
:   Classifica os campos em ordem crescente.

**`SolrInputDocument::SORT_ASC`**
:   Classifica os campos em ordem crescente.

**`SolrInputDocument::SORT_DESC`**
:   Classifica os campos em ordem decrescente.

**`SolrInputDocument::SORT_FIELD_NAME`**
:   Classifica os campos por nome.

**`SolrInputDocument::SORT_FIELD_VALUE_COUNT`**
:   Classifica os campos por número de valores.

**`SolrInputDocument::SORT_FIELD_BOOST_VALUE`**
:   Classifica os campos por valor de aumento.

## Índice

- [SolrInputDocument::addChildDocument](solrinputdocument.addchilddocument.md) — Adiciona um documento filho para indexação de bloco
- [SolrInputDocument::addChildDocuments](solrinputdocument.addchilddocuments.md) — Adiciona um array de documentos filhos
- [SolrInputDocument::addField](solrinputdocument.addfield.md) — Adiciona um campo ao documento
- [SolrInputDocument::clear](solrinputdocument.clear.md) — Redefine o documento de entrada
- [SolrInputDocument::\_\_clone](solrinputdocument.clone.md) — Cria uma cópia de um SolrDocument
- [SolrInputDocument::\_\_construct](solrinputdocument.construct.md) — Construtor
- [SolrInputDocument::deleteField](solrinputdocument.deletefield.md) — Remove um campo do documento
- [SolrInputDocument::\_\_destruct](solrinputdocument.destruct.md) — Destrutor
- [SolrInputDocument::fieldExists](solrinputdocument.fieldexists.md) — Verifica se um campo existe
- [SolrInputDocument::getBoost](solrinputdocument.getboost.md) — Recupera o valor de impulso atual do documento
- [SolrInputDocument::getChildDocuments](solrinputdocument.getchilddocuments.md) — Retorna um array de documentos filhos (SolrInputDocument)
- [SolrInputDocument::getChildDocumentsCount](solrinputdocument.getchilddocumentscount.md) — Retorna o número de documentos filhos
- [SolrInputDocument::getField](solrinputdocument.getfield.md) — Recupera um campo por nome
- [SolrInputDocument::getFieldBoost](solrinputdocument.getfieldboost.md) — Recupera o valor de impulso para um campo específico
- [SolrInputDocument::getFieldCount](solrinputdocument.getfieldcount.md) — Retorna o número de campos do documento
- [SolrInputDocument::getFieldNames](solrinputdocument.getfieldnames.md) — Retorna um array contendo todos os campos do documento
- [SolrInputDocument::hasChildDocuments](solrinputdocument.haschilddocuments.md) — Verifica se o documento possui algum documento filho
- [SolrInputDocument::merge](solrinputdocument.merge.md) — Mescla um documento de entrada em outro
- [SolrInputDocument::reset](solrinputdocument.reset.md) — Sinônimo de SolrInputDocument::clear
- [SolrInputDocument::setBoost](solrinputdocument.setboost.md) — Define o valor de impulso para este documento
- [SolrInputDocument::setFieldBoost](solrinputdocument.setfieldboost.md) — Define o valor de impulso no momento da indexação para um campo
- [SolrInputDocument::sort](solrinputdocument.sort.md) — Classifica os campos dentro do documento
- [SolrInputDocument::toArray](solrinputdocument.toarray.md) — Retorna uma representação de array do documento de entrada

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
