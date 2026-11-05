# Cria uma nova instância de classe a partir de determinados argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.newinstance.php

---

# ReflectionClass::newInstance

(PHP 5, PHP 7, PHP 8)

ReflectionClass::newInstance — Cria uma nova instância de classe a partir de determinados argumentos

### Descrição

public function **ReflectionClass::newInstance**([mixed](language.types.mixed.md) `...$args`): [object](language.types.object.md)

Cria uma nova instância da classe. Os argumentos fornecidos são passados para o
construtor de classe.

### Parâmetros

`args`
:   Aceita um número variável de argumentos que são passados para a classe
    construtor, bem como [call\_user\_func()](function.call-user-func.md).

### Valor Retornado

### Erros/Exceções

Uma [ReflectionException](class.reflectionexception.md) se o construtor da classe não for público.

Um [ReflectionException](class.reflectionexception.md) se a classe não tiver um construtor
e o parâmetro `args` contém um ou mais parâmetros.

### Veja também

- [ReflectionClass::newInstanceArgs()](reflectionclass.newinstanceargs.md) - Cria uma nova instância de classe a partir de determinados argumentos
- [ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md) - Cria uma nova instância de classe sem invocar o construtor

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
