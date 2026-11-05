# Cria um apelido para uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.class-alias.php

---

# class\_alias

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

class\_alias — Cria um apelido para uma classe

### Descrição

function **class\_alias**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$alias`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [bool](language.types.boolean.md)

Cria um apelido com o nome informado em `alias`
com base na classe definida pelo usuário `class`.
A classe com apelido é exatamente igual à classe original.

O apelido de classe não pode ser nenhuma das [palavras reservadas](reserved.other-reserved-words.md) do PHP.

> **Nota**:
>
> A partir do PHP 8.3.0, **class\_alias()** também suporta
> a criação de um apelido de uma classe interna do PHP.

### Parâmetros

`class`
:   A classe original.

`alias`
:   O nome do alias da classe.

`autoload`
:   Se deve-se [carregar automaticamente](language.oop5.autoload.md)
    caso a classe original não seja encontrada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **class\_alias()** agora suporta criação de apelido de uma classe interna. |

### Examples

**Exemplo #1 Exemplo de **class\_alias()****

```
<?php

class Foo { }

class_alias('Foo', 'Bar');

$a = new Foo;
$b = new Bar;

// os objetos são os mesmos
var_dump($a == $b, $a === $b);
var_dump($a instanceof $b);

// as classes são as mesmas
var_dump($a instanceof Foo);
var_dump($a instanceof Bar);

var_dump($b instanceof Foo);
var_dump($b instanceof Bar);

?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
```

### Notas

> **Nota**:
>
> Nomes de classe não são sensíveis a maiúsculas/minúsculas no PHP, e isto é refletido nesta
> função. Apelidos criados por **class\_alias()** são declarados em
> minúsculas. Isto significa que para uma classe
> `MinhaClasse`, a chamada a `class_alias('MinhaClasse', 'ApelidoDaMinhaClasse')`
> irá declarar um novo apelido de classe chamado `apelidodaminhaclasse`.

### Veja também

- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe
- [is\_subclass\_of()](function.is-subclass-of.md) - Verifica se o objeto tem esta classe como uma de suas classes pai

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
