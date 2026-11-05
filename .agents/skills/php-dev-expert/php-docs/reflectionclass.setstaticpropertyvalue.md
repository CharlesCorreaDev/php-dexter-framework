# Define o valor da propriedade estática pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.setstaticpropertyvalue.php

---

# ReflectionClass::setStaticPropertyValue

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionClass::setStaticPropertyValue — Define o valor da propriedade estática pública

### Descrição

public function **ReflectionClass::setStaticPropertyValue**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor da propriedade estática pública.
Se a propriedade for privada ou protegida, o método falhará.

[ReflectionProperty::setValue()](reflectionproperty.setvalue.md) permite definir
valores de propriedades públicas, privadas e protegidas.

### Parâmetros

`name`
:   Nome da propriedade.

`value`
:   Novo valor da propriedade.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Usar **ReflectionClass::setStaticPropertyValue()** para definir uma propriedade privada ou protegida agora resulta em erro fatal. Anteriormente, lançava uma exceção [ReflectionException](class.reflectionexception.md). |

### Veja também

- [ReflectionClass::getStaticPropertyValue()](reflectionclass.getstaticpropertyvalue.md) - Obtém o valor da propriedade estática
- [ReflectionProperty::setValue()](reflectionproperty.setvalue.md) - Define valor da propriedade

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
