# A classe Spoofchecker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.spoofchecker.php

---

# A classe Spoofchecker

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

## Introdução

Esta classe é fornecida porque o Unicode contém um grande número de caractares
e incorpora sistemas variados de escrita de todo o mundo e seu uso
incorreto pode expor programas ou sistemas a possíveis ataques à segurança usando
similaridade de caracteres.

Os métodos fornecidos permitem verificar se uma string individual pode ser uma tentativa
de confundir o leitor (`spoof detection`), como em "pаypаl"
escrito com caracteres cirílicos 'а'.

## Resumo da classe

class ****Spoofchecker****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[SINGLE\_SCRIPT\_CONFUSABLE](class.spoofchecker.md#spoofchecker.constants.single-script-confusable);

public
const
[int](language.types.integer.md)
[MIXED\_SCRIPT\_CONFUSABLE](class.spoofchecker.md#spoofchecker.constants.mixed-script-confusable);

public
const
[int](language.types.integer.md)
[WHOLE\_SCRIPT\_CONFUSABLE](class.spoofchecker.md#spoofchecker.constants.whole-script-confusable);

public
const
[int](language.types.integer.md)
[ANY\_CASE](class.spoofchecker.md#spoofchecker.constants.any-case);

public
const
[int](language.types.integer.md)
[SINGLE\_SCRIPT](class.spoofchecker.md#spoofchecker.constants.single-script);

public
const
[int](language.types.integer.md)
[INVISIBLE](class.spoofchecker.md#spoofchecker.constants.invisible);

public
const
[int](language.types.integer.md)
[CHAR\_LIMIT](class.spoofchecker.md#spoofchecker.constants.char-limit);

public
const
[int](language.types.integer.md)
[ASCII](class.spoofchecker.md#spoofchecker.constants.ascii);

public
const
[int](language.types.integer.md)
[HIGHLY\_RESTRICTIVE](class.spoofchecker.md#spoofchecker.constants.highly-restrictive);

public
const
[int](language.types.integer.md)
[MODERATELY\_RESTRICTIVE](class.spoofchecker.md#spoofchecker.constants.moderately-restrictive);

public
const
[int](language.types.integer.md)
[MINIMALLY\_RESTRICTIVE](class.spoofchecker.md#spoofchecker.constants.minimally-restrictive);

public
const
[int](language.types.integer.md)
[UNRESTRICTIVE](class.spoofchecker.md#spoofchecker.constants.unrestrictive);

public
const
[int](language.types.integer.md)
[SINGLE\_SCRIPT\_RESTRICTIVE](class.spoofchecker.md#spoofchecker.constants.single-script-restrictive);

public
const
[int](language.types.integer.md)
[MIXED\_NUMBERS](class.spoofchecker.md#spoofchecker.constants.mixed-numbers);

public
const
[int](language.types.integer.md)
[HIDDEN\_OVERLAY](class.spoofchecker.md#spoofchecker.constants.hidden-overlay);

public
const
[int](language.types.integer.md)
[IGNORE\_SPACE](class.spoofchecker.md#spoofchecker.constants.ignore-space);

public
const
[int](language.types.integer.md)
[CASE\_INSENSITIVE](class.spoofchecker.md#spoofchecker.constants.case-insensitive);

public
const
[int](language.types.integer.md)
[ADD\_CASE\_MAPPINGS](class.spoofchecker.md#spoofchecker.constants.add-case-mappings);

public
const
[int](language.types.integer.md)
[SIMPLE\_CASE\_INSENSITIVE](class.spoofchecker.md#spoofchecker.constants.simple-case-insensitive);

/\* Métodos \*/

public function [\_\_construct](spoofchecker.construct.md)()

public function [areConfusable](spoofchecker.areconfusable.md)([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`, [int](language.types.integer.md) `&$errorCode` = **`null`**): [bool](language.types.boolean.md)

public function [isSuspicious](spoofchecker.issuspicious.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$errorCode` = **`null`**): [bool](language.types.boolean.md)

public function [setAllowedChars](spoofchecker.setallowedchars.md)([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$patternOptions` = 0): [void](language.types.void.md)

public function [setAllowedLocales](spoofchecker.setallowedlocales.md)([string](language.types.string.md) `$locales`): [void](language.types.void.md)

public function [setChecks](spoofchecker.setchecks.md)([int](language.types.integer.md) `$checks`): [void](language.types.void.md)

public function [setRestrictionLevel](spoofchecker.setrestrictionlevel.md)([int](language.types.integer.md) `$level`): [void](language.types.void.md)

}

## Constantes predefinidas

**`Spoofchecker::SINGLE_SCRIPT_CONFUSABLE`** [int](language.types.integer.md)

**`Spoofchecker::MIXED_SCRIPT_CONFUSABLE`** [int](language.types.integer.md)

**`Spoofchecker::WHOLE_SCRIPT_CONFUSABLE`** [int](language.types.integer.md)

**`Spoofchecker::ANY_CASE`** [int](language.types.integer.md)

**`Spoofchecker::SINGLE_SCRIPT`** [int](language.types.integer.md)

**`Spoofchecker::INVISIBLE`** [int](language.types.integer.md)

**`Spoofchecker::CHAR_LIMIT`** [int](language.types.integer.md)

**`Spoofchecker::ASCII`** [int](language.types.integer.md)

**`Spoofchecker::HIGHLY_RESTRICTIVE`** [int](language.types.integer.md)

**`Spoofchecker::MODERATELY_RESTRICTIVE`** [int](language.types.integer.md)

**`Spoofchecker::MINIMALLY_RESTRICTIVE`** [int](language.types.integer.md)

**`Spoofchecker::UNRESTRICTIVE`** [int](language.types.integer.md)

**`Spoofchecker::SINGLE_SCRIPT_RESTRICTIVE`** [int](language.types.integer.md)

**`Spoofchecker::MIXED_NUMBERS`** [int](language.types.integer.md)

**`Spoofchecker::HIDDEN_OVERLAY`** [int](language.types.integer.md)

**`Spoofchecker::IGNORE_SPACE`** [int](language.types.integer.md)

**`Spoofchecker::CASE_INSENSITIVE`** [int](language.types.integer.md)
:   Habilita correspondência insensível a maiúsculas/minúsculas

**`Spoofchecker::ADD_CASE_MAPPINGS`** [int](language.types.integer.md)
:   Adiciona todos os mapeamentos de maiúsculas/minúsculas para cada elemento no conjunto

**`Spoofchecker::SIMPLE_CASE_INSENSITIVE`** [int](language.types.integer.md)
:   Habilita correspondência insensível a maiúsculas/minúsculas

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionadas as constantes **`Spoofchecker::IGNORE_SPACE`**, **`Spoofchecker::CASE_INSENSITIVE`**, **`Spoofchecker::ADD_CASE_MAPPINGS`** e **`Spoofchecker::SIMPLE_CASE_INSENSITIVE`**. |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 7.3.0 | Constantes de classe usadas por [Spoofchecker::setRestrictionLevel()](spoofchecker.setrestrictionlevel.md) como **`Spoofchecker::ASCII`**, **`Spoofchecker::HIGHLY_RESTRICTIVE`**, **`Spoofchecker::MODERATELY_RESTRICTIVE`**, **`Spoofchecker::MINIMALLY_RESTRICTIVE`**, **`Spoofchecker::UNRESTRICTIVE`**, **`Spoofchecker::SINGLE_SCRIPT_RESTRICTIVE`** foram adicionadas. |

## Índice

- [Spoofchecker::areConfusable](spoofchecker.areconfusable.md) — Verifica se as strings fornecidas podem ser confundidas
- [Spoofchecker::\_\_construct](spoofchecker.construct.md) — Construtor
- [Spoofchecker::isSuspicious](spoofchecker.issuspicious.md) — Verifica se um texto fornecido contém algum caractere suspeito
- [Spoofchecker::setAllowedChars](spoofchecker.setallowedchars.md) — Define o conjunto de caracteres permitidos ao executar verificações
- [Spoofchecker::setAllowedLocales](spoofchecker.setallowedlocales.md) — Localidades a usar nas verificações executadas
- [Spoofchecker::setChecks](spoofchecker.setchecks.md) — Define as verificações que serão executadas
- [Spoofchecker::setRestrictionLevel](spoofchecker.setrestrictionlevel.md) — Define o nível de restrição

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
