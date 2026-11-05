# Determina se o conjunto contém todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.contains.php

---

# Ds\Set::contains

(PECL ds >= 1.0.0)

Ds\Set::contains — Determina se o conjunto contém todos os valores

### Descrição

public function **Ds\Set::contains**([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

Determina se o conjunto contém todos os valores.

> **Nota**:
>
> Valores do tipo [object](language.types.object.md) são suportados.
> Se um objeto implementar [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementar [Ds\Hashable](class.ds-hashable.md),
> os objetos devem ser referências à mesma instância para serem considerados iguais.

**Cuidado**

Todas as comparações são estritas (tipo e valor).

### Parâmetros

`values`
:   Valores a serem verificados.

### Valor Retornado

**`false`** se algum dos `values` fornecidos não estiver no
conjunto, **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::contains()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);

var_dump($set->contains(1));                // true
var_dump($set->contains(1, 2));             // true
var_dump($set->contains(...[1, 2]));        // true

var_dump($set->contains("1"));              // false
var_dump($set->contains(...[1, 2, 3, 4]));  // false

var_dump($set->contains(...[]));            // true
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(true)
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
