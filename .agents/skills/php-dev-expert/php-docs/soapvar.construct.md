# Construtor SoapVar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapvar.construct.php

---

# SoapVar::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapVar::\_\_construct — Construtor SoapVar

### Descrição

public function **SoapVar::\_\_construct**(  
    [mixed](language.types.mixed.md) `$data`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$encoding`,  
    [?](language.types.null.md)[string](language.types.string.md) `$typeName` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$typeNamespace` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$nodeName` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$nodeNamespace` = **`null`**  
)

Constrói um novo objeto [SoapVar](class.soapvar.md).

### Parâmetros

`data`
:   Os dados a serem transmitidos ou retornados.

`encoding`
:   O ID de codificação, uma das constantes `XSD_...`.

`type_name`
:   O nome do tipo.

`type_namespace`
:   O tipo do namespace.

`node_name`
:   O nome do nó XML.

`node_namespace`
:   O namespace do nó XML.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Uma instância de [DateTimeInterface](class.datetimeinterface.md) usada como o valor para um elemento `xsd:dateTime`, ou um tipo similar de data e horário, agora é serializada para sua representação ISO 8601, em vez de ser serializada como uma string vazia. |
| 8.0.3 | `typeName`, `typeNamespace`, `nodeName` e `nodeNamespace` agora são anuláveis. |

### Examples

**Exemplo #1 Exemplo de **SoapVar::\_\_construct()****

```
<?php
class SOAPStruct {
    function SOAPStruct($s, $i, $f)
    {
        $this->varString = $s;
        $this->varInt = $i;
        $this->varFloat = $f;
    }
}
$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$struct = new SOAPStruct('arg', 34, 325.325);
$soapstruct = new SoapVar($struct, SOAP_ENC_OBJECT, "SOAPStruct", "http://soapinterop.org/xsd");
$client->echoStruct(new SoapParam($soapstruct, "inputStruct"));
?>
```

### Veja também

- [SoapClient::\_\_soapCall()](soapclient.soapcall.md) - Chama uma função SOAP
- [SoapParam::\_\_construct()](soapparam.construct.md) - Construtor SoapParam

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
