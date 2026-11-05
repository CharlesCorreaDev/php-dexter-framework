# Este método atualiza uma entrada no hash com um novo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.update.php

---

# QuickHashIntStringHash::update

(PECL quickhash >= Unknown)

QuickHashIntStringHash::update — Este método atualiza uma entrada no hash com um novo valor

### Descrição

public function **QuickHashIntStringHash::update**([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Este método atualiza uma entrada com um novo valor e retorna se a entrada foi
atualizada. Se houver chaves duplicadas, apenas o primeiro elemento encontrado receberá
um valor atualizado. Use QuickHashIntStringHash::CHECK\_FOR\_DUPES durante a criação do hash
para evitar que chaves duplicadas façam parte do hash.

### Parâmetros

`key`
:   A chave da entrada a ser atualizada.

`value`
:   O novo valor para a entrada. Se uma string não for passada, ela será
    convertida para uma string automaticamente, se possível.

### Valor Retornado

**`true`** quando a entrada foi encontrada e atualizada, e **`false`** se a entrada
ainda não fazia parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::update()****

```
<?php
$hash->add( 161803398, "--" );
$hash->add( 314159265, "bastante" );

echo $hash->get( 161803398 ), "\n";
echo $hash->get( 314159265 ), "\n";

var_dump( $hash->update( 314159265, "bastante mais um" ) );
var_dump( $hash->update( 314159999, "bastante mais um" ) );

echo $hash->get( 161803398 ), "\n";
echo $hash->get( 314159265 ), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
--
bastante
bool(true)
bool(false)
--
bastante mais um
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
