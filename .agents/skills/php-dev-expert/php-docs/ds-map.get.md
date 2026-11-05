# Retorna o valor para uma chave dada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.get.php

---

# Ds\Map::get

(PECL ds >= 1.0.0)

Ds\Map::get — Retorna o valor para uma chave dada

### Descrição

public function **Ds\Map::get**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retorna o valor para uma chave dada, ou um valor padrão opcional se a chave
não puder ser encontrada.

> **Nota**:
>
> Chaves do tipo [object](language.types.object.md) são suportadas.
> Se um objeto implementa [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementa [Ds\Hashable](class.ds-hashable.md),
> os objetos devem ser referências à mesma instância para serem considerados iguais.

> **Nota**:
>
> Pode ser usada a sintaxe de array para acessar valores por chave, por exemplo, `$map["key"]`.

**Cuidado**

Tenha cuidado ao usar a sintaxe de array. Chaves escalares serão convertidas para
inteiros pelo interpretador. Por exemplo, `$map["1"]` tentará
acessar `int(1)`, enquanto `$map->get("1")` procurará
corretamente a chave de string.

Veja [Arrays](language.types.array.md).

### Parâmetros

`key`
:   A chave a ser procurada.

`default`
:   O valor padrão opcional, retornado se a chave não puder ser encontrada.

### Valor Retornado

O valor associado à `key` dada, ou o valor `default`
se fornecido e a chave não puder ser encontrada no mapa.

### Erros/Exceções

[OutOfBoundsException](class.outofboundsexception.md) se a chave não puder ser encontrada
e um valor padrão não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::get()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->get("a"));       // 1
var_dump($map->get("d", 10));   // 10 (default used)
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
int(10)
```

**Exemplo #2 Exemplo de **Ds\Map::get()** usando a sintaxe de array**

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map["a"]); // 1
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
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
