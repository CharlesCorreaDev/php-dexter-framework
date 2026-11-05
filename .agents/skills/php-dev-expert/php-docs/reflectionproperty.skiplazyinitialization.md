# Marca a propriedade como não lenta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.skiplazyinitialization.php

---

# ReflectionProperty::skipLazyInitialization

(PHP 8 >= 8.4.0)

ReflectionProperty::skipLazyInitialization — Marca a propriedade como não lenta

### Descrição

public function **ReflectionProperty::skipLazyInitialization**([object](language.types.object.md) `$object`): [void](language.types.void.md)

Marca uma propriedade como não lenta, de modo que ela possa ser acessada diretamente sem
acionar a inicialização lenta. A propriedade é inicializada com seu valor
padrão, se houver.
A propriedade não deve ser dinâmica, estática ou virtual e o objeto deve ser
uma instância de uma classe definida pelo usuário ou [stdClass](class.stdclass.md).

Se esta for a última propriedade lenta, o objeto será marcado como não lento e o
inicializador ou função de fábrica será desanexado.

### Parâmetros

`object`
:   O objeto que terá a propriedade marcada.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionProperty::setRawValueWithoutLazyInitialization()](reflectionproperty.setrawvaluewithoutlazyinitialization.md) - Define o valor bruto da propriedade sem acionar a inicialização lenta
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
