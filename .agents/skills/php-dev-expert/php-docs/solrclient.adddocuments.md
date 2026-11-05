# Adiciona uma coleção de instâncias SolrInputDocument ao índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.adddocuments.php

---

# SolrClient::addDocuments

(PECL solr >= 0.9.2)

SolrClient::addDocuments — Adiciona uma coleção de instâncias SolrInputDocument ao índice

### Descrição

public function **SolrClient::addDocuments**([array](language.types.array.md) `$docs`, [bool](language.types.boolean.md) `$overwrite` = **`true`**, [int](language.types.integer.md) `$commitWithin` = 0): [void](language.types.void.md)

Adiciona uma coleção de documentos ao índice.

### Parâmetros

`docs`
:   Um array que contém a coleção de instâncias SolrInputDocument. Este array deve ser uma variável real.

`overwrite`
:   Informa se os documentos existentes devem ou não ser substituídos. Se **`false`**, haverá duplicatas (vários documentos com o mesmo ID).

    **Aviso**

    PECL Solr < 2.0 $allowDups foi usado em vez de $overwrite, que faz a mesma funcionalidade com a opção booleana exatamente oposta.

    $allowDups = false é o mesmo que $overwrite = true

`commitWithin`
:   Número de milissegundos para confirmar automaticamente este documento. Disponível desde Solr 1.4. Padrão (0) significa desabilitado.

    Quando este valor é especificado, ele deixa o controle de quando fazer a confirmação
    para o próprio Solr, otimizando o número de confirmações ao mínimo enquanto ainda
    atende aos
    requisitos de latência de atualização, e o Solr fará uma confirmação automaticamente
    quando a adição mais antiga no buffer estiver pendente.

### Valor Retornado

Retorna um objeto [SolrUpdateResponse](class.solrupdateresponse.md) ou lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Examples

**Exemplo #1 Exemplo de **SolrClient::addDocuments()****

```
<?php

$options = array
(
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login'    => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port'     => SOLR_SERVER_PORT,
);

$client = new SolrClient($options);

$doc = new SolrInputDocument();

$doc->addField('id', 334455);
$doc->addField('cat', 'Software');
$doc->addField('cat', 'Lucene');

$doc2 = clone $doc;

$doc2->deleteField('id');
$doc2->addField('id', 334456);

$docs = array($doc, $doc2);

$updateResponse = $client->addDocuments($docs);

// nenhuma alteração será gravada no disco, a menos que $commitWithin seja passado ou SolrClient::commit seja chamado

print_r($updateResponse->getResponse());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [responseHeader] => SolrObject Object
        (
            [status] => 0
            [QTime] => 2
        )

)
```

### Veja também

- [SolrClient::addDocument()](solrclient.adddocument.md) - Adiciona um documento ao índice
- [SolrClient::commit()](solrclient.commit.md) - Finaliza todas as adições/exclusões feitas no índice

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
