# Construtor SoapServer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.construct.php

---

# SoapServer::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapServer::\_\_construct — Construtor SoapServer

### Descrição

public function **SoapServer::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$wsdl`, [array](language.types.array.md) `$options` = [])

Este construtor permite a criação de objetos [SoapServer](class.soapserver.md)
no modo WSDL ou não WSDL.

### Parâmetros

`wsdl`
:   Para utilizar o SoapServer em modo WSDL, passe o URI de um arquivo WSDL.
    Caso contrário, passe **`null`** e defina a opção `uri` como
    namespace de destino para o servidor.

`options`
:   Permite definir uma versão SOAP padrão (`soap_version`),
    codificação interna de caracteres (`encoding`),
    e URI do ator (`actor`).

    A opção `classmap` pode ser usada para mapear alguns tipos WSDL
    para classes PHP. Esta opção deve ser um array com tipos WSDL
    como chaves e nomes de classes PHP como valores.
    A partir do PHP 8.4.0, chaves também podem ser especificadas usando a notação Clark,
    na forma `{namespace}type`, para mapear um tipo a partir de um
    namespace XML específico, por exemplo
    `'{http://example.com}foo'`.

    A opção `typemap` é um array de mapeamentos de tipos.
    O mapeamento de tipo é um array com chaves `type_name`,
    `type_ns` (URI do namespace), `from_xml`
    (retorno de chamada aceitando um parâmetro de string) e `to_xml`
    (retorno de chamada aceitando um parâmetro de objeto).

    A opção `cache_wsdl` é uma das
    **`WSDL_CACHE_NONE`**,
    **`WSDL_CACHE_DISK`**,
    **`WSDL_CACHE_MEMORY`** ou
    **`WSDL_CACHE_BOTH`**.

    Há também uma opção `features` que pode ser definida como
    **`SOAP_WAIT_ONE_WAY_CALLS`**,
    **`SOAP_SINGLE_ELEMENT_ARRAYS`**,
    **`SOAP_USE_XSI_ARRAY_TYPE`**.

    A opção `send_errors` pode ser definida como **`false`** enviar uma
    mensagem de erro genérica ("Erro interno") em vez da mensagem de erro específica
    enviada de outra forma.

### Examples

**Exemplo #1 Exemplo de **SoapServer::\_\_construct()****

```
<?php

$server = new SoapServer("some.wsdl");

$server = new SoapServer("some.wsdl", array('soap_version' => SOAP_1_2));

$server = new SoapServer("some.wsdl", array('actor' => "http://example.org/ts-tests/C"));

$server = new SoapServer("some.wsdl", array('encoding'=>'ISO-8859-1'));

$server = new SoapServer(null, array('uri' => "http://test-uri/"));

class MyBook {
    public $title;
    public $author;
}

$server = new SoapServer("books.wsdl", array('classmap' => array('book' => "MyBook")));

?>
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
