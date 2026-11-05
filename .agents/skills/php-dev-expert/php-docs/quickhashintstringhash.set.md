# Este método atualiza uma entrada no hash com um novo valor, ou
   adiciona um novo se a entrada não existir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.set.php

---

# QuickHashIntStringHash::set

(PECL quickhash >= Unknown)

QuickHashIntStringHash::set — Este método atualiza uma entrada no hash com um novo valor, ou
adiciona um novo se a entrada não existir

### Descrição

public function **QuickHashIntStringHash::set**([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [int](language.types.integer.md)

Este método tenta atualizar uma entrada com um novo valor. Caso a entrada
ainda não exista, ele adicionará uma nova entrada. Ele retorna se a entrada
foi adicionada ou atualizada. Se houver chaves duplicadas, apenas o primeiro elemento
encontrado receberá um valor atualizado. Use
QuickHashIntStringHash::CHECK\_FOR\_DUPES durante a criação do hash para evitar que chaves
duplicadas façam parte do hash.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada ou atualizada.

`value`
:   O valor da entrada a ser adicionada. Se uma entrada não-string for passada, ela será
    convertida para uma string automaticamente, se possível.

### Valor Retornado

2 se a entrada foi encontrada e atualizada, 1 se a entrada foi adicionada recentemente ou 0
se houve um erro.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::set()****

```
<?php
$hash = new QuickHashIntStringHash( 1024 );

echo "Define->Adiciona\n";
var_dump( $hash->get( 46692 ) );
var_dump( $hash->set( 46692, "dezesseis mil noventa e um" ) );
var_dump( $hash->get( 46692 ) );

echo "Define->Atualiza\n";
var_dump( $hash->set( 46692, "vinte e nove mil novecentos e seis" ) );
var_dump( $hash->get( 46692 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Define->Adiciona
bool(false)
int(2)
string(26) "dezesseis mil noventa e um"
Define->Atualiza
int(1)
string(34) "vinte e nove mil novecentos e seis"
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
