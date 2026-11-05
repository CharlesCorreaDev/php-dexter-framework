# Faz o script pausar até o horário especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.time-sleep-until.php

---

# time\_sleep\_until

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

time\_sleep\_until — 
Faz o script pausar até o horário especificado

### Descrição

function **time\_sleep\_until**([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

Faz o script pausar até o horário especificado em
`timestamp`.

### Parâmetros

`timestamp`
:   O timestamp que representa o horário no qual o script deve acordar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o `timestamp` especificado estiver no passado, esta
função irá gerar um **`E_WARNING`**.

### Examples

**Exemplo #1 Um exemplo de **time\_sleep\_until()****

```
<?php

//retorna falso e gera um alerta
var_dump(time_sleep_until(time()-1));

// pode ser que funcione somente em computadores mais rápidos, irá pausar por até 0,2 segundo
var_dump(time_sleep_until(microtime(true)+0.2));

?>
```

### Notas

> **Nota**:
>
> Todos os sinais serão entregues depois que o script acordar.

### Veja também

- [sleep()](function.sleep.md) - Atrasa a execução
- [usleep()](function.usleep.md) - Atrasa a execução em microssegundos
- [time\_nanosleep()](function.time-nanosleep.md) - Atrasa por um número de segundos e nanossegundos
- [set\_time\_limit()](function.set-time-limit.md) - Limita o máximo tempo de execução

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
