# Verifica se uma chamada SOAP falhou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-soap-fault.php

---

# is\_soap\_fault

(PHP 5, PHP 7, PHP 8)

is\_soap\_fault — Verifica se uma chamada SOAP falhou

### Descrição

function **is\_soap\_fault**([mixed](language.types.mixed.md) `$object`): [bool](language.types.boolean.md)

Esta função é útil para verificar se a chamada SOAP falhou, mas
sem usar exceções. Para usá-la, crie um
objeto [SoapClient](class.soapclient.md) com a opção `exceptions`
definida como zero ou **`false`**.
Neste caso, o método SOAP retornará um objeto especial
[SoapFault](class.soapfault.md) que encapsula os detalhes da falha
(faultcode, faultstring, faultactor e faultdetails).

Se `exceptions` não estiver definido então a chamada SOAP lançará
uma exceção em caso de erro.
**is\_soap\_fault()** verifica se o dado
parâmetro é um objeto [SoapFault](class.soapfault.md).

### Parâmetros

`object`
:   O objeto a ser testado.

### Valor Retornado

Isso retornará **`true`** em caso de erro e **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_soap\_fault()****

```
<?php
$client = new SoapClient("some.wsdl", array('exceptions' => 0));
$result = $client->SomeFunction();
if (is_soap_fault($result)) {
    trigger_error("SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring})", E_USER_ERROR);
}
?>
```

**Exemplo #2 O método padrão do SOAP para o reporte de erros são as exceções**

```
<?php
try {
    $client = new SoapClient("some.wsdl");
    $result = $client->SomeFunction(/* ... */);
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>
```

### Veja também

- [SoapClient::\_\_construct()](soapclient.construct.md) - Construtor de SoapClient
- [SoapFault::\_\_construct()](soapfault.construct.md) - Construtor SoapFault

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
