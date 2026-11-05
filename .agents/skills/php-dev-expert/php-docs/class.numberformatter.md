# A classe NumberFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.numberformatter.php

---

# A classe NumberFormatter

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

Programas armazenam e operam números usando uma representação binária que não depende
da localidade. Ao apresentar ou imprimir um número, ele é convertido para uma
string específica para a localidade. Por exemplo, o número 12345.67 é "12,345.67" nos
Estados Unidos, "12 345,67" na França e "12.345,67" na Alemanha e no Brasil.

Ao invocar os métodos fornecidos pela classe NumberFormatter, pode-se
formatar números, moedas, e percentagens de acordo com o especificado ou com
a localidade padrão. NumberFormatter é sensível à localidade, portanto é necessário criar
um novo objeto NumberFormatter para cada localidade. Métodos NumberFormatter formatam
números com tipos primitivos, como 'double' e mostram o número como uma
string específica para a localidade

Para moedas, pode-se usar o tipo de formato de moeda para criar um formatador que
retorne uma string com o número formatado e com o sinal apropriado para
a moeda. Obviamente, a classe NumberFormatter não tem ciência de taxas de câmbio,
portanto, a saída é a mesma independente da moeda especificada.
Isto significa que o mesmo número tem diferentes valores monteários dependendo da
moeda da localidade. Se o número for 9988776.65, os resultados serão:

- 9 988 776,65 € na França
- 9.988.776,65 € na Alemanha
- $9,988,776.65 nos Estados Unidos

Para formatar percentagens, deve-se criar um formatador específico da localidade com
o tipo de formato de percentual. Com este formatados, uma fração decimal como
0.75 é mostrada como 75%.

Para formatações mais complexas, como números por extenso, os formatadores de número
baseados em regras são utilizados.

## Resumo da classe

