# Remove e retorna um valor pela chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.remove.php

---

# Ds\Map::remove

(PECL ds >= 1.0.0)

Ds\Map::remove — Remove e retorna um valor pela chave

### Descrição

public function **Ds\Map::remove**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Remove e retorna um valor pela chave, ou retorna um valor padrão opcional se a chave
não puder ser encontrada.

> **Nota**:
>
> Chaves do tipo [object](language.types.object.md) são suportadas.
> Se um objeto implementar [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementar [Ds\Hashable](class.ds-hashable.md),
> objetos devem ser referências à mesma instância para serem considerados iguais.

> **Nota**:
>
> Pode-se também pode usar a sintaxe de array para acessar valores pela chave, por exemplo, `$map["key"]`.

**Cuidado**

Tenha cuidado ao usar a sintaxe de array. Chaves escalares serão convertidas para
inteiros pelo motor. Por exemplo, `$map["1"]` tentará
acessar `int(1)`, enquanto `$map->get("1")` irá
corretamente procurar a chave de string.

Veja [Arrays](language.types.array.md).

### Parâmetros

`key`
:   A chave a ser removida.

`default`
:   O valor padrão opcional, retornado se a chave não puder ser encontrada.

### Valor Retornado

O valor que foi removido, ou o valor `default`
se fornecido e a `key` não puder ser encontrada no mapa.

### Erros/Exceções

[OutOfBoundsException](class.outofboundsexception.md) se a chave não puder ser encontrada
e um valor padrão não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::remove()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->remove("a"));      //  1
var_dump($map->remove("e", 10));  // 10 (padrão usado)
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
int(10)
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
