# Termina um processo aberto por proc_open

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.proc-terminate.php

---

# proc\_terminate

(PHP 5, PHP 7, PHP 8)

proc\_terminate — Termina um processo aberto por proc\_open

### Descrição

function **proc\_terminate**([resource](language.types.resource.md) `$process`, [int](language.types.integer.md) `$signal` = 15): [bool](language.types.boolean.md)

Envia um sinal ao processo informado em `process` (criado usando
[proc\_open()](function.proc-open.md)) informando que ele deve terminar.
**proc\_terminate()** retorna imediatamente e não espera
o término do processo.

**proc\_terminate()** permite terminar o processo e
continuar com outras tarefas. Pode-se consultar o processo (para ver se ele
já parou), usando-se a função [proc\_get\_status()](function.proc-get-status.md).

### Parâmetros

`process`
:   O recurso do tipo [resource](language.types.resource.md) criado por [proc\_open()](function.proc-open.md) que
    será fechado.

`signal`
:   Este parâmetro opcional somente é útil em sistemas operacionais POSIX;
    pode-se especificar um sinal a ser enviado ao processo
    usando a chamada de sistema `kill(2)`. O padrão é
    `SIGTERM`.

### Valor Retornado

Retorna o estado de término do processo que estava em execução.

### Veja também

- [proc\_open()](function.proc-open.md) - Executa um comando e abre ponteiros de arquivo para entrada/saída
- [proc\_close()](function.proc-close.md) - Fecha pipes a um processo aberto por proc\_open, aguarda seu encerramento e retorna seu código de saída
- [proc\_get\_status()](function.proc-get-status.md) - Obtem informação sobre um processo aberto por proc\_open

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
