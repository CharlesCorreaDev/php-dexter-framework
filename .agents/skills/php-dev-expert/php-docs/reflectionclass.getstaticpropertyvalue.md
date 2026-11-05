# Obtém o valor da propriedade estática

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getstaticpropertyvalue.php

---

# ReflectionClass::getStaticPropertyValue

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionClass::getStaticPropertyValue — Obtém o valor da propriedade estática

### Descrição

public function **ReflectionClass::getStaticPropertyValue**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `&$default` = ?): [mixed](language.types.mixed.md)

Obtém o valor de uma propriedade estática nesta classe.

### Parâmetros

`name`
:   O nome da propriedade estática para a qual retornar um valor.

`default`
:   Um valor padrão a ser retornado caso a classe não declare um valor estático
    propriedade com o `name` fornecido. Se a propriedade
    não existe e este argumento é omitido, uma
    [ReflectionException](class.reflectionexception.md) é lançada.

### Valor Retornado

O valor da propriedade estática.

### Examples

**Exemplo #1 Exemplo básico de **ReflectionClass::getStaticPropertyValue()****

```
<?php
class Apple {
    public static $color = 'Red';
}

$class = new ReflectionClass('Apple');
var_dump($class->getStaticPropertyValue('color'));
?>
```

O exemplo acima produzirá:

```
string(3) "Red"
```

### Veja também

- [ReflectionClass::getStaticProperties()](reflectionclass.getstaticproperties.md) - Obtém propriedades estáticas
- [ReflectionClass::setStaticPropertyValue()](reflectionclass.setstaticpropertyvalue.md) - Define o valor da propriedade estática pública

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
