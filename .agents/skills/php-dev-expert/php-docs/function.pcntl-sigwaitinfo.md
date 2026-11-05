# Espera por sinais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-sigwaitinfo.php

---

# pcntl\_sigwaitinfo

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

pcntl\_sigwaitinfo — Espera por sinais

### Descrição

function **pcntl\_sigwaitinfo**([array](language.types.array.md) `$signals`, [array](language.types.array.md) `&$info` = []): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **pcntl\_sigwaitinfo()** suspende a execução do script de chamada
até que um dos sinais fornecidos em `signals`
seja entregue. Se um dos sinais já estiver pendente (por exemplo, bloqueado por
[pcntl\_sigprocmask()](function.pcntl-sigprocmask.md)),
**pcntl\_sigwaitinfo()** retornará imediatamente.

### Parâmetros

`signals`
:   Array de sinais a serem aguardados.

`info`
:   O parâmetro `info` é definido como uma array contendo
    informações sobre o sinal.

    Os seguintes elementos são definidos para todos os sinais:

    - signo: Número do sinal
    - errno: Um número de erro
    - code: Código de sinal

    Os seguintes elementos podem ser definidos para o sinal **`SIGCHLD`**:

    - status: Valor ou sinal de saída
    - utime: Tempo do usuário consumido
    - stime: Tempo do sistema consumido
    - pid: ID do processo que está enviando
    - uid: ID do usuário real do processo que está enviando

    Os seguintes elementos podem ser definidos para os sinais **`SIGILL`**,
    **`SIGFPE`**, **`SIGSEGV`** e
    **`SIGBUS`**:

    - addr: Local de memória que causou a falha

    O seguinte elemento pode ser definido para o sinal
    **`SIGPOLL`**:

    - band: Evento de banda
    - fd: Número do descritor de arquivo

### Valor Retornado

Retorna um número de sinal em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se `signal` estiver vazio. |
| 8.4.0 | Um [TypeError](class.typeerror.md) é lançado se o valor `signal` não for um [int](language.types.integer.md). |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor `signal` for inválido. |

### Examples

**Exemplo #1 Exemplo de **pcntl\_sigwaitinfo()****

```
<?php
echo "Sinal SIGHUP bloqueante\n";
pcntl_sigprocmask(SIG_BLOCK, array(SIGHUP));

echo "Enviando SIGHUP para si mesmo\n";
posix_kill(posix_getpid(), SIGHUP);

echo "Aguardando por sinais\n";
$info = array();
pcntl_sigwaitinfo(array(SIGHUP), $info);
?>
```

### Veja também

- [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md) - Define e recupera sinais bloqueados
- [pcntl\_sigtimedwait()](function.pcntl-sigtimedwait.md) - Aguarda sinais, com tempo limite

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
