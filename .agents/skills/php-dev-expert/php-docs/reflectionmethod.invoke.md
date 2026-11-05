# Invoca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.invoke.php

---

# ReflectionMethod::invoke

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::invoke — Invoca

### Descrição

public function **ReflectionMethod::invoke**([?](language.types.null.md)[object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Invoca um método refletido.

### Parâmetros

`object`
:   O objeto no qual invocar o método. Para métodos estáticos, passe
    [null](language.types.null.md) para este parâmetro.

`args`
:   Zero ou mais parâmetros a serem passados ​​para o método.
    Ele aceita um número variável de parâmetros que são passados ​​para o método.

### Valor Retornado

Retorna o resultado do método.

### Erros/Exceções

Um [ReflectionException](class.reflectionexception.md) se o parâmetro `object`
não contém uma instância da classe na qual este método foi declarado.

Um [ReflectionException](class.reflectionexception.md) se a invocação do método falhou.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::invoke()****

```
<?php
class HelloWorld {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
echo $reflectionMethod->invoke(new HelloWorld(), 'Mike');
?>
```

O exemplo acima produzirá:

```
Hello Mike
```

### Notas

> **Nota**:
>
> **ReflectionMethod::invoke()** não pode ser usado quando parâmetros de referência são esperados.
> [ReflectionMethod::invokeArgs()](reflectionmethod.invokeargs.md) deve ser usado (passando referências na lista de argumentos).

### Veja também

- [ReflectionMethod::invokeArgs()](reflectionmethod.invokeargs.md) - Invoca argumentos
- [\_\_invoke()](language.oop5.magic.md#object.invoke)
- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro

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
