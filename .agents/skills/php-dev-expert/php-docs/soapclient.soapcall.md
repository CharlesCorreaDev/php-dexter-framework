# Chama uma função SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.soapcall.php

---

# SoapClient::\_\_soapCall

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_soapCall — Chama uma função SOAP

### Descrição

public function **SoapClient::\_\_soapCall**(  
    [string](language.types.string.md) `$name`,  
    [array](language.types.array.md) `$args`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**,  
    [SoapHeader](class.soapheader.md)|[array](language.types.array.md)|[null](language.types.null.md) `$inputHeaders` = **`null`**,  
    [array](language.types.array.md) `&$outputHeaders` = **`null`**  
): [mixed](language.types.mixed.md)

Esta é uma função API de baixo nível usada para fazer uma chamada SOAP. Geralmente,
no modo WSDL, as funções SOAP podem ser chamadas como métodos do
Objeto [SoapClient](class.soapclient.md). Este método é útil em modo não WSDL
quando `soapaction` é desconhecido, `uri`
difere do padrão ou ao enviar e/ou receber cabeçalhos SOAP.

Em caso de erro, uma chamada para uma função SOAP pode fazer com que o PHP lance exceções ou retorne um
Objeto [SoapFault](class.soapfault.md) se as exceções estiverem desabilitadas.
Para verificar se a chamada de função falhou ao capturar as exceções SoapFault,
verifique o resultado com [is\_soap\_fault()](function.is-soap-fault.md).

### Parâmetros

`name`
:   O nome da função SOAP a ser chamada.

`args`
:   Um array dos argumentos a serem passados para a função. Isso pode ser
    um array ordenado ou associativo. Observe que a maioria dos servidores SOAP exigem
    nomes de parâmetros a serem fornecidos; nesse caso, este deve ser um
    array associativo.

`options`
:   Um array associativo de opções a serem passadas ao cliente.

    A opção `location` é a URL do serviço Web remoto.

    A opção `uri` é o namespace de destino do serviço SOAP.

    A opção `soapaction` é a ação a ser chamada.

`inputHeaders`
:   Um array de cabeçalhos a serem enviados junto com a solicitação SOAP.

`outputHeaders`
:   Se fornecido, esse array será preenchido com os cabeçalhos da resposta SOAP.

### Valor Retornado

As funções SOAP podem retornar um ou vários valores. Se apenas um valor for
retornado pela função SOAP, o valor de retorno será um escalar.
Se vários valores forem retornados, um array associativo de parâmetros nomeados
de saída são retornados em vez disso.

Em caso de erro, se o objeto [SoapClient](class.soapclient.md) foi construído
com a opção `exceptions` definida como **`false`**,
um objeto [SoapFault](class.soapfault.md) será retornado.

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_soapCall()****

```
<?php

$client = new SoapClient("some.wsdl");
$client->SomeFunction($a, $b, $c);

$client->__soapCall("SomeFunction", array($a, $b, $c));
$client->__soapCall("SomeFunction", array($a, $b, $c), NULL,
                    new SoapHeader(), $output_headers);

$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$client->SomeFunction($a, $b, $c);
$client->__soapCall("SomeFunction", array($a, $b, $c));
$client->__soapCall("SomeFunction", array($a, $b, $c),
                    array('soapaction' => 'some_action',
                          'uri'        => 'some_uri'));
?>
```

### Veja também

- [SoapClient::\_\_construct()](soapclient.construct.md) - Construtor de SoapClient
- [SoapParam::\_\_construct()](soapparam.construct.md) - Construtor SoapParam
- [SoapVar::\_\_construct()](soapvar.construct.md) - Construtor SoapVar
- [SoapHeader::\_\_construct()](soapheader.construct.md) - Construtor SoapHeader
- [SoapFault::\_\_construct()](soapfault.construct.md) - Construtor SoapFault
- [is\_soap\_fault()](function.is-soap-fault.md) - Verifica se uma chamada SOAP falhou

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
