# A classe Collator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.collator.php

---

# A classe Collator

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

Fornece capacidade de comparação de strings com suporte ao ordenamento apropriado
de acordo com a localidade.

## Resumo da classe

class ****Collator****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DEFAULT\_VALUE](class.collator.md#collator.constants.default-value);

public
const
[int](language.types.integer.md)
[PRIMARY](class.collator.md#collator.constants.primary);

public
const
[int](language.types.integer.md)
[SECONDARY](class.collator.md#collator.constants.secondary);

public
const
[int](language.types.integer.md)
[TERTIARY](class.collator.md#collator.constants.tertiary);

public
const
[int](language.types.integer.md)
[DEFAULT\_STRENGTH](class.collator.md#collator.constants.default-strength);

public
const
[int](language.types.integer.md)
[QUATERNARY](class.collator.md#collator.constants.quaternary);

public
const
[int](language.types.integer.md)
[IDENTICAL](class.collator.md#collator.constants.identical);

public
const
[int](language.types.integer.md)
[OFF](class.collator.md#collator.constants.off);

public
const
[int](language.types.integer.md)
[ON](class.collator.md#collator.constants.on);

public
const
[int](language.types.integer.md)
[SHIFTED](class.collator.md#collator.constants.shifted);

public
const
[int](language.types.integer.md)
[NON\_IGNORABLE](class.collator.md#collator.constants.non-ignorable);

public
const
[int](language.types.integer.md)
[LOWER\_FIRST](class.collator.md#collator.constants.lower-first);

public
const
[int](language.types.integer.md)
[UPPER\_FIRST](class.collator.md#collator.constants.upper-first);

public
const
[int](language.types.integer.md)
[FRENCH\_COLLATION](class.collator.md#collator.constants.french-collation);

public
const
[int](language.types.integer.md)
[ALTERNATE\_HANDLING](class.collator.md#collator.constants.alternate-handling);

public
const
[int](language.types.integer.md)
[CASE\_FIRST](class.collator.md#collator.constants.case-first);

public
const
[int](language.types.integer.md)
[CASE\_LEVEL](class.collator.md#collator.constants.case-level);

public
const
[int](language.types.integer.md)
[NORMALIZATION\_MODE](class.collator.md#collator.constants.normalization-mode);

public
const
[int](language.types.integer.md)
[STRENGTH](class.collator.md#collator.constants.strength);

public
const
[int](language.types.integer.md)
[HIRAGANA\_QUATERNARY\_MODE](class.collator.md#collator.constants.hiragana-quaternary-mode);

public
const
[int](language.types.integer.md)
[NUMERIC\_COLLATION](class.collator.md#collator.constants.numeric-collation);

public
const
[int](language.types.integer.md)
[SORT\_REGULAR](class.collator.md#collator.constants.sort-regular);

public
const
[int](language.types.integer.md)
[SORT\_STRING](class.collator.md#collator.constants.sort-string);

public
const
[int](language.types.integer.md)
[SORT\_NUMERIC](class.collator.md#collator.constants.sort-numeric);

/\* Métodos \*/

public function [\_\_construct](collator.construct.md)([string](language.types.string.md) `$locale`)

public function [asort](collator.asort.md)([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

public function [compare](collator.compare.md)([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [create](collator.create.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[Collator](class.collator.md)

public function [getAttribute](collator.getattribute.md)([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorCode](collator.geterrorcode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorMessage](collator.geterrormessage.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getLocale](collator.getlocale.md)([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getSortKey](collator.getsortkey.md)([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getStrength](collator.getstrength.md)(): [int](language.types.integer.md)

public function [setAttribute](collator.setattribute.md)([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [setStrength](collator.setstrength.md)([int](language.types.integer.md) `$strength`): [true](language.types.singleton.md)

public function [sort](collator.sort.md)([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

public function [sortWithSortKeys](collator.sortwithsortkeys.md)([array](language.types.array.md) `&$array`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Collator::FRENCH_COLLATION`** [int](language.types.integer.md)
:   Ordena strings com diferentes acentuações a partir do final da string. Este
    atributo é automaticamente definido para
    *ON* (ligado)
    para as localidades francesas e algumas outras. Usuários normalmente não precisam
    definir explicitamente este atributo. Há um custo de desempenho de comparação
    de strings quando definida para *ON*,
    mas o comprimento da chave de ordenação não é afetado. Os valores possíveis são:

    - **`Collator::ON`**
    - **`Collator::OFF`**(padrão)
    - **`Collator::DEFAULT_VALUE`**

    **Exemplo #1 Regras da FRENCH\_COLLATION**

    - F=OFF cote < coté < côte < côté
    - F=ON cote < côte < coté < côté

**`Collator::ALTERNATE_HANDLING`**
:   O atributo alternativo é usado para controlar o gerenciamento dos chamados
    caracteres variáveis na UCA: espaços em branco, pontuações e símbolos. Se
    ALTERNATE\_HANDLING (A) for definido para *NON\_IGNORABLE*
    (N), as diferenças entre estes caracteres são da mesma importância
    que as diferenças entre letras. Se ALTERNATE\_HANDLING for definida para
    *SHIFTED*
    (S), estes caracteres são somente de importância menor. O valor
    *SHIFTED* é frequentemente usado em combinação com
    *STRENGTH*
    definida para set to QUATERNARY. Neste caso, espaços em branco, pontuações e símbolos
    são considerados ao comparar strings, mas somente se todos os outros aspectos das
    strings (letras base, acentos e forma) forem idênticos. Se
    ALTERNATE\_HANDLING não for definida para SHIFTED, não haverá diferença entre uma
    STRENGTH de 3 e uma STRENGTH de 4. Para mais informações e exemplos,
    consulte "Variable\_Weighting" na
    [» UCA](https://www.unicode.org/reports/tr10/).
    A razão pela qual os valores para ALTERNATE\_HANDLING não são simplesmente
    *ON* (ligado) e *OFF* (desligado)
    é que valores adicionais podem ser necessários no futuro. A opção
    BLANKED da UCA é expressa com STRENGTH de 3, e ALTERNATE\_HANDLING definida para
    SHIFTED. O padrão para a maioria das localidades é NON\_IGNORABLE. Se SHIFTED for
    selecionado, pode ser mais lento se houver muitas strings que são as mesmas
    exceto pela pontuação; o comprimento da chave de ordenação não será afetado a menos que
    o nível de STRENGHT seja também aumentado.

    Os valores possíveis são:

    - **`Collator::NON_IGNORABLE`**(padrão)
    - **`Collator::SHIFTED`**
    - **`Collator::DEFAULT_VALUE`**

    **Exemplo #2 Regras de ALTERNATE\_HANDLING**

    - S=3, A=N di Silva < Di Silva < diSilva < U.S.A. < USA
    - S=3, A=S di Silva = diSilva < Di Silva < U.S.A. = USA
    - S=4, A=S di Silva < diSilva < Di Silva < U.S.A. < USA

**`Collator::CASE_FIRST`** [int](language.types.integer.md)
:   O atributo CASE\_FIRST é usado para controlar se letras maiúsculas
    vêm antes de letras minúsculas ou vice-versa, na ausência de outras
    diferenças nas strings. Os valores possíveis são
    *UPPER\_FIRST* (maiúsculas primeiro - U)
    e *LOWER\_FIRST* (minúsculas primeiro - L),
    mais o *DEFAULT* (padrão)
    e *OFF* (desligado - X).
    Quase não há diferença entre as opções OFF e LOWER\_FIRST
    em termos de resultados, portanto tipicamente os usuários não usarão
    LOWER\_FIRST: apenas OFF ou UPPER\_FIRST. (Os interessados nas
    diferenças detalhadas entre X e L devem consultar a `Collation
    Customization` - Customização de Agrupamento). Especificar L ou U não afetará o desempenho de
    comparação de strings, mas afetará o comprimento da chave de ordenação.

    Os valores possíveis são:

    - **`Collator::OFF`**(padrão)
    - **`Collator::LOWER_FIRST`**
    - **`Collator::UPPER_FIRST`**
    - **`Collator:DEFAULT`**

    **Exemplo #3 Regras de CASE\_FIRST**

    - C=X ou C=L "china" < "China" < "denmark" < "Denmark"
    - C=U "China" < "china" < "Denmark" < "denmark"

**`Collator::CASE_LEVEL`** [int](language.types.integer.md)
:   O atributo CASE\_LEVEL é usado quando os acentos são ignorados mas as maiúsculas/minúsculas não são. Nesta
    situação, deve-se definir STRENGTH para *PRIMARY*,
    e CASE\_LEVEL para *ON*.
    Na maioria das localidades, esta configuração é OFF por padrão. Existe um pequeno impacto
    no desempenho de comparação de strings e na chave de ordenação se este atributo for
    definido para *ON*.

    Os valores possíveis são:

    - **`Collator::OFF`**(padrão)
    - **`Collator::ON`**
    - **`Collator::DEFAULT_VALUE`**

    **Exemplo #4 Regras de CASE\_LEVEL**

    - S=1, E=X role = Role = rôle
    - S=1, E=O role = rôle < Role

**`Collator::NORMALIZATION_MODE`** [int](language.types.integer.md)
:   A configuração NORMALIZATION\_MODE determina se o texto está completamente
    normalizado ou não na comparação. Mesmo se a configuração esteja em OFF (que é
    o padrão para muitas localidades), texto como representado em uso comum irá
    comparar corretamente (para detalhes, consulte UTN #5). Somente se as marcas de acentos
    estiverem em ordem não canônica haverá problema. Se a configuração estiver em
    *ON*,
    os melhores resultados são garantidos para todas as entradas de texto possíveis.
    Existe um custo médio de desempenho na comparação de strings se este atributo
    estiver em *ON*,
    dependendo da frequência de sequências que requerem normalização.
    Não há efeito significativo no comprimento da chave de ordenação. Se for sabido que o texto de entrada
    está nas formas de normalização NFD ou NFKD, não há necessidade de
    habilitar esta opção de normalização.

    Os valores possíveis são:

    - **`Collator::OFF`**(padrão)
    - **`Collator::ON`**
    - **`Collator::DEFAULT_VALUE`**

**`Collator::STRENGTH`** [int](language.types.integer.md)
:   O Serviço de Agrupamento ICU suporta vários níveis de comparação, chamados também
    de "Strengths" (forças). Ter estas categorias
    possibilita à ICU ordenar as strings de forma precisa conforme as convenções locais.
    Entretanto, ao permitir que os níveis sejam seletivamente empregados, a pesquisa
    por uma string no texto pode ser realizada com várias condições de correspondência.
    Para informações mais detalhadas, consulte o capítulo
    [collator\_set\_strength()](collator.setstrength.md).

    Os valores possíveis são:

    - **`Collator::PRIMARY`**
    - **`Collator::SECONDARY`**
    - **`Collator::TERTIARY`**(padrão)
    - **`Collator::QUATERNARY`**
    - **`Collator::IDENTICAL`**
    - **`Collator::DEFAULT_VALUE`**

**`Collator::HIRAGANA_QUATERNARY_MODE`** [int](language.types.integer.md)
:   Compatibilidade com JIS x 4061 requer a introdução de um nível
    adicional para distinguir caracteres Hiragana e Katakana. Se for requerida
    compatibilidade com o esse padrão, este atributo deve ser definido para
    *ON*,
    e a STRENGTH deve ser definida para QUATERNARY. Isto afetará o comprimento da chave de ordenação
    e desempenho de comparação de strings.

    Os valores possíveis são:

    - **`Collator::OFF`**(padrão)
    - **`Collator::ON`**
    - **`Collator::DEFAULT_VALUE`**

**`Collator::NUMERIC_COLLATION`** [int](language.types.integer.md)
:   Quando definido para ON, este atributo gera uma chave de agrupamento para o valor
    numérico de substrings de dígitos. Esta é uma maneira de obter '100' ordenado DEPOIS
    de '2'.

    Os valores possíveis são:

    - **`Collator::OFF`**(padrão)
    - **`Collator::ON`**
    - **`Collator::DEFAULT_VALUE`**

**`Collator::DEFAULT_VALUE`** [int](language.types.integer.md)

**`Collator::PRIMARY`** [int](language.types.integer.md)

**`Collator::SECONDARY`** [int](language.types.integer.md)

**`Collator::TERTIARY`** [int](language.types.integer.md)

**`Collator::DEFAULT_STRENGTH`** [int](language.types.integer.md)

**`Collator::QUATERNARY`** [int](language.types.integer.md)

**`Collator::IDENTICAL`** [int](language.types.integer.md)

**`Collator::OFF`** [int](language.types.integer.md)

**`Collator::ON`** [int](language.types.integer.md)

**`Collator::SHIFTED`** [int](language.types.integer.md)

**`Collator::NON_IGNORABLE`** [int](language.types.integer.md)

**`Collator::LOWER_FIRST`** [int](language.types.integer.md)

**`Collator::UPPER_FIRST`** [int](language.types.integer.md)

**`Collator::SORT_REGULAR`** [int](language.types.integer.md)

**`Collator::SORT_STRING`** [int](language.types.integer.md)

**`Collator::SORT_NUMERIC`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [Collator::asort](collator.asort.md) — Ordena array mantendo associação de índice
- [Collator::compare](collator.compare.md) — Compara duas strings Unicode
- [Collator::\_\_construct](collator.construct.md) — Cria um agrupador (Collator)
- [Collator::create](collator.create.md) — Cria um agrupador
- [Collator::getAttribute](collator.getattribute.md) — Obtém o valor de atributo de um agrupador
- [Collator::getErrorCode](collator.geterrorcode.md) — Obtém o último código de erro do agrupador
- [Collator::getErrorMessage](collator.geterrormessage.md) — Obtém o texto para o último código de erro do agrupador
- [Collator::getLocale](collator.getlocale.md) — Obtém o nome da localidade do agrupador
- [Collator::getSortKey](collator.getsortkey.md) — Obtém a chave de ordenação de uma string
- [Collator::getStrength](collator.getstrength.md) — Obtém a força atual de agrupamento
- [Collator::setAttribute](collator.setattribute.md) — Define atributo do agrupador
- [Collator::setStrength](collator.setstrength.md) — Define a força do agrupador
- [Collator::sort](collator.sort.md) — Ordena um array usando o agrupador especificado
- [Collator::sortWithSortKeys](collator.sortwithsortkeys.md) — Ordena um array usando agrupador e chaves de ordenação especificados

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
