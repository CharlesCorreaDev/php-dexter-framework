# Define o gravador de resposta usado para preparar a resposta do Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.setresponsewriter.php

---

# SolrClient::setResponseWriter

(PECL solr >= 0.9.11)

SolrClient::setResponseWriter — Define o gravador de resposta usado para preparar a resposta do Solr

### Descrição

public function **SolrClient::setResponseWriter**([string](language.types.string.md) `$responseWriter`): [void](language.types.void.md)

Define o gravador de resposta usado para preparar a resposta do Solr.

### Parâmetros

`responseWriter`
:   Uma das seguintes strings:

    - `json`
    - `phps`
    - `xml`

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SolrClient::setResponseWriter()****

```
<?php

// Esta é minha classe personalizada para objetos
class SolrClass
{
   public $_properties = array();

   public function __get($property_name) {

      if (property_exists($this, $property_name)) {

          return $this->$property_name;

      } else if (isset($_properties[$property_name])) {

          return $_properties[$property_name];
      }

      return null;
   }
}

$options = array
(
  'hostname' => 'localhost',
  'port' => 8983,
  'path' => '/solr/core1'
);

$client = new SolrClient($options);

$client->setResponseWriter("json");

// $response = $client->ping();

$query = new SolrQuery();

$query->setQuery("*:*");

$query->set("objectClassName", "SolrClass");

$query->set("objectPropertiesStorageMode", 1); // 0 para propriedades independentes, 1 para combinadas

try
{

$response = $client->query($query);

$resp = $response->getResponse();

print_r($response);

print_r($resp);

} catch (Exception $e) {

print_r($e);

}

?>
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
