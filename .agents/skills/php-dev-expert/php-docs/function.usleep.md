# Atrasa a execução em microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.usleep.php

---

# usleep

(PHP 4, PHP 5, PHP 7, PHP 8)

usleep — Atrasa a execução em microssegundos

### Descrição

function **usleep**([int](language.types.integer.md) `$microseconds`): [void](language.types.void.md)

Atrasa a execução do programa pelo número especificado de microssegundos.

### Parâmetros

`microseconds`
:   Tempo de parada em microssegundos. Um microssegundo é um milionésimo de
    segundo.

    > **Nota**:
    >
    > Valores maiores que `1000000` (isto é, pausar por mais que um segundo)
    > pode não ser suportado pelo sistema operacional. Use a função [sleep()](function.sleep.md) neste caso.

    > **Nota**:
    >
    > A pausa pode ser aumentada um pouco (isto é, ficar mais longa que o parâmetro `microseconds`)
    > por qualquer atividade do sistema, por tempo gasto no processamento da chamada ou pela granularidade dos cronômetros do sistema.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **usleep()****

```
<?php

// Horário atual
echo (new DateTime('now'))->format('H:i:s.v'), "\n";

// espera por 2 milissegundos
usleep(2000);

// de volta!
echo (new DateTime('now'))->format('H:i:s.v'), "\n";

// espera por 30 milissegundos
usleep(30000);

// de volta novamente!
echo (new DateTime('now'))->format('H:i:s.v'), "\n";

?>
```

O exemplo acima produzirá:

```
11:13:28.005
11:13:28.007
11:13:28.037
```

### Veja também

- [sleep()](function.sleep.md) - Atrasa a execução
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
