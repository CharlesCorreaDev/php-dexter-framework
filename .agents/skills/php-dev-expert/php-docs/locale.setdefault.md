# Define a localidade padrão em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.setdefault.php

---

# Locale::setDefault

# locale\_set\_default

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::setDefault -- locale\_set\_default — Define a localidade padrão em tempo de execução

### Descrição

Estilo orientado a objetos

public static function **Locale::setDefault**([string](language.types.string.md) `$locale`): [true](language.types.singleton.md)

Estilo procedural

function **locale\_set\_default**([string](language.types.string.md) `$locale`): [true](language.types.singleton.md)

Define a localidade padrão em tempo de execução para `locale`. Isto altera o valor do identificador
de localidade global 'default\_locale' da extensão INTL. Extensões UAX #35 são aceitas.

### Parâmetros

`locale`
:   Uma etiqueta de localidade conforme a BCP 47.

### Valor Retornado

Retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **locale\_set\_default()****

```
<?php
locale_set_default('de-DE');
echo locale_get_default();
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
Locale::setDefault('de-DE');
echo Locale::getDefault();
?>
```

O exemplo acima produzirá:

```
de-DE
```

### Veja também

- [locale\_get\_default()](locale.getdefault.md) - Obtém o valor de localidade padrão da variável global de INTL 'default\_locale'

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
