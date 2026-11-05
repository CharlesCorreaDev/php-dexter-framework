# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uopz.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

Os seguintes opcodes são definidos como constantes pelo uopz antes da versão 5.0.0:

**`ZEND_EXIT`** ([int](language.types.integer.md))
:   Invocado por exit() e die(), não recebe argumentos.
    Retorna o booleano **`true`** para sair, **`false`** para continuar.

**`ZEND_NEW`** ([int](language.types.integer.md))
:   Invocado pela construção do objeto,
    recebe a classe do objeto que está sendo criado como único argumento.

**`ZEND_THROW`** ([int](language.types.integer.md))
:   Invocado pela construção throw,
    recebe a classe da exceção lançada como único argumento.

**`ZEND_FETCH_CLASS`** ([int](language.types.integer.md))
:   Invocado após a composição,
    recebe o nome da classe que está sendo buscada como único argumento.

**`ZEND_ADD_TRAIT`** ([int](language.types.integer.md))
:   Invocado após a composição,
    recebe a classe à qual o Trait está sendo adicionada como o primeiro argumento,
    e o nome do Trait como o segundo argumento.

**`ZEND_ADD_INTERFACE`** ([int](language.types.integer.md))
:   Invocado após a composição,
    recebe a classe à qual a interface está sendo adicionada como o primeiro argumento,
    e o nome da interface como o segundo argumento

**`ZEND_INSTANCEOF`** ([int](language.types.integer.md))
:   Invocado pelo operador instanceof,
    recebe o objeto a ser verificado como o primeiro argumento,
    e o nome da classe à qual esse objeto deve pertencer como o segundo argumento.

As seguintes constantes controlam o comportamento da máquina virtual após a invocação de um manipulador de usuário.
Tenha muito cuidado!
Essas constantes foram removidas a partir do uopz 5.0.0.

**`ZEND_USER_OPCODE_CONTINUE`** ([int](language.types.integer.md))
:   Avança 1 opcode e continua.

**`ZEND_USER_OPCODE_ENTER`** ([int](language.types.integer.md))
:   Entra em novo op\_array sem recursão.

**`ZEND_USER_OPCODE_LEAVE`** ([int](language.types.integer.md))
:   Retorna para chamar op\_array dentro do mesmo executor.

**`ZEND_USER_OPCODE_DISPATCH`** ([int](language.types.integer.md))
:   Envia para o manipulador de opcode original.

**`ZEND_USER_OPCODE_DISPATCH_TO`** ([int](language.types.integer.md))
:   Envia para um manipulador específico (operação OR com constante de opcode ZEND).

**`ZEND_USER_OPCODE_RETURN`** ([int](language.types.integer.md))
:   Sai do executor (retorna da função).

Os seguintes modificadores são registrados como constantes pelo uopz:

**`ZEND_ACC_PUBLIC`** ([int](language.types.integer.md))
:   Marca as funções como públicas, o padrão.

**`ZEND_ACC_PROTECTED`** ([int](language.types.integer.md))
:   Marca as funções como protegidas.

**`ZEND_ACC_PRIVATE`** ([int](language.types.integer.md))
:   Marca as funções como privadas.

**`ZEND_ACC_STATIC`** ([int](language.types.integer.md))
:   Marca as funções como estáticas.

**`ZEND_ACC_FINAL`** ([int](language.types.integer.md))
:   Marca as funções como finais.

**`ZEND_ACC_ABSTRACT`** ([int](language.types.integer.md))
:   Marca as funções como abstratas.

**`ZEND_ACC_CLASS`** ([int](language.types.integer.md))
:   Fictício registrado para consistência, o tipo padrão de entrada de classe.
    Removido a partir do uopz 5.0.0.

**`ZEND_ACC_INTERFACE`** ([int](language.types.integer.md))
:   Marca as classes como interfaces.
    Removido a partir do uopz 5.0.0.

**`ZEND_ACC_TRAIT`** ([int](language.types.integer.md))
:   Marca as classes como Traits.
    Removido a partir do uopz 5.0.0.

**`ZEND_ACC_FETCH`** ([int](language.types.integer.md))
:   Usado somente para obtenção de sinalizadores.
    Removido a partir do uopz 5.0.0.

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
