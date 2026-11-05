# Converte uma data Gregoriana para a Contagem de Dias Julianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gregoriantojd.php

---

# gregoriantojd

(PHP 4, PHP 5, PHP 7, PHP 8)

gregoriantojd — Converte uma data Gregoriana para a Contagem de Dias Julianos

### Descrição

function **gregoriantojd**([int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`, [int](language.types.integer.md) `$year`): [int](language.types.integer.md)

A escala válida para o calendário Gregoriano é de 25 de novembro de 4714 AEC até pelo menos 31 de dezembro de 9999 EC.

Embora esta função possa trabalhar com datas no passado distante até 4714
AEC, este uso pode não fazer sentido. O calendário Gregoriano não
foi instituído até 15 de outubro de 1582 (ou 5 de outubro de 1582, no
calendário Juliano). Alguns países não aceitaram este calendário
até muito tempo depois. Por exemplo, a Grã-Bretanha o adotou em 1752, a URSS em 1918
e a Grécia em 1923. A maioria dos países Europeus usaram o calendário
Juliano antes do calendário Gregoriano.

### Parâmetros

`month`
:   O mês como um número entre 1 (para janeiro) e 12 (para dezembro)

`day`
:   O dia como um número entre 1 e 31.
    Se o mês tiver menos dias do que o especificado, ocorre transbordamento; veja o exemplo
    abaixo.

`year`
:   O ano como um número entre -4714 e 9999.
    Números negativos indicam anos AEC, números positivos indicam anos EC.
    Observe que não existe ano `0`; 31 de dezembro, 1 AEC é
    seguido imediatamente por 1º de janeiro 1 EC.

### Valor Retornado

O Dia Juliano como um inteiro para a data gregoriana informada.
Datas fora da escala válida retornam `0`.

### Examples

**Exemplo #1 Funções de calendário**

```
<?php
$jd = gregoriantojd(10,11,1970);
echo "$jd\n";
$gregorian = jdtogregorian($jd);
echo "$gregorian\n";
?>
```

O exemplo acima produzirá:

```
2440871
10/11/1970
```

**Exemplo #2 Comportamento de transbordamento**

```
<?php
echo gregoriantojd(2, 31, 2018), PHP_EOL,
     gregoriantojd(3,  3, 2018), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
2458181
2458181
```

### Veja também

- [jdtogregorian()](function.jdtogregorian.md) - Converte uma data no formato "Julian Day Count" para o formato Gregoriano
- [cal\_to\_jd()](function.cal-to-jd.md) - Converte de um calendário suportado para o calendário de Contagem de Dias Julianos

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
