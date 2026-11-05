# Cria um array contendo uma faixa de elementos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.range.php

---

# range

(PHP 4, PHP 5, PHP 7, PHP 8)

range — Cria um array contendo uma faixa de elementos

### Descrição

function **range**([string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$start`, [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$end`, [int](language.types.integer.md)|[float](language.types.float.md) `$step` = 1): [array](language.types.array.md)

Cria um array contendo uma faixa de elementos.

Se ambos `start` e `end` forem
[string](language.types.string.md)s, e `step` é [int](language.types.integer.md),
o array produzido será uma sequência de bytes.
Em outros casos, o array produzido será uma sequência de números.

A sequência é crescente se `start` é menor ou
igual a `end`.
Em outros casos, a sequência é decrescente.

### Parâmetros

`start`
:   O primeiro valor da sequência.

`end`
:   O último valor possível da sequência.

`step`
:   `step` indica o tamanho do deslocamento entre os
    valores produzidos na sequência.

    `step` pode ser negativo em sequências decrescentes.

    Se `step` é um [float](language.types.float.md) sem uma
    parte fracional, ele é interpretado como [int](language.types.integer.md).

### Valor Retornado

Retorna uma sequência de elementos como um [array](language.types.array.md) onde o primeiro
elemento é `start` progredindo a até
`end`, com cada valor da sequência separados por
`step` valores.

O último elemento do array retornado pode ser `end`
ou um valor anterior da sequência, a depender
do valor de `step`.

Se ambos `start` e `end` são
[string](language.types.string.md)s, e `step` é [int](language.types.integer.md),
o array produzido será uma sequẽncia de bytes,
geralmente as letras latinas no padrão ASCII.

Se `start`, `end`,
ou `step` forem [float](language.types.float.md),
o array produzido será uma sequẽncia de [float](language.types.float.md)s.

Em outros casos, o array produzido será uma sequência de [int](language.types.integer.md).

### Erros/Exceções

- Se `step` é `0`,
  um erro [ValueError](class.valueerror.md) é lançado.
- se `start`, `end`,
  ou `step` não for [is\_finite()](function.is-finite.md),
  um erro [ValueError](class.valueerror.md) é lançado.
- Se `step` é negativo,
  mas o array produzido é crescente
  (`$start <= $end`),
  um erro [ValueError](class.valueerror.md) é lançado.
- Se `start` ou `end`
  é um string vazia `''`,
  um aviso **`E_WARNING`** é emitido
  e a string vazia é interpretada como `0`.
- Se `start` ou `end` forem uma
  [string não numérica](language.types.numeric-strings.md)
  com mais de um byte, um aviso **`E_WARNING`** é emitido.
- Se `start` ou `end` é uma string
  que pode ser implicitamente convertida para um [int](language.types.integer.md),
  um aviso **`E_WARNING`** é emitido.
- Se `step` é um [float](language.types.float.md),
  e `start` e `end` forem uma
  [string não numérica](language.types.numeric-strings.md),
  um aviso **`E_WARNING`** é emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Se ambos `start` e `end` forem strings então **range()** nem sempre produzirá um [array](language.types.array.md) de bytes. Anteriormente, se um dos valores limite for uma string numérica, então o outro valor string é implicitamente convertido para um [int](language.types.integer.md). |
| 8.3.0 | Um aviso **`E_WARNING`** agora é emitido se `start` ou `end` é uma string implicitamente conversível para [int](language.types.integer.md) se quaisquer valores limite é interpretado como um número. |
| 8.3.0 | Um aviso **`E_WARNING`** agora é emitido se `start` ou `end` é uma string não numérica com mais de um byte. |
| 8.3.0 | Um aviso **`E_WARNING`** agora é emitido se `start` ou `end` é uma string vazia. |
| 8.3.0 | Se `step` é um [float](language.types.float.md) sem parte fracionária, ele será interpretado como um [int](language.types.integer.md). |
| 8.3.0 | Um erro [ValueError](class.valueerror.md) agora é lançado se `step` é negativo quando da produção de um array crescente. |
| 8.3.0 | Um erro [ValueError](class.valueerror.md) agora é lançado se `step` não for finito. |
| 8.3.0 | Um erro [TypeError](class.typeerror.md) agora é lançado se `start` ou `end` é um [array](language.types.array.md), [object](language.types.object.md) ou [resource](language.types.resource.md). Anteriormente eles eram implicitamente convertidos para [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplos de **range()****

```
<?php
echo implode(', ', range(0, 12)), PHP_EOL;

echo implode(', ', range(0, 100, 10)), PHP_EOL;

echo implode(', ', range('a', 'i')), PHP_EOL;

echo implode(', ', range('c', 'a')), PHP_EOL;

echo implode(', ', range('A', 'z')), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100
a, b, c, d, e, f, g, h, i
c, b, a
A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, [, \, ], ^, _, `, a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z
```

### Veja também

- [shuffle()](function.shuffle.md) - Embaralha um array
- [array\_fill()](function.array-fill.md) - Preenche um array com valores
- [`foreach`](control-structures.foreach.md)

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
