# Obtém o valor de dígito decimal de um ponto de código para uma base fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.digit.php

---

# IntlChar::digit

(PHP 7, PHP 8)

IntlChar::digit — Obtém o valor de dígito decimal de um ponto de código para uma base fornecida

### Descrição

public static function **IntlChar::digit**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$base` = 10): [int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Retorna o valor de dígito decimal de um ponto de código para uma base numérica fornecida.

Se a base (radix) não estiver no intervalo `2 <= radix <= 36` ou
se o valor de `codepoint`
não for um dígito válido na base especificada, **`false`** é retornado.
Um caractere é um dígito válido se pelo menos uma das condições a seguir for verdadeira:

- O caractere tem um valor de dígito decimal. Tais caracteres têm
  a categoria geral "Nd" (número de dígito decimal) e um Numeric\_Type igual a Decimal.
  Neste caso o valor é o valor do dígito decimal do caractere.
- O caractere é uma das letras latinas maiúsculas
  de `'A'` a `'Z'`.
  Neste caso, o valor é `codepoint - 'A' + 10`.
- O caractere é uma das letras latinas minúsculas
  de `'a'` a `'z'`.
  Neste caso, o valor é `codepoint - 'a' + 10`.
- Letras latinas do intervalo ASCII (`0061..007A`,
  `0041..005A`) e do intervalo
  ASCII de escopo completo (`FF41..FF5A`,
  `FF21..FF3A`) são reconhecidas.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

`base`
:   A base numérica (o padrão é `10`).

### Valor Retornado

Retorna o valor numérico representado pelo caractere na base especificada,
ou **`false`** se o valor não existir ou se o valor exceder a base. Retorna **`null`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php

var_dump(IntlChar::digit("0"));
var_dump(IntlChar::digit("3"));

var_dump(IntlChar::digit("A", 16));
var_dump(IntlChar::digit("A"));

?>
```

O exemplo acima produzirá:

```
int(0)
int(3)
int(10)
bool(false)
```

### Veja também

- [IntlChar::forDigit()](intlchar.fordigit.md) - Obtém a representação em caractere para um dígito e uma base fornecidos
- [IntlChar::charDigitValue()](intlchar.chardigitvalue.md) - Obtém o valor do dígito decimal de um caractere de dígito decimal
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- **`IntlChar::PROPERTY_NUMERIC_TYPE`**

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
