# A classe WeakReference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.weakreference.php

---

# A classe WeakReference

(PHP 7 >= 7.4.0, PHP 8)

## Introdução

Referências fracas permitem que o programador mantenha uma referência a um objeto
que não impede que o objeto seja destruído.
Eles são úteis para implementar estruturas como cache.
Se o objeto original tiver sido destruído, **`null`** será retornado
ao chamar o método [WeakReference::get()](weakreference.get.md).
O objeto original será destruído quando o
[refcount](features.gc.refcounting-basics.md) dele cair para zero;
criar referências fracas não aumenta o `refcount` do objeto que está sendo referenciado.

**WeakReference**s não podem ser serializadas.

## Resumo da classe

final
class ****WeakReference****
{

/\* Métodos \*/

public function [\_\_construct](weakreference.construct.md)()

public static function [create](weakreference.create.md)([object](language.types.object.md) `$object`): [WeakReference](class.weakreference.md)

public function [get](weakreference.get.md)(): [?](language.types.null.md)[object](language.types.object.md)

}

## Exemplos de referência fraca

**Exemplo #1 Uso básico de referência fraca**

```
<?php

$obj = new stdClass();
$weakref = WeakReference::create($obj);

var_dump($weakref->get());

unset($obj);

var_dump($weakref->get());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#1 (0) {
}
NULL
```

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O resultado de **WeakReference::\_\_debugInfo()** agora inclui o objeto referenciado ou **`null`** se a referência não for mais válida. |

## Índice

- [WeakReference::\_\_construct](weakreference.construct.md) — Construtor que desabilita a instanciação
- [WeakReference::create](weakreference.create.md) — Cria uma nova referência fraca
- [WeakReference::get](weakreference.get.md) — Obtém um objeto referenciado fracamente

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
