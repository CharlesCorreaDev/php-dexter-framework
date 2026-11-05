# Adiciona uma ou mais funções para lidar com solicitações SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.addfunction.php

---

# SoapServer::addFunction

(PHP 5, PHP 7, PHP 8)

SoapServer::addFunction — Adiciona uma ou mais funções para lidar com solicitações SOAP

### Descrição

public function **SoapServer::addFunction**([array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$functions`): [void](language.types.void.md)

Exporta uma ou mais funções para clientes remotos

### Parâmetros

`functions`
:   Para exportar uma função, passe o nome da função para este parâmetro como
    uma string.

    Para exportar diversas funções, passe um array de nomes de funções.

    Para exportar todas as funções, passe um array com o nome de todas as funções.

    A partir do PHP 8.4.0, passar um valor [int](language.types.integer.md) (incluindo
    **`SOAP_FUNCTIONS_ALL`**) foi descontinuado.
    Use [get\_defined\_functions()](function.get-defined-functions.md) para obter os nomes de todas as funções
    e passá-los como um array.

    > **Nota**:
    >
    > `functions` devem receber todos os argumentos de entrada na mesma
    > ordem definida no arquivo WSDL (eles não devem receber nenhum parâmetro de saída
    > como argumentos) e retornar um ou mais valores. Para retornar vários valores eles devem
    > retornar um array com parâmetros de saída nomeados.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar um [int](language.types.integer.md) para **SoapServer::addFunction()**, incluindo **`SOAP_FUNCTIONS_ALL`**, foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **SoapServer::addFunction()****

```
<?php

function echoString($inputString)
{
    return $inputString;
}

$server->addFunction("echoString");

function echoTwoStrings($inputString1, $inputString2)
{
    return array("outputString1" => $inputString1,
                 "outputString2" => $inputString2);
}
$server->addFunction(array("echoString", "echoTwoStrings"));

$functions = array_merge(...get_defined_functions());
$server->addFunction($functions);

?>
```

### Veja também

- [SoapServer::\_\_construct()](soapserver.construct.md) - Construtor SoapServer
- [SoapServer::setClass()](soapserver.setclass.md) - Define a classe que trata as solicitações SOAP

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
