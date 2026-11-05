# O nome da classe da qual o método estático foi chamado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-called-class.php

---

# get\_called\_class

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

get\_called\_class — O nome da classe da qual o método estático foi chamado

### Descrição

function **get\_called\_class**(): [string](language.types.string.md)

Obtém o nome da classe da qual o método estático foi chamado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da classe.

### Erros/Exceções

Se **get\_called\_class()** for chamada de fora de uma classe,
um [Error](class.error.md) é disparado. Antes do PHP 8.0.0,
um aviso **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Chamar esta função de fora de uma classe agora irá disparar um [Error](class.error.md). Anteriormente, um aviso **`E_WARNING`** era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Usando **get\_called\_class()****

```
<?php

class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();
bar::test();

?>
```

O exemplo acima produzirá:

```
string(3) "foo"
string(3) "bar"
```

### Veja também

- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe
- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
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
