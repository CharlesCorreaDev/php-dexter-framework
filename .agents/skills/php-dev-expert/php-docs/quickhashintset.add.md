# Este método adiciona uma nova entrada ao conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.add.php

---

# QuickHashIntSet::add

(PECL quickhash >= Unknown)

QuickHashIntSet::add — Este método adiciona uma nova entrada ao conjunto

### Descrição

public function **QuickHashIntSet::add**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Este método adiciona uma nova entrada ao conjunto e retorna se a entrada foi
adicionada. As entradas são sempre adicionadas por padrão, a menos que
**`QuickHashIntSet::CHECK_FOR_DUPES`** tenha sido passado quando o conjunto foi criado.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada.

### Valor Retornado

**`true`** quando a entrada foi adicionada e **`false`** se a entrada não foi adicionada.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::add()****

```
<?php
echo "sem verificação de duplicatas\n";
$set = new QuickHashIntSet( 1024 );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );

echo "\ncom verificação de duplicatas\n";
$set = new QuickHashIntSet( 1024, QuickHashIntSet::CHECK_FOR_DUPES );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
sem verificação de duplicatas
bool(false)
bool(true)
bool(true)
bool(true)

com verificação de duplicatas
bool(false)
bool(true)
bool(true)
bool(false)
```

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
