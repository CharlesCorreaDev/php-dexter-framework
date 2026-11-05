# Atrasa por um número de segundos e nanossegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.time-nanosleep.php

---

# time\_nanosleep

(PHP 5, PHP 7, PHP 8)

time\_nanosleep — Atrasa por um número de segundos e nanossegundos

### Descrição

function **time\_nanosleep**([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$nanoseconds`): [array](language.types.array.md)|[bool](language.types.boolean.md)

Atrasa a execução do programa pelo número de segundos informado em
`seconds` e de nanossegundos informado em `nanoseconds`.

### Parâmetros

`seconds`
:   Deve ser um inteiro não negativo.

`nanoseconds`
:   Deve ser um inteiro não negativo menor que um 1 bilhão.

    > **Nota**:
    >
    > No Windows, o sistema pode atrasar mais que o número de nanossegundos informado,
    > dependendo do equipamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Se o atraso foi interrompido por um sinal, um array associativo será
retornado com os componentes:

- `seconds` - número de segundos remanescentes
  no atraso
- `nanoseconds` - número de nanossegundos
  remanescentes no atraso

### Examples

**Exemplo #1 Exemplo de **time\_nanosleep()****

```
<?php
// Cuidado! Não vai funcionar como esperado se um array for retornado
if (time_nanosleep(0, 500000000)) {
    echo "Dormi por meio segundo.\n";
}

// Assim é melhor:
if (time_nanosleep(0, 500000000) === true) {
    echo "Dormi por meio segundo.\n";
}

// E assim é o melhor:
$nano = time_nanosleep(2, 100000);

if ($nano === true) {
    echo "Dormi por 2 segundos, 100 microssegundos.\n";
} elseif ($nano === false) {
    echo "Pausa falhou.\n";
} elseif (is_array($nano)) {
    $seconds = $nano['seconds'];
    $nanoseconds = $nano['nanoseconds'];
    echo "Interrompido por um sinal.\n";
    echo "Tempo remanescente: $seconds segundos, $nanoseconds nanossegundos.";
}
?>
```

### Veja também

- [sleep()](function.sleep.md) - Atrasa a execução
- [usleep()](function.usleep.md) - Atrasa a execução em microssegundos
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
