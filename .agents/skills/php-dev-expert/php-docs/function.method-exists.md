# Verifica se o método da classe existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.method-exists.php

---

# method\_exists

(PHP 4, PHP 5, PHP 7, PHP 8)

method\_exists — Verifica se o método da classe existe

### Descrição

function **method\_exists**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`, [string](language.types.string.md) `$method`): [bool](language.types.boolean.md)

Verifica se o método da classe existe no
`object_or_class` fornecido.

### Parâmetros

`object_or_class`
:   Uma instância de objeto ou um nome de classe

`method`
:   O nome do método

### Valor Retornado

Retorna **`true`** se método informado no parâmetro `method`
foi definido para o `object_or_class` informado, **`false`**
caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | As verificações de classe em relação aos métodos privados herdados agora retornam **`false`**. |

### Examples

**Exemplo #1 Exemplo de **method\_exists()****

```
<?php
$directory = new Directory('.');
var_dump(method_exists($directory,'read'));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

**Exemplo #2 Exemplo de **method\_exists()** com método estático**

```
<?php
var_dump(method_exists('Directory','read'));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Notas

> **Nota**:
>
> Usar esta função fará com que qualquer
> [autoloader](language.oop5.autoload.md) registrado seja usado se a classe ainda não for conhecida.

> **Nota**:
>
> A função **method\_exists()** não pode detectar métodos
> que são magicamente acessíveis usando o
> método mágico
> [`__call`](language.oop5.overloading.md#language.oop5.overloading.methods).

### Veja também

- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [is\_callable()](function.is-callable.md) - Verifica se um valor pode ser chamado como uma função a partir do escopo atual
- [class\_exists()](function.class-exists.md) - Verifica se uma classe foi definida

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
