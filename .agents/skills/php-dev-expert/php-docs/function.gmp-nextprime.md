# Encontra o próximo número primo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-nextprime.php

---

# gmp\_nextprime

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

gmp\_nextprime — Encontra o próximo número primo

### Descrição

function **gmp\_nextprime**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [GMP](class.gmp.md)

Encontra o próximo número primo

### Parâmetros

`num`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Retorna o próximo número primo maior que `num`,
como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_nextprime()****

```
<?php
$prime1 = gmp_nextprime(10); // o próximo número primo maior que 10
$prime2 = gmp_nextprime(-1000); // o próximo número primo maior que -1000

echo gmp_strval($prime1) . "\n";
echo gmp_strval($prime2) . "\n";
?>
```

O exemplo acima produzirá:

```
11
2
```

### Notas

> **Nota**:
>
> Esta função usa um algoritmo probabilístico para identificar primos e
> as chances de se obter um número composto é extremamente pequena.

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
