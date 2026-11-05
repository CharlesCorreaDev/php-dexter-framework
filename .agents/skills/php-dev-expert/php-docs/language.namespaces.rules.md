# Regras de resolução de nomes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.rules.php

---

## Regras de resolução de nomes

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Para efeitos destas regras de resolução, aqui estão algumas definições importantes:

**Definições de nomes de namespace**

Nome não qualificado
:   Este é um identificador sem separador de namespace, como `Foo`.

Nome qualificado
:   Este é um identificador com separador de namespace, como `Foo\Bar`.

Nome totalmente qualificado
:   Este é um identificador com separador de namespace que começa com um
    separador de namespace, como `\Foo\Bar`. O namespace
    `\Foo` também é um nome totalmente qualificado.

Nome relativo
:   Este é um identificador que começa com `namespace`, como
    `namespace\Foo\Bar`.

Os nomes são resolvidos seguindo estas regras de resolução:

1. Nomes totalmente qualificados sempre são resolvidos para o nome sem separador de namespace à esquerda.
   Por exemplo, `\A\B` será resolvido para `A\B`.
2. Nomes relativos sempre são resolvidos para o nome com `namespace` substituído
   pelo namespace atual. Se o nome ocorrer no namespace global, o
   prefixo `namespace\` será removido. Por exemplo, `namespace\A`
   dentro do namespace `X\Y` será resolvido para `X\Y\A`. O mesmo nome
   dentro do namespace global será resolvido para `A`.
3. Para nomes qualificados, o primeiro segmento do nome será traduzido conforme a tabela
   de importação de classe/namespace atual. Por exemplo, se o namespace `A\B\C` for
   importado como `C`, o nome `C\D\E` será traduzido para
   `A\B\C\D\E`.
4. Para nomes qualificados, se nenhuma regra de importação se aplicar, o namespace atual será prefixo ao
   nome. Por exemplo, o nome `C\D\E` dentro do namespace `A\B`,
   será resolvido para `A\B\C\D\E`.
5. Para nomes não qualificados, o nome será traduzido conforme a tabela de importação atual para o
   respectivo tipo de símbolo. Isso significa que nomes semelhantes a classes serão traduzidos conforme a
   tabela de importação de classe/namespace, nomes de funções conforme a tabela de importação de funções e
   constantes conforme a tabela de importação de constantes. Por exemplo, após a declaração
   `use A\B\C;` um uso como `new C()` será resolvido para o nome
   `A\B\C()`. Da mesma forma, após a declaração `use function A\B\foo;` um uso
   como `foo()` será resolvido para o nome `A\B\foo`.
6. Para nomes não qualificados, se nenhuma regra de importação se aplicar e o nome se referir a um símbolo de classe,
   o namespace atual será prefixo. Por exemplo `new C()` dentro do namespace
   `A\B` será resolvido para o nome `A\B\C`.
7. Para nomes não qualificados, se nenhuma regra de importação se aplicar e o nome se referir a uma função ou constante
   e o código estiver fora do namespace global, o nome será resolvido em tempo de execução.
   Supondo que o código esteja no namespace `A\B`, é assim que uma chamada para a função
   `foo()` será resolvida:

   1. Procura pela função no namespace atual:
      `A\B\foo()`.
   2. Tenta encontrar e chamar a função *global*
      `foo()`.

**Exemplo #1 Resoluções de nomes ilustradas**

```
<?php
namespace A;
use B\D, C\E as F;

// chamadas de funções

foo();       // primeiro tenta chamar "foo" definida no namespace "A"
             // então chama a função global "foo"

\foo();      // chama a função "foo" definida no escopo global

minha\foo(); // chama a função "foo" definida no namespace "A\minha"

F();         // primeiro tenta chamar "F" definida no namespace "A"
             // e então chama a função global "F"

// referências de classe

new B();    // cria um objeto da classe "B" definida no namespace "A"
            // se não for encontrada, tenta carregar automaticamente a classe  "A\B"

new D();    // usando regras de importação, cria um objeto da classe "D" definida no namespace "B"
            // se não for encontrada, tenta carregar automaticamente a classe "B\D"

new F();    // usando regras de importação, cria um objeto da classe "E" definida no namespace "C"
            // se não for encontrada, tenta carregar automaticamente a classe "C\E"

new \B();   // cria um objeto da classe "B" definida no escopo global
            // se não for encontrada, tenta carregar automaticamente a classe "B"

new \D();   // cria um objeto da classe "D" definida no escopo global
            // se não for encontrado, tenta carregar automaticamente a classe "D"

new \F();   // cria um objeto da classe "F" definida no escopo global
            // se não for encontrada, tenta carregar automaticamente a classe "F"

// métodos estáticos/funções de namespace de outro namespace

B\foo();    // chama a função "foo" do namespace "A\B"

B::foo();   // chama o método "foo" da classe "B" definida no namespace "A"
            // se a classe "A\B" não for encontrada, tenta carregar automaticamente a classe "A\B"

D::foo();   // usando regras de importação, chama o método "foo" da classe "D" definida no namespace "B"
            // se a classe "B\D" não for encontrada, tenta carregar automaticamente a classe "B\D"

\B\foo();   // chama a função "foo" do namespace "B"

\B::foo();  // chama o método "foo" da classe "B" do escopo global
            // se a classe "B" não for encontrada, tenta carregar automaticamente a classe "B"

// métodos estáticos/funções de namespace do namespace atual

A\B::foo();   // chama o método "foo" da classe "B" do namespace "A\A"
              // se a classe "A\A\B" não for encontrada, tenta carregar automaticamente a class "A\A\B"

\A\B::foo();  // chama o método "foo" da classe "B" do namespace "A"
              // se a classe "A\B" não for encontrada, tenta carregar automaticamente a classe "A\B"
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
