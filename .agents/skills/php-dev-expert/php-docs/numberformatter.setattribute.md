# Define um atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.setattribute.php

---

# NumberFormatter::setAttribute

# numfmt\_set\_attribute

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::setAttribute -- numfmt\_set\_attribute — Define um atributo

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::setAttribute**([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md)|[float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **numfmt\_set\_attribute**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md) `$attribute`, [int](language.types.integer.md)|[float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Define um atributo numérico associado ao formatador. Um exemplo de
atributo numérico é o número de dígitos inteiros que o formatador irá
produzir.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`attribute`
:   Especificador de atributo - uma das constantes de
    [atributo numérico](class.numberformatter.md#intl.numberformatter-constants.unumberformatattribute).

`value`
:   O valor do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_set\_attribute()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo "Dígitos: ".numfmt_get_attribute($fmt, NumberFormatter::MAX_FRACTION_DIGITS)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
numfmt_set_attribute($fmt, NumberFormatter::MAX_FRACTION_DIGITS, 2);
echo "Dígitos: ".numfmt_get_attribute($fmt, NumberFormatter::MAX_FRACTION_DIGITS)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
echo "Dígitos: ".$fmt->getAttribute(NumberFormatter::MAX_FRACTION_DIGITS)."\n";
echo $fmt->format(1234567.891234567890000)."\n";
$fmt->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 2);
echo "Dígitos: ".$fmt->getAttribute(NumberFormatter::MAX_FRACTION_DIGITS)."\n";
echo $fmt->format(1234567.891234567890000)."\n";
?>
```

O exemplo acima produzirá:

```
Dígitos: 3
1.234.567,891
Dígitos: 2
1.234.567,89
```

**Exemplo #3 Usando **`NumberFormatter::ROUNDING_MODE`** para truncar valores**

Por padrão, [NumberFormatter](class.numberformatter.md) arredonda valores. Usar
**`NumberFormatter::ROUND_DOWN`** como o modo de arredondamento
**`NumberFormatter::ROUNDING_MODE`** trunca
o valor para o número especificado de dígitos fracionários sem arredondamento.

```
<?php
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);

echo "Modo de arredondamento padrão:\n";
echo $fmt->format(3.789), "\n"; // 3.79 (arredonda para cima)
echo $fmt->format(3.781), "\n"; // 3.78 (arredonda para baixo)

$fmt->setAttribute(NumberFormatter::ROUNDING_MODE, NumberFormatter::ROUND_DOWN);

echo "\Com ROUND_DOWN (trunca):\n";
echo $fmt->format(3.789), "\n"; // 3.78 (truncado)
echo $fmt->format(3.781), "\n"; // 3.78 (truncado)
?>
```

O exemplo acima produzirá:

```
Modo de arredondamento padrão:
3.79
3.78

Com ROUND_DOWN (trunca):
3.78
3.78
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_get\_attribute()](numberformatter.getattribute.md) - Obtém um atributo
- [numfmt\_set\_text\_attribute()](numberformatter.settextattribute.md) - Define um atributo de texto

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
