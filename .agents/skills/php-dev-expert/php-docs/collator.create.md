# Cria um agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.create.php

---

# Collator::create

# collator\_create

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::create -- collator\_create — Cria um agrupador

### Descrição

Estilo orientado a objetos

public static function **Collator::create**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[Collator](class.collator.md)

Estilo procedural

function **collator\_create**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[Collator](class.collator.md)

As strings serão comparadas usando as opções já especificadas.

### Parâmetros

`locale`
:   A localidade contendo as regras de agrupamento requeridas. Valores especiais para
    localidades podem ser passadas - se uma [string](language.types.string.md) vazia for passada, as
    regras de agrupamento da localidade padrão serão usadas. Se
    `"root"` for passado, as regras [» UCA](https://www.unicode.org/reports/tr10/) serão usadas.

### Valor Retornado

Retorna uma nova instância de [Collator](class.collator.md), ou **`null`**
em caso de erro.

### Examples

**Exemplo #1 Exemplo de **collator\_create()****

```
<?php
$coll = collator_create( 'en_US' );

if( !isset( $coll ) ) {
    printf( "Criação do agrupador falhou: %s\n", intl_get_error_message() );
    exit( 1 );
}
?>
```

### Veja também

- [Collator::\_\_construct()](collator.construct.md) - Cria um agrupador (Collator)

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
