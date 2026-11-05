# Adiciona um array de documentos filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.addchilddocuments.php

---

# SolrInputDocument::addChildDocuments

(PECL solr >= 2.3.0)

SolrInputDocument::addChildDocuments — Adiciona um array de documentos filhos

### Descrição

public function **SolrInputDocument::addChildDocuments**([array](language.types.array.md) `&$docs`): [void](language.types.void.md)

Adiciona um array de documentos filhos ao documento de entrada atual.

### Parâmetros

`docs`
:   Um [array](language.types.array.md) de objetos [SolrInputDocument](class.solrinputdocument.md).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança uma [SolrIllegalArgumentException](class.solrillegalargumentexception.md) em caso de falha.

Lança uma [SolrException](class.solrexception.md) em caso de falha interna.

### Examples

**Exemplo #1 Exemplo de **SolrInputDocument::addChildDocuments()****

```
<?php

include "bootstrap.php";

$options = array
(
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login'    => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port'     => SOLR_SERVER_PORT,
    'path'     => SOLR_SERVER_STORE_PATH,
);

$client = new SolrClient($options);

$product = new SolrInputDocument();

$product->addField('id', 'P-BLACK');
$product->addField('cat', 'tshirt');
$product->addField('cat', 'polo');
$product->addField('content_type', 'product');

$small = new SolrInputDocument();
$small->addField('id', 'TS-BLK-S');
$small->addField('content_type', 'sku');
$small->addField('size', 'S');
$small->addField('inventory', 100);

$medium = new SolrInputDocument();
$medium->addField('id', 'TS-BLK-M');
$medium->addField('content_type', 'sku');
$medium->addField('size', 'M');
$medium->addField('inventory', 200);

$large = new SolrInputDocument();
$large->addField('id', 'TS-BLK-L');
$large->addField('content_type', 'sku');
$large->addField('size', 'L');
$large->addField('inventory', 300);

// adiciona documentos filho
$skus = [$small, $medium, $large];
$product->addChildDocuments($skus);

// adiciona o bloco de documento do produto ao índice
$updateResponse = $client->addDocument(
        $product,
        true, // substitui se o documento existir
        10000 // confirma em 10 segundos
);

print_r($updateResponse->getResponse());
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [responseHeader] => SolrObject Object
        (
            [status] => 0
            [QTime] => 5
        )
)
```

### Veja também

- [SolrInputDocument::addChildDocument()](solrinputdocument.addchilddocument.md) - Adiciona um documento filho para indexação de bloco
- [SolrInputDocument::hasChildDocuments()](solrinputdocument.haschilddocuments.md) - Verifica se o documento possui algum documento filho
- [SolrInputDocument::getChildDocuments()](solrinputdocument.getchilddocuments.md) - Retorna um array de documentos filhos (SolrInputDocument)
- [SolrInputDocument::getChildDocumentsCount()](solrinputdocument.getchilddocumentscount.md) - Retorna o número de documentos filhos

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
