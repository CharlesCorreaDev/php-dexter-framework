# Define acessibilidade do método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.setaccessible.php

---

# ReflectionMethod::setAccessible

(PHP 5 >= 5.3.2, PHP 7, PHP 8)

ReflectionMethod::setAccessible — Define acessibilidade do método

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionMethod::setAccessible**([bool](language.types.boolean.md) `$accessible`): [void](language.types.void.md)

Permite a invocação de um método protegido ou privado através do método [ReflectionMethod::invoke()](reflectionmethod.invoke.md).

> **Nota**:
>
> A partir do PHP 8.1.0, chamar este método não tem efeito; todos os métodos são invocáveis por padrão.

### Parâmetros

`accessible`
:   **`true`** para permitir acessibilidade, ou **`false`**.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi descontinuado, já que não tem mais efeito. |
| 8.1.0 | Chamar este método não tem efeito; todos os métodos são chamados por padrão. |

### Examples

**Exemplo #1 Definição de classe simples**

```
<?php
class MyClass
{
    private function foo()
    {
        return 'bar';
    }
}

$method = new ReflectionMethod("MyClass", "foo");
$method->setAccessible(true);

$obj = new MyClass();
echo $method->invoke($obj);
echo $obj->foo();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bar
Fatal error: Uncaught Error: Call to private method MyClass::foo() from global scope in /in/qdaZS:16
```

### Veja também

- [ReflectionMethod::isPrivate()](reflectionmethod.isprivate.md) - Verifica se o método é privado
- [ReflectionMethod::isProtected()](reflectionmethod.isprotected.md) - Verifica se o método é protegido

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
