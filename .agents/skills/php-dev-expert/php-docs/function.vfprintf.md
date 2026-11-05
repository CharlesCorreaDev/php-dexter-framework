# Escreve uma string formatada para um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.vfprintf.php

---

# vfprintf

(PHP 5, PHP 7, PHP 8)

vfprintf — Escreve uma string formatada para um fluxo

### Descrição

function **vfprintf**([resource](language.types.resource.md) `$stream`, [string](language.types.string.md) `$format`, [array](language.types.array.md) `$values`): [int](language.types.integer.md)

Escreve uma string produzida de acordo com `format` para
o recurso do fluxo especificado por `stream`.

Funciona como [fprintf()](function.fprintf.md) mas aceita um array de
argumentos, ao invés de um número váriavel de argumentos.

### Parâmetros

`stream`

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

Retorna o tamanho da string mostrada.

### Erros/Exceções

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se o número de argumentos for zero.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se `[width]` for menor que zero ou maior que **`PHP_INT_MAX`**.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado se `[precision]` for menor que zero ou maior que **`PHP_INT_MAX`**.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

A partir do PHP 8.0.0, um erro [ValueError](class.valueerror.md) será lançado quando menos argumentos do que o necessário forem fornecidos.
Antes do PHP 8.0.0, **`false`** era retornado e um **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não mais retorna **`false`** em caso de falha. |
| 8.0.0 | Lança uma exceção [ValueError](class.valueerror.md) se o número de argumentos for zero; anteriormente esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança uma exceção [ValueError](class.valueerror.md) se `[width]` for menor que zero ou maior que **`PHP_INT_MAX`**; anteriormente esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança uma exceção [ValueError](class.valueerror.md) se `[precision]` for menor que zero ou maior que **`PHP_INT_MAX`**; anteriormente esta função emitia um **`E_WARNING`**. |
| 8.0.0 | Lança uma exceção [ValueError](class.valueerror.md) quando houver menos parâmetros que os necessários; anteriormente esta função emitia um **`E_WARNING`**. |

### Examples

**Exemplo #1 **vfprintf()**: inteiros precedidos por zero**

```
<?php
if (!($fp = fopen('date.txt', 'w')))
    return;

$year = 2025;
$month = 5;
$day = 6;
vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// escreverá a data em formato ISP em date.txt
?>
```

### Veja também

- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [fprintf()](function.fprintf.md) - Escreve uma string formatada para um fluxo
- [vprintf()](function.vprintf.md) - Mostra uma string formatada
- [vsprintf()](function.vsprintf.md) - Retorna uma string formatada
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato
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
