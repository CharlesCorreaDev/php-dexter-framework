# Converte Dia Juliano para timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdtounix.php

---

# jdtounix

(PHP 4, PHP 5, PHP 7, PHP 8)

jdtounix — Converte Dia Juliano para timestamp Unix

### Descrição

function **jdtounix**([int](language.types.integer.md) `$julian_day`): [int](language.types.integer.md)

Esta função irá retorna um timestamp Unix correspondente ao
Dia Juliano especificado no parâmetro `julian_day`. O horário retornado é
UTC.

### Parâmetros

`julian_day`
:   O número de dia juliano entre `2440588` e `106751993607888`
    em sistemas de 64 bits, ou entre `2440588` e `2465443` em sistemas de 32 bits

### Valor Retornado

O timestamp Unix para o início (meia noite, não meio dia) do dia juliano informado

### Erros/Exceções

Se `julian_day` estiver fora do intervalo permitido,
um [ValueError](class.valueerror.md) é lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Essa funcão não retorna mais **`false`** em caso de falha, mas lança um [ValueError](class.valueerror.md). |
| 7.3.24, 7.4.12 | O limite superior de `julian_day` foi estendido. Antes, era `2465342` sem levar em consideração a arquitetura. |

### Veja também

- [unixtojd()](function.unixtojd.md) - Converte um timestamp Unix para um dia Juliano

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
