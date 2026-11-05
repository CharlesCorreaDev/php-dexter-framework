# Calcula um identificador único para os objetos contidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.gethash.php

---

# SplObjectStorage::getHash

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SplObjectStorage::getHash — 
Calcula um identificador único para os objetos contidos

### Descrição

public function **SplObjectStorage::getHash**([object](language.types.object.md) `$object`): [string](language.types.string.md)

Este método calcula um identificador para os objetos adicionados a um
objeto [SplObjectStorage](class.splobjectstorage.md).

A implementação em [SplObjectStorage](class.splobjectstorage.md) retorna
o mesmo valor que [spl\_object\_hash()](function.spl-object-hash.md).

O objeto de armazenamento nunca conterá mais de um objeto com o mesmo identificador.
Portanto, pode ser usado para implementar um conjunto (um armazenamento de valores únicos)
onde a qualidade de um objeto ser único é determinada pelo fato do valor
retornado por esta função ser único.

### Parâmetros

`object`
:   O objeto cujo identificador será calculado.

### Valor Retornado

Uma [string](language.types.string.md) com o identificador calculado.

### Erros/Exceções

Uma [RuntimeException](class.runtimeexception.md) é lançada quando o valor retornado
não é uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::getHash()****

```
<?php
class OneSpecimenPerClassStorage extends SplObjectStorage {
    public function getHash($o) {
        return get_class($o);
    }
}
class A {}

$s = new OneSpecimenPerClassStorage;
$o1 = new stdClass;
$o2 = new stdClass;
$o3 = new A;

$s[$o1] = 1;
// $o2 é considerado igual a $o1, então o valor é substituído
$s[$o2] = 2;
$s[$o3] = 3;

// esses são considerados iguais aos objetos anteriores
// então eles podem ser usados para acessar os valores armazenados sob eles
$p1 = new stdClass;
$p2 = new A;
echo $s[$p1], "\n";
echo $s[$p2], "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2
3
```

### Veja também

- [spl\_object\_hash()](function.spl-object-hash.md) - Retorna o ID de hash para o objeto fornecido

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
