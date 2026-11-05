# Retorna um closure criado dinamicamente para o método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.getclosure.php

---

# ReflectionMethod::getClosure

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionMethod::getClosure — Retorna um closure criado dinamicamente para o método

### Descrição

public function **ReflectionMethod::getClosure**([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [Closure](class.closure.md)

Crie um closure que chamará o método.

### Parâmetros

`object`
:   Proibido para métodos estáticos, obrigatório para outros métodos.

### Valor Retornado

Retorna o [Closure](class.closure.md) recém-criado.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `object` for **`null`** mas o método não é estático.

Lança um [ReflectionException](class.reflectionexception.md) se `object` não for uma instância da classe na qual este método foi declarado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `object` agora é anulável. |

### Veja também

- [Sintaxe chamável de primeira classe](functions.first_class_callable_syntax.md)

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
