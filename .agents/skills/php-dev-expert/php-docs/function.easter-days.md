# Obtém o número de dias depois de 21 de março no qual a Páscoa cai para um determinado ano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.easter-days.php

---

# easter\_days

(PHP 4, PHP 5, PHP 7, PHP 8)

easter\_days — Obtém o número de dias depois de 21 de março no qual a Páscoa cai para um determinado ano

### Descrição

function **easter\_days**([?](language.types.null.md)[int](language.types.integer.md) `$year` = **`null`**, [int](language.types.integer.md) `$mode` = **`CAL_EASTER_DEFAULT`**): [int](language.types.integer.md)

Retorna o número de dias depois de 21 de março no qual a Páscoa cai
para um determinado ano. Se nenhum ano for especificado, o ano atual é
assumido como parâmetro.

Esta função pode ser usada no lugar de
[easter\_date()](function.easter-date.md) para calculas a Páscoa para anos
que caiam fora do intervalo de timestamps Unix (isto é, antes de 1970
ou depois de 2037).

A data do Dia de Páscoa foi definida pelo Concílio de Niceia no
ano 325 D.C. como o domingo após a primeira lua cheia que caia no
Equinócio de Primavera ou depois dele. Assume-se que o Equinócio seja sempre
no dia 21 de março, portanto o cálculo se reduz a determinar a data
da lua cheia e a data do domingo seguinte. O
algoritmo usado aqui foi introduzido por volta do ano 532 por
Dionísio, o Exíguo. Sob o calendário Juliano (para anos anteriores a
1753) um ciclo simples de 19 anos é usado para acompanhar as fases da
lua. Sob o calendário Gregoriano (para anos posteriores a 1753 -
concebido por Cristóvão Clávio e Luís Lílio, e introduzido pelo Papa Gregório
XIII em outubro de 1582, e na Grã-Bretanha e suas então colônias em
setembro de 1752) dois fatores de correção são adicionados para deixar
o ciclo mais preciso.

### Parâmetros

`year`
:   O ano como número positivo. Se omitido ou **`null`**, é usado como padrão
    o ano atual conforme o horário local.

`mode`
:   Permite que datas de Páscoa sejam calculadas com base no calendário
    Gregoriano durante os anos 1582 a 1752 quando definido para
    **`CAL_EASTER_ROMAN`**. Consulte também as
    [constantes de calendário](calendar.constants.md) para mais constantes válidas.

### Valor Retornado

O número de dias depois de 21 de março onde cai o domingo de Páscoa
no ano informado no parâmetro `year`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `year` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **easter\_days()****

```
<?php

echo easter_days(1999);        // 14, isto é, 4 de abril
echo easter_days(1492);        // 32, isto é, 22 de abril
echo easter_days(1913);        //  2, isto é, 23 de março

?>
```

### Veja também

- [easter\_date()](function.easter-date.md) - Obtém o timestamp Unix para a meia-noite local da Páscoa de um ano informado

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
