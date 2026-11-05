# Obtém o valor em número inteiro de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intval.php

---

# intval

(PHP 4, PHP 5, PHP 7, PHP 8)

intval — Obtém o valor em número inteiro de uma variável

### Descrição

function **intval**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$base` = 10): [int](language.types.integer.md)

Retorna o valor do tipo [int](language.types.integer.md) do parâmetro `value`,
usando a `base` especificada para a conversão
(o padrão é base 10). **intval()** não deve ser usada
em objetos, se isto for feito emitirá um erro de nível **`E_WARNING`** e
retornará 1.

### Parâmetros

`value`
:   O valor escalar a ser convertido para um número inteiro

`base`
:   A base para conversão

    > **Nota**:
    >
    > Se `base` for 0, a base usada será determinada
    > pelo formato de `value`:
    >
    > - se a string incluir um prefixo "0x" (ou "0X"), a base será
    >   16 (hexadecimal); senão,
    > - se a string começar com um "0b" (ou "0B"), a base será
    >   2 (binária); senão,
    > - se a string começar com "0", a base será 8 (octal);
    >   senão,
    > - a base será 10 (decimal).

### Valor Retornado

O valor inteiro de `value` em caso de sucesso ou 0 em
caso de falhar. Arrays vazios retornam 0, arrays não vazios retornam 1.

O valor máximo depende do sistema. Sistemas de 32 bits têm uma
faixa inteiros com sinal de -2147483648 to 2147483647. Então, por exemplo,
em um sistema desses, `intval('1000000000000')` retornará
2147483647. O máximo inteiro com sinal para sistemas de 64 bits é
9223372036854775807.

Strings na maior parte das vezes retornarão 0 embora isso dependa do caractere mais
à esquerda dele da string. As regras comuns à
[conversão para inteiros](language.types.integer.md#language.types.integer.casting)
se aplicam.

> **Nota**:
>
> Strings numéricas que usam notação científica (contendo a letra
> `e` ou `E`) são primeiro interpretadas como
> números antes de ser convertidas para um inteiro.
>
> Como a parte numérica da string é interpretada como um todo, o resultado
> não é simplesmente a parte inteira na frente. Além disso, expoentes grandes podem
> ser convertidos para **`PHP_INT_MAX`** em caso de sobrecarga:
>
> ```
> <?php
> echo intval('42.42e42'); // 9223372036854775807 on 64-bit systems
> ?>
> ```
>
> Consulte [strings numéricas](language.types.numeric-strings.md)
> para detalhes sobre como tais strings são interpretadas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O nível de erro na conversão de objeto mudou de **`E_NOTICE`** para **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplos de **intval()****

Os seguintes exemplos são baseados em um sistema de 64 bits.

```
<?php
echo intval(42), PHP_EOL;                      // 42
echo intval(4.7), PHP_EOL;                     // 4
echo intval('42'), PHP_EOL;                    // 42
echo intval('+42'), PHP_EOL;                   // 42
echo intval('-42'), PHP_EOL;                   // -42
echo intval(042), PHP_EOL;                     // 34
echo intval('042'), PHP_EOL;                   // 42
echo intval(1e10), PHP_EOL;                    // 10000000000
echo intval('1e10'), PHP_EOL;                  // 10000000000
echo intval(0x1A), PHP_EOL;                    // 26
echo intval('0x1A'), PHP_EOL;                  // 0
echo intval('0x1A', 0), PHP_EOL;               // 26
echo intval(42000000), PHP_EOL;                // 42000000
echo intval(420000000000000000000), PHP_EOL;   // -4275113695319687168
echo intval('420000000000000000000'), PHP_EOL; // 9223372036854775807
echo intval(42, 8), PHP_EOL;                   // 42
echo intval('42', 8), PHP_EOL;                 // 34
echo intval(array()), PHP_EOL;                 // 0
echo intval(array('foo', 'bar')), PHP_EOL;     // 1
echo intval(false), PHP_EOL;                   // 0
echo intval(true), PHP_EOL;                    // 1
?>
```

### Notas

> **Nota**:
>
> O parâmetro `base` não terá efeito a menos que o
> parâmetro `value` seja uma string.

### Veja também

- [boolval()](function.boolval.md) - Obtém o valor booleano de uma variável
- [floatval()](function.floatval.md) - Obtém o valor em ponto flutuante da variável
- [strval()](function.strval.md) - Retorna o valor string de uma variável
- [settype()](function.settype.md) - Define o tipo de uma variável
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [Manipulação de Tipos](language.types.type-juggling.md)
- [BCMath Funções Matemáticas de Precisão Arbitrária](ref.bc.md)

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
