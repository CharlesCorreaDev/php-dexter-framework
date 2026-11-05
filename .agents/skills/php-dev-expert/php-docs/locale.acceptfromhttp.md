# Tenta descobrir a melhor localidade disponível baseado no cabeçalho HTTP "Accept-Language"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.acceptfromhttp.php

---

# Locale::acceptFromHttp

# locale\_accept\_from\_http

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::acceptFromHttp -- locale\_accept\_from\_http — Tenta descobrir a melhor localidade disponível baseado no cabeçalho HTTP "Accept-Language"

### Descrição

Estilo orientado a objetos

public static function **Locale::acceptFromHttp**([string](language.types.string.md) `$header`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_accept\_from\_http**([string](language.types.string.md) `$header`): [string](language.types.string.md)|[false](language.types.singleton.md)

Tenta encontrar a localidade que satisfaça a lista de línguas que é requisitada pelo
cabeçalho HTTP "Accept-Language".

### Parâmetros

`header`
:   A string contendo o cabeçalho "Accept-Language" de acordo com o formato RFC 2616.

### Valor Retornado

O identificador de localidade correspondente.

Retorna **`false`** quando o comprimento de `header` exceder
**`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_accept\_from\_http()****

```
<?php
$locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
echo $locale;
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
echo $locale;
?>
```

O exemplo acima produzirá:

```
en_US
```

### Veja também

- [locale\_lookup()](locale.lookup.md) - Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua

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
