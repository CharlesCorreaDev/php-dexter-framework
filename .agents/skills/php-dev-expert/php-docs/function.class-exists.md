# Verifica se uma classe foi definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.class-exists.php

---

# class\_exists

(PHP 4, PHP 5, PHP 7, PHP 8)

class\_exists — Verifica se uma classe foi definida

### Descrição

function **class\_exists**([string](language.types.string.md) `$class`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [bool](language.types.boolean.md)

Esta função verifica se uma classe foi definida.

### Parâmetros

`class`
:   O nome da classe. O nome da classe é verificada sem fazer distinção de maiúscula e minúscula.

`autoload`
:   Se deve-se [carregar automaticamente](language.oop5.autoload.md)
    caso não tenha sido carregada.

### Valor Retornado

Retorna **`true`** se `class` é uma classe definida,
caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **class\_exists()****

```
<?php
// Verifica que a classe existe antes de se tentar usá-la
if (class_exists('MinhaClasse')) {
    $minhaclasse = new MinhaClasse();
}

?>
```

**Exemplo #2 Exemplo do parâmetro `autoload`**

```
<?php
spl_autoload_register(function ($nome_classe) {
    include $nome_classe . '.php';

    // Verifica se o arquivo incluído declarou a classe
    if (!class_exists($nome_classe, false)) {
        throw new LogicException("Não foi possível carregar a classe: $nome_classe");
    }
});

if (class_exists(MinhaClasse::class)) {
    $minhaclasse = new MinhaClasse();
}

?>
```

### Veja também

- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [enum\_exists()](function.enum-exists.md) - Verifica se uma enumeração foi definida
- [interface\_exists()](function.interface-exists.md) - Verifica se a interface foi definida
- [get\_declared\_classes()](function.get-declared-classes.md) - Retorna um array com os nomes das classes definidas

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
