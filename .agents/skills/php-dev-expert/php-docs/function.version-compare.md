# Compara duas strings de número de versão no "padrão PHP"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.version-compare.php

---

# version\_compare

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

version\_compare — Compara duas strings de número de versão no "padrão PHP"

### Descrição

function **version\_compare**([string](language.types.string.md) `$version1`, [string](language.types.string.md) `$version2`, [?](language.types.null.md)[string](language.types.string.md) `$operator` = **`null`**): [int](language.types.integer.md)|[bool](language.types.boolean.md)

**version\_compare()** compara duas strings de número
de versão no "padrão PHP".

A função primeiro substitui `_`, `-` e
`+` por um ponto `.` nas strings de versão
e também insere pontos `.` antes e depois de qualquer
não-número para que, por exemplo, '4.3.2RC1' se torne '4.3.2.RC.1'. Em seguida,
compara as partes começando da esquerda para a direita. Se uma parte contiver
strings especiais de versão, elas serão tratadas na seguinte ordem:
`qualquer string não encontrada nesta lista` <
`dev` < `alpha` =
`a` < `beta` =
`b` < `RC` =
`rc` < `#` <
`pl` = `p`. Desta forma, não apenas versões
com níveis diferentes como '4.1' e '4.1.2' podem ser comparadas, mas também qualquer
versão específica do PHP contendo estado de desenvolvimento.

### Parâmetros

`version1`
:   Primeiro número de versão.

`version2`
:   Segundo número de versão.

`operator`
:   Um operador opcional. Os operadores possíveis
    são: `<`, `lt`,
    `<=`, `le`, `>`,
    `gt`, `>=`, `ge`,
    `==`, `=`, `eq`,
    `!=`, `<>`, `ne`
    respectivamente.

    Este parâmetro diferencia maiúsculas de minúsculas, os valores devem estar em minúsculas.

### Valor Retornado

Por padrão, **version\_compare()** retorna
`-1` se a primeira versão for inferior à segunda,
`0` se forem iguais e
`1` se a segunda for menor.

Ao usar o argumento opcional `operator`, a
função retornará **`true`** se o relacionamento for aquele especificado
pelo operador, **`false`** caso contrário.

### Examples

Os exemplos abaixo utilizam a constante **`PHP_VERSION`**,
pois ela contém o valor da versão do PHP que está executando
o código.

**Exemplo #1 Exemplos de **version\_compare()****

```
<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
    echo 'Estou pelo menos na versão 7.0.0 do PHP, minha versão: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo 'Estou pelo menos na versão 5.3.0 do PHP, minha versão: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo 'Estou pelo menos na versão 5.0.0 do PHP, minha versão: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    echo 'Ainda estou na versão 4 do PHP, minha versão: ' . PHP_VERSION . "\n";
}
?>
```

### Notas

> **Nota**:
>
> A constante **`PHP_VERSION`** contém a versão atual do PHP.

> **Nota**:
>
> Observe que as versões de pré-lançamento, como 5.3.0-dev, são consideradas
> inferiores às suas versões finais correspondentes (como 5.3.0).

> **Nota**:
>
> Strings especiais de versões como `alpha` e
> `beta` diferenciam maiúsculas de minúsculas. Strings de versão de fontes
> arbitrárias que não aderem ao padrão do PHP podem precisar ser convertidas para minúsculas
> com [strtolower()](function.strtolower.md) antes de chamar
> **version\_compare()**.

### Veja também

- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP
- [php\_uname()](function.php-uname.md) - Retorna informações sobre o sistema operacional em que o PHP está sendo executado
- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida

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
