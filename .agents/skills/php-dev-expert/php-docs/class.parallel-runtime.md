# A classe parallel\Runtime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-runtime.php

---

# A classe parallel\Runtime

(0.8.0)

## Runtime Objects

Cada tempo de execução representa um único thread PHP, o thread é criado (e inicializado) durante a construção.
O thread então espera que as tarefas sejam agendadas: As tarefas agendadas serão executadas FIFO e então o thread continuará esperando até
que mais tarefas sejam agendadas ou seja fechado, eliminado ou destruído pelas regras normais de escopo dos objetos PHP.

**Aviso**

Quando um tempo de execução é destruído pelas regras normais de escopo de objetos PHP, ele primeiro executará todas as tarefas que foram agendadas
e bloqueará ao fazê-lo.

## Bootstrapping em tempo de execução

Quando um novo tempo de execução é criado, ele não compartilha código com o thread (ou processo) que o criou. Isso significa que ele não possui as mesmas
classes e funções carregadas, nem o mesmo conjunto de autoloader. Em alguns casos, um tempo de execução muito leve é desejável porque as tarefas que
serão agendadas não precisam de acesso ao código no thread pai. Nos casos em que as tarefas precisam acessar o mesmo código, basta
definir um autoloader como bootstrap.

> **Nota**:
>
> preloading pode ser usado em conjunto com o parallel; neste caso, o código pré-carregado está disponível sem inicialização

## Resumo da classe

final
class **parallel\Runtime**
{

/\* Create \*/

public function [\_\_construct](parallel-runtime.construct.md)()

public function [\_\_construct](parallel-runtime.construct.md)([string](language.types.string.md) `$bootstrap`)

/\* Execute \*/

public function [run](parallel-runtime.run.md)([Closure](class.closure.md) `$task`): [?](language.types.null.md)Future

public function [run](parallel-runtime.run.md)([Closure](class.closure.md) `$task`, [array](language.types.array.md) `$argv`): [?](language.types.null.md)Future

/\* Join \*/

public function [close](parallel-runtime.close.md)(): [void](language.types.void.md)

public function [kill](parallel-runtime.kill.md)(): [void](language.types.void.md)

}

## Índice

- [parallel\Runtime::\_\_construct](parallel-runtime.construct.md) — Construção de Runtime
- [parallel\Runtime::run](parallel-runtime.run.md) — Execução
- [parallel\Runtime::close](parallel-runtime.close.md) — Encerramento elegante de Runtime
- [parallel\Runtime::kill](parallel-runtime.kill.md) — Encerramento de Runtime

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
