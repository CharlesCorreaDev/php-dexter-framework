# A classe Swoole\Process

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-process.php

---

# A classe Swoole\Process

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Process**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[IPC\_NOWAIT](class.swoole-process.md#swoole-process.constants.ipc-nowait) = 256;

/\* Métodos \*/

public static function [alarm](swoole-process.alarm.md)([int](language.types.integer.md) `$interval_usec`): [void](language.types.void.md)

public function [close](swoole-process.close.md)(): [void](language.types.void.md)

public static function [daemon](swoole-process.daemon.md)([bool](language.types.boolean.md) `$nochdir` = ?, [bool](language.types.boolean.md) `$noclose` = ?): [void](language.types.void.md)

public function [\_\_destruct](swoole-process.destruct.md)(): [void](language.types.void.md)

public function [exec](swoole-process.exec.md)([string](language.types.string.md) `$exec_file`, [string](language.types.string.md) `$args`): ReturnType

public function [exit](swoole-process.exit.md)([string](language.types.string.md) `$exit_code` = ?): [void](language.types.void.md)

public function [freeQueue](swoole-process.freequeue.md)(): [void](language.types.void.md)

public static function [kill](swoole-process.kill.md)([int](language.types.integer.md) `$pid`, [int](language.types.integer.md) `$signal_no` = ?): [bool](language.types.boolean.md)

public function [name](swoole-process.name.md)([string](language.types.string.md) `$process_name`): [bool](language.types.boolean.md)

public function [pop](swoole-process.pop.md)([int](language.types.integer.md) `$maxsize` = ?): [mixed](language.types.mixed.md)

public function [push](swoole-process.push.md)([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [read](swoole-process.read.md)([int](language.types.integer.md) `$maxsize` = ?): [string](language.types.string.md)

public static function [signal](swoole-process.signal.md)([string](language.types.string.md) `$signal_no`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [start](swoole-process.start.md)(): [void](language.types.void.md)

public function [statQueue](swoole-process.statqueue.md)(): [array](language.types.array.md)

public function [useQueue](swoole-process.usequeue.md)([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$mode` = ?): [bool](language.types.boolean.md)

public static function [wait](swoole-process.wait.md)([bool](language.types.boolean.md) `$blocking` = ?): [array](language.types.array.md)

public function [write](swoole-process.write.md)([string](language.types.string.md) `$data`): [int](language.types.integer.md)

}

## Constantes predefinidas

**`Swoole\Process::IPC_NOWAIT`**

## Índice

- [Swoole\Process::alarm](swoole-process.alarm.md) — Temporizador de alta precisão que dispara um sinal em intervalos fixos.
- [Swoole\Process::close](swoole-process.close.md) — Fecha a conexão (pipe) para o processo filho.
- [Swoole\Process::\_\_construct](swoole-process.construct.md) — Constrói um processo.
- [Swoole\Process::daemon](swoole-process.daemon.md) — Transforma o processo em um processo daemon.
- [Swoole\Process::\_\_destruct](swoole-process.destruct.md) — Destrói o processo.
- [Swoole\Process::exec](swoole-process.exec.md) — Executa comandos do sistema.
- [Swoole\Process::exit](swoole-process.exit.md) — Para os processos filhos.
- [Swoole\Process::freeQueue](swoole-process.freequeue.md) — Destrói a fila de mensagens criada por swoole\_process::useQueue.
- [Swoole\Process::kill](swoole-process.kill.md) — Envia sinal para o processo filho.
- [Swoole\Process::name](swoole-process.name.md) — Define o nome do processo.
- [Swoole\Process::pop](swoole-process.pop.md) — Lê e remove dados da fila de mensagens.
- [Swoole\Process::push](swoole-process.push.md) — Escreve e insere dados na fila de mensagens.
- [Swoole\Process::read](swoole-process.read.md) — Lê os dados enviados para o processo.
- [Swoole\Process::signal](swoole-process.signal.md) — Envia sinal para os processos filhos.
- [Swoole\Process::start](swoole-process.start.md) — Inicia o processo.
- [Swoole\Process::statQueue](swoole-process.statqueue.md) — Obtém as estatísticas da fila de mensagens usada como método de comunicação entre processos.
- [Swoole\Process::useQueue](swoole-process.usequeue.md) — Cria uma fila de mensagens como método de comunicação entre o processo pai e os processos filhos.
- [Swoole\Process::wait](swoole-process.wait.md) — Aguarda os eventos dos processos filhos.
- [Swoole\Process::write](swoole-process.write.md) — Escreve dados na conexão (pipe) e comunica com o processo pai ou processos filhos.

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
