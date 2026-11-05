# Chama um método estático e passa os argumentos como array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.forward-static-call-array.php

---

# forward\_static\_call\_array

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

forward\_static\_call\_array — Chama um método estático e passa os argumentos como array

### Descrição

function **forward\_static\_call\_array**([callable](language.types.callable.md) `$callback`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

Chama uma função ou método definido pelo usuário fornecido pelo parâmetro `callback`,
com os argumentos passados como um array, de forma semelhante a
[call\_user\_func\_array()](function.call-user-func-array.md).
Quando chamada de dentro de um contexto de método, ela usa a
[ligação estática tardia](language.oop5.late-static-bindings.md).
Quando chamada fora de um contexto de classe, ela se comporta como
[call\_user\_func\_array()](function.call-user-func-array.md), sem ligação estática tardia.

> **Nota**:
>
> Diferentemente de [forward\_static\_call()](function.forward-static-call.md), esta função não
> requer um escopo de classe ativo: chamar
> [forward\_static\_call()](function.forward-static-call.md) fora de uma classe lança um
> [Error](class.error.md), enquanto esta função não.

### Parâmetros

`callback`
:   A função ou método a ser chamado. Este parâmetro pode ser um [array](language.types.array.md),
    com o nome da classe e do método, ou uma [string](language.types.string.md), com um nome
    de função.

`args`
:   Um parâmetro, reunindo todos os parâmetros do método em um array.

    > **Nota**:
    >
    > Observe que os parâmetros para **forward\_static\_call\_array()** não
    > são passados ​​por referência.

### Valor Retornado

Retorna o resultado da função ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **forward\_static\_call\_array()****

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
        forward_static_call_array(array('A', 'test'), array('mais', 'argumentos'));
        forward_static_call_array( 'test', array('outros', 'argumentos'));
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

- [forward\_static\_call()](function.forward-static-call.md) - Chama um método estático
- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro
- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros
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
