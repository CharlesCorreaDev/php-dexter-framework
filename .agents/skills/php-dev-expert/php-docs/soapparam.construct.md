# Construtor SoapParam

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapparam.construct.php

---

# SoapParam::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapParam::\_\_construct — Construtor SoapParam

### Descrição

public function **SoapParam::\_\_construct**([mixed](language.types.mixed.md) `$data`, [string](language.types.string.md) `$name`)

Constrói um novo objeto [SoapParam](class.soapparam.md).

### Parâmetros

`data`
:   Os dados a serem transmitidos ou retornados. Este parâmetro pode ser passado diretamente como valor
    PHP, mas neste caso será nomeado como `paramN` e
    o serviço SOAP pode não entender isso.

`name`
:   O nome do parâmetro.

### Examples

**Exemplo #1 Exemplo de **SoapParam::\_\_construct()****

```
<?php
$client = new SoapClient(null,array('location' => "http://localhost/soap.php",
                                    'uri'      => "http://test-uri/"));
$client->SomeFunction(new SoapParam($a, "a"),
                      new SoapParam($b, "b"),
                      new SoapParam($c, "c"));
?>
```

### Veja também

- [SoapClient::\_\_soapCall()](soapclient.soapcall.md) - Chama uma função SOAP
- [SoapVar::\_\_construct()](soapvar.construct.md) - Construtor SoapVar

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
