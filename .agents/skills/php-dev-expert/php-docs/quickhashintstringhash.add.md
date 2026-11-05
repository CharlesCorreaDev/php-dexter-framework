# Este método adiciona uma nova entrada ao hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.add.php

---

# QuickHashIntStringHash::add

(PECL quickhash >= Unknown)

QuickHashIntStringHash::add — Este método adiciona uma nova entrada ao hash

### Descrição

public function **QuickHashIntStringHash::add**([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Este método adiciona uma nova entrada ao hash e retorna se a entrada foi
adicionada. As entradas são sempre adicionadas por padrão, a menos que
**`QuickHashIntStringHash::CHECK_FOR_DUPES`** tenha sido passado quando o hash foi criado.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada.

`value`
:   O valor da entrada a ser adicionada. Se uma entrada não-string for passada, ela será
    convertida para uma string automaticamente, se possível.

### Valor Retornado

**`true`** quando a entrada foi adicionada e **`false`** se a entrada não foi adicionada.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::add()****

```
<?php
echo "sem verificação de duplicatas\n";
$hash = new QuickHashIntStringHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, "vinte e dois" ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, "doze" ) );

echo "\ncom verificação de duplicatas\n";
$hash = new QuickHashIntStringHash( 1024, QuickHashIntStringHash::CHECK_FOR_DUPES );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, "setente a oito" ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->get( 4 ) );
var_dump( $hash->add( 4, "nove" ) );
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
string(12) "vinte e dois"
bool(true)

com verificação de duplicatas
bool(false)
bool(false)
bool(true)
bool(true)
string(14) "setente a oito"
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
