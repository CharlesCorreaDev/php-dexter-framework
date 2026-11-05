# Retoma a execução de uma Fiber com uma exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.throw.php

---

# Fiber::throw

(PHP 8 >= 8.1.0)

Fiber::throw — Retoma a execução de uma Fiber com uma exceção

### Descrição

public function **Fiber::throw**([Throwable](class.throwable.md) `$exception`): [mixed](language.types.mixed.md)

Retoma a Fiber disparando a exceção informada a partir da chamada [Fiber::suspend()](fiber.suspend.md) atual.

Se a Fiber não estiver suspensa quando este método é chamado, uma exceção [FiberError](class.fibererror.md) será disparada.

### Parâmetros

`exception`
:   A exceção a ser disparada na Fiber a partir da chamada [Fiber::suspend()](fiber.suspend.md) atual.

### Valor Retornado

O valor fornecido à próxima chamada a [Fiber::suspend()](fiber.suspend.md) ou **`null`** se a Fiber retornar.
Se a Fiber disparar uma exceção antes de ser suspensa, ela será disparada a partir da chamada a este método.

### Examples

```
<?php

$fiber = new Fiber(function () {
   try {
       // Suspende execução do fiber declarando um ponto de interrupção
       Fiber::suspend();
   } catch (Throwable $e) {
       echo $e->getMessage();
   }
});

$fiber->start();

// Continua a execução do fiber passando
// a exceção a ser lançada no ponto de interrupção
$fiber->throw(new Exception('Mensagem de uma exceção lançada no ponto de interrupção atual'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Mensagem de uma exceção lançada no ponto de interrupção atual
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
