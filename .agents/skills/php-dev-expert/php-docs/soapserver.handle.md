# Lida com uma solicitação SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.handle.php

---

# SoapServer::handle

(PHP 5, PHP 7, PHP 8)

SoapServer::handle — Lida com uma solicitação SOAP

### Descrição

public function **SoapServer::handle**([?](language.types.null.md)[string](language.types.string.md) `$request` = **`null`**): [void](language.types.void.md)

Processa uma solicitação SOAP, chama as funções necessárias e envia uma resposta
de volta.

### Parâmetros

`request`
:   A solicitação SOAP. Se este argumento for omitido, a solicitação será considerada
    nos dados POST brutos da solicitação HTTP.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `request` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **SoapServer::handle()****

```
<?php
function test($x)
{
    return $x;
}

$server = new SoapServer(null, array('uri' => "http://test-uri/"));
$server->addFunction("test");
$server->handle();
?>
```

### Veja também

- [SoapServer::\_\_construct()](soapserver.construct.md) - Construtor SoapServer

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
