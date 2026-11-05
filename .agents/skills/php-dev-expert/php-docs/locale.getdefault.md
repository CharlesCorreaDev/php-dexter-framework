# Obtém o valor de localidade padrão da variável global de INTL 'default_locale'

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getdefault.php

---

# Locale::getDefault

# locale\_get\_default

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getDefault -- locale\_get\_default — Obtém o valor de localidade padrão da variável global de INTL 'default\_locale'

### Descrição

Estilo orientado a objetos

public static function **Locale::getDefault**(): [string](language.types.string.md)

Estilo procedural

function **locale\_get\_default**(): [string](language.types.string.md)

Obtém o valor de localidade padrão. Na inicialização do PHP este valor é definido
para o valor do php.ini em 'intl.default\_locale' se esse valor existir ou
da função da ICU, uloc\_getDefault().

### Parâmetros

### Valor Retornado

A localidade atual em tempo de execução.

### Examples

**Exemplo #1 Exemplo de **locale\_get\_default()****

```
<?php
ini_set('intl.default_locale', 'de-DE');
echo locale_get_default();
echo '; ';
locale_set_default('fr');
echo locale_get_default();
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
ini_set('intl.default_locale', 'de-DE');
echo Locale::getDefault();
echo '; ';
Locale::setDefault('fr');
echo Locale::getDefault();
?>
```

O exemplo acima produzirá:

```
de-DE; fr
```

### Veja também

- [locale\_set\_default()](locale.setdefault.md) - Define a localidade padrão em tempo de execução

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
