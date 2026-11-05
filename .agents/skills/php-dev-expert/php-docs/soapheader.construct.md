# Construtor SoapHeader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapheader.construct.php

---

# SoapHeader::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapHeader::\_\_construct — Construtor SoapHeader

### Descrição

public function **SoapHeader::\_\_construct**(  
    [string](language.types.string.md) `$namespace`,  
    [string](language.types.string.md) `$name`,  
    [mixed](language.types.mixed.md) `$data` = ?,  
    [bool](language.types.boolean.md) `$mustunderstand` = ?,  
    [string](language.types.string.md) `$actor` = ?  
)

Constrói um novo objeto SoapHeader.

### Parâmetros

`namespace`
:   O namespace do elemento de cabeçalho SOAP.

`name`
:   O nome do objeto SoapHeader.

`data`
:   O conteúdo de um cabeçalho SOAP. Pode ser um valor PHP ou um
    objeto [SoapVar](class.soapvar.md).

`mustUnderstand`
:   Valor do atributo `mustUnderstand` do elemento SOAP
    de cabeçalho.

`actor`
:   Valor do atributo `actor` do elemento de
    cabeçalho SOAP.

### Examples

**Exemplo #1 Exemplo de **SoapHeader::\_\_construct()****

```
<?php
$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$client->__soapCall("echoVoid", null, null,
                new SoapHeader('http://soapinterop.org/echoheader/',
                               'echoMeStringRequest',
                               'hello world'));
?>
```

### Veja também

- [SoapClient::\_\_soapCall()](soapclient.soapcall.md) - Chama uma função SOAP
- [SoapVar::\_\_construct()](soapvar.construct.md) - Construtor SoapVar
- [SoapParam::\_\_construct()](soapparam.construct.md) - Construtor SoapParam
- [SoapServer::addSoapHeader()](soapserver.addsoapheader.md) - Adiciona um cabeçalho SOAP à resposta

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
