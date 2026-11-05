# Define um atributo de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.settextattribute.php

---

# NumberFormatter::setTextAttribute

# numfmt\_set\_text\_attribute

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::setTextAttribute -- numfmt\_set\_text\_attribute — Define um atributo de texto

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::setTextAttribute**([int](language.types.integer.md) `$attribute`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **numfmt\_set\_text\_attribute**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md) `$attribute`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define um atributo de texto associado ao formatador. Um exemplo de um atributo
de texto é o sufixo para números positivos. Se o formatador não
entender o atributo,
o erro **`U_UNSUPPORTED_ERROR`**
é produzido. Formatadores baseados em regras somente entendem
**`NumberFormatter::DEFAULT_RULESET`** e
**`NumberFormatter::PUBLIC_RULESETS`**.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`attribute`
:   Especificador de atributo - uma das constantes de
    [atributo de texto](class.numberformatter.md#intl.numberformatter-constants.unumberformattextattribute).

`value`
:   Texto para o valor do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_set\_text\_attribute()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo "Prefixo: ".numfmt_get_text_attribute($fmt, NumberFormatter::NEGATIVE_PREFIX)."\n";
echo numfmt_format($fmt, -1234567.891234567890000)."\n";
numfmt_set_text_attribute($fmt, NumberFormatter::NEGATIVE_PREFIX, "MENOS");
echo "Prefixo: ".numfmt_get_text_attribute($fmt, NumberFormatter::NEGATIVE_PREFIX)."\n";
echo numfmt_format($fmt, -1234567.891234567890000)."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
echo "Prefixo: ".$fmt->getTextAttribute(NumberFormatter::NEGATIVE_PREFIX)."\n";
echo $fmt->format(-1234567.891234567890000)."\n";
$fmt->setTextAttribute(NumberFormatter::NEGATIVE_PREFIX, "MENOS");
echo "Prefixo: ".$fmt->getTextAttribute(NumberFormatter::NEGATIVE_PREFIX)."\n";
echo $fmt->format(-1234567.891234567890000)."\n";
?>
```

O exemplo acima produzirá:

```
Prefixo: -
-1.234.567,891
Prefixo: MENOS
MENOS1.234.567,891
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
