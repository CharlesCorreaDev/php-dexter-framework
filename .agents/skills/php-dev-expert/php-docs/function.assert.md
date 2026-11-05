# Executa uma asserção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.assert.php

---

# assert

(PHP 4, PHP 5, PHP 7, PHP 8)

assert — Executa uma asserção

### Descrição

function **assert**([mixed](language.types.mixed.md) `$assertion`, [Throwable](class.throwable.md)|[string](language.types.string.md)|[null](language.types.null.md) `$description` = **`null`**): [bool](language.types.boolean.md)

**assert()**
permite a definição de expectativas: asserções são verificadas em
ambientes de desenvolvimento ou testes, mas que são removidas por otimização
a custo zero em produção.

Asserções podem ser utilizadas para ajudar em depuração.
Um dos usos é para funcionar como verificações de sanidade para precondições
que precisam ser sempre **`true`** e caso elas não sejam confirmadas, isto indica
algum erro de programação.
Outro uso é garantir a presença de certos recursos, como por exemplo
funções de extensões ou certos recursos ou limites de sistema.

As asserções podem ser configurados para serem eliminados, e elas
*não* não devem ser utilizados em operações comuns como por
exemplo a validação de parâmetros. Como regra geral, o código deve se comportar igual
mesmo no caso das asserções estarem desativadas.

**assert()** verificará se a expectativa informada no parâmetro
`assertion` é válida.
Se não, o resultado avaliado é **`false`**, ocorrerá a ação apropriada,
dependendo em como **assert()** está configurado.

O comportamento de **assert()** é ditado pelas seguintes
configurações INI:

**Opções de Configuração de Assert**

