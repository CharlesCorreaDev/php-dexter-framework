# Onde uma configuração deve ser definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configuration.changes.modes.php

---

## Onde uma configuração deve ser definida

Estes modos determinam quando e onde uma diretiva do PHP pode ou não pode
ser definida, e cada diretiva no manual faz referência a um destes modos.
Por exemplo, algumas definições podem ser feitas em um script PHP
usando [ini\_set()](function.ini-set.md), enquanto outras só podem ser feitas no
php.ini ou httpd.conf.

Por exemplo, a configuração
[output\_buffering](outcontrol.configuration.md#ini.output-buffering)
é **`INI_PERDIR`** portanto não pode ser definida usando
[ini\_set()](function.ini-set.md). Entretanto a diretiva
[display\_errors](errorfunc.configuration.md#ini.display-errors) é
**`INI_ALL`** portanto pode ser definida em qualquer lugar
com [ini\_set()](function.ini-set.md).

**Constantes de modo INI**

**`INI_USER`** ([int](language.types.integer.md))
:   A entrada pode ser definida em scripts do usuário (como com [ini\_set()](function.ini-set.md))
    ou no [registro do Windows](configuration.changes.md#configuration.changes.windows).
    A entrada pode ser definida no .user.ini

**`INI_PERDIR`** ([int](language.types.integer.md))
:   A entrada pode ser definida no php.ini, .htaccess, httpd.conf ou .user.ini

**`INI_SYSTEM`** ([int](language.types.integer.md))
:   A entrada pode ser definida no php.ini ou httpd.conf

**`INI_ALL`** ([int](language.types.integer.md))
:   A entrada pode ser definida em qualquer lugar

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
