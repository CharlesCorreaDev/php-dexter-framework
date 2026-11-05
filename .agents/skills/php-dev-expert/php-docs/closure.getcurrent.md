# Retorna o closure em execução no momento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.getcurrent.php

---

# Closure::getCurrent

(PHP 8 >= 8.5.0)

Closure::getCurrent — Retorna o closure em execução no momento

### Descrição

public static function **Closure::getCurrent**(): [Closure](class.closure.md)

Retorna o closure em execução no momento. Este método é útil principalmente
para implementar closures recursivos sem a necessidade de capturar uma referência
à variável do closure com a palavra-chave `use`.

Este método precisa ser chamado de dentro de um closure; chamá-lo de fora de um
contexto de closure resultará em um erro `Error: Current function is not a closure.`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a instância do [Closure](class.closure.md) em execução.

### Erros/Exceções

Lança um [Error](class.error.md) se chamado de fora de um contexto de
closure.

### Examples

**Exemplo #1 Exemplo de **Closure::getCurrent()****

Usando **Closure::getCurrent()** para implementar uma
função de Fibonacci recursiva:

```
<?php
$fibonacci = function (int $n) {
    if ($n === 0 || $n === 1) {
        return $n;
    }

    $fn = Closure::getCurrent();
    return $fn($n - 1) + $fn($n - 2);
};

echo $fibonacci(10); // Exibe: 55
?>
```

**Exemplo #2 Comparação com método tradicional**

Antes do PHP 8.5, para implementar closures recursivos era necessário capturar uma referência
à variável do closure usando a palavra-chave `use`:

```
<?php
// Método tradicional (ainda funciona no PHP 8.5)
$fibonacci = function (int $n) use (&$fibonacci) {
    if ($n === 0) return 0;
    if ($n === 1) return 1;
    return $fibonacci($n - 1) + $fibonacci($n - 2);
};

echo $fibonacci(10); // Exibe: 55
?>
```

O método **Closure::getCurrent()** elimita a necessidade de
declarar a variável com uma referência na cláusula `use`,
tornando o código mais limpo e menos suscetível a erros.

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
