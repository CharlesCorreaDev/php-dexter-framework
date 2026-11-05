# Diferenças de objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.object-differences.php

---

## Diferenças de objetos

Apesar de enumerações serem construídas sobre classes e objetos, elas não suportam todas as funcionalidades relacionadas a objetos.
Em particular, casos de enumeração são proibidos de ter estado.

- Construtores e Destrutores são proibidos.
- Herança não é suportada. Enumerações não podem estender ou ser estendidas.
- Propriedades estáticas ou de objeto não são permitidas.
- Clonar um caso de enumeração não é suportado, pois os casos devem ser instâncias únicas.
- [Métodos mágicos](language.oop5.magic.md), exceto para aqueles listados abaixo, não são permitidos.
- Enumerações sempre precisam ser declaradas antes de serem utilizadas.

As seguintes funcionalidades de objeto estão disponíveis, e se comportam exatamente como em qualquer outro objeto:

- Métodos públicos, privados e protegidos.
- Métodos estáticos públicos, privados e protegidos.
- Constantes públicas, privadas e protegidas.
- Enumerações podem implementar qualquer número de interfaces.
- Enumerações e casos podem ter [atributos](language.attributes.md) anexados
  a eles. O filtro de alvo **`TARGET_CLASS`**
  inclui as próprias enumerações. O filtro de alvo **`TARGET_CLASS_CONST`**
  inclui Casos de Enumeração.
- Os métodos mágicos [\_\_call](language.oop5.overloading.md#object.call), [\_\_callStatic](language.oop5.overloading.md#object.callstatic),
  e [\_\_invoke](language.oop5.magic.md#object.invoke)
- Constantes **`__CLASS__`** e **`__FUNCTION__`** se comportam normalmente

A constante mágica `::class` em um tipo 'enum' avalia ao nome
do tipo incluindo qualquer namespace, exatamente o mesmo que um objeto. A constante mágica `::class`
em uma instância de Caso também avalia para o tipo 'enum', pois ele é uma
instância daquele tipo.

Adicionalmente, casos não podem ser instanciados diretamente com `new`, nem com
[ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md) em reflexão. Ambos resultarão em um erro.

```
<?php

$trevos = new Naipe();
// Erro: Não é possível instanciar a enumeração Naipe

$ferraduras = (new ReflectionClass(Naipe::class))->newInstanceWithoutConstructor()
// Erro: Não é possível instanciar a enumeração Naipe
```

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
