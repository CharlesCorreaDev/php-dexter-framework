# Fibers

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.fibers.php

---

# Fibers

### Visão geral de Fibers

(PHP 8 >= 8.1.0)

Fibers representam funções interruptíveis de pilha completa. Fibers podem ser suspensas de qualquer lugar na pilha de chamadas,
pausando a execução dentro de Fiber até que Fiber seja retomada posteriormente.

Fibers pausam toda a pilha de execução, portanto, o chamador direto da função não precisa alterar a forma
como invoca a função.

A execução pode ser interrompida em qualquer lugar na pilha de chamadas usando [Fiber::suspend()](fiber.suspend.md)
(ou seja, a chamada para [Fiber::suspend()](fiber.suspend.md) pode estar em uma função profundamente aninhada ou nem
mesmo existir).

Ao contrário dos [Generator](class.generator.md)s, cada [Fiber](class.fiber.md) tem sua própria pilha de chamadas,
permitindo que sejam pausadas em chamadas de função profundamente aninhadas. Uma função que declara um ponto de interrupção
(isto é, chamando [Fiber::suspend()](fiber.suspend.md)) não precisa alterar seu tipo de retorno, ao contrário de uma função
que usa [`yield`](language.generators.syntax.md#control-structures.yield), que deve retornar uma instância de [Generator](class.generator.md).

Fibers podem ser suspensas em qualquer chamada de função, incluindo aquelas chamadas de dentro da VM PHP, como funções
fornecidas para [array\_map()](function.array-map.md) ou métodos chamados por [`foreach`](control-structures.foreach.md) em um
objeto [Iterator](class.iterator.md).

Uma vez suspensa, a execução de Fiber pode ser retomada com qualquer valor usando [Fiber::resume()](fiber.resume.md)
ou lançando uma exceção na Fiber usando [Fiber::throw()](fiber.throw.md). O valor é retornado
(ou exceção lançada) de [Fiber::suspend()](fiber.suspend.md).

> **Nota**:
>
> Antes do PHP 8.4.0, trocas de Fibers durante a execução de um
> [destrutor](language.oop5.decon.md#language.oop5.decon.destructor) de objeto não eram
> permitidas.

**Exemplo #1 Uso básico**

```
<?php
$fiber = new Fiber(function (): void {
   $value = Fiber::suspend('fiber');
   echo "Value used to resume fiber: ", $value, PHP_EOL;
});

$value = $fiber->start();

echo "Value from fiber suspending: ", $value, PHP_EOL;

$fiber->resume('test');
?>
```

O exemplo acima produzirá:

```
Value from fiber suspending: fiber
Value used to resume fiber: test
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
