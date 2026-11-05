# Aguarda sinais, com tempo limite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-sigtimedwait.php

---

# pcntl\_sigtimedwait

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

pcntl\_sigtimedwait — Aguarda sinais, com tempo limite

### Descrição

function **pcntl\_sigtimedwait**(  
    [array](language.types.array.md) `$signals`,  
    [array](language.types.array.md) `&$info` = [],  
    [int](language.types.integer.md) `$seconds` = 0,  
    [int](language.types.integer.md) `$nanoseconds` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **pcntl\_sigtimedwait()** opera exatamente
da mesma forma que [pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md), exceto que ela recebe
dois parâmetros adicionais, `seconds` e
`nanoseconds`, que permitem estabelecer um limite superior
para o tempo durante o qual o script é suspenso.

### Parâmetros

`signals`
:   Array de sinais a serem aguardados.

`info`
:   O parâmetro `info` é definido como um array contendo
    informações sobre o sinal. Veja
    [pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md).

`seconds`
:   Tempo limite em segundos.

`nanoseconds`
:   Tempo limite em nanossegundos.

### Valor Retornado

**pcntl\_sigtimedwait()** retorna um número de sinal em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se `signal` estiver vazio. |
| 8.4.0 | Um [TypeError](class.typeerror.md) é lançado se o valor `signal` não for um [int](language.types.integer.md). |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor `signal` for inválido. |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor `seconds` for menor que `0`. |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor `nanoseconds` for menor que `0`. |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se os valores `seconds` e `nanoseconds` forem `0`. |

### Veja também

- [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md) - Define e recupera sinais bloqueados
- [pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md) - Espera por sinais

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
