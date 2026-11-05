# Construtor para o objeto SolrClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.construct.php

---

# SolrClient::\_\_construct

(PECL solr >= 0.9.2)

SolrClient::\_\_construct — Construtor para o objeto SolrClient

### Descrição

public function **SolrClient::\_\_construct**([array](language.types.array.md) `$clientOptions`)

Construtor para o objeto SolrClient.

### Parâmetros

`clientOptions`
:   Este é um array contendo uma das seguintes chaves:

    ```
    - secure          (Valor booleano que indica se deve ou não conectar-se em modo seguro)
     - hostname        (O nome do host do servidor Solr)
     - port            (O número da porta)
     - path            (O caminho para Solr)
     - wt              (O nome do redator da resposta, por ex. XML, JSON)
     - login           (O nome de usuário usado para autenticação HTTP, se houver)
     - password        (A senha de autenticação HTTP)
     - proxy_host      (O nome do host do servidor proxy, se houver)
     - proxy_port      (A porta do proxy)
     - proxy_login     (O nome de usuário do proxy)
     - proxy_password  (A senha do proxy)
     - timeout         (Tempo máximo permitido em segundos para a operação de transferência de dados HTTP. O padrão é 30 segundos)
     - ssl_cert        (Nome de arquivo no formato PEM contendo a chave privada + certificado privado (concatenadas nessa ordem) )
     - ssl_key         (Nome de arquivo com apenas a chave privada formatado em PEM)
     - ssl_keypassword (Senha para chave privada)
     - ssl_cainfo      (Nome do arquivo que contém um ou mais certificados CA para verificar o par)
     - ssl_capath      (Nome do diretório que contém vários certificados de CA para verificar o par)

     Observe que se o arquivo ssl_cert contiver apenas o certificado privado, deve ser especificado um arquivo ssl_key separado

     A opção ssl_keypassword será necessária se as opções ssl_cert ou ssl_key estiverem configuradas.
    ```

### Erros/Exceções

Lança [SolrIllegalArgumentException](class.solrillegalargumentexception.md) em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SolrClient::\_\_construct()****

```
<?php

$options = array
(
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login'    => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port'     => SOLR_SERVER_PORT,
    'path'     => SOLR_PATH_TO_SOLR,
    'wt'       => 'xml',
);

$client = new SolrClient($options);

$doc = new SolrInputDocument();

$doc->addField('id', 334455);
$doc->addField('cat', 'Software');
$doc->addField('cat', 'Lucene');

$updateResponse = $client->addDocument($doc);

?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [SolrClient::getOptions()](solrclient.getoptions.md) - Retorna as opções do cliente definidas internamente

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
