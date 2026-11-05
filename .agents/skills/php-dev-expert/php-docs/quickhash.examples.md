# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhash.examples.php

---

# Examples

**Exemplo #1 Exemplo de Quickhash**

```
<?php
$set = new QuickHashIntSet( 1024, QuickHashIntSet::CHECK_FOR_DUPES );
$set->add( 1 );
$set->add( 3 );

var_dump( $set->exists( 3 ) );
var_dump( $set->exists( 4 ) );

$set->saveToFile( "/tmp/test-set.set" );

$newSet = QuickHashIntSet::loadFromFile(
    "/tmp/test-set.set"
);

var_dump( $newSet->exists( 3 ) );
var_dump( $newSet->exists( 4 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
bool(true)
bool(false)
```

**Exemplo #2 Exemplo de ArrayAccess do Quickhash**

```
<?php
$hash = new QuickHashIntHash( 64 );

// Adicionando e atualizando entradas de hash.
$hash[3] = 145926;
$hash[3] = 1415926;
$hash[2] = 72;

// Verificando se as chaves existem
var_dump( isset( $hash[3] ) );

// Removendo entradas de hash
unset( $hash[2] );

// Recuperando o valor armazenado para um hash
echo $hash[3], "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
1415926
```

**Exemplo #3 Exemplo de iterador Quickhash**

```
<?php
$hash = new QuickHashIntHash( 64 );

// Adicionando entradas de hash
$hash[1] = 145926;
$hash[2] = 1415926;
$hash[3] = 72;
$hash[4] = 712314;
$hash[5] = -4234;

foreach( $hash as $key => $value )
{
    echo $key, ' => ', $value, "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
5 => -4234
4 => 712314
1 => 145926
2 => 1415926
3 => 72
```

**Exemplo #4 Exemplo de valores de string Quickhash**

```
<?php
$hash = new QuickHashIntStringHash( 64 );

// Adicionando entradas de hash
$hash[1] = "um milhão quatrocentos e quinze mil novecentos e vinte e seis";
$hash->add( 2, "mais um" );

foreach( $hash as $key => $value )
{
    echo $key, ' => ', $value, "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1 => um milhão quatrocentos e quinze mil novecentos e vinte e seis
2 => mais um
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
