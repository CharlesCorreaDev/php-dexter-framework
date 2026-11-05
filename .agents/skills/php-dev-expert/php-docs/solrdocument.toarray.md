# Retorna uma representação de array do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.toarray.php

---

# SolrDocument::toArray

(PECL solr >= 0.9.2)

SolrDocument::toArray — Retorna uma representação de array do documento

### Descrição

public function **SolrDocument::toArray**(): [array](language.types.array.md)

Retorna uma representação de array do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma representação de array do documento.

### Examples

**Exemplo #1 Exemplo de **SolrDocument::toArray()****

```
<?php

$doc = new SolrDocument();

$doc->addField('id', 1123);

$doc->features = "PHP Client Side";
$doc->features = "Fast development cycles";

$doc['cat'] = 'Software';
$doc['cat'] = 'Custom Search';
$doc->cat   = 'Information Technology';

print_r($doc->toArray());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [document_boost] => 0
    [field_count] => 3
    [fields] => Array
        (
            [0] => SolrDocumentField Object
                (
                    [name] => id
                    [boost] => 0
                    [values] => Array
                        (
                            [0] => 1123
                        )

                )

            [1] => SolrDocumentField Object
                (
                    [name] => features
                    [boost] => 0
                    [values] => Array
                        (
                            [0] => PHP Client Side
                            [1] => Fast development cycles
                        )

                )

            [2] => SolrDocumentField Object
                (
                    [name] => cat
                    [boost] => 0
                    [values] => Array
                        (
                            [0] => Software
                            [1] => Custom Search
                            [2] => Information Technology
                        )

                )

        )

)
```

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
