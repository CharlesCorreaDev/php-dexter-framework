# Envia uma string formatada para a saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.printf.php

---

# printf

(PHP 4, PHP 5, PHP 7, PHP 8)

printf — Envia uma string formatada para a saída

### Descrição

function **printf**([string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `...$values`): [int](language.types.integer.md)

Produz uma saída de acordo com o formato definido no parâmetro `format`.

### Parâmetros

`format`
:   A string de formato é composta de zero ou mais diretivas:
    caracteres comuns (excluindo `%`) que são
    copiados diretamente para o resultado e *especificações
    de conversão*, cada uma das quais resulta na busca de seu
    próprio parâmetro.

    Uma especificação de conversão segue este protótipo:
    `%[argnum$][flags][width][.precision]especificador`.

    ##### Argnum

    Um número inteiro seguido por um cifrão `$`,
    para especificar qual o número de argumento a tratar na conversão.

    ##### Flags

    | Sinalizador | Descrição |
    | --- | --- |
    | `-` | Justificar à esquerda dentro da largura de campo especificada; A justificação à direita é o padrão. |
    | `+` | Prefixa números positivos com um sinal de mais `+`; Por padrão, apenas números negativos são prefixados com um sinal negativo. |
    | (espaço) | Preenche o resultado com espaços. Este é o padrão. |
    | `0` | Preenche números com zeros apenas à esquerda. Com os especificadores `s`, também pode preencher com zeros à direita. |
    | `'`(caractere) | Preenche o resultado com o caractere especificado. |

    ##### Width

    Um número inteiro que define em quantos caracteres (mínimo)
    esta conversão deve resultar, ou `*`.
    Se `*` for usado, a largura será fornecida
    como um valor inteiro adicional precedendo aquele formatado
    pelo especificador.

    ##### Precision

    Um ponto `.` opcionalmente seguido por
    um número inteiro ou `*`,
    cujo significado depende do especificador:

    - Para os especificadores `e`, `E`,
      `f` e `F`:
      este é o número de dígitos a serem impressos
      após o ponto decimal (por padrão, é 6).
    - Para os especificadores `g`, `G`,
      `h` e `H`:
      este é o número máximo de dígitos
      significativos a serem impressos.
    - Para o especificador `s`: atua como um ponto de corte,
      definindo um limite máximo de caracteres para a string.

    > **Nota**:
    >
    > Se o ponto for especificado sem um valor explícito para precisão,
    > 0 é assumido. Se `*` for usado, a precisão é
    > fornecida como um valor inteiro adicional precedendo aquele formatado
    > pelo especificador.

    **Especificadores**

    | Especificador | Descrição |
    | --- | --- |
    | `%` | Um caractere literal de porcentagem. Nenhum argumento é necessário. |
    | `b` | O argumento é tratado como um número inteiro e apresentado como um número binário. |
    | `c` | O argumento é tratado como um número inteiro e apresentado como o caractere com aquele código ASCII. |
    | `d` | O argumento é tratado como um número inteiro e apresentado como um número decimal (com sinal). |
    | `e` | O argumento é tratado como notação científica (por exemplo, 1.2e+2). |
    | `E` | Como o especificador `e`, mas usa letra maiúscula (por exemplo, 1.2E+2). |
    | `f` | O argumento é tratado como um float e apresentado como um número de ponto flutuante (com reconhecimento da localidade). |
    | `F` | O argumento é tratado como um float e apresentado como um número de ponto flutuante (sem reconhecimento da localidade). |
    | `g` | Formato geral.  Deixa P igual à precisão se for diferente de zero, 6 se a precisão for omitida, ou 1 se a precisão for zero. Então, se uma conversão com estilo E tivesse um expoente de X:  Se P > X ≥ −4, a conversão é com estilo f e precisão P − (X + 1). Caso contrário, a conversão é com estilo e e precisão P − 1. |
    | `G` | Como o especificador `g`, mas usa `E` e `f`. |
    | `h` | Como o especificador `g`, mas usa `F`. Disponível a partir do PHP 8.0.0. |
    | `H` | Como o especificador `g`, mas usa `E` e `F`. Disponível a partir do PHP 8.0.0. |
    | `o` | O argumento é tratado como um número inteiro e apresentado como um número octal. |
    | `s` | O argumento é tratado e apresentado como uma string. |
    | `u` | O argumento é tratado como um número inteiro e apresentado como um número decimal sem sinal. |
    | `x` | O argumento é tratado como um número inteiro e apresentado como um número hexadecimal (com letras minúsculas). |
    | `X` | O argumento é tratado como um número inteiro e apresentado como um número hexadecimal (com letras maiúsculas). |

    **Aviso**

    O especificador de tipo `c` ignora preenchimento e largura.

    **Aviso**

    Tentar usar uma combinação dos especificadores de string e largura com conjuntos de caracteres que requerem mais de um byte por caractere pode resultar em resultados inesperados.

    As variáveis serão forçadas a um tipo adequado para o especificador:

    **Tratamento de Tipos**

    | Tipo | Especificadores |
    | --- | --- |
    | [string](language.types.string.md) | `s` |
    | [int](language.types.integer.md) | `d`, `u`, `c`, `o`, `x`, `X`, `b` |
    | [float](language.types.float.md) | `e`, `E`, `f`, `F`, `g`, `G`, `h`, `H` |

`values`

### Valor Retornado

Retorna o comprimento da string enviada para a saída.

### Erros/Exceções

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se o número de argumentos for zero.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se `[width]` for menor que zero ou maior que **`PHP_INT_MAX`**.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se `[precision]` for menor que zero ou maior que **`PHP_INT_MAX`**.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ArgumentCountError](class.argumentcounterror.md) será lançado quando menos argumentos do que o necessário forem fornecidos.
Antes do PHP 8.0.0, **`false`** era retornado e um **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não retorna mais **`false`** em caso de falha. |
| 8.0.0 | Lança um erro [ValueError](class.valueerror.md) se o número de argumentos for zero; anteriormente, esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança um erro [ValueError](class.valueerror.md) se `[width]` for menor que zero ou maior que **`PHP_INT_MAX`**; anteriormente, esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança um erro [ValueError](class.valueerror.md) se `[precision]` for menor que zero ou maior que **`PHP_INT_MAX`**; anteriormente, esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança um erro [ArgumentCountError](class.argumentcounterror.md) quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um **`E_WARNING`**. |

