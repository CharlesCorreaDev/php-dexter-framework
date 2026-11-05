# Obtém o último código de erro do agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.geterrorcode.php

---

# Collator::getErrorCode

# collator\_get\_error\_code

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::getErrorCode -- collator\_get\_error\_code — Obtém o último código de erro do agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::getErrorCode**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_get\_error\_code**([Collator](class.collator.md) `$object`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o último código de erro do agrupador.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

### Valor Retornado

Código de erro retornado pela última chamada a uma função da API Collator,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_error\_code()****

```
<?php
$coll = collator_create( 'en_US' );
if( collator_get_attribute( $coll, Collator::FRENCH_COLLATION ) === false )
        handle_error( collator_get_error_code() );
?>
```

### Veja também

- [collator\_get\_error\_message()](collator.geterrormessage.md) - Obtém o texto para o último código de erro do agrupador

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
