# Estendendo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflection.extending.php

---

# Estendendo

Caso a intenção seja criar versões especializadas das
classes nativas (seja para criar HTML colorido
na exportação, ou para ter variáveis membros de
fácil acesso ao invés de métodos ou para ter métodos utilitários),
elas podem ser estendidas.

**Exemplo #1 Estendendo classe nativas**

```
<?php
/**
 * Minha Classe Reflection_Method
 */
class My_Reflection_Method extends ReflectionMethod
{
    public $visibility = array();

    public function __construct($o, $m)
    {
        parent::__construct($o, $m);
        $this->visibility = Reflection::getModifierNames($this->getModifiers());
    }
}

/**
 * Demonstração classe #1
 *
 */
class T {
    protected function x() {}
}

/**
 * Demonstração classe #2
 *
 */
class U extends T {
    function x() {}
}

// Exibir as informações
var_dump(new My_Reflection_Method('U', 'x'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(My_Reflection_Method)#1 (3) {
  ["visibility"]=>
  array(1) {
    [0]=>
    string(6) "public"
  }
  ["name"]=>
  string(1) "x"
  ["class"]=>
  string(1) "U"
}
```

**Cuidado**

Se construtor for sobrescrito, lembre-se de chamar
o construtor pai antes de qualquer código que for adicionado.
Se isto não for feito, ocorrerá o seguinte erro:
`Fatal error: Internal error: Failed to retrieve the reflection object`

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
