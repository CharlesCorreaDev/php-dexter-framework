# Funções de COM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.com.php

---

# Funções de COM

## Veja também

Para mais informações sobre COM, leia a [» especificação
COM](https://docs.microsoft.com/windows/desktop/com/component-object-model--com--portal).
Algumas informações úteis adicionais podem ser encontradas em nossa seção de Perguntas e Respostas para [PHP e COM](faq.com.md).
Se for considerado o uso de aplicativos do MS Office no lado do servidor,
leia estas informações: [» Considerações para a automação do Office no lado
do servidor](https://support.microsoft.com/kb/257757).

## Índice

- [com\_create\_guid](function.com-create-guid.md) — Gera um identificador único global (GUID)
- [com\_event\_sink](function.com-event-sink.md) — Conecta eventos de um objeto COM a um objeto PHP
- [com\_get\_active\_object](function.com-get-active-object.md) — Retorna um identificador para uma instância já em execução de um objeto COM
- [com\_load\_typelib](function.com-load-typelib.md) — Carrega uma biblioteca de tipos
- [com\_message\_pump](function.com-message-pump.md) — Processa mensagens COM, aguardando por um tempo limite
- [com\_print\_typeinfo](function.com-print-typeinfo.md) — Mostra uma definição de classe PHP para uma interface despachável
- [variant\_abs](function.variant-abs.md) — Retorna o valor absoluto de uma variante
- [variant\_add](function.variant-add.md) — "Adiciona" dois valores de variante e retorna o resultado
- [variant\_and](function.variant-and.md) — Executa uma operação AND binária entre duas variantes
- [variant\_cast](function.variant-cast.md) — Converter uma variante em um novo objeto variante de outro tipo
- [variant\_cat](function.variant-cat.md) — Concatena dois valores de variantes e retorna o resultado
- [variant\_cmp](function.variant-cmp.md) — Compara duas variantes
- [variant\_date\_from\_timestamp](function.variant-date-from-timestamp.md) — Retorna uma representação de data em variante de um timestamp Unix
- [variant\_date\_to\_timestamp](function.variant-date-to-timestamp.md) — Converte um valor de variante de data/horário em um timestamp Unix
- [variant\_div](function.variant-div.md) — Retorna o resultado da divisão de duas variantes
- [variant\_eqv](function.variant-eqv.md) — Realiza uma equivalência binária entre duas variantes
- [variant\_fix](function.variant-fix.md) — Retorna a porção inteira de uma variante
- [variant\_get\_type](function.variant-get-type.md) — Retorna o tipo de um objeto de variante
- [variant\_idiv](function.variant-idiv.md) — Converte variantes para inteiros e retorna o resultado da divisão deles
- [variant\_imp](function.variant-imp.md) — Realiza uma implicação binária entre duas variantes
- [variant\_int](function.variant-int.md) — Retorna a porção inteira de uma variante
- [variant\_mod](function.variant-mod.md) — Divide duas variantes e retorna apenas o resto
- [variant\_mul](function.variant-mul.md) — Multiplica os valores de duas variantes
- [variant\_neg](function.variant-neg.md) — Realiza uma negação lógica em uma variante
- [variant\_not](function.variant-not.md) — Realiza uma negação bit a bit em uma variante
- [variant\_or](function.variant-or.md) — Realização uma disjunção lógica de duas variantes
- [variant\_pow](function.variant-pow.md) — Retorna o resultado da função de potência com duas variantes
- [variant\_round](function.variant-round.md) — Arredonda uma variante para o número de casas decimais especificado
- [variant\_set](function.variant-set.md) — Atribui um novo valor para um objeto de variante
- [variant\_set\_type](function.variant-set-type.md) — Converte uma variante em outro tipo "in loco"
- [variant\_sub](function.variant-sub.md) — Subtrai o valor da variante da direita do valor da variante da esquerda
- [variant\_xor](function.variant-xor.md) — Realiza uma exclusão lógica em duas variantes

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
