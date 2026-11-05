# Obtém um atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.getattribute.php

---

# NumberFormatter::getAttribute

# numfmt\_get\_attribute

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::getAttribute -- numfmt\_get\_attribute — Obtém um atributo

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::getAttribute**([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_get\_attribute**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Obtém um atributo numérico associado com o formatador. Um exemplo de um
atributo numérico é o número de dígitos inteiros que o formatador irá
produzir.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`attribute`
:   Especificador de atributo - uma das constantes de
    [atributo numérico](class.numberformatter.md#intl.numberformatter-constants.unumberformatattribute).

### Valor Retornado

Retorna o valor do atributo em caso de sucesso, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **numfmt\_get\_attribute()****

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

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_get\_text\_attribute()](numberformatter.gettextattribute.md) - Obtém um atributo de texto
- [numfmt\_set\_attribute()](numberformatter.setattribute.md) - Define um atributo

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
