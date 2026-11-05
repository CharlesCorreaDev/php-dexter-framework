# A classe SolrDocumentField

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrdocumentfield.php

---

# A classe SolrDocumentField

(PECL solr >= 0.9.2)

## Introdução

Representa um campo em um documento Solr. Todas as suas propriedades são somente leitura.

## Resumo da classe

final
class **SolrDocumentField**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$name](class.solrdocumentfield.md#solrdocumentfield.props.name);

public
readonly
[float](language.types.float.md)
[$boost](class.solrdocumentfield.md#solrdocumentfield.props.boost);

public
readonly
[array](language.types.array.md)
[$values](class.solrdocumentfield.md#solrdocumentfield.props.values);

/\* Métodos \*/

public function [\_\_construct](solrdocumentfield.construct.md)()

public function [\_\_destruct](solrdocumentfield.destruct.md)()

}

## Propriedades

name
:   O nome do campo.

boost
:   O valor de aumento para o campo.

values
:   Um array de valores para este campo.

## Índice

- [SolrDocumentField::\_\_construct](solrdocumentfield.construct.md) — Construtor
- [SolrDocumentField::\_\_destruct](solrdocumentfield.destruct.md) — Destrutor

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
