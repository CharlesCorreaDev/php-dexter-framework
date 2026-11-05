# Constantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.constants.php

---

# Constantes

## Índice

- [Sintaxe](language.constants.syntax.md)
- [Constantes Predefinidas](language.constants.predefined.md)
- [Constantes Mágicas](language.constants.magic.md)

Uma constante é um identificador (nome) para um valor simples. Como o nome
sugere, esse valor não pode mudar durante a execução do
script (exceto para as [constantes mágicas](language.constants.magic.md), que na verdade não são constantes).
As constantes diferenciam maiúsculas de minúsculas. Por convenção,
identificadores de constantes são sempre em maiúsculas.

> **Nota**:
>
> Antes do PHP 8.0.0, as constantes definidas usando a função [define()](function.define.md)
> podem não diferenciar maiúsculas de minúsculas.

O nome de uma constante segue as mesmas regras de qualquer rótulo no PHP. Um
nome de constante válido começa com uma letra ou sublinhado, seguido
por qualquer número de letras, números ou sublinhados. Como uma expressão
regular, seria expresso assim:
`^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$`

É possível usar [define()](function.define.md) para definir constantes com nomes reservados
ou mesmo inválidos, cujo valor só pode ser recuperado com
a função [constant()](function.constant.md). No entanto, isso não é recomendado.

**Dica**

Veja também o
[Guia de nomenclatura em espaço de usuário](userlandnaming.md).

**Exemplo #1 Nomes de constantes válidos e inválidos**

```
<?php

// Nomes de constantes válidos
define("FOO",     "alguma coisa");
define("FOO2",    "alguma outra coisa");
define("FOO_BAR", "alguma coisa mais");

// Nomes de constantes inválidos
define("2FOO",    "alguma coisa");

// Isso é válido, mas deve ser evitado:
// O PHP pode um dia fornecer uma constante mágica
// que quebrará seu script
define("__FOO__", "alguma coisa");
```

> **Nota**:
>
> Para os exemplos aqui, uma letra é a-z, A-Z e os caracteres ASCII
> de 128 a 255 (0x80-0xff).

Como as [superglobals](language.variables.predefined.md), o escopo de uma constante é global.
As constantes podem ser acessadas de qualquer lugar em um script, independentemente do escopo.
Para mais informações sobre escopo, leia a seção
do manual [escopo de variáveis](language.variables.scope.md).

> **Nota**:
>
> A partir do PHP 7.1.0, as constantes de classe podem ser declaradas com visibilidade protected
> ou private, tornando-as disponíveis apenas no escopo hierárquico da
> classe em que foram definidas.

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
