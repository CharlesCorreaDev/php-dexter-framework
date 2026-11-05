# Sintaxe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.constants.syntax.php

---

## Sintaxe

As constantes podem ser definidas usando a palavra-chave `const`
ou usando a função [define()](function.define.md).
Enquanto [define()](function.define.md) permite que uma constante seja
definida usando uma expressão arbitrária, a palavra-chave `const` possui
restrições, conforme descrito no próximo parágrafo.
Uma vez definida, a constante nunca poderá ser modificada ou
anulada.

Ao usar a palavra-chave `const`,
somente expressões escalares ([bool](language.types.boolean.md), [int](language.types.integer.md),
[float](language.types.float.md) e [string](language.types.string.md)) e
[array](language.types.array.md)s constantes contendo apenas expressões escalares são aceitos.
É possível definir constantes como um [resource](language.types.resource.md),
mas isso deve ser evitado, pois pode causar resultados inesperados.

O valor de uma constante é acessado simplesmente informando seu nome.
Ao contrário das variáveis, uma constante *não* é precedida
por um `$`.
Também é possível usar a função [constant()](function.constant.md) para
ler o valor de uma constante se o nome da constante for obtido dinamicamente.
Use [get\_defined\_constants()](function.get-defined-constants.md) para obter uma lista de
todas as constantes definidas.

> **Nota**:
>
> As constantes e variáveis (globais) estão em espaços de nomes diferentes.
> Isso implica que, por exemplo, **`true`** e
> $TRUE são geralmente diferentes.

Se uma constante indefinida for usada, um erro [Error](class.error.md) será lançado.
Antes do PHP 8.0.0, constantes indefinidas eram interpretadas como uma simples
[string](language.types.string.md), ou seja, CONSTANTE vs. "CONSTANTE".
Esse mecanismo alternativo foi descontinuado a partir do PHP 7.2.0 e um alerta de nível
**`E_WARNING`** será lançado quando isso acontecer.
Antes do PHP 7.2.0, um erro de nível
[E\_NOTICE](ref.errorfunc.md) era lançado.
Veja também por que
[$foo[bar]](language.types.array.md#language.types.array.foo-bar) é
errado (a não ser que `bar` seja uma constante).
Isso não se aplica às [constantes (totalmente) qualificadas](language.namespaces.rules.md),
que sempre lançarão um [Error](class.error.md) se forem indefinidas.

> **Nota**:
>
> Para verificar se uma constante está definida, use a função [defined()](function.defined.md).

Estas são as diferenças entre constantes e variáveis:

- Constantes não têm um cifrão (`$`)
  antes delas;
- Constantes podem ser definidas e acessadas em qualquer lugar sem considerar
  as regras de escopo de variáveis;
- Constantes não podem ser redefinidas ou anuladas depois de
  definidas; e
- Constantes só podem ter valores escalares ou arrays.

**Exemplo #1 Definindo Constantes**

```
<?php
define("CONSTANTE", "Olá Mundo.");
echo CONSTANTE; // imprime "Olá Mundo."
echo Constante; // Lança um erro Error: Undefined constant "Constante"
               // Antes do PHP 8.0.0, imprime "Constante" e emite um aviso.
```

**Exemplo #2 Definindo Constantes usando a palavra-chave `const`**

```
<?php
// Valor escalar simples
const CONSTANTE = 'Olá Mundo';

echo CONSTANTE . "\n";

// Expressão escalar
const OUTRA_CONSTANTE = CONSTANTE . '; Adeus Mundo';
echo OUTRA_CONSTANTE . "\n";

const ANIMAIS = array('cachorro', 'gato', 'pássaro');
echo ANIMAIS[1] . "\n"; // imprime "gato"

// Array constante
define('ANIMAIS_DEF', array(
    'cachorro',
    'gato',
    'pássaro'
));
echo ANIMAIS_DEF[1] . "\n"; // imprime "gato"
```

> **Nota**:
>
> Ao contrário das constantes definidas usando [define()](function.define.md),
> as constantes definidas usando a palavra-chave `const` devem
> ser declaradas no escopo mais externo porque são definidas em tempo de compilação.
> Isto significa que constantes não podem ser declaradas dentro de funções, loops,
> declarações `if` ou
> blocos `try`/`catch`.

### Veja também

- [Constantes de Classe](language.oop5.constants.md)

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
