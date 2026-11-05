# Este método verifica se uma chave faz parte do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.exists.php

---

# QuickHashIntSet::exists

(PECL quickhash >= Unknown)

QuickHashIntSet::exists — Este método verifica se uma chave faz parte do conjunto

### Descrição

public function **QuickHashIntSet::exists**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Este método verifica se existe uma entrada com a chave fornecida no
conjunto.

### Parâmetros

`key`
:   A chave da entrada para verificar se ela existe no conjunto.

### Valor Retornado

Retorna **`true`** quando a entrada foi encontrada, ou **`false`** quando a entrada não foi
encontrada.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::exists()****

```
<?php
// gera 200000 elementos
$array = range( 0, 199999 );
$existingEntries = array_rand( array_flip( $array ), 180000 );
$testForEntries = array_rand( array_flip( $array ), 1000 );
$foundCount = 0;

echo "Criando conjunto: ", microtime( true ), "\n";
$set = new QuickHashIntSet( 100000 );
echo "Adicionando elementos: ", microtime( true ), "\n";
foreach( $existingEntries as $key )
{
     $set->add( $key );
}

echo "Fazendo 1000 testes: ", microtime( true ), "\n";
foreach( $testForEntries as $key )
{
     $foundCount += $set->exists( $key );
}
echo "Pronto, $foundCount encontrados: ", microtime( true ), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Criando conjunto: 1263588703.0748
Adicionando elementos: 1263588703.0757
Fazendo 1000 testes: 1263588703.7851
Pronto, 898 encontrados: 1263588703.7897
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
