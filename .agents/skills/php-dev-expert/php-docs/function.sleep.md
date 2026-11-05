# Atrasa a execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sleep.php

---

# sleep

(PHP 4, PHP 5, PHP 7, PHP 8)

sleep — Atrasa a execução

### Descrição

function **sleep**([int](language.types.integer.md) `$seconds`): [int](language.types.integer.md)

Atrasa a execução do programa pelo número de segundos informado no parâmetro
`seconds`.

> **Nota**:
>
> Para atrasar a execução do programa por uma fração de um segundo, use a função [usleep()](function.usleep.md)
> pois a função **sleep()** espera um número [int](language.types.integer.md). Por exemplo `sleep(0.25)` irá
> pausar a execução do programa por `0` segundo.

### Parâmetros

`seconds`
:   Tempo de parada em segundos (deve ser maior ou igual a `0`).

### Valor Retornado

Retorna zero em caso de sucesso.

Se a chamada foi interrompida por um sinal, a função **sleep()** retorna
um valor não-zero. No Windows, este valor será sempre
`192` (o valor da constante
**`WAIT_IO_COMPLETION`** dentro da API do Windows).
Em outras plataformas, o valor de retorno será o número de segundos que faltam
para terminar a parada.

### Erros/Exceções

Se o número de segundos especificado em `seconds` for negativo,
esta função irá lançar um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A função lança um [ValueError](class.valueerror.md) para valores negativos de `seconds`; anteriormente, um **`E_WARNING`** era emitido, e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **sleep()****

```
<?php

// horário atual
echo date('h:i:s') . "\n";

// dorme por 10 seconds
sleep(10);

// acorde !
echo date('h:i:s') . "\n";

?>
```

Este exemplo irá mostrar (depois de 10 segundos)

```
05:31:23
05:31:33
```

### Veja também

- [usleep()](function.usleep.md) - Atrasa a execução em microssegundos
- [time\_nanosleep()](function.time-nanosleep.md) - Atrasa por um número de segundos e nanossegundos
- [time\_sleep\_until()](function.time-sleep-until.md) - Faz o script pausar até o horário especificado
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
