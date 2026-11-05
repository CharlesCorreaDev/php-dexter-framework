# Este método adiciona uma nova entrada ao hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.add.php

---

# QuickHashIntHash::add

(PECL quickhash >= Unknown)

QuickHashIntHash::add — Este método adiciona uma nova entrada ao hash

### Descrição

public function **QuickHashIntHash::add**([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value` = ?): [bool](language.types.boolean.md)

Este método adiciona uma nova entrada ao hash e retorna se a entrada foi
adicionada. As entradas são sempre adicionadas por padrão, a menos que
**`QuickHashIntHash::CHECK_FOR_DUPES`** tenha sido passado quando o hash foi criado.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada.

`value`
:   O valor opcional da entrada a ser adicionada. Se nenhum valor for especificado,
    `1` será usado.

### Valor Retornado

**`true`** quando a entrada foi adicionada e **`false`** se a entrada não foi adicionada.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::add()****

```
<?php
echo "sem verificação de duplicatas\n";
$hash = new QuickHashIntHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, 22 ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, 12 ) );

echo "\ncom verificação de duplicatas\n";
$hash = new QuickHashIntHash( 1024, QuickHashIntHash::CHECK_FOR_DUPES );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, 78 ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, 9 ) );

echo "\nvalor padrão\n";
var_dump( $hash->add( 5 ) );
var_dump( $hash->get( 5 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
sem verificação de duplicatas
bool(false)
bool(false)
bool(true)
bool(true)
int(22)
bool(true)

com verificação de duplicatas
bool(false)
bool(false)
bool(true)
bool(true)
int(78)
bool(false)

valor padrão
bool(true)
int(1)
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
