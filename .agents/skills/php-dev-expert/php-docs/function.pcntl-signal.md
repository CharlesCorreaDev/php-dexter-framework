# Instala um manipulador de sinal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-signal.php

---

# pcntl\_signal

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_signal — Instala um manipulador de sinal

### Descrição

function **pcntl\_signal**([int](language.types.integer.md) `$signal`, [callable](language.types.callable.md)|[int](language.types.integer.md) `$handler`, [bool](language.types.boolean.md) `$restart_syscalls` = **`true`**): [bool](language.types.boolean.md)

A função **pcntl\_signal()** instala um novo
manipulador de sinal ou substitui o manipulador de sinal atual pelo sinal indicado por `signal`.

### Parâmetros

`signal`
:   O número do sinal.

`handler`
:   O manipulador de sinal. Pode ser um [callable](language.types.callable.md), que
    será invocado para manipular o sinal, ou qualquer uma das duas constantes
    globais **`SIG_IGN`** ou **`SIG_DFL`**,
    que ignorarão o sinal ou restaurarão o manipulador de sinal padrão,
    respectivamente.

    Se um [callable](language.types.callable.md) for fornecido, ele deve implementar a seguinte
    assinatura:

    function handler([int](language.types.integer.md) `$signo`, [mixed](language.types.mixed.md) `$siginfo`): [void](language.types.void.md)

    `signal`
    :   O sinal que está sendo manipulado.

    `siginfo`
    :   Se os sistemas operacionais suportarem estruturas siginfo\_t, este parâmetro será um array de informações de sinal dependentes do sinal.

    > **Nota**:
    >
    > Observe que, quando é definido um manipulador para um método de objeto, a contagem de referências desse objeto
    > é aumentada, o que o faz persistir até que seja
    > alterado o manipulador para outra coisa ou o script termine.

`restart_syscalls`
:   Especifica se a reinicialização da chamada do sistema deve ser usada quando este
    sinal chegar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | A partir do PHP 7.1.0, a função de retorno do manipulador recebe um segundo argumento contendo o a informação do sinal específico. Este dado é fornecido somente se o sistema operacional tiver a estrutura siginfo\_t. Se o sistema operacional não implementar siginfo\_t, NULL será fornecido. |

### Examples

**Exemplo #1 Exemplo de **pcntl\_signal()****

```
<?php
pcntl_async_signals(true);

// função de manipulação de sinal
function sig_handler($signo)
{

     switch ($signo) {
         case SIGTERM:
             // manipula tarefas de desligamento
             exit;
             break;
         case SIGHUP:
             // manipula tarefas de reinicialização
             break;
         case SIGUSR1:
             echo "Capturado SIGUSR1...\n";
             break;
         default:
             // manipula todas as outras tarefas
     }

}

echo "Installing signal handler...\n";

// configure manipuladores de sinal
pcntl_signal(SIGTERM, "sig_handler");
pcntl_signal(SIGHUP,  "sig_handler");
pcntl_signal(SIGUSR1, "sig_handler");

// ou use um objeto
// pcntl_signal(SIGUSR1, array($obj, "do_something"));

echo "Gerando sinal SIGUSR1 para si mesmo...\n";

// envia SIGUSR1 ao ID de processo atual
// funções posix_* requerem a extensão posix
posix_kill(posix_getpid(), SIGUSR1);

echo "Feito\n";

?>
```

### Notas

**pcntl\_signal()** não empilha os manipuladores de sinal, mas os substitui.

#### Métodos de Despacho

Existem vários métodos de despacho de manipuladores de sinais:

- Despacho assíncrono com [pcntl\_async\_signals()](function.pcntl-async-signals.md) habilitado. Este é o método recomendado.
- Configurando a frequência de [tiques](control-structures.declare.md#control-structures.declare.ticks)
- Despacho manual com [pcntl\_signal\_dispatch()](function.pcntl-signal-dispatch.md)

Quando os sinais são despachados de forma assíncrona ou usando execução baseada em tiques, funções de bloqueio como
[sleep()](function.sleep.md) podem ser interrompidas.

### Veja também

- [» Signal (IPC)](https://en.wikipedia.org/wiki/Signal_(IPC)) na Wikipedia
- [pcntl\_async\_signals()](function.pcntl-async-signals.md) - Habilita/desabilita o tratamento de sinal assíncrono ou retorna a configuração antiga
- [pcntl\_fork()](function.pcntl-fork.md) - Bifurca o processo em execução no momento
- [pcntl\_signal\_dispatch()](function.pcntl-signal-dispatch.md) - Chama manipuladores de sinais para sinais pendentes
- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado

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
