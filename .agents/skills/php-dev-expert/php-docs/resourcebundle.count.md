# Obtém o número de elementos no pacote

> **Fonte / Source:** https://www.php.net/manual/pt_BR/resourcebundle.count.php

---

# ResourceBundle::count

# resourcebundle\_count

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

ResourceBundle::count -- resourcebundle\_count — Obtém o número de elementos no pacote

### Descrição

Estilo orientado a objetos

public function **ResourceBundle::count**(): [int](language.types.integer.md)

Estilo procedural

function **resourcebundle\_count**([ResourceBundle](class.resourcebundle.md) `$bundle`): [int](language.types.integer.md)

Obtém o número de elementos no pacote.

### Parâmetros

`bundle`
:   Um objeto [ResourceBundle](class.resourcebundle.md).

### Valor Retornado

Retorna o número de elementos no pacote.

### Examples

**Exemplo #1 Exemplo da função **resourcebundle\_count()****

```
<?php
$r = resourcebundle_create( 'es', "/usr/share/data/meuapp");
echo resourcebundle_count($r);
?>
```

**Exemplo #2 Exemplo orientado a objeto**

```
<?php
$r = new ResourceBundle( 'es', "/usr/share/data/meuapp");
echo $r->count();
?>
```

O exemplo acima produzirá:

```
42
```

### Veja também

- [resourcebundle\_get()](resourcebundle.get.md) - Obtém os dados do pacote

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
