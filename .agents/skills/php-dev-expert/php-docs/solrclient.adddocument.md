# Adiciona um documento ao índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.adddocument.php

---

# SolrClient::addDocument

(PECL solr >= 0.9.2)

SolrClient::addDocument — Adiciona um documento ao índice

### Descrição

public function **SolrClient::addDocument**([SolrInputDocument](class.solrinputdocument.md) `$doc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**, [int](language.types.integer.md) `$commitWithin` = 0): [SolrUpdateResponse](class.solrupdateresponse.md)

Este método adiciona um documento ao índice.

### Parâmetros

`doc`
:   A instância SolrInputDocument.

`overwrite`
:   Informa se o documento existente deve ou não ser substituído. Se **`false`**, haverá duplicatas (vários documentos com o mesmo ID).

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

**Exemplo #1 Exemplo de **SolrClient::addDocument()****

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

$updateResponse = $client->addDocument($doc);

// As alterações a serem escritas deve ser confirmadas se $commitWithin não tiver sido usado
$client->commit();

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
            [QTime] => 1
        )

)
```

**Exemplo #2 Exemplo 2 de **SolrClient::addDocument()****

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

// Não há necessidade de chamar commit() porque $commitWithin foi informado, assim o Solr Server irá confirmar automaticamente em 10 segundos
$updateResponse = $client->addDocument($doc, false, 10000);

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
            [QTime] => 1
        )

)
```

### Veja também

- [SolrClient::addDocuments()](solrclient.adddocuments.md) - Adiciona uma coleção de instâncias SolrInputDocument ao índice
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
