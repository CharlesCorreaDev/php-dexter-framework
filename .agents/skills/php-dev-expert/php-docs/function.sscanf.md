# Interpreta a entrada de uma string de acordo com um formato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sscanf.php

---

# sscanf

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

sscanf — Interpreta a entrada de uma string de acordo com um formato

### Descrição

function **sscanf**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `&...$vars`): [array](language.types.array.md)|[int](language.types.integer.md)|[null](language.types.null.md)

A função **sscanf()** é a análoga de entrada a
[printf()](function.printf.md). **sscanf()** lê
da string `string` e interpreta-a
de acordo com o especificado em `format`.

Qualquer espaço em branco na string de formato corresponde a qualquer espaço
em branco na string de entrada. Isto significa que até mesmo uma tabulação (`\t`) na string de formato pode corresponder
a um caractere de espaço simples na string de entrada.

### Parâmetros

`string`
:   A [string](language.types.string.md) de entrada a ser analisada.

`format`
:   O formato interpretado para `string`, que é
    descrito na documentação para [sprintf()](function.sprintf.md) com
    as seguintes diferenças:

    - A função não reconhece a localidade.
    - `F`, `g`, `G` e
      `b` não são suportados.
    - `D` significa número decimal.
    - `i` significa inteiro com detecção de base.
    - `n` representa o número de caracteres processados até o momento.
    - `s` pára de ler em qualquer caractere de espaço em branco.
    - `*` em vez de `argnum$` suprime
      a atribuição desta especificação de conversão.

`vars`
:   Variáveis opcionais passadas por referência que conterão os valores analisados.

### Valor Retornado

Se apenas dois parâmetros forem passados para esta função, os valores interpretados
serão retornados como um [array](language.types.array.md). Caso contrário, se parâmetros opcionais forem passados, a
função retornará o número de valores atribuídos. Os parâmetros opcionais
precisam ser passados por referência.

Se houver mais substrings esperadas em `format`
do que estiverem disponíveis na `string`,
**`null`** será retornado.

Quando parâmetros opcionais são usados e o fim da `string`
de entrada é alcançado antes que qualquer valor tenha sido interpretado,
`-1` é retornado.

### Examples

**Exemplo #1 Exemplo de **sscanf()****

```
<?php
// Pegando o número serial
list($serial) = sscanf("SN/2350001", "SN/%d");
// e a data de produção
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "O item $serial foi produzido em: $year-" . substr($month, 0, 3) . "-$day\n";
?>
```

Se parâmetros opcionais forem passados, a função retornará o
número de valores atribuídos.

**Exemplo #2 **sscanf()** - usando parâmetros opcionais**

```
<?php
// pega informação do autor e gera uma entrada de DocBook
$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
echo "<author id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>\n";
?>
```

### Veja também

- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [fprintf()](function.fprintf.md) - Escreve uma string formatada para um fluxo
- [vprintf()](function.vprintf.md) - Mostra uma string formatada
- [vsprintf()](function.vsprintf.md) - Retorna uma string formatada
- [vfprintf()](function.vfprintf.md) - Escreve uma string formatada para um fluxo
- [fscanf()](function.fscanf.md) - Interpreta a leitura de um arquivo de acordo com um formato
- [number\_format()](function.number-format.md) - Formata um número com milhares agrupados
- [date()](function.date.md) - Formata um timestamp Unix

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
