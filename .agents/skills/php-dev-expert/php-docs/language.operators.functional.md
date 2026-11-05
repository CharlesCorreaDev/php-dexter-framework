# Operadores Funcionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.functional.php

---

## Operadores Funcionais

O PHP 8.5 e versões posteriores suportam um operador que funciona diretamente em chamáveis. O operador `|>`,
ou "pipe", aceita um chamável de parâmetro único à direita e passa
o valor do lado esquerdo para ele, avaliando o resultado do chamável. O chamável
à direita pode ser qualquer chamável PHP válido: um [Closure](class.closure.md),
um [chamável de primeira classe](functions.first_class_callable_syntax.md),
um objeto que implementa [\_\_invoke()](language.oop5.magic.md#object.invoke), etc.

Isso significa que as duas linhas seguintes são logicamente equivalentes.

**Exemplo #1 Usando `|>`**

```
<?php
$result = "Hello World" |> strlen(...);
echo $result, PHP_EOL;

$result = strlen("Hello World");
echo $result, PHP_EOL;
?>
```

O exemplo acima produzirá:

```
11
11
```

Para uma única chamada, isso não é muito útil. Torna-se útil quando várias chamadas são encadeadas.
Ou seja, os dois fragmentos de código a seguir são logicamente equivalentes:

**Exemplo #2 Encadeando chamadas com |>**

```
<?php
$result = "PHP Rocks"
    |> htmlentities(...)
    |> str_split(...)
    |> (fn($x) => array_map(strtoupper(...), $x))
    |> (fn($x) => array_filter($x, fn($v) => $v != 'O'))
;
print_r($result);

$temp = "PHP Rocks";
$temp = htmlentities($temp);
$temp = str_split($temp);
$temp = array_map(strtoupper(...), $temp);
$temp = array_filter($temp, fn($v) => $v != 'O');
$result = $temp;
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => P
    [1] => H
    [2] => P
    [3] =>
    [4] => R
    [6] => C
    [7] => K
    [8] => S
)
Array
(
    [0] => P
    [1] => H
    [2] => P
    [3] =>
    [4] => R
    [6] => C
    [7] => K
    [8] => S
)
```

O lado esquerdo do pipe pode ser qualquer valor ou expressão. O lado direito
pode ser qualquer chamável PHP válido que receba um único parâmetro, ou qualquer expressão
que seja avaliado como tal chamável. Funções com mais de um parâmetro obrigatório
não são permitidas e falharão como se fossem chamadas normalmente
com argumentos insuficientes. Funções que recebem uma variável por referência não são permitidas.
Se o lado direito não for avaliado como um chamável válido, será gerado um erro.

> **Nota**:
>
> Esteja ciente de que, para evitar ambiguidade de sintaxe, [funções de seta](functions.arrow.md)
> PRECISAM ser colocadas entre parênteses quando usadas com um operador de pipe, como nos exemplos acima.
> Caso contrário, ocorrerá um erro fatal.

### Veja também

- [Closure](class.closure.md)

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
