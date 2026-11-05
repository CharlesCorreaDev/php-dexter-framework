# Retorna uma lista de funções SOAP disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.getfunctions.php

---

# SoapClient::\_\_getFunctions

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getFunctions — Retorna uma lista de funções SOAP disponíveis

### Descrição

public function **SoapClient::\_\_getFunctions**(): [?](language.types.null.md)[array](language.types.array.md)

Retorna um array de funções descritas no WSDL para o serviço Web.

> **Nota**:
>
> Esta função funciona apenas no modo WSDL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [array](language.types.array.md) de protótipos de funções SOAP, detalhando o tipo de retorno,
o nome da função e os tipos de parâmetros.

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_getFunctions()****

```
<?php
$client = new SoapClient('http://soap.amazon.com/schemas3/AmazonWebServices.wsdl');
var_dump($client->__getFunctions());
?>
```

O exemplo acima produzirá:

```
array(26) {
  [0]=>
  string(70) "ProductInfo KeywordSearchRequest(KeywordRequest $KeywordSearchRequest)"
  [1]=>
  string(79) "ProductInfo TextStreamSearchRequest(TextStreamRequest $TextStreamSearchRequest)"
  [2]=>
  string(64) "ProductInfo PowerSearchRequest(PowerRequest $PowerSearchRequest)"
...
  [23]=>
  string(107) "ShoppingCart RemoveShoppingCartItemsRequest(RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest)"
  [24]=>
  string(107) "ShoppingCart ModifyShoppingCartItemsRequest(ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest)"
  [25]=>
  string(118) "GetTransactionDetailsResponse GetTransactionDetailsRequest(GetTransactionDetailsRequest $GetTransactionDetailsRequest)"
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
