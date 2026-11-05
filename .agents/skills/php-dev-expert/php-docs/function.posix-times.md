# Obtém tempos de processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-times.php

---

# posix\_times

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_times — Obtém tempos de processo

### Descrição

function **posix\_times**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informações sobre o uso atual da CPU.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um hash de strings com informações sobre o uso atual
da CPU do processo. Os índices do hash são:

- ticks - o número de tiques do relógio decorridos desde a
  reinicialização.
- utime - tempo do usuário usado pelo processo atual.
- stime - tempo do sistema usado pelo processo atual.
- cutime - tempo do usuário usado pelo processo atual e pelos filhos.
- cstime - tempo do sistema usado pelo processo atual e pelos filhos.

A função retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_times()****

```
<?php

$times = posix_times();

print_r($times);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [ticks] => 25814410
    [utime] => 1
    [stime] => 1
    [cutime] => 0
    [cstime] => 0
)
```

### Notas

**Aviso**

Esta função não é confiável de ser usada, ela pode retornar valores negativos
para altos valores de tempo.

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
