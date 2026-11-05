# Define uma constante com nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.define.php

---

# define

(PHP 4, PHP 5, PHP 7, PHP 8)

define — Define uma constante com nome

### Descrição

function **define**([string](language.types.string.md) `$constant_name`, [mixed](language.types.mixed.md) `$value`, [bool](language.types.boolean.md) `$case_insensitive` = **`false`**): [bool](language.types.boolean.md)

Define uma constante com nome em tempo de execução.

### Parâmetros

`constant_name`
:   O nome da constante.

    > **Nota**:
    >
    > É possível definir constante pela função **define()** com nome reservado
    > ou até mesmo com nome inválido, cujo valor pode (somente) ser recuperado com
    > a função [constant()](function.constant.md). Entretanto, isto não é recomendado.

`value`
:   O valor da constante.

    **Aviso**

    Apesar de ser possível definir constantes do tipo [resource](language.types.resource.md), não é
    recomendado e pode causar comportamento imprevisível.

`case_insensitive`
:   Se definido para **`true`**, a constante será definida sem diferenciação de maiúsculas/minúsculas.
    O comportamento padrão é diferenciar, isto é,
    `CONSTANT` e `Constant` representam
    valores diferentes.

    **Aviso**

    Definir constantes sem diferenciar maiúsculas/minúsculas foi descontinuado a partir do PHP 7.3.0.
    A partir do PHP 8.0.0, somente **`false`** é um valor aceitável para este parâmetro, passar
    **`true`** irá gerar um alerta.

    > **Nota**:
    >
    > Constantes insensíveis a maiúsculas/minúsculas são armazenadas em minúsculas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | `value` agora pode ser um objeto. |
| 8.0.0 | Passar **`true`** para `case_insensitive` agora emite um **`E_WARNING`**. Passar **`false`** ainda é permitido. |
| 7.3.0 | `case_insensitive` foi descontinuado e será removido na versão 8.0.0. |

### Examples

**Exemplo #1 Definindo Constantes**

```
<?php
define("CONSTANTE", "Olá, mundo.");
echo CONSTANTE; // exibe "Olá, mundo."
echo Constante; // exibe "Constante" e emite um aviso.

define("CUMPRIMENTO", "Tudo bem?", true);
echo CUMPRIMENTO; // exibe "Tudo bem?"
echo Cumprimento; // exibe "Tudo bem?"

// Funciona a partir do PHP 7
define('ANIMAIS', array(
    'cachorro',
    'gato',
    'pássaro'
));
echo ANIMAIS[1]; // exibe "gato"

?>
```

**Exemplo #2 Constantes com Nomes Reservados**

Este exemplo ilustra a *possibilidade* de definir uma
constante com o mesmo nome de uma
[constante mágica](language.constants.magic.md).
Como o comportamento resultante obviamente é confuso, não é portanto
recomendado fazê-lo na prática.

```
<?php
var_dump(defined('__LINE__'));
var_dump(define('__LINE__', 'test'));
var_dump(constant('__LINE__'));
var_dump(__LINE__);
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
string(4) "test"
int(5)
```

### Veja também

- [defined()](function.defined.md) - Verifica se existe uma constante com o nome informado
- [constant()](function.constant.md) - Retorna o valor de uma constante
- A seção sobre [Constantes](language.constants.md)

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
