# A classe Swoole\Coroutine\Lock

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-coroutine-lock.php

---

# A classe Swoole\Coroutine\Lock

(No version information available, might only be in Git)

## Introdução

O Swoole 6.0.1 introduziu um bloqueio de corrotina que suporta compartilhamento entre processos e entre threads.
Este bloqueio foi projetado com comportamento não bloqueante e permite a sincronização eficiente de corrotinas
em ambientes multiprocessos e multithreads.

Quando compilado com a opção `--enable-iouring` e o kernel Linux suporta
o recurso `io_uring futex`, o bloqueio de corrotina do Swoole implementa a sincronização
usando `io_uring futex`. Nesse caso, as corrotinas aguardam o despertar dos bloqueios usando
um mecanismo de enfileiramento eficiente, melhorando significativamente o desempenho.

Sem `io_uring futex`, o bloqueio da corrotina retorna a um mecanismo de espera exponencial
em que o tempo de espera aumenta em 2^n milissegundos (n sendo o número de falhas)
após cada tentativa frustrada de obter o bloqueio. Embora essa abordagem evite esperas ocupadas, ela introduz
sobrecarga e latência adicionais de escalonamento da CPU.

O bloqueio da corrotina é reentrante, permitindo que a corrotina atualmente em espera execute com segurança
múltiplas operações de bloqueio.

**Aviso**

Não crie bloqueios em funções de retorno como `onReceive`, pois isso causará
crescimento contínuo e vazamentos de memória.

**Aviso**

O bloqueio e o desbloqueio devem ser realizados na mesma corrotina, caso contrário,
as condições estáticas serão quebradas.

## Resumo da classe

class **Swoole\Coroutine\Lock**
{

/\* Métodos \*/

public function [\_\_construct](swoole-coroutine-lock.construct.md)(): [void](language.types.void.md)

public function [lock](swoole-coroutine-lock.lock.md)(): [bool](language.types.boolean.md)

public function [trylock](swoole-coroutine-lock.trylock.md)(): [bool](language.types.boolean.md)

public function [unlock](swoole-coroutine-lock.unlock.md)(): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 Uso básico**

```
<?php
use Swoole\Coroutine\Lock;
use Swoole\Coroutine\WaitGroup;
use function Swoole\Coroutine\go;
use function Swoole\Coroutine\run;

$lock = new Lock();
$waitGroup = new WaitGroup();

run(function() use ($lock, $waitGroup) {
    go(function() use ($lock, $waitGroup) {
        $waitGroup->add();
        $lock->lock();
        sleep(1);
        $lock->unlock();
        $waitGroup->done();
    });

    go(function() use ($lock, $waitGroup) {
        $waitGroup->add();
        $lock->lock(); // Aguarda o desbloqueio da corrotina de retenção
        sleep(1);
        $lock->unlock();
        $waitGroup->done();
    });

    echo 'O bloqueio não bloqueia o processo';
    $waitGroup->wait();
});
```

## Índice

- [Swoole\Coroutine\Lock::\_\_construct](swoole-coroutine-lock.construct.md) — Constrói um novo bloqueio de corrotina
- [Swoole\Coroutine\Lock::lock](swoole-coroutine-lock.lock.md) — Adquire o bloqueio, bloqueando se necessário
- [Swoole\Coroutine\Lock::trylock](swoole-coroutine-lock.trylock.md) — Tenta adquirir o bloqueio sem bloquear
- [Swoole\Coroutine\Lock::unlock](swoole-coroutine-lock.unlock.md) — Libera o bloqueio

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
