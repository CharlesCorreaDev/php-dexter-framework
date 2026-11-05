# Envia um valor ao gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.send.php

---

# Generator::send

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::send — Envia um valor ao gerador

### Descrição

public function **Generator::send**([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

Envia o valor informado ao gerador como resultado da expressão [`yield`](language.generators.syntax.md#control-structures.yield)
corrente e retorna a execução do gerador.

Se o gerador não estiver na expressão [`yield`](language.generators.syntax.md#control-structures.yield) quando o método for chamado,
primeiro será deixado avançar para a primeira expressão [`yield`](language.generators.syntax.md#control-structures.yield) antes de enviar o
valor. Assim como não é necessário "forçar" os geradores do PHP com uma chamada ao método
[Generator::next()](generator.next.md) (como é feito em Python).

### Parâmetros

`value`
:   Valor a ser enviado ao gerador. Este valor será o retornado pela expressão
    [`yield`](language.generators.syntax.md#control-structures.yield) em que o gerador estiver.

### Valor Retornado

Retorna o valor gerado.

### Examples

**Exemplo #1 Usando o método **Generator::send()** para injetar valores**

```
<?php
function printer() {
    echo "Valor inicial.".PHP_EOL;
    while (true) {
        $string = yield;
        echo $string.PHP_EOL;
    }
}

$printer = printer();
$printer->send('Envio 1.');
$printer->send('Envio 2.');
?>
```

O exemplo acima produzirá:

```
Valor inicial.
Envio 1.
Envio 2.
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
