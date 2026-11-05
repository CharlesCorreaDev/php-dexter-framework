# Funções para Classes/Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.classobj.php

---

# Funções para Classes/Objetos

## Índice

- [\_\_autoload](function.autoload.md) — Tenta carregar uma classe indefinida
- [class\_alias](function.class-alias.md) — Cria um apelido para uma classe
- [class\_exists](function.class-exists.md) — Verifica se uma classe foi definida
- [enum\_exists](function.enum-exists.md) — Verifica se uma enumeração foi definida
- [get\_called\_class](function.get-called-class.md) — O nome da classe da qual o método estático foi chamado
- [get\_class](function.get-class.md) — Retorna o nome da classe de um objeto
- [get\_class\_methods](function.get-class-methods.md) — Obtém o nome dos métodos da classe
- [get\_class\_vars](function.get-class-vars.md) — Obtém as propriedades padrão da classe
- [get\_declared\_classes](function.get-declared-classes.md) — Retorna um array com os nomes das classes definidas
- [get\_declared\_interfaces](function.get-declared-interfaces.md) — Retorna um array com todas as interfaces declaradas
- [get\_declared\_traits](function.get-declared-traits.md) — Retorna um array de todas as Traits declaradas
- [get\_mangled\_object\_vars](function.get-mangled-object-vars.md) — Retorna um array de nomes únicos e valores das propriedades do objeto
- [get\_object\_vars](function.get-object-vars.md) — Obtém as propriedades de um objeto
- [get\_parent\_class](function.get-parent-class.md) — Obtém o nome da classe pai para o objeto ou classe
- [interface\_exists](function.interface-exists.md) — Verifica se a interface foi definida
- [is\_a](function.is-a.md) — Verifica se um objeto é ou herda de uma classe
- [is\_subclass\_of](function.is-subclass-of.md) — Verifica se o objeto tem esta classe como uma de suas classes pai
- [method\_exists](function.method-exists.md) — Verifica se o método da classe existe
- [property\_exists](function.property-exists.md) — Verifica se o objeto ou a classe tem uma propriedade
- [trait\_exists](function.trait-exists.md) — Verifica se a trait existe

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
