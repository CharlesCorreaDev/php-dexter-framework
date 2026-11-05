# Define cabeçalhos SOAP para chamadas subsequentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.setsoapheaders.php

---

# SoapClient::\_\_setSoapHeaders

(PHP 5 >= 5.0.5, PHP 7, PHP 8)

SoapClient::\_\_setSoapHeaders — Define cabeçalhos SOAP para chamadas subsequentes

### Descrição

public function **SoapClient::\_\_setSoapHeaders**([SoapHeader](class.soapheader.md)|[array](language.types.array.md)|[null](language.types.null.md) `$headers` = **`null`**): [bool](language.types.boolean.md)

Define cabeçalhos a serem enviados junto com as solicitações SOAP.

> **Nota**:
>
> Chamar este método substituirá quaisquer valores anteriores.

### Parâmetros

`headers`
:   Os cabeçalhos a serem definidos. Poderia ser o objeto[SoapHeader](class.soapheader.md)
    ou array de objetos [SoapHeader](class.soapheader.md).
    Se não for especificado ou definido como **`null`**, os cabeçalhos serão excluídos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_setSoapHeaders()****

```
<?php

$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$header = new SoapHeader('http://soapinterop.org/echoheader/',
                            'echoMeStringRequest',
                            'hello world');

$client->__setSoapHeaders($header);

$client->__soapCall("echoVoid", null);
?>
```

**Exemplo #2 Define Vários Cabeçalhos**

```
<?php

$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$headers = array();

$headers[] = new SoapHeader('http://soapinterop.org/echoheader/',
                            'echoMeStringRequest',
                            'hello world');

$headers[] = new SoapHeader('http://soapinterop.org/echoheader/',
                            'echoMeStringRequest',
                            'hello world again');

$client->__setSoapHeaders($headers);

$client->__soapCall("echoVoid", null);
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
