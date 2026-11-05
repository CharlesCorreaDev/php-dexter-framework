# Chama um método estático

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.forward-static-call.php

---

# forward\_static\_call

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

forward\_static\_call — Chama um método estático

### Descrição

function **forward\_static\_call**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Chama uma função ou método definido pelo usuário fornecido pelo parâmetro `callback`,
com os argumentos na sequência. Esta função deve ser chamada dentro de um contexto
de método, não pode ser usada fora de uma classe.
Ele usa a [ligação estática
tardia](language.oop5.late-static-bindings.md).

### Parâmetros

`callback`
:   A função ou método a ser chamado. Este parâmetro pode ser um array,
    com o nome da classe e do método, ou uma string, com um nome
    de função.

`args`
:   Zero ou mais parâmetros a serem passados ​​para a função.

### Valor Retornado

Retorna o resultado da função ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **forward\_static\_call()****

```
<?php

class A
{
    const NAME = 'A';
    public static function test() {
        $args = func_get_args();
        echo static::NAME, " ".join(',', $args)." \n";
    }
}

class B extends A
{
    const NAME = 'B';

    public static function test() {
        echo self::NAME, "\n";
        forward_static_call(array('A', 'test'), 'mais', 'argumentos');
        forward_static_call( 'test', 'outros', 'argumentos');
    }
}

B::test('foo');

function test() {
        $args = func_get_args();
        echo "C ".join(',', $args)." \n";
    }

?>
```

O exemplo acima produzirá:

```
B
B mais,argumentos
C outros,argumentos
```

### Veja também

- [forward\_static\_call\_array()](function.forward-static-call-array.md) - Chama um método estático e passa os argumentos como array
- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros
- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro
- [is\_callable()](function.is-callable.md) - Verifica se um valor pode ser chamado como uma função a partir do escopo atual

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
