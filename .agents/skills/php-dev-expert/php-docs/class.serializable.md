# A interface Serializable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.serializable.php

---

# A interface Serializable

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Interface para serialização personalizada.

Classes que implementam esta interface não possuem mais suporte aos métodos
[\_\_sleep()](language.oop5.magic.md#object.sleep) e
[\_\_wakeup()](language.oop5.magic.md#object.wakeup).
O método [serialize()](function.serialize.md) é
chamado não importando se uma instância possui a necessidade de ser serializada.
Não invoca o método **\_\_destruct()**,
ou possui qualquer outro efeito colateral a não ser que programado no método.
Quando os dados são desserializados, a classe toma conhecimento e o método
[unserialize()](function.unserialize.md) apropriado é chamado como
um construtor, em vez de chamar o método **\_\_construct()**.
Se for necessário executar o construtor
padrão, pode-se fazer isso no método [unserialize()](function.unserialize.md).

**Aviso**

A partir do PHP 8.1.0, uma classe que implementa **Serializable** sem implementar [\_\_serialize()](language.oop5.magic.md#object.serialize) e [\_\_unserialize()](language.oop5.magic.md#object.unserialize) gerará um aviso de descontinuação.

## Resumo da Interface

interface ****Serializable**** {

/\* Métodos \*/

public function [serialize](serializable.serialize.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [unserialize](serializable.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

}

## Examples

**Exemplo #1 Uso básico**

```
<?php
class obj implements Serializable {
    private $data;
    public function __construct() {
        $this->data = "My private data";
    }
    public function serialize() {
        return serialize($this->data);
    }
    public function unserialize($data) {
        $this->data = unserialize($data);
    }
    public function getData() {
        return $this->data;
    }
}

$obj = new obj;
$ser = serialize($obj);

var_dump($ser);

$newobj = unserialize($ser);

var_dump($newobj->getData());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Deprecated: obj implements the Serializable interface, which is deprecated. Implement __serialize() and __unserialize() instead (or in addition, if support for old PHP versions is necessary) in script on line 2
string(38) "C:3:"obj":23:{s:15:"My private data";}"
string(15) "My private data"
```

## Índice

- [Serializable::serialize](serializable.serialize.md) — Representação em string de um objeto
- [Serializable::unserialize](serializable.unserialize.md) — Constrói o objeto

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
