# Retorna uma lista de tipos SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.gettypes.php

---

# SoapClient::\_\_getTypes

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getTypes — Retorna uma lista de tipos SOAP

### Descrição

public function **SoapClient::\_\_getTypes**(): [?](language.types.null.md)[array](language.types.array.md)

Retorna um array de tipos descritos no WSDL para o serviço Web.

> **Nota**:
>
> Esta função funciona apenas no modo WSDL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [array](language.types.array.md) de tipos SOAP, detalhando todas as estruturas e tipos.

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_getTypes()****

```
<?php
$client = new SoapClient('http://soap.amazon.com/schemas3/AmazonWebServices.wsdl');
var_dump($client->__getTypes());
?>
```

O exemplo acima produzirá:

```
array(88) {
  [0]=>
  string(30) "ProductLine ProductLineArray[]"
  [1]=>
  string(85) "struct ProductLine {
 string Mode;
 string RelevanceRank;
 ProductInfo ProductInfo;
}"
  [2]=>
  string(105) "struct ProductInfo {
 string TotalResults;
 string TotalPages;
 string ListName;
 DetailsArray Details;
}"
...
  [85]=>
  string(32) "ShortSummary ShortSummaryArray[]"
  [86]=>
  string(121) "struct GetTransactionDetailsRequest {
 string tag;
 string devtag;
 string key;
 OrderIdArray OrderIds;
 string locale;
}"
  [87]=>
  string(75) "struct GetTransactionDetailsResponse {
 ShortSummaryArray ShortSummaries;
}"
}
```

### Veja também

- [SoapClient::\_\_construct()](soapclient.construct.md) - Construtor de SoapClient

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
