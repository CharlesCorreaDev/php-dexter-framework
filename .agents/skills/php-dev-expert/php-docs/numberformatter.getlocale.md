# Obtém a localidade do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.getlocale.php

---

# NumberFormatter::getLocale

# numfmt\_get\_locale

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::getLocale -- numfmt\_get\_locale — Obtém a localidade do formatador

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::getLocale**([int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_get\_locale**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da localidade do formatador.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`type`
:   Pode-se escolher entre localidade válida e localidade real (
    **`Locale::VALID_LOCALE`**,
    **`Locale::ACTUAL_LOCALE`**,
    respectivamente). O padrão é a localidade real.

### Valor Retornado

O nome da localidade usada para criar o formatador, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_get\_locale()****

```
<?php
$req     = 'fr_FR_PARIS';
$fmt     = numfmt_create( $req,  NumberFormatter::DECIMAL);
$res_val = numfmt_get_locale( $fmt, Locale::VALID_LOCALE );
$res_act = numfmt_get_locale( $fmt, Locale::ACTUAL_LOCALE );
printf( "Nome de localidade requisitado: %s\nNome de localidade válido: %s\nNome de localidade atual: %s\n",
         $req, $res_val, $res_act );
?>
```

O exemplo acima produzirá:

```
Nome de localidade requisitado: fr_FR_PARIS
Nome de localidade válido: fr_FR
Nome de localidade atual: fr
```

### Veja também

- [numfmt\_create()](numberformatter.create.md) - Cria um formatador de número
- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador

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
