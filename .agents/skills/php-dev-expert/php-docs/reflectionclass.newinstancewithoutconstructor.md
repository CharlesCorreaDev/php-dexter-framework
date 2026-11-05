# Cria uma nova instância de classe sem invocar o construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.newinstancewithoutconstructor.php

---

# ReflectionClass::newInstanceWithoutConstructor

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::newInstanceWithoutConstructor — Cria uma nova instância de classe sem invocar o construtor

### Descrição

public function **ReflectionClass::newInstanceWithoutConstructor**(): [object](language.types.object.md)

Cria uma nova instância da classe sem invocar o construtor.

### Parâmetros

### Valor Retornado

### Erros/Exceções

Uma [ReflectionException](class.reflectionexception.md) se a classe for uma classe
interna que não pode ser instanciada sem invocar o construtor.
Esta exceção é limitada apenas a classes internas que são
do tipo [final](language.oop5.final.md).

### Veja também

- [ReflectionClass::newInstance()](reflectionclass.newinstance.md) - Cria uma nova instância de classe a partir de determinados argumentos
- [ReflectionClass::newInstanceArgs()](reflectionclass.newinstanceargs.md) - Cria uma nova instância de classe a partir de determinados argumentos

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
