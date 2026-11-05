# Chama uma função SOAP (descontinuada)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.call.php

---

# SoapClient::\_\_call

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_call — Chama uma função SOAP (descontinuada)

### Descrição

public function **SoapClient::\_\_call**([string](language.types.string.md) `$name`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

Chamar este método diretamente foi descontinuado. Em vez disso, recomenda-se a utilização das funções SOAP
como métodos do objeto [SoapClient](class.soapclient.md). No entanto, em alguns casos pode ser necessário utilizar opções adicionais ou chamar funções
com nomes dinâmicos, e nesses casos é recomendado utilizar o método [SoapClient::\_\_soapCall()](soapclient.soapcall.md).
Este último permite um controle mais detalhado sobre a chamada da função, incluindo a especificação do nome da função como uma string.

### Parâmetros

`name`
:   O nome da função SOAP a ser chamada.

`args`
:   Ao chamar uma função SOAP, é necessário passar os argumentos adequados para que a operação seja executada corretamente. Esses argumentos são fornecidos como um array,
    que pode ser organizado de duas formas distintas: array indexado (também conhecido por "array ordenado") ou array associativo. É importante notar que muitos servidores SOAP
    requerem que os nomes dos parâmetros sejam fornecidos na chamada da função. Nesse caso, é necessário utilizar um array associativo para garantir que cada valor seja atribuído ao parâmetro correto.

### Valor Retornado

Funções SOAP podem retornar um ou vários valores.
Caso a função retorne apenas um valor, tratar-se-á um valor escalar.
Se vários valores forem retornados, em vez disso, será retornado um array associativo de parâmetros de saída nomeados.
Já no caso de retornar múltiplos valores, tratar-se-á de um array associativo de parâmetros de saída nomeados.

Ao ocorrer um erro durante a execução de uma operação SOAP, o objeto [SoapClient](class.soapclient.md) poderá retornar um objeto [SoapFault](class.soapfault.md)
para indicar o problema. No entanto, vale referir que esse comportamento depende da opção `exceptions`, sendo que esta pode ser
configurada no momento que o objecto é instanciado. Caso ocorra um erro e essa opção esteja definida como **`false`**, a biblioteca do PHP não lançará uma exceção.

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
