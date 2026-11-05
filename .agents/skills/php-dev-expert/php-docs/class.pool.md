# A classe Pool

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pool.php

---

# A classe Pool

(PECL pthreads >= 2.0.0)

## Introdução

Um Pool é um contêiner e controlador de um número ajustável de Workers.

O pooling fornece uma abstração de nível mais alto da funcionalidade do Worker, incluindo o gerenciamento de referências da maneira exigida pelos pthreads.

## Resumo da classe

class **Pool**
{

/\* Propriedades \*/

protected
[$size](class.pool.md#pool.props.size);

protected
[$class](class.pool.md#pool.props.class);

protected
[$workers](class.pool.md#pool.props.workers);

protected
[$ctor](class.pool.md#pool.props.ctor);

protected
[$last](class.pool.md#pool.props.last);

/\* Métodos \*/

public function [\_\_construct](pool.construct.md)([int](language.types.integer.md) `$size`, [string](language.types.string.md) `$class` = ?, [array](language.types.array.md) `$ctor` = ?)

public function [collect](pool.collect.md)([Callable](language.types.callable.md) `$collector` = ?): [int](language.types.integer.md)

public function [resize](pool.resize.md)([int](language.types.integer.md) `$size`): [void](language.types.void.md)

public function [shutdown](pool.shutdown.md)(): [void](language.types.void.md)

public function [submit](pool.submit.md)([Threaded](class.threaded.md) `$task`): [int](language.types.integer.md)

public function [submitTo](pool.submitTo.md)([int](language.types.integer.md) `$worker`, [Threaded](class.threaded.md) `$task`): [int](language.types.integer.md)

}

## Propriedades

size
:   número máximo de Workers que este pool pode usar

class
:   a classe do Worker

workers
:   referências a Workers

ctor
:   os argumentos para o construtor de novos Workers

last
:   deslocamento em workers do último Worker usado

## Índice

- [Pool::collect](pool.collect.md) — Coleta referências a tarefas concluídas
- [Pool::\_\_construct](pool.construct.md) — Cria um novo pool de trabalhadores
- [Pool::resize](pool.resize.md) — Redimensiona o Pool
- [Pool::shutdown](pool.shutdown.md) — Desliga todos os trabalhadores
- [Pool::submit](pool.submit.md) — Envia um objeto para execução
- [Pool::submitTo](pool.submitTo.md) — Envia uma tarefa a um trabalhador específico para execução

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
