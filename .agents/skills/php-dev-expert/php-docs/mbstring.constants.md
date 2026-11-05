# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`MB_OVERLOAD_MAIL`** ([int](language.types.integer.md))
:   Removido a partir do PHP 8.0.0

**`MB_OVERLOAD_STRING`** ([int](language.types.integer.md))
:   Removido a partir do PHP 8.0.0

**`MB_OVERLOAD_REGEX`** ([int](language.types.integer.md))
:   Removido a partir do PHP 8.0.0

**`MB_CASE_UPPER`** ([int](language.types.integer.md))
:   Realiza uma dobragem completa em maiúsculas.
    Isso pode alterar o comprimento da string.
    Este é o modo usado por mb\_strtoupper().

**`MB_CASE_LOWER`** ([int](language.types.integer.md))
:   Realiza uma dobragem completa em minúsculas.
    Isso pode alterar o comprimento da string.
    Este é o modo usado por mb\_strtolower().

**`MB_CASE_TITLE`** ([int](language.types.integer.md))
:   Realiza uma conversão completa de título com base nas propriedades
    Unicode derivadas de Cased e CaseIgnorable.
    Em particular, isso melhora o manuseio de aspas e apóstrofos.
    Isso pode alterar o comprimento da string.

**`MB_CASE_FOLD`** ([int](language.types.integer.md))
:   Realiza uma conversão completa de dobragem de caso que remove distinções de caso
    presentes na string.
    Isso é usado para correspondência sem distinção de maiúsculas e minúsculas.
    Isso pode alterar o comprimento da string.
    Disponível desde o PHP 7.3.

**`MB_CASE_LOWER_SIMPLE`** ([int](language.types.integer.md))
:   Realiza uma conversão simples de dobragem em minúsculas.
    Isso não altera o comprimento da string.
    Disponível desde o PHP 7.3.

**`MB_CASE_UPPER_SIMPLE`** ([int](language.types.integer.md))
:   Realiza uma conversão simples de dobragem em maiúsculas.
    Isso não altera o comprimento da string.
    Disponível desde o PHP 7.3.

**`MB_CASE_TITLE_SIMPLE`** ([int](language.types.integer.md))
:   Realiza uma conversão simples de dobragem de título.
    Isso não altera o comprimento da string.
    Disponível desde o PHP 7.3.

**`MB_CASE_FOLD_SIMPLE`** ([int](language.types.integer.md))
:   Realiza uma conversão simples de dobragem de caso que remove distinções de caso
    presentes na string.
    Isso é usado para correspondência sem distinção de maiúsculas e minúsculas.
    Isso não altera o comprimento da string.
    Usado internamente pela extensão MBString em operações insensíveis a maiúsculas e minúsculas.
    Disponível desde o PHP 7.3.

**`MB_ONIGURUMA_VERSION`** ([string](language.types.string.md))
:   A versão do Oniguruma, por exemplo, `6.9.4`.
    Disponível desde o PHP 7.4.

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
