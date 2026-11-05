# A classe Locale

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.locale.php

---

# A classe Locale

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

Uma "Locale" (localidade) é um identificador usado para se obter língua, cultura ou
comportamento regional específico a partir de uma API. Localidades PHP são organizadas e
identificadas da mesma forma que as localidades CLDR usadas pela ICU (e por muitos
fornecedores de sistemas operacionais do tipo Unix, Mac, Java e assim por diante).
Localidades são identificadas usando-se etiquetas de linguagem RFC 4646 (que usa hífen, e
não sublinhado) em adição aos identificadores mais tradicionais que usam
sublinhado. As funções desta classe são tolerantes a ambos os formatos,
a não ser que seja especificado o contrário.

Exemplos de identificadores incluem:

- en-US (Ingês, Estados Unidos)
- zh-Hant-TW (Chinês, Tradicional, Taiwan)
- fr-CA, fr-FR (Francês para Canadá e França respectivamente)

A classe Locale (e funções procedurais relacionadas) são usadas para interagir
com identificadores de localidade--para verificar que um ID está bem formado, válido, etc.
As extensões usadas pela CLDR na UAX #35 (e herdadas pela ICU) são válidas
e utilizadas em qualquer lugar que seriam normalmente usadas na ICU.

A classe Locale não pode ser instanciada como objeto. Todas as funções e métodos
fornecidos são estáticos.

A string nula ou vazia obtém a localidade "raiz". A localidade "raiz" é
equivalente a "en\_US\_POSIX" na CLDR. Etiquetas de língua (e portanto identificadores
de localidade) são sensíveis a maiúsculas/minúsculas. Existe uma função de
canonização para fazer com que as maiúsculas/minúsculas correspondam à especificação.

## Resumo da classe

