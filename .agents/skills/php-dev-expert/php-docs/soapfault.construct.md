# Construtor SoapFault

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapfault.construct.php

---

# SoapFault::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapFault::\_\_construct — Construtor SoapFault

### Descrição

public function **SoapFault::\_\_construct**(  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$code`,  
    [string](language.types.string.md) `$string`,  
    [?](language.types.null.md)[string](language.types.string.md) `$actor` = **`null`**,  
    [mixed](language.types.mixed.md) `$details` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**,  
    [mixed](language.types.mixed.md) `$headerFault` = **`null`**,  
    [string](language.types.string.md) `$lang` = ""  
)

Esta classe é usada para enviar respostas de falha SOAP do manipulador PHP.
`code`, `string`,
`actor` e `details` são
elementos padrões de uma falha SOAP.

### Parâmetros

`code`
:   O código de erro do [SoapFault](class.soapfault.md).

`string`
:   A mensagem de erro do [SoapFault](class.soapfault.md).

`actor`
:   Uma string que identifica o ator que causou o erro.

`details`
:   Mais detalhes sobre a causa do erro.

`name`
:   Pode ser usado para selecionar a codificação de falha adequada do WSDL.

`headerFault`
:   Pode ser usado durante a manipulação do cabeçalho SOAP para relatar um erro no
    cabeçalho de resposta.

`lang`
:   A linguagem humana na qual o SoapFault está escrita. Isso só é usado para a versão 1.2 do SOAP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `lang` foi adicionado para estar em conformidade com a especificação SOAP 1.2. |

### Examples

**Exemplo #1 Alguns exemplos**

```
<?php
function test($x)
{
    return new SoapFault("Server", "Some error message");
}

$server = new SoapServer(null, array('uri' => "http://test-uri/"));
$server->addFunction("test");
$server->handle();
?>
```

É possível usar o mecanismo de exceção PHP para lançar uma falha SOAP.

**Exemplo #2 Alguns exemplos**

```
<?php
function test($x)
{
    throw new SoapFault("Server", "Some error message");
}

$server = new SoapServer(null, array('uri' => "http://test-uri/"));
$server->addFunction("test");
$server->handle();
?>
```

### Veja também

- [SoapServer::fault()](soapserver.fault.md) - Emite falha no SoapServer indicando um erro
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