class ****NumberFormatter****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[PATTERN\_DECIMAL](class.numberformatter.md#numberformatter.constants.pattern-decimal);

public
const
[int](language.types.integer.md)
[DECIMAL](class.numberformatter.md#numberformatter.constants.decimal);

public
const
[int](language.types.integer.md)
[DECIMAL\_COMPACT\_SHORT](class.numberformatter.md#numberformatter.constants.decimal-compact-short);

public
const
[int](language.types.integer.md)
[DECIMAL\_COMPACT\_LONG](class.numberformatter.md#numberformatter.constants.decimal-compact-long);

public
const
[int](language.types.integer.md)
[CURRENCY](class.numberformatter.md#numberformatter.constants.currency);

public
const
[int](language.types.integer.md)
[PERCENT](class.numberformatter.md#numberformatter.constants.percent);

public
const
[int](language.types.integer.md)
[SCIENTIFIC](class.numberformatter.md#numberformatter.constants.scientific);

public
const
[int](language.types.integer.md)
[SPELLOUT](class.numberformatter.md#numberformatter.constants.spellout);

public
const
[int](language.types.integer.md)
[ORDINAL](class.numberformatter.md#numberformatter.constants.ordinal);

public
const
[int](language.types.integer.md)
[DURATION](class.numberformatter.md#numberformatter.constants.duration);

public
const
[int](language.types.integer.md)
[PATTERN\_RULEBASED](class.numberformatter.md#numberformatter.constants.pattern-rulebased);

public
const
[int](language.types.integer.md)
[IGNORE](class.numberformatter.md#numberformatter.constants.ignore);

public
const
[int](language.types.integer.md)
[CURRENCY\_ISO](class.numberformatter.md#numberformatter.constants.currency-iso);

public
const
[int](language.types.integer.md)
[CURRENCY\_PLURAL](class.numberformatter.md#numberformatter.constants.currency-plural);

public
const
[int](language.types.integer.md)
[CURRENCY\_ACCOUNTING](class.numberformatter.md#numberformatter.constants.currency-accounting);

public
const
[int](language.types.integer.md)
[CASH\_CURRENCY](class.numberformatter.md#numberformatter.constants.cash-currency);

public
const
[int](language.types.integer.md)
[CURRENCY\_STANDARD](class.numberformatter.md#numberformatter.constants.currency-standard);

public
const
[int](language.types.integer.md)
[DEFAULT\_STYLE](class.numberformatter.md#numberformatter.constants.default-style);

public
const
[int](language.types.integer.md)
[ROUND\_CEILING](class.numberformatter.md#numberformatter.constants.round-ceiling);

public
const
[int](language.types.integer.md)
[ROUND\_FLOOR](class.numberformatter.md#numberformatter.constants.round-floor);

public
const
[int](language.types.integer.md)
[ROUND\_DOWN](class.numberformatter.md#numberformatter.constants.round-down);

public
const
[int](language.types.integer.md)
[ROUND\_UP](class.numberformatter.md#numberformatter.constants.round-up);

public
const
[int](language.types.integer.md)
[ROUND\_TOWARD\_ZERO](class.numberformatter.md#numberformatter.constants.round-toward-zero);

public
const
[int](language.types.integer.md)
[ROUND\_AWAY\_FROM\_ZERO](class.numberformatter.md#numberformatter.constants.round-away-from-zero);

public
const
[int](language.types.integer.md)
[ROUND\_HALFEVEN](class.numberformatter.md#numberformatter.constants.round-halfeven);

public
const
[int](language.types.integer.md)
[ROUND\_HALFODD](class.numberformatter.md#numberformatter.constants.round-halfodd);

public
const
[int](language.types.integer.md)
[ROUND\_HALFDOWN](class.numberformatter.md#numberformatter.constants.round-halfdown);

public
const
[int](language.types.integer.md)
[ROUND\_HALFUP](class.numberformatter.md#numberformatter.constants.round-halfup);

public
const
[int](language.types.integer.md)
[PAD\_BEFORE\_PREFIX](class.numberformatter.md#numberformatter.constants.pad-before-prefix);

public
const
[int](language.types.integer.md)
[PAD\_AFTER\_PREFIX](class.numberformatter.md#numberformatter.constants.pad-after-prefix);

public
const
[int](language.types.integer.md)
[PAD\_BEFORE\_SUFFIX](class.numberformatter.md#numberformatter.constants.pad-before-suffix);

public
const
[int](language.types.integer.md)
[PAD\_AFTER\_SUFFIX](class.numberformatter.md#numberformatter.constants.pad-after-suffix);

public
const
[int](language.types.integer.md)
[PARSE\_INT\_ONLY](class.numberformatter.md#numberformatter.constants.parse-int-only);

public
const
[int](language.types.integer.md)
[GROUPING\_USED](class.numberformatter.md#numberformatter.constants.grouping-used);

public
const
[int](language.types.integer.md)
[DECIMAL\_ALWAYS\_SHOWN](class.numberformatter.md#numberformatter.constants.decimal-always-shown);

public
const
[int](language.types.integer.md)
[MAX\_INTEGER\_DIGITS](class.numberformatter.md#numberformatter.constants.max-integer-digits);

public
const
[int](language.types.integer.md)
[MIN\_INTEGER\_DIGITS](class.numberformatter.md#numberformatter.constants.min-integer-digits);

public
const
[int](language.types.integer.md)
[INTEGER\_DIGITS](class.numberformatter.md#numberformatter.constants.integer-digits);

public
const
[int](language.types.integer.md)
[MAX\_FRACTION\_DIGITS](class.numberformatter.md#numberformatter.constants.max-fraction-digits);

public
const
[int](language.types.integer.md)
[MIN\_FRACTION\_DIGITS](class.numberformatter.md#numberformatter.constants.min-fraction-digits);

public
const
[int](language.types.integer.md)
[FRACTION\_DIGITS](class.numberformatter.md#numberformatter.constants.fraction-digits);

public
const
[int](language.types.integer.md)
[MULTIPLIER](class.numberformatter.md#numberformatter.constants.multiplier);

public
const
[int](language.types.integer.md)
[GROUPING\_SIZE](class.numberformatter.md#numberformatter.constants.grouping-size);

public
const
[int](language.types.integer.md)
[ROUNDING\_MODE](class.numberformatter.md#numberformatter.constants.rounding-mode);

public
const
[int](language.types.integer.md)
[ROUNDING\_INCREMENT](class.numberformatter.md#numberformatter.constants.rounding-increment);

public
const
[int](language.types.integer.md)
[FORMAT\_WIDTH](class.numberformatter.md#numberformatter.constants.format-width);

public
const
[int](language.types.integer.md)
[PADDING\_POSITION](class.numberformatter.md#numberformatter.constants.padding-position);

public
const
[int](language.types.integer.md)
[SECONDARY\_GROUPING\_SIZE](class.numberformatter.md#numberformatter.constants.secondary-grouping-size);

public
const
[int](language.types.integer.md)
[SIGNIFICANT\_DIGITS\_USED](class.numberformatter.md#numberformatter.constants.significant-digits-used);

public
const
[int](language.types.integer.md)
[MIN\_SIGNIFICANT\_DIGITS](class.numberformatter.md#numberformatter.constants.min-significant-digits);

public
const
[int](language.types.integer.md)
[MAX\_SIGNIFICANT\_DIGITS](class.numberformatter.md#numberformatter.constants.max-significant-digits);

public
const
[int](language.types.integer.md)
[LENIENT\_PARSE](class.numberformatter.md#numberformatter.constants.lenient-parse);

public
const
[int](language.types.integer.md)
[POSITIVE\_PREFIX](class.numberformatter.md#numberformatter.constants.positive-prefix);

public
const
[int](language.types.integer.md)
[POSITIVE\_SUFFIX](class.numberformatter.md#numberformatter.constants.positive-suffix);

public
const
[int](language.types.integer.md)
[NEGATIVE\_PREFIX](class.numberformatter.md#numberformatter.constants.negative-prefix);

public
const
[int](language.types.integer.md)
[NEGATIVE\_SUFFIX](class.numberformatter.md#numberformatter.constants.negative-suffix);

public
const
[int](language.types.integer.md)
[PADDING\_CHARACTER](class.numberformatter.md#numberformatter.constants.padding-character);

public
const
[int](language.types.integer.md)
[CURRENCY\_CODE](class.numberformatter.md#numberformatter.constants.currency-code);

public
const
[int](language.types.integer.md)
[DEFAULT\_RULESET](class.numberformatter.md#numberformatter.constants.default-ruleset);

public
const
[int](language.types.integer.md)
[PUBLIC\_RULESETS](class.numberformatter.md#numberformatter.constants.public-rulesets);

public
const
[int](language.types.integer.md)
[DECIMAL\_SEPARATOR\_SYMBOL](class.numberformatter.md#numberformatter.constants.decimal-separator-symbol);

public
const
[int](language.types.integer.md)
[GROUPING\_SEPARATOR\_SYMBOL](class.numberformatter.md#numberformatter.constants.grouping-separator-symbol);

public
const
[int](language.types.integer.md)
[PATTERN\_SEPARATOR\_SYMBOL](class.numberformatter.md#numberformatter.constants.pattern-separator-symbol);

public
const
[int](language.types.integer.md)
[PERCENT\_SYMBOL](class.numberformatter.md#numberformatter.constants.percent-symbol);

public
const
[int](language.types.integer.md)
[ZERO\_DIGIT\_SYMBOL](class.numberformatter.md#numberformatter.constants.zero-digit-symbol);

public
const
[int](language.types.integer.md)
[DIGIT\_SYMBOL](class.numberformatter.md#numberformatter.constants.digit-symbol);

public
const
[int](language.types.integer.md)
[MINUS\_SIGN\_SYMBOL](class.numberformatter.md#numberformatter.constants.minus-sign-symbol);

public
const
[int](language.types.integer.md)
[PLUS\_SIGN\_SYMBOL](class.numberformatter.md#numberformatter.constants.plus-sign-symbol);

public
const
[int](language.types.integer.md)
[CURRENCY\_SYMBOL](class.numberformatter.md#numberformatter.constants.currency-symbol);

public
const
[int](language.types.integer.md)
[INTL\_CURRENCY\_SYMBOL](class.numberformatter.md#numberformatter.constants.intl-currency-symbol);

public
const
[int](language.types.integer.md)
[MONETARY\_SEPARATOR\_SYMBOL](class.numberformatter.md#numberformatter.constants.monetary-separator-symbol);

public
const
[int](language.types.integer.md)
[EXPONENTIAL\_SYMBOL](class.numberformatter.md#numberformatter.constants.exponential-symbol);

public
const
[int](language.types.integer.md)
[PERMILL\_SYMBOL](class.numberformatter.md#numberformatter.constants.permill-symbol);

public
const
[int](language.types.integer.md)
[PAD\_ESCAPE\_SYMBOL](class.numberformatter.md#numberformatter.constants.pad-escape-symbol);

public
const
[int](language.types.integer.md)
[INFINITY\_SYMBOL](class.numberformatter.md#numberformatter.constants.infinity-symbol);

public
const
[int](language.types.integer.md)
[NAN\_SYMBOL](class.numberformatter.md#numberformatter.constants.nan-symbol);

public
const
[int](language.types.integer.md)
[SIGNIFICANT\_DIGIT\_SYMBOL](class.numberformatter.md#numberformatter.constants.significant-digit-symbol);

public
const
[int](language.types.integer.md)
[MONETARY\_GROUPING\_SEPARATOR\_SYMBOL](class.numberformatter.md#numberformatter.constants.monetary-grouping-separator-symbol);

public
const
[int](language.types.integer.md)
[TYPE\_DEFAULT](class.numberformatter.md#numberformatter.constants.type-default);

public
const
[int](language.types.integer.md)
[TYPE\_INT32](class.numberformatter.md#numberformatter.constants.type-int32);

public
const
[int](language.types.integer.md)
[TYPE\_INT64](class.numberformatter.md#numberformatter.constants.type-int64);

public
const
[int](language.types.integer.md)
[TYPE\_DOUBLE](class.numberformatter.md#numberformatter.constants.type-double);

public
const
[int](language.types.integer.md)
[TYPE\_CURRENCY](class.numberformatter.md#numberformatter.constants.type-currency);

/\* Métodos \*/

public function [\_\_construct](numberformatter.create.md)([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$style`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**)

public static function [create](numberformatter.create.md)([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$style`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**): [?](language.types.null.md)[NumberFormatter](class.numberformatter.md)

public function [format](numberformatter.format.md)([int](language.types.integer.md)|[float](language.types.float.md) `$num`, [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DEFAULT`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [formatCurrency](numberformatter.formatcurrency.md)([float](language.types.float.md) `$amount`, [string](language.types.string.md) `$currency`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getAttribute](numberformatter.getattribute.md)([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

public function [getErrorCode](numberformatter.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](numberformatter.geterrormessage.md)(): [string](language.types.string.md)

public function [getLocale](numberformatter.getlocale.md)([int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getPattern](numberformatter.getpattern.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getSymbol](numberformatter.getsymbol.md)([int](language.types.integer.md) `$symbol`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getTextAttribute](numberformatter.gettextattribute.md)([int](language.types.integer.md) `$attribute`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [parse](numberformatter.parse.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DOUBLE`**, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

public function [parseCurrency](numberformatter.parsecurrency.md)([string](language.types.string.md) `$string`, [string](language.types.string.md) `&$currency`, [int](language.types.integer.md) `&$offset` = **`null`**): [float](language.types.float.md)|[false](language.types.singleton.md)

public function [setAttribute](numberformatter.setattribute.md)([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md)|[float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

public function [setPattern](numberformatter.setpattern.md)([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

public function [setSymbol](numberformatter.setsymbol.md)([int](language.types.integer.md) `$symbol`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setTextAttribute](numberformatter.settextattribute.md)([int](language.types.integer.md) `$attribute`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

## Tipos de Formato

Estes estilos são usados pela função [numfmt\_create()](numberformatter.create.md)
para definir o tipo do formatador.

**`NumberFormatter::PATTERN_DECIMAL`** [int](language.types.integer.md)
:   Formato decimal definido por modelo

**`NumberFormatter::DECIMAL`** [int](language.types.integer.md)
:   Formato decimal

**`NumberFormatter::DECIMAL_COMPACT_SHORT`** [int](language.types.integer.md)
:   Formato decimal expresso em notação compacta (forma curta), por exemplo, "23K", "45B". Disponível a partir do PHP 8.5.0 e ICU 56.

**`NumberFormatter::DECIMAL_COMPACT_LONG`** [int](language.types.integer.md)
:   Formato decimal expresso em notação compacta (forma longa), por exemplo, "23 thousand", "45 billion". Disponível a partir do PHP 8.5.0 e ICU 56.

**`NumberFormatter::CURRENCY`** [int](language.types.integer.md)
:   Formato de moeda

**`NumberFormatter::CURRENCY_ISO`** [int](language.types.integer.md)
:   Formato ISO de moeda (ex.: "USD1.00"). Disponível a partir do PHP 8.5.0.

**`NumberFormatter::CURRENCY_PLURAL`** [int](language.types.integer.md)
:   Formato pluralizado de moeda (ex.: "1.00 US dollar" e "3.00 US dollars"). Disponível a partir do PHP 8.5.0.

**`NumberFormatter::CASH_CURRENCY`** [int](language.types.integer.md)
:   Símbolo da moeda em uso de DINHEIRO, por exemplo, "NT$3" em vez de "NT$3.23". Disponível a partir do PHP 8.5.0 e ICU 54.

**`NumberFormatter::CURRENCY_STANDARD`** [int](language.types.integer.md)
:   Símbolo de moeda, por exemplo, "$1.00", usando estilo não contábil para valores negativos (por exemplo, sinal de menos). Disponível a partir do PHP 8.5.0 e ICU 56.

**`NumberFormatter::PERCENT`** [int](language.types.integer.md)
:   Formato de percentual

**`NumberFormatter::SCIENTIFIC`** [int](language.types.integer.md)
:   Formato científico

**`NumberFormatter::SPELLOUT`** [int](language.types.integer.md)
:   Formato baseado em regras ortográficas

**`NumberFormatter::ORDINAL`** [int](language.types.integer.md)
:   Formato baseado em regras ordinais

**`NumberFormatter::DURATION`** [int](language.types.integer.md)
:   Formato baseado em regras de duração

**`NumberFormatter::PATTERN_RULEBASED`** [int](language.types.integer.md)
:   Formato baseado em regras definido por modelo

**`NumberFormatter::CURRENCY_ACCOUNTING`** [int](language.types.integer.md)
:   Formato de moeda para contabilidade, ex.: `($3.00)` para quantidade negativa de moeda
    ao invés de `-$3.00`. Disponível a partir do PHP 7.4.1 e ICU 53.

**`NumberFormatter::DEFAULT_STYLE`** [int](language.types.integer.md)
:   Formato padrão para a localidade

**`NumberFormatter::IGNORE`** [int](language.types.integer.md)
:   Apelido para PATTERN\_DECIMAL

## Especificadores de Formatos de Números

Estas constantes definem como os números são analisados ou formatados. Eles devem
ser usados como argumentos para as funções [numfmt\_format()](numberformatter.format.md)
e [numfmt\_parse()](numberformatter.parse.md).

**`NumberFormatter::TYPE_DEFAULT`** [int](language.types.integer.md)
:   Deriva o tipo a partir do tipo da variável

**`NumberFormatter::TYPE_INT32`** [int](language.types.integer.md)
:   Formata/analisa como um inteiro de 32 bits

**`NumberFormatter::TYPE_INT64`** [int](language.types.integer.md)
:   Formata/analisa como um inteiro de 64 bits

**`NumberFormatter::TYPE_DOUBLE`** [int](language.types.integer.md)
:   Formata/analisa como um valor de ponto flutuante

**`NumberFormatter::TYPE_CURRENCY`** [int](language.types.integer.md)
:   Formata/analisa como um valor de moeda. Descontinuado a partir do PHP 8.3.0

## Atributos de Formatos de Números

Atributo de formato de número usado pelas funções
[numfmt\_get\_attribute()](numberformatter.getattribute.md)
e
[numfmt\_set\_attribute()](numberformatter.setattribute.md).

**`NumberFormatter::PARSE_INT_ONLY`** [int](language.types.integer.md)
:   Analisa inteiros somente.

**`NumberFormatter::GROUPING_USED`** [int](language.types.integer.md)
:   Usa separador de agrupamento.

**`NumberFormatter::DECIMAL_ALWAYS_SHOWN`** [int](language.types.integer.md)
:   Sempre mostra o separador de decimais.

**`NumberFormatter::MAX_INTEGER_DIGITS`** [int](language.types.integer.md)
:   Máximo de dígitos inteiros.

**`NumberFormatter::MIN_INTEGER_DIGITS`** [int](language.types.integer.md)
:   Mínimo de dígitos inteiros.

**`NumberFormatter::INTEGER_DIGITS`** [int](language.types.integer.md)
:   Dígitos inteiros.

**`NumberFormatter::MAX_FRACTION_DIGITS`** [int](language.types.integer.md)
:   Máximo de dígitos decimais.

**`NumberFormatter::MIN_FRACTION_DIGITS`** [int](language.types.integer.md)
:   Mínimo de dígitos decimais.

**`NumberFormatter::FRACTION_DIGITS`** [int](language.types.integer.md)
:   Dígitos decimais.

**`NumberFormatter::MULTIPLIER`** [int](language.types.integer.md)
:   Multiplicador.

**`NumberFormatter::GROUPING_SIZE`** [int](language.types.integer.md)
:   Tamanho do agrupamento.

**`NumberFormatter::ROUNDING_MODE`** [int](language.types.integer.md)
:   Modo de arredondamento.

**`NumberFormatter::ROUNDING_INCREMENT`** [int](language.types.integer.md)
:   Incremento de arredondamento.

**`NumberFormatter::FORMAT_WIDTH`** [int](language.types.integer.md)
:   A largura para a qual a saída de format() será preenchida.

**`NumberFormatter::PADDING_POSITION`** [int](language.types.integer.md)
:   A posição na qual o preenchimento acontecerá. Consulte as constantes de posição
    de preenchimento para possíveis valores de argumentos.

**`NumberFormatter::SECONDARY_GROUPING_SIZE`** [int](language.types.integer.md)
:   Tamanho de agrupamento secundário.

**`NumberFormatter::SIGNIFICANT_DIGITS_USED`** [int](language.types.integer.md)
:   Usa dígitos significativos.

**`NumberFormatter::MIN_SIGNIFICANT_DIGITS`** [int](language.types.integer.md)
:   Mínimo de dígitos significativos.

**`NumberFormatter::MAX_SIGNIFICANT_DIGITS`** [int](language.types.integer.md)
:   Máximo de dígitos significativos.

**`NumberFormatter::LENIENT_PARSE`** [int](language.types.integer.md)
:   Modo de análise brando usado por formatos baseados em regras.

## Atributos de Texto de Formatos de Números

Atributo de texto de formato numérico usado por
[numfmt\_get\_text\_attribute()](numberformatter.gettextattribute.md) e
[numfmt\_set\_text\_attribute()](numberformatter.settextattribute.md).

**`NumberFormatter::POSITIVE_PREFIX`** [int](language.types.integer.md)
:   Prefixo positivo.

**`NumberFormatter::POSITIVE_SUFFIX`** [int](language.types.integer.md)
:   Sufixo positivo.

**`NumberFormatter::NEGATIVE_PREFIX`** [int](language.types.integer.md)
:   Prefixo negativo.

**`NumberFormatter::NEGATIVE_SUFFIX`** [int](language.types.integer.md)
:   Sufixo negativo.

**`NumberFormatter::PADDING_CHARACTER`** [int](language.types.integer.md)
:   O caractere usado para preencher a largura do formato.

**`NumberFormatter::CURRENCY_CODE`** [int](language.types.integer.md)
:   O código de moeda ISO.

**`NumberFormatter::DEFAULT_RULESET`** [int](language.types.integer.md)
:   O conjunto de regras padrão. Isso está disponível apenas com formatadores
    baseados em regras.

**`NumberFormatter::PUBLIC_RULESETS`** [int](language.types.integer.md)
:   Os conjuntos de regras públicas. Isso está disponível apenas com formatadores
    baseados em regras. Este é um atributo somente leitura. Os conjuntos de regras públicos são
    retornados como uma única string, com cada nome de conjunto de regras delimitado por ';'
    (ponto e vírgula).

## Especificadores de Formatos de Símbolos

Símbolos de formato de número usados por [numfmt\_get\_symbol()](numberformatter.getsymbol.md)
e [numfmt\_set\_symbol()](numberformatter.setsymbol.md).

**`NumberFormatter::DECIMAL_SEPARATOR_SYMBOL`** [int](language.types.integer.md)
:   O separador de decimais.

**`NumberFormatter::GROUPING_SEPARATOR_SYMBOL`** [int](language.types.integer.md)
:   O separador de agrupamento.

**`NumberFormatter::PATTERN_SEPARATOR_SYMBOL`** [int](language.types.integer.md)
:   O separador de padrão.

**`NumberFormatter::PERCENT_SYMBOL`** [int](language.types.integer.md)
:   O sinal de percentagem.

**`NumberFormatter::ZERO_DIGIT_SYMBOL`** [int](language.types.integer.md)
:   Zero.

**`NumberFormatter::DIGIT_SYMBOL`** [int](language.types.integer.md)
:   Caractere representando um dígito no padrão.

**`NumberFormatter::MINUS_SIGN_SYMBOL`** [int](language.types.integer.md)
:   O sinal de menos.

**`NumberFormatter::PLUS_SIGN_SYMBOL`** [int](language.types.integer.md)
:   O sinal de mais.

**`NumberFormatter::CURRENCY_SYMBOL`** [int](language.types.integer.md)
:   O símbolo da moeda.

**`NumberFormatter::INTL_CURRENCY_SYMBOL`** [int](language.types.integer.md)
:   O símbolo internacional da moeda.

**`NumberFormatter::MONETARY_SEPARATOR_SYMBOL`** [int](language.types.integer.md)
:   O separador monetário.

**`NumberFormatter::EXPONENTIAL_SYMBOL`** [int](language.types.integer.md)
:   O símbolo exponencial.

**`NumberFormatter::PERMILL_SYMBOL`** [int](language.types.integer.md)
:   O símbolo de permilagem.

**`NumberFormatter::PAD_ESCAPE_SYMBOL`** [int](language.types.integer.md)
:   Caractere de preenchimento de escape.

**`NumberFormatter::INFINITY_SYMBOL`** [int](language.types.integer.md)
:   Símbolo de infinito.

**`NumberFormatter::NAN_SYMBOL`** [int](language.types.integer.md)
:   Símbolo representando que o valor não é um número.

**`NumberFormatter::SIGNIFICANT_DIGIT_SYMBOL`** [int](language.types.integer.md)
:   Símbolo de dígito significativo.

**`NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL`** [int](language.types.integer.md)
:   O separador de agrupamento monetário.

## Modos de Arredondamento

Valores de modo de arredondamento usados por [numfmt\_get\_attribute()](numberformatter.getattribute.md)
e [numfmt\_set\_attribute()](numberformatter.setattribute.md) com o atributo
**`NumberFormatter::ROUNDING_MODE`**.

**`NumberFormatter::ROUND_AWAY_FROM_ZERO`**
:   Sinônimo de **`NumberFormatter::ROUND_UP`**.

**`NumberFormatter::ROUND_CEILING`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar em direção ao infinito positivo.

**`NumberFormatter::ROUND_DOWN`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar para zero.

**`NumberFormatter::ROUND_FLOOR`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar em direção ao infinito negativo.

**`NumberFormatter::ROUND_HALFDOWN`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar para o "vizinho mais próximo", a menos que ambos os vizinhos
    sejam equidistantes, caso em que arredonda para baixo.

**`NumberFormatter::ROUND_HALFEVEN`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar em direção ao "vizinho mais próximo", a menos que ambos
    os vizinhos sejam equidistantes; nesse caso, arredondar em direção ao
    vizinho par.

**`NumberFormatter::ROUND_HALFODD`**
:   Modo de arredondamento na direção do "vizinho ímpar".

**`NumberFormatter::ROUND_HALFUP`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar para o "vizinho mais próximo", a menos que ambos os vizinhos
    sejam equidistantes; nesse caso, arredondar para cima.

**`NumberFormatter::ROUND_TOWARD_ZERO`**
:   Sinônimo de **`NumberFormatter::ROUND_DOWN`**.

**`NumberFormatter::ROUND_UP`** [int](language.types.integer.md)
:   Modo de arredondamento para arredondar a partir de zero.

## Especificadores de Preenchimento

Valores de posição de preenchimento usados por [numfmt\_get\_attribute()](numberformatter.getattribute.md)
e [numfmt\_set\_attribute()](numberformatter.setattribute.md) com o atributo
**`NumberFormatter::PADDING_POSITION`**.

**`NumberFormatter::PAD_AFTER_PREFIX`** [int](language.types.integer.md)
:   Caracteres de preenchimento inseridos após o prefixo.

**`NumberFormatter::PAD_AFTER_SUFFIX`** [int](language.types.integer.md)
:   Caracteres de preenchimento inseridos após o sufixo.

**`NumberFormatter::PAD_BEFORE_PREFIX`** [int](language.types.integer.md)
:   Caracteres de preenchimento inseridos antes do prefixo.

**`NumberFormatter::PAD_BEFORE_SUFFIX`** [int](language.types.integer.md)
:   Caracteres de preenchimento inseridos antes do sufixo.

## Veja também

- [» 
  Documentação de formatação ICU](https://unicode-org.github.io/icu/userguide/format_parse/)
- [» Formatadores de números ICU](https://unicode-org.github.io/icu/userguide/format_parse/numbers/)
- [» Formatadores de decimais ICU](https://unicode-org.github.io/icu-docs/apidoc/released/icu4c/classDecimalFormat.html)
- [» 
  Formatadores de números baseados em regras ICU](https://unicode-org.github.io/icu/userguide/format_parse/numbers/rbnf.html)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Adicionadas as constantes **`NumberFormatter::DECIMAL_COMPACT_SHORT`**, **`NumberFormatter::DECIMAL_COMPACT_LONG`**, **`NumberFormatter::CURRENCY_ISO`**, **`NumberFormatter::CURRENCY_PLURAL`**, **`NumberFormatter::CASH_CURRENCY`** e **`NumberFormatter::CURRENCY_STANDARD`**. |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [NumberFormatter::create](numberformatter.create.md) — Cria um formatador de número
- [NumberFormatter::format](numberformatter.format.md) — Formata um número
- [NumberFormatter::formatCurrency](numberformatter.formatcurrency.md) — Formata um valor de moeda
- [NumberFormatter::getAttribute](numberformatter.getattribute.md) — Obtém um atributo
- [NumberFormatter::getErrorCode](numberformatter.geterrorcode.md) — Obtém o último código de erro do formatador
- [NumberFormatter::getErrorMessage](numberformatter.geterrormessage.md) — Obtém a última mensagem de erro do formatador
- [NumberFormatter::getLocale](numberformatter.getlocale.md) — Obtém a localidade do formatador
- [NumberFormatter::getPattern](numberformatter.getpattern.md) — Obtém padrão do formatador
- [NumberFormatter::getSymbol](numberformatter.getsymbol.md) — Obtém um valor de símbolo
- [NumberFormatter::getTextAttribute](numberformatter.gettextattribute.md) — Obtém um atributo de texto
- [NumberFormatter::parse](numberformatter.parse.md) — Interpreta um número
- [NumberFormatter::parseCurrency](numberformatter.parsecurrency.md) — Interpreta um valor monetário
- [NumberFormatter::setAttribute](numberformatter.setattribute.md) — Define um atributo
- [NumberFormatter::setPattern](numberformatter.setpattern.md) — Define o padrão do formatador
- [NumberFormatter::setSymbol](numberformatter.setsymbol.md) — Define um valor de símbolo
- [NumberFormatter::setTextAttribute](numberformatter.settextattribute.md) — Define um atributo de texto

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
