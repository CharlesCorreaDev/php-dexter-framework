# Invoca argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.invokeargs.php

---

# ReflectionMethod::invokeArgs

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionMethod::invokeArgs — Invoca argumentos

### Descrição

public function **ReflectionMethod::invokeArgs**([?](language.types.null.md)[object](language.types.object.md) `$object`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

Invoca o método refletido e passa seus argumentos como array.

### Parâmetros

`object`
:   O objeto no qual invocar o método. No caso de métodos estáticos, você pode passar
    [null](language.types.null.md) para este parâmetro.

`args`
:   Os parâmetros a serem passados para a função, como um [array](language.types.array.md).

### Valor Retornado

Retorna o resultado do método.

### Erros/Exceções

Um [ReflectionException](class.reflectionexception.md) se o parâmetro `object`
não contém uma instância da classe na qual este método foi declarado.

Um [ReflectionException](class.reflectionexception.md) se a invocação do método falhou.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | As chaves `args` agora serão interpretadas como nomes de parâmetros, em vez de serem ignoradas silenciosamente. |

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::invokeArgs()****

```
<?php
class HelloWorld {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
echo $reflectionMethod->invokeArgs(new HelloWorld(), array('Mike'));
?>
```

O exemplo acima produzirá:

```
Hello Mike
```

### Notas

> **Nota**:
>
> Se a função tiver argumentos que precisam
> ser referências, então eles devem ser referências na lista de argumentos passada.

### Veja também

- [ReflectionMethod::invoke()](reflectionmethod.invoke.md) - Invoca
- [\_\_invoke()](language.oop5.magic.md#object.invoke)
- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros

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
