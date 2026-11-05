# Define o valor bruto da propriedade sem acionar a inicialização lenta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.setrawvaluewithoutlazyinitialization.php

---

# ReflectionProperty::setRawValueWithoutLazyInitialization

(PHP 8 >= 8.4.0)

ReflectionProperty::setRawValueWithoutLazyInitialization — Define o valor bruto da propriedade sem acionar a inicialização lenta

### Descrição

public function **ReflectionProperty::setRawValueWithoutLazyInitialization**([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define (altera) o valor da propriedade sem acionar a inicialização lenta
e sem chamar funções de gancho.
A propriedade é marcada como não lenta e pode ser acessada posteriormente sem
acionar a inicialização lenta.
A propriedade não deve ser dinâmica, estática ou virtual e o objeto deve ser
uma instância de uma classe definida pelo usuário ou [stdClass](class.stdclass.md).

Se esta for a última propriedade lenta, o objeto será marcado como não lento e o
inicializador ou função de fábrica será desanexado.

### Parâmetros

`object`
:   O objeto que terá a propriedade alterada.

`value`
:   O novo valor.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionProperty::skipLazyInitialization()](reflectionproperty.skiplazyinitialization.md) - Marca a propriedade como não lenta
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento

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
