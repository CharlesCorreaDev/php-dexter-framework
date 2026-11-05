# Obtém o texto para o último código de erro do agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.geterrormessage.php

---

# Collator::getErrorMessage

# collator\_get\_error\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::getErrorMessage -- collator\_get\_error\_message — Obtém o texto para o último código de erro do agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::getErrorMessage**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_get\_error\_message**([Collator](class.collator.md) `$object`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém a mensagem para o último erro.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

### Valor Retornado

Descrição de um erro que ocorreu na última chamada de uma função da API Collator,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_error\_message()****

```
<?php
$coll = collator_create( 'lt' );
if( collator_compare( $coll, 'y', 'k' ) === false ) {
    echo collator_get_error_message( $coll );
}
?>
```

### Veja também

- [collator\_get\_error\_code()](collator.geterrorcode.md) - Obtém o último código de erro do agrupador

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