### Examples

**Exemplo #1 **printf()**: vários exemplos**

```
<?php
$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 é 'A'

// observe o duplo %%, isto mostra um caractere '%' literal
printf("%%b = '%b'\n", $n); // representação binária
printf("%%c = '%c'\n", $c); // mostra o caractere ASCII, o mesmo que a função chr() faz
printf("%%d = '%d'\n", $n); // representação padrão de número inteiro
printf("%%e = '%e'\n", $n); // notação científica
printf("%%u = '%u'\n", $n); // representação de inteiro sem sinal de um inteiro positivo
printf("%%u = '%u'\n", $u); // representação de inteiro sem sinal de um inteiro negativo
printf("%%f = '%f'\n", $n); // representação em ponto flutuante
printf("%%o = '%o'\n", $n); // representação em octal
printf("%%s = '%s'\n", $n); // representação em string
printf("%%x = '%x'\n", $n); // representação em hexadecimal (minúsculas)
printf("%%X = '%X'\n", $n); // representação em hexadecimal (maiúsculas)

printf("%%+d = '%+d'\n", $n); // especificador de sinal em um inteiro positivo
printf("%%+d = '%+d'\n", $u); // especificador de sinal em um inteiro negativo
?>
```

O exemplo acima produzirá:

```
%b = '10100111101010011010101101'
%c = 'A'
%d = '43951789'
%e = '4.39518e+7'
%u = '43951789'
%u = '4251015507'
%f = '43951789.000000'
%o = '247523255'
%s = '43951789'
%x = '29ea6ad'
%X = '29EA6AD'
%+d = '+43951789'
%+d = '-43951789'
```

**Exemplo #2 **printf()**: especificadores de string**

```
<?php
$s = 'monkey';
$t = 'many monkeys';

printf("[%s]\n",        $s); // saída padrão de string
printf("[%10s]\n",      $s); // alinhamento à direita com espaços
printf("[%-10s]\n",     $s); // alinhamento à esquerda com espaços
printf("[%010s]\n",     $s); // preenchimento com zeros funciona em strings também
printf("[%'#10s]\n",    $s); // usa o caractere customizado de preenchimento '#'
printf("[%'#*s]\n", 10, $s); // fornece a largura de preenchimento como um argumento adicional
printf("[%10.9s]\n",    $t); // alinhamento à direita com corte de 9 caracteres
printf("[%-10.9s]\n",   $t); // alinhamento à esquerda com corte de 9 caracteres
?>
```

O exemplo acima produzirá:

```
[monkey]
[    monkey]
[monkey    ]
[0000monkey]
[####monkey]
[####monkey]
[ many monk]
[many monk ]
```

### Veja também

- [print](function.print.md) - Exibe uma string
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [fprintf()](function.fprintf.md) - Escreve uma string formatada para um fluxo
- [vprintf()](function.vprintf.md) - Mostra uma string formatada
- [vsprintf()](function.vsprintf.md) - Retorna uma string formatada
- [vfprintf()](function.vfprintf.md) - Escreve uma string formatada para um fluxo
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato
- [fscanf()](function.fscanf.md) - Interpreta a leitura de um arquivo de acordo com um formato
- [number\_format()](function.number-format.md) - Formata um número com milhares agrupados
- [date()](function.date.md) - Formata um timestamp Unix
- [flush()](function.flush.md) - Descarrega o buffer na saída do sistema

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
