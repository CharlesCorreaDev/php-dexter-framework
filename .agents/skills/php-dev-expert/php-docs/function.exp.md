# Calcula o expoente de e

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exp.php

---

# exp

(PHP 4, PHP 5, PHP 7, PHP 8)

exp — Calcula o expoente de **`e`**

### Descrição

function **exp**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna **`e`** elevada à potência de `num`.

> **Nota**:
>
> '**`e`**' é a base do sistema natural de logaritmos, ou aproximadamente
> 2.718282.

### Parâmetros

`num`
:   O argumento a ser processado

### Valor Retornado

'e' elevado à potência de `num`

### Examples

**Exemplo #1 Exemplo de **exp()****

```
<?php
echo exp(12), PHP_EOL;
echo exp(5.7);
?>
```

O exemplo acima produzirá:

```
162754.791419
298.86740096706
```

### Veja também

- [log()](function.log.md) - Logaritmo natural
- [pow()](function.pow.md) - Expressão exponencial

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
