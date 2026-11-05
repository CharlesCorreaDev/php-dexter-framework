# Este método atualiza uma entrada no hash com um novo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.update.php

---

# QuickHashIntHash::update

(PECL quickhash >= Unknown)

QuickHashIntHash::update — Este método atualiza uma entrada no hash com um novo valor

### Descrição

public function **QuickHashIntHash::update**([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Este método atualiza uma entrada com um novo valor e retorna se a entrada foi
atualizada. Se houver chaves duplicadas, apenas o primeiro elemento encontrado receberá
um valor atualizado. Use **`QuickHashIntHash::CHECK_FOR_DUPES`** durante a criação do hash
para evitar que chaves duplicadas façam parte do hash.

### Parâmetros

`key`
:   A chave da entrada a ser atualizada.

`value`
:   O novo valor para atualizar a entrada.

### Valor Retornado

**`true`** quando a entrada foi encontrada e atualizada, e **`false`** se a entrada
ainda não fazia parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::update()****

```
<?php
$hash = new QuickHashIntHash( 1024 );

var_dump( $hash->add( 141421, 173205 ) );
var_dump( $hash->update( 141421, 223606 ) );
var_dump( $hash->get( 141421 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
int(223606)
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
