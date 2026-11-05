# Obtém a localidade para a qual o formatador foi criado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.getlocale.php

---

# MessageFormatter::getLocale

# msgfmt\_get\_locale

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::getLocale -- msgfmt\_get\_locale — Obtém a localidade para a qual o formatador foi criado

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::getLocale**(): [string](language.types.string.md)

Estilo procedural

function **msgfmt\_get\_locale**([MessageFormatter](class.messageformatter.md) `$formatter`): [string](language.types.string.md)

Obtém a localidade para a qual o formatador foi criado.

### Parâmetros

`formatter`
:   O formatador de mensagem

### Valor Retornado

O nome da localidade.

### Examples

**Exemplo #1 Exemplo de **msgfmt\_get\_locale()****

```
<?php
$fmt = msgfmt_create('en_US', "Number {0,number}");
echo msgfmt_get_locale($fmt);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new MessageFormatter('en_US', "Number {0,number}");
echo $fmt->getLocale();
?>
```

O exemplo acima produzirá:

```
en_US
```

### Veja também

- [msgfmt\_create()](messageformatter.create.md) - Constrói um novo formatador de mensagem

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