class ****Locale****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[ACTUAL\_LOCALE](class.locale.md#locale.constants.actual-locale);

public
const
[int](language.types.integer.md)
[VALID\_LOCALE](class.locale.md#locale.constants.valid-locale);

public
const
[null](language.types.null.md)
[DEFAULT\_LOCALE](class.locale.md#locale.constants.default-locale) = null;

public
const
[string](language.types.string.md)
[LANG\_TAG](class.locale.md#locale.constants.lang-tag);

public
const
[string](language.types.string.md)
[EXTLANG\_TAG](class.locale.md#locale.constants.extlang-tag);

public
const
[string](language.types.string.md)
[SCRIPT\_TAG](class.locale.md#locale.constants.script-tag);

public
const
[string](language.types.string.md)
[REGION\_TAG](class.locale.md#locale.constants.region-tag);

public
const
[string](language.types.string.md)
[VARIANT\_TAG](class.locale.md#locale.constants.variant-tag);

public
const
[string](language.types.string.md)
[GRANDFATHERED\_LANG\_TAG](class.locale.md#locale.constants.grandfathered-lang-tag);

public
const
[string](language.types.string.md)
[PRIVATE\_TAG](class.locale.md#locale.constants.private-tag);

/\* Métodos \*/

public static function [acceptFromHttp](locale.acceptfromhttp.md)([string](language.types.string.md) `$header`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [addLikelySubtags](locale.addlikelysubtags.md)([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [canonicalize](locale.canonicalize.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

public static function [composeLocale](locale.composelocale.md)([array](language.types.array.md) `$subtags`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [filterMatches](locale.filtermatches.md)([string](language.types.string.md) `$languageTag`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$canonicalize` = **`false`**): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [getAllVariants](locale.getallvariants.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

public static function [getDefault](locale.getdefault.md)(): [string](language.types.string.md)

public static function [getDisplayLanguage](locale.getdisplaylanguage.md)([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getDisplayName](locale.getdisplayname.md)([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getDisplayRegion](locale.getdisplayregion.md)([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getDisplayScript](locale.getdisplayscript.md)([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getDisplayVariant](locale.getdisplayvariant.md)([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getKeywords](locale.getkeywords.md)([string](language.types.string.md) `$locale`): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [getPrimaryLanguage](locale.getprimarylanguage.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

public static function [getRegion](locale.getregion.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

public static function [getScript](locale.getscript.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

public
static
function [isRightToLeft](locale.isrighttoleft.md)(
[string](language.types.string.md) `$locale`
 = ""
): [bool](language.types.boolean.md)

public static function [lookup](locale.lookup.md)(  
    [array](language.types.array.md) `$languageTag`,  
    [string](language.types.string.md) `$locale`,  
    [bool](language.types.boolean.md) `$canonicalize` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$defaultLocale` = **`null`**  
): [?](language.types.null.md)[string](language.types.string.md)

public static function [minimizeSubtags](locale.minimizesubtags.md)([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [parseLocale](locale.parselocale.md)([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

public static function [setDefault](locale.setdefault.md)([string](language.types.string.md) `$locale`): [true](language.types.singleton.md)

}

## Constantes predefinidas

**`Locale::DEFAULT_LOCALE`** [null](language.types.null.md)
:   Usada como parâmetro de localidade com os métodos das várias classes afetadas por localidade,
    como NumberFormatter por exemplo. Esta constante faz com que os métodos utilizem a
    localidade padrão.

Estas constantes descrevem a escolha da localidade para o método getLocale de
diferentes classes.

**`Locale::ACTUAL_LOCALE`** [int](language.types.integer.md)
:   Esta é a localidade de onde os dados realmente vieram.

**`Locale::VALID_LOCALE`** [int](language.types.integer.md)
:   Esta é a localidade mais específica suportada pela ICU.

## Sub-etiquetas de localidade

Estas constantes definem como as localidades são analisadas ou compostas. Elas devem
ser usadas como chaves no array de argumentos para a função [locale\_compose()](locale.composelocale.md)
e são retornadas de [locale\_parse()](locale.parselocale.md)
como chaves do [array](language.types.array.md) associativo retornado.

**`Locale::LANG_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de língua

**`Locale::EXTLANG_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de língua estendida

**`Locale::SCRIPT_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de script

**`Locale::REGION_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de região

**`Locale::VARIANT_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de variante

**`Locale::GRANDFATHERED_LANG_TAG`** [string](language.types.string.md)
:   Sub-etiqueta de idioma antigo

**`Locale::PRIVATE_TAG`** [string](language.types.string.md)
:   Sub-etiqueta privada

## Veja também

- [» RFC 4646 - Etiquetas para Identificação de Línguas](https://datatracker.ietf.org/doc/html/rfc4646)
- [» RFC 4647 - Correspondência de Etiquetas de Línguas](https://datatracker.ietf.org/doc/html/rfc4647)
- [» Projeto CLDR Unicode: Repositório da Dados de Localidades Comuns](https://www.unicode.org/cldr/)
- [» Registro de Sub-etiquetas de Línguas IANA](https://www.iana.org/assignments/language-subtag-registry)
- [» Guia do Usuário ICU - Localidade](https://unicode-org.github.io/icu/userguide/locale/)
- [» API de Localidade ICU](https://unicode-org.github.io/icu-docs/apidoc/dev/icu4c/uloc_8h.html)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [Locale::acceptFromHttp](locale.acceptfromhttp.md) — Tenta descobrir a melhor localidade disponível baseado no cabeçalho HTTP "Accept-Language"
- [Locale::addLikelySubtags](locale.addlikelysubtags.md) — Add likely subtags to a locale
- [Locale::canonicalize](locale.canonicalize.md) — Canoniza a string de localidade
- [Locale::composeLocale](locale.composelocale.md) — Retorna ID de localidade corretamente ordenado e delimitado
- [Locale::filterMatches](locale.filtermatches.md) — Verifica se um filtro de etiqueta de língua corresponde à localidade
- [Locale::getAllVariants](locale.getallvariants.md) — Obtém as variantes para a localidade
- [Locale::getDefault](locale.getdefault.md) — Obtém o valor de localidade padrão da variável global de INTL 'default\_locale'
- [Locale::getDisplayLanguage](locale.getdisplaylanguage.md) — Retorna um nome apropriadamente localizado para a língua da localidade
- [Locale::getDisplayName](locale.getdisplayname.md) — Retorna um nome apropriadamente localizado para a localidade
- [Locale::getDisplayRegion](locale.getdisplayregion.md) — Retorna um nome apropriadamente localizado para a região da localidade
- [Locale::getDisplayScript](locale.getdisplayscript.md) — Retorna um nome apropriadamente localizado para o tipo de escrita da localidade
- [Locale::getDisplayVariant](locale.getdisplayvariant.md) — Retorna um nome apropriadamente localizado para as variantes da localidade
- [Locale::getKeywords](locale.getkeywords.md) — Obtém as palavras-chave para a localidade
- [Locale::getPrimaryLanguage](locale.getprimarylanguage.md) — Obtém a língua primária para a localidade
- [Locale::getRegion](locale.getregion.md) — Obtém a região para a localidade
- [Locale::getScript](locale.getscript.md) — Obtém o tipo de escrita para a localidade
- [Locale::isRightToLeft](locale.isrighttoleft.md) — Verifica se uma localidade usa um sistema de escrita da direita para a esquerda
- [Locale::lookup](locale.lookup.md) — Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua
- [Locale::minimizeSubtags](locale.minimizesubtags.md) — Remove likely subtags from a locale
- [Locale::parseLocale](locale.parselocale.md) — Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade
- [Locale::setDefault](locale.setdefault.md) — Define a localidade padrão em tempo de execução

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
