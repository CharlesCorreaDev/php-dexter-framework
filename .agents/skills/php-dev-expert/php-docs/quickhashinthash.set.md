# Este método atualiza uma entrada no hash com um novo valor, ou
   adiciona um novo se a entrada não existir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.set.php

---

# QuickHashIntHash::set

(PECL quickhash >= Unknown)

QuickHashIntHash::set — Este método atualiza uma entrada no hash com um novo valor, ou
adiciona um novo se a entrada não existir

### Descrição

public function **QuickHashIntHash::set**([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value`): [int](language.types.integer.md)

Este método tenta atualizar uma entrada com um novo valor. Caso a entrada
ainda não exista, ele adicionará uma nova entrada. Ele retorna se a entrada
foi adicionada ou atualizada. Se houver chaves duplicadas, apenas o primeiro elemento
encontrado receberá um valor atualizado. Use
**`QuickHashIntHash::CHECK_FOR_DUPES`** durante a criação do hash para evitar que chaves
duplicadas façam parte do hash.

### Parâmetros

`key`
:   A chave da entrada a ser adicionada ou atualizada.

`value`
:   O novo valor para definir a entrada.

### Valor Retornado

2 se a entrada foi adicionada recentemente, 1 se a entrada foi encontrada e atualizada ou 0
se houve um erro.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::set()****

```
<?php

$hash = new QuickHashIntHash(1024);

echo "Define->Adiciona\n";
var_dump($hash->get(46692));
var_dump($hash->set(46692,16091));
var_dump($hash->get(46692));

echo "\n\nDefine->Atualiza\n";
var_dump($hash->set(46692, 29906));
var_dump($hash->get(46692));
```

O exemplo acima produzirá
algo semelhante a:

```
Define->Adiciona
bool(false)
int(2)
int(16091)

Define->Atualiza
int(1)
int(29906)
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