| Nome | Padrão | Descrição | Registro de Alterações |
| --- | --- | --- | --- |
| [zend.assertions](ini.core.md#ini.zend.assertions) | `1` | - `1`: gera e executa o código (modo de desenvolvimento) - `0`: gera o código mas ignora durante a execução - `-1`: não gera o código (modo de produção) |  |
| [assert.active](info.configuration.md#ini.assert.active) | **`true`** | Se **`false`**, **assert()** não verifica a expectativa e retorna **`true`** imediatamente. | Descontinuado desde o PHP 8.3.0. |
| [assert.callback](info.configuration.md#ini.assert.callback) | **`null`** | Uma função definida pelo usuário a ser chamada quando a asserção falha. Sua assinatura deve ser: function **assert\_callback**(     [string](language.types.string.md) `$file`,     [int](language.types.integer.md) `$line`,     [null](language.types.null.md) `$assertion`,     [string](language.types.string.md) `$description` = ? ): [void](language.types.void.md) | Anteriormente ao PHP 8.0.0, a assinatura deveria ser: function **assert\_callback**(     [string](language.types.string.md) `$file`,     [int](language.types.integer.md) `$line`,     [string](language.types.string.md) `$assertion`,     [string](language.types.string.md) `$description` = ? ): [void](language.types.void.md)  Descontinuado a partir do PHP 8.3.0. |
| [assert.exception](info.configuration.md#ini.assert.exception) | **`true`** | Se **`true`** irá lançar um [AssertionError](class.assertionerror.md) no caso da expectativa não ser válida. | Descontinuado desde o PHP 8.3.0. |
| [assert.bail](info.configuration.md#ini.assert.bail) | **`false`** | Se **`true`** então a execução do script PHP será abortada caso a expectativa não seja válida. | Descontinuado desde o PHP 8.3.0. |
| [assert.warning](info.configuration.md#ini.assert.warning) | **`true`** | Se **`true`**, será emitido um **`E_WARNING`** no caso da expectativa não seja válida. Essa configuração INI é inefetiva caso [assert.exception](info.configuration.md#ini.assert.exception) esteja ativo. | Descontinuado desde o PHP 8.3.0. |

### Parâmetros

`assertion`
:   Pode ser qualquer expressão que retorna um valor, qual será executado
    e o resultado é utilizado para indicar se a asserção deve passar ou falhar.

    **Aviso**

    Anteriormente ao PHP 8.0.0, se `assertion` era uma
    [string](language.types.string.md) ela era interpretada como código PHP e executada via
    [eval()](function.eval.md).
    A string era passada para o argumento do callback no terceiro argumento.
    Este comportamento está *DESCONTINUADO* desde o PHP 7.2.0,
    e foi *REMOVIDO* no PHP 8.0.0.

`description`
:   Se `description` é uma instância de
    [Throwable](class.throwable.md), ela será lançada somente se
    `assertion` for executada e falhar.
    > **Nota**:
    >
    > A partir do 8.0.0, isto ocorria *antes* de chamar
    > a função de callback potencialmente definida.

    > **Nota**:
    >
    > A partir do PHP 8.0.0, o [object](language.types.object.md) será lançado independente da configuração de
    > [assert.exception](info.configuration.md#ini.assert.exception).

    > **Nota**:
    >
    > A partird do PHP 8.0.0, a configuração
    > [assert.bail](info.configuration.md#ini.assert.bail)
    > não terá efeito nesse caso.

    Se `description` é uma [string](language.types.string.md) esta mensagem
    será utilizada em uma exceção ou em um aviso.
    Uma descrição opcional que será incluída na mensagem de falha no caso
    de `assertion` falhar.

    Se `description` é omitido.
    Uma descrição padrão, igual ao código fonte na invocação de
    **assert()** é criada em tempo de compilação.

### Valor Retornado

**assert()** sempre retorna **`true`** se ao menos uma das seguintes condições forem verdadeiras:

- `zend.assertions=0`
- `zend.assertions=-1`
- `assert.active=0`
- `assert.exception=1`
- `assert.bail=1`
- Um objeto exception foi passado em `description`.

Se nenhuma das condições forem verdadeiras **assert()** ainda pode retornar **`true`** se
`assertion` possa ser convertido em um valor verdadeiro, ou **`false`** nos demais casos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Todas as configurações INI `assert.` estão desencorajadas. |
| 8.0.0 | **assert()** não mais avaliará argumentos strings, e por outro lado elas serão tratadas como um argumento comum. `assert($a == $b)` deve ser utilizado ao invés de `assert('$a == $b')`. A diretiva `assert.quiet_eval` php.ini e a constante **`ASSERT_QUIET_EVAL`** também foram removidos, dado que elas não tem mais nenhum efeito. |
| 8.0.0 | Se `description` é uma instância de [Throwable](class.throwable.md), a exceção é lançada no caso da asserção falhar, independentemente do valor de [assert.exception](info.configuration.md#ini.assert.exception). |
| 8.0.0 | Se `description` é uma instância de [Throwable](class.throwable.md), o callback não é chamado, mesmo que ele seja informado. |
| 8.0.0 | Declarar uma função chamada `assert()` dentro de um namespace não é mais permitido, e emite um **`E_COMPILE_ERROR`**. |
| 7.3.0 | Declarar uma função chamada `assert()` dentro de um namespace foi descontinuado. Uma declaração assim emite um **`E_DEPRECATED`**. |
| 7.2.0 | Uso de [string](language.types.string.md)s no argumento `assertion` foi descontinuado. Isto agora emite um aviso **`E_DEPRECATED`** quando ambos [assert.active](info.configuration.md#ini.assert.active) e [zend.assertions](ini.core.md#ini.zend.assertions) estão configurados para `1`. |

### Examples

**Exemplo #1 Exemplo de **assert()****

```
<?php
assert(1 > 2);
echo 'Hi!';
```

Se as asserções estiverem ativadas ([`zend.assertions=1`](ini.core.md#ini.zend.assertions)),
o exemplo acima emitirá:

```
Fatal error: Uncaught AssertionError: assert(1 > 2) in example.php:2
Stack trace:
#0 example.php(2): assert(false, 'assert(1 > 2)')
#1 {main}
  thrown in example.php on line 2
```

Se as asserções estiverem desativadas (`zend.assertions=0` ou `zend.assertions=-1`),
o exemplo acima emitirá:

```
Hi!
```

**Exemplo #2 Utilizando uma mensagem customizada**

```
<?php
assert(1 > 2, "Esperado que um seja maior que dois");
echo 'Hi!';
```

Se as asserções estiverem ativadas, o código acima emitirá:

```
Fatal error: Uncaught AssertionError: Esperado que um seja maior que dois in example.php:2
Stack trace:
#0 example.php(2): assert(false, 'Esperado que um...')
#1 {main}
  thrown in example.php on line 2
```

Se as asserções estiverem desativadas, o código acima emitirá:

```
Hi!
```

**Exemplo #3 Utilizando uma classe de exceção**

```
<?php
class ArithmeticAssertionError extends AssertionError {}

assert(1 > 2, new ArithmeticAssertionError("Esperado que um seja maior que dois"));
echo 'Hi!';
```

Se as asserções estiverem ativas, o exemplo acima emitirá:

```
Fatal error: Uncaught ArithmeticAssertionError: Esperado que um seja maior que dois in example.php:4
Stack trace:
#0 {main}
  thrown in example.php on line 4
```

Se as asserções estiverem desativadas o exemplo acima emitirá:

```
Hi!
```

### Veja também

- [assert\_options()](function.assert-options.md) - Define/obtém as várias opções de asserção

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
