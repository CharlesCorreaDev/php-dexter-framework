# Lista de alterações da POO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.changelog.php

---

## Lista de alterações da POO

As alterações no modelo de POO do PHP são registradas aqui. Descrições e outras notas
relacionadas a estes recursos estão documentadas na documentação do modelo POO.

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado: suporte para [Ganchos de Propriedade](language.oop5.property-hooks.md). |
| 8.4.0 | Adicionado: suporte para [Objetos Lentos](language.oop5.lazy-objects.md). |
| 8.1.0 | Adicionado: suporte ao modificador final para constantes de classe. Além disso, as constantes de interface agora são substituíveis por padrão. |
| 8.0.0 | Adicionado: suporte ao [operador nullsafe](language.oop5.basic.md#language.oop5.basic.nullsafe) *?->* para acessar propriedades e métodos em objetos que podem ser nulos. |
| 7.4.0 | Alterado: agora é possível lançar uma exceção dentro de **\_\_toString()**. |
| 7.4.0 | Adicionado: suporte a covariância limitada de tipo de retorno e contravariância de tipo de argumento. O suporte completo à variância só estará disponível se o carregamento automático for usado. Dentro de um único arquivo, apenas referências de tipo não cíclicas são possíveis. |
| 7.4.0 | Adicionado: agora é possível usar tipos nas propriedades da classe. |
| 7.3.0 | Incompatibilidade: o desempacotamento de argumentos com instâncias de [Traversable](class.traversable.md) com chaves não-[int](language.types.integer.md) não é mais suportado. Esse comportamento não era intencional e, portanto, foi removido. |
| 7.3.0 | Incompatibilidade: nas versões anteriores era possível separar as propriedades estáticas atribuindo uma referência. Isso foi removido. |
| 7.3.0 | Alterado: o operador [instanceof](language.operators.type.md) agora permite literais como o primeiro operando, caso em que o resultado é sempre **`false`**. |
| 7.2.0 | Descontinuado: a função [\_\_autoload()](function.autoload.md) foi descontinuada em favor da função [spl\_autoload\_register()](function.spl-autoload-register.md). |
| 7.2.0 | Alterado: o seguinte nome não pode ser usado para nomear classes, interfaces ou traits: `object`. |
| 7.2.0 | Alterado: uma vírgula à direita agora pode ser adicionada à sintaxe de agrupamento de use para namespaces. |
| 7.2.0 | Alterado: extensão do tipo de parâmetro. Os tipos de parâmetro de métodos sobrescritos e de implementações de interface agora podem ser omitidos. |
| 7.2.0 | Alterado: métodos abstratos agora podem ser sobrescritos quando uma classe abstrata estende outra classe abstrata. |
| 7.1.0 | Alterado: os nomes a seguir não podem ser usados para nomear classes, interfaces ou traits: `void` e `iterable`. |
| 7.1.0 | Adicionado: agora é possível especificar a [visibilidade das constantes de classe](language.oop5.visibility.md#language.oop5.visiblity-constants). |
| 7.0.0 | Descontinuado: chamadas [estáticas](language.oop5.static.md) a métodos que não são declarados estáticos. |
| 7.0.0 | Descontinuado: [construtor](language.oop5.decon.md) no estilo do PHP 4. Ou seja, métodos com o mesmo nome da classe em que eles são definidos. |
| 7.0.0 | Adicionado: a declaração *use* de grupo: classes, funções e constantes importadas do mesmo namespace agora podem ser agrupadas em uma única declaração use. |
| 7.0.0 | Adicionado: o suporte a [classes anônimas](language.oop5.anonymous.md) foi adicionado via `new class`. |
| 7.0.0 | Incompatibilidade: iterar sobre um [object](language.types.object.md) que não seja uma instância de [Traversable](class.traversable.md) agora terá o mesmo comportamento que iterar sobre [array](language.types.array.md)s por referência. |
| 7.0.0 | Alterado: definir propriedades (compatíveis) em duas [traits](language.oop5.traits.md) não dispara mais um erro. |
| 5.6.0 | Adicionado: o método [\_\_debugInfo()](language.oop5.magic.md#object.debuginfo). |
| 5.5.0 | Adicionado: a constante mágica [::class](language.oop5.basic.md#language.oop5.basic.class.class). |
| 5.5.0 | Adicionado: [finally](language.error-handling.throwable.md#language.exceptions) para manipular exceções. |
| 5.4.0 | Adicionado: [traits](language.oop5.traits.md). |
| 5.4.0 | Alterado: se uma classe [abstrata](language.oop5.abstract.md) definir uma assinatura para o [construtor](language.oop5.decon.md), agora ela será imposta. |
| 5.3.3 | Alterado: métodos com o mesmo nome do último elemento de uma classe [com namespace](language.namespaces.md) não serão mais tratados como [construtores](language.oop5.decon.md). Esta alteração não afeta classes sem namespace. |
| 5.3.0 | Alterado: classes que implementam interfaces com métodos que possuem valores padrão no protótipo não precisam mais corresponder ao valor padrão da interface. |
| 5.3.0 | Alterado: agora é possível referenciar a classe usando uma variável (por exemplo, `echo $nome_da_classe::CONSTANTE;`). O valor da variável não pode ser uma palavra-chave (por exemplo, `self`, `parent` ou `static`). |
| 5.3.0 | Alterado: um erro de nível **`E_WARNING`** será emitido se os métodos mágicos de [sobrecarga](language.oop5.overloading.md) forem declarados [estáticos](language.oop5.static.md). Também impõe o requisito de visibilidade pública. |
| 5.3.0 | Alterado: antes do PHP 5.3.0, as exceções lançadas na função [\_\_autoload()](function.autoload.md) não podiam ser capturadas no bloco [catch](language.error-handling.throwable.md#language.exceptions) e resultariam em um erro fatal. Agora as exceções lançadas na função \_\_autoload podem ser capturadas no bloco [catch](language.error-handling.throwable.md#language.exceptions), com uma condição. Se uma exceção personalizada for lançada, a classe de exceção personalizada deve estar disponível. A função \_\_autoload pode ser usada recursivamente para carregar automaticamente a classe de exceção personalizada. |
| 5.3.0 | Adicionado: o método [\_\_callStatic](language.oop5.overloading.md). |
| 5.3.0 | Adicionado: suporte a [heredoc](language.types.string.md#language.types.string.syntax.heredoc) e [nowdoc](language.types.string.md#language.types.string.syntax.nowdoc) nas definições de *constantes* e propriedades de classe. Nota: os valores heredoc devem seguir as mesmas regras que strings com aspas duplas, (por exemplo, sem variáveis dentro). |
| 5.3.0 | Adicionado: [Late Static Bindings](language.oop5.late-static-bindings.md). |
| 5.3.0 | Adicionado: o método [\_\_invoke()](language.oop5.magic.md#object.invoke). |
| 5.2.0 | Alterado: o método [\_\_toString()](language.oop5.magic.md#object.tostring) só era chamado quando combinado diretamente com [echo](function.echo.md) ou [print](function.print.md). Mas agora, ele é chamado em qualquer contexto de [string](language.types.string.md) (por exemplo, em [printf()](function.printf.md) com o modificador `%s`), mas não em outros contextos de tipo (por exemplo, com o modificador `%d`). A partir do PHP 5.2.0, a conversão de [object](language.types.object.md)s sem um método [\_\_toString](language.oop5.magic.md#object.tostring) para [string](language.types.string.md) emitirá um erro de nível **`E_RECOVERABLE_ERROR`**. |
| 5.1.3 | Alterado: nas versões anteriores do PHP 5, o uso de `var` era considerado descontinuado e emitiria um erro de nível **`E_STRICT`**. Agora não é mais descontinuado, portanto não emite o erro. |
| 5.1.0 | Alterado: o método estático [\_\_set\_state()](language.oop5.magic.md#object.set-state) agora é chamado por classes exportadas com a função [var\_export()](function.var-export.md). |
| 5.1.0 | Adicionado: os métodos [\_\_isset()](language.oop5.overloading.md#object.isset) e [\_\_unset()](language.oop5.overloading.md#object.unset). |

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
