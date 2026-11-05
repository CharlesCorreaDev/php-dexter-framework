# Define a localização do serviço Web a ser usado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.setlocation.php

---

# SoapClient::\_\_setLocation

(PHP 5 >= 5.0.4, PHP 7, PHP 8)

SoapClient::\_\_setLocation — Define a localização do serviço Web a ser usado

### Descrição

public function **SoapClient::\_\_setLocation**([?](language.types.null.md)[string](language.types.string.md) `$location` = **`null`**): [?](language.types.null.md)[string](language.types.string.md)

Define o URL do terminal que será acessado pelas solicitações SOAP seguintes. Isto é equivalente a
especificar a opção `location` ao construir o SoapClient.

> **Nota**:
>
> Chamar esse método é opcional. O SoapClient usa o endpoint de
> arquivo WSDL por padrão.

### Parâmetros

`location`
:   O novo URL do terminal.

### Valor Retornado

O antigo URL do terminal.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.3 | `location` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_setLocation()****

```
<?php
$client = new SoapClient('http://example.com/webservice.php?wsdl');

$client->__setLocation('http://www.somethirdparty.com');

$old_location = $client->__setLocation(); // remove a definição da opção de localização

echo $old_location;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
http://www.somethirdparty.com
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
