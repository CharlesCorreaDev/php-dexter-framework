# Executa uma solicitação SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.dorequest.php

---

# SoapClient::\_\_doRequest

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_doRequest — Executa uma solicitação SOAP

### Descrição

public function **SoapClient::\_\_doRequest**(  
    [string](language.types.string.md) `$request`,  
    [string](language.types.string.md) `$location`,  
    [string](language.types.string.md) `$action`,  
    [int](language.types.integer.md) `$version`,  
    [bool](language.types.boolean.md) `$oneWay` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$uriParserClass` = **`null`**  
): [?](language.types.null.md)[string](language.types.string.md)

Executa solicitação SOAP por HTTP.

Este método pode ser substituído em subclasses para implementar diferentes camadas de
transportes, realizar processamento XML adicional ou outra finalidade.

### Parâmetros

`request`
:   A solicitação XML SOAP.

`location`
:   O URL a ser solicitado.

`action`
:   A ação SOAP.

`version`
:   A versão SOAP.

`oneWay`
:   Se `oneWay` estiver definido como **`true`**, este método não retornará nada.
    Use isto onde uma resposta não é esperada.

`uriParserClass`
:   O nome da classe a ser usada para analisar o URI de redirecionamento quando um cabeçalho `"Location"` for recebido na resposta,
    ou **`null`** para usar a análise padrão baseada em [parse\_url()](function.parse-url.md).

### Valor Retornado

A resposta XML SOAP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `uriParserClass` foi adicionado. |
| 8.0.0 | O tipo de `oneWay` é [bool](language.types.boolean.md) agora; antigamente era [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplo de **SoapClient::\_\_doRequest()****

```
<?php

function Add($x, $y)
{
    return $x + $y;
}

class LocalSoapClient extends SoapClient
{
    private $server;

    public function __construct($wsdl, $options)
    {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('Add');
    }

    public function __doRequest(
        $request,
        $location,
        $action,
        $version,
        $one_way = false
    ): ?string {
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();

        return $response;
    }
}

$x = new LocalSoapClient(
    null,
    [
        'location' => 'test://',
        'uri'=>'http://testuri.org',
    ]
);

var_dump($x->Add(3, 4));

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
