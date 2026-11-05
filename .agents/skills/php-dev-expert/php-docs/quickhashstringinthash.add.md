# Este método adiciona uma nova entrada ao hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.add.php

---

# QuickHashStringIntHash::add

(No version information available, might only be in Git)

QuickHashStringIntHash::add — Este método adiciona uma nova entrada ao hash

### Descrição

public function **QuickHashStringIntHash::add**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Este método adiciona uma nova entrada ao hash e retorna se a entrada foi
adicionada. As entradas são sempre adicionadas por padrão, a menos que
**`QuickHashStringIntHash::CHECK_FOR_DUPES`** tenha sido passado quando o hash foi criado.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada.

`value`
:   O valor da entrada a ser adicionada.

### Valor Retornado

**`true`** quando a entrada foi adicionada e **`false`** se a entrada não foi adicionada.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::add()****

```
<?php
echo "sem verificação de duplicatas\n";
$hash = new QuickHashStringIntHash( 1024 );
var_dump( $hash );
var_dump( $hash->exists( "quatro" ) );
var_dump( $hash->get( "quatro" ) );
var_dump( $hash->add( "quatro", 22 ) );
var_dump( $hash->exists( "quatro" ) );
var_dump( $hash->get( "quatro" ) );
var_dump( $hash->add( "quatro", 12 ) );

echo "\ncom verificação de duplicatas\n";
$hash = new QuickHashStringIntHash( 1024, QuickHashStringIntHash::CHECK_FOR_DUPES );
var_dump( $hash );
var_dump( $hash->exists( "quatro" ) );
var_dump( $hash->get( "quatro" ) );
var_dump( $hash->add( "quatro", 78 ) );
var_dump( $hash->exists( "quatro" ) );
var_dump( $hash->get( "quatro" ) );
var_dump( $hash->add( "quatro", 9 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
sem verificação de duplicatas
object(QuickHashStringIntHash)#1 (0) {
}
bool(false)
bool(false)
bool(true)
bool(true)
int(22)
bool(true)

com verificação de duplicatas
object(QuickHashStringIntHash)#2 (0) {
}
bool(false)
bool(false)
bool(true)
bool(true)
int(78)
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
