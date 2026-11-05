# Componere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.componere.php

---

# Componere

# Introdução

Componere (latim, português: compor) tem como alvo ambientes de produção e fornece uma API para
composição de classes, alteração dinâmica de código durante a execução e conversões.

##### Composição:

[Componere\Definition](class.componere-definition.md) é usado para definir (ou redefinir) uma classe em tempo de execução;
A classe pode então ser registrada, e no caso de redefinição ela substitui a classe original
enquanto o [Componere\Definition](class.componere-definition.md) existir.

public function [Componere\Definition::\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`)

public function [Componere\Definition::\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`)

public function [Componere\Definition::\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [array](language.types.array.md) `$interfaces`)

public function [Componere\Definition::\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`, [array](language.types.array.md) `$interfaces`)

##### Alteração dinâmica:

[Componere\Patch](class.componere-patch.md) é usado para alterar a classe de uma instância específica de um objeto em tempo de execução;
Após a aplicação, o patch permanecerá aplicado enquanto o [Componere\Patch](class.componere-patch.md) existir e poderá ser revertido explicitamente.

public function [Componere\Patch::\_\_construct](componere-patch.construct.md)([object](language.types.object.md) `$instance`)

public function [Componere\Patch::\_\_construct](componere-patch.construct.md)([object](language.types.object.md) `$instance`, [array](language.types.array.md) `$interfaces`)

##### Conversão:

As funções de conversão do **Componere\** podem converter entre tipos compatíveis definidos pelo usuário;
Onde compatível significa que **Type** é sub ou super ao tipo de `object`.

function [Componere\cast](componere.cast.md)([string](language.types.string.md) `$type`, [object](language.types.object.md) `$object`): [object](language.types.object.md)

function [Componere\cast\_by\_ref](componere.cast_by_ref.md)([string](language.types.string.md) `$type`, [object](language.types.object.md) `$object`): [object](language.types.object.md)

- [Instalação/Configuração](componere.setup.md)
  - [Dependências](componere.requirements.md)
  - [Instalação](componere.installation.md)
- [Componere\Abstract\Definition](class.componere-abstract-definition.md) — A classe Componere\Abstract\Definition
  - [Componere\Abstract\Definition::addInterface](componere-abstract-definition.addinterface.md) — Adiciona Interface
  - [Componere\Abstract\Definition::addMethod](componere-abstract-definition.addmethod.md) — Adiciona método
  - [Componere\Abstract\Definition::addTrait](componere-abstract-definition.addtrait.md) — Adiciona Trait
  - [Componere\Abstract\Definition::getReflector](componere-abstract-definition.getreflector.md) — Cria ou obtém uma reflexão
- [Componere\Definition](class.componere-definition.md) — A classe Componere\Definition
  - [Componere\Definition::\_\_construct](componere-definition.construct.md) — Construção da definição
  - [Componere\Definition::addConstant](componere-definition.addconstant.md) — Adiciona constante
  - [Componere\Definition::addProperty](componere-definition.addproperty.md) — Adiciona propriedade
  - [Componere\Definition::register](componere-definition.register.md) — Registro
  - [Componere\Definition::isRegistered](componere-definition.isregistered.md) — Detecção de estado
  - [Componere\Definition::getClosure](componere-definition.getclosure.md) — Obtém Closure
  - [Componere\Definition::getClosures](componere-definition.getclosures.md) — Obtém Closures
- [Componere\Patch](class.componere-patch.md) — A classe Componere\Patch
  - [Componere\Patch::\_\_construct](componere-patch.construct.md) — Construção de Patch
  - [Componere\Patch::apply](componere-patch.apply.md) — Aplica o patch
  - [Componere\Patch::revert](componere-patch.revert.md) — Reversão
  - [Componere\Patch::isApplied](componere-patch.isapplied.md) — Definição de estado
  - [Componere\Patch::derive](componere-patch.derive.md) — Derivaçaõ de Patch
  - [Componere\Patch::getClosure](componere-patch.getclosure.md) — Obtém Closure
  - [Componere\Patch::getClosures](componere-patch.getclosures.md) — Obtém Closures
- [Componere\Method](class.componere-method.md) — A classe Componere\Method
  - [Componere\Method::\_\_construct](componere-method.construct.md) — Construção de método
  - [Componere\Method::setPrivate](componere-method.setprivate.md) — Modificação de acessibilidade
  - [Componere\Method::setProtected](componere-method.setprotected.md) — Modificação de acessibilidade
  - [Componere\Method::setStatic](componere-method.setstatic.md) — Modificação de acessibilidade
  - [Componere\Method::getReflector](componere-method.getreflector.md) — Cria ou obtém Reflexão
- [Componere\Value](class.componere-value.md) — A classe Componere\Value
  - [Componere\Value::\_\_construct](componere-value.construct.md) — Construção de Valor
  - [Componere\Value::setPrivate](componere-value.setprivate.md) — Modificação de acessibilidade
  - [Componere\Value::setProtected](componere-value.setprotected.md) — Modificação de acessibilidade
  - [Componere\Value::setStatic](componere-value.setstatic.md) — Modificação de acessibilidade
  - [Componere\Value::isPrivate](componere-value.isprivate.md) — Detecção de acessibilidade
  - [Componere\Value::isProtected](componere-value.isprotected.md) — Detecção de acessibilidade
  - [Componere\Value::isStatic](componere-value.isstatic.md) — Detecção de acessibilidade
  - [Componere\Value::hasDefault](componere-value.hasdefault.md) — Intereção de Valor
- [Funções de Componere](reference.componere.md)
  - [Componere\cast](componere.cast.md) — Conversão
  - [Componere\cast\_by\_ref](componere.cast_by_ref.md) — Conversão

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
