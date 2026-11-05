# Obtém uma constante definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getconstant.php

---

# ReflectionClass::getConstant

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getConstant — Obtém uma constante definida

### Descrição

public function **ReflectionClass::getConstant**([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

Obtém a constante definida.

### Parâmetros

`name`
:   O nome da constante de classe a ser obtida.

### Valor Retornado

Valor da constante com o nome `name`.
Retorna **`false`** se a constante não foi encontrada na classe.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Chamar **ReflectionClass::getConstant()** para constantes que não existem foi descontinuado. |

### Examples

**Exemplo #1 Uso de **ReflectionClass::getConstant()****

```
<?php

class Example {
    const C1 = false;
    const C2 = 'Eu sou uma constante';
}

$reflection = new ReflectionClass('Example');

var_dump($reflection->getConstant('C1'));
var_dump($reflection->getConstant('C2'));
var_dump($reflection->getConstant('C3'));
?>
```

O exemplo acima produzirá:

```
bool(false)
string(20) "Eu sou uma constante"
bool(false)
```

### Veja também

- [ReflectionClass::getConstants()](reflectionclass.getconstants.md) - Obtém constantes

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
