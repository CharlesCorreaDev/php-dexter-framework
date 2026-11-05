# História do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/history.php.php

---

## História do PHP

### PHP Tools, FI, Kit de Construção, e PHP/FI

O PHP como é conhecido hoje, é na verdade o sucessor para um
produto chamado PHP/FI. Criado em 1994 por Rasmus Lerdof,
a primeira encarnação do PHP foi um simples conjunto
de binários Common Gateway Interface (CGI) escrito em
linguagem de programação C. Originalmente usado para
acompanhamento de visitas para seu currículo online,
ele nomeou o conjunto de scripts de "Personal Home Page Tools" mais frequentemente referenciado como "PHP Tools."
Ao longo do tempo, mais funcionalidades foram desejadas, e Rasmus
reescreveu o PHP Tools, produzindo uma implementação maior e mais rica.
Este novo modelo foi capaz de interações com Banco de Dados e mais,
fornecendo uma estrutura na qual os usuários poderiam desenvolver aplicações web
simples e dinâmicas, como um livro de visitas. Em junho de 1995,
Rasmus [» liberou](https://groups.google.com/group/comp.infosystems.www.authoring.cgi/msg/cc7d43454d64d133)
o código fonte do PHP Tools para o público, o que permitiu
que desenvolvedores usassem da forma como desejassem. Isso permitiu — e encorajou
— usuários a fornecerem correções para problemas no código, e em geral,
aperfeiçoá-lo.

Em setembro do mesmo ano, Rasmus expandiu o PHP e — por um breve período
— mudou o nome PHP. Agora referindo-se a ferramenta como FI,
abreviação para "Forms Interpreter", a nova implementação
incluiu algumas funcionalidades básicas do PHP como bem conhecemos
hoje. Tinha variáveis no estilo Perl, interpretação automática de
variáveis de formulários, e sintaxe HTML embutida. A sintaxe em si era muito
similar à do Perl, porém muito mais limitada, simples, e um pouco inconsistente.
De fato, para embutir o código em um arquivo HTML, desenvolvedores tinham que usar comentários
HTML. Embora este método não tenha sido inteiramente
bem-recebido, FI continuou a desfrutar de um crescimento
e uma aceitação como uma ferramenta CGI — mas ainda não como uma linguagem.
Contudo, isso começou a mudar no mês seguinte; em outubro de 1995 Rasmus liberou
uma completa reescrita do código. Trazendo de volta o nome PHP, estava agora (brevemente) nomeado
como "Personal Home Page Contruction
Kit" e foi o primeiro lançamento a vangloriar-se de que era, na época,
considerado um script avançado de interface. A linguagem foi
desenvolvida para, deliberadamente, ser parecida com C, tornando-a fácil
de ser adotada por desenvolvedores habituados com C, Perl e linguagens similares.
Tendo sido até este momento exclusiva para sistemas UNIX e sistemas compatíveis com POSIX,
o potencial para uma implementação em um Windows NT começava a ser explorada.

O código tem outra reforma completa, e em abril de 1996,
combinando os nomes dos últimos lançamentos, Rasmus introduziu
o PHP/FI. Esta segunda geração da implementação começou realmente
a evoluir o PHP a partir de um conjunto de ferramentas para sua própria linguagem de programação.
Ele incluía suporte embutido aos banco de dados DBM, mSQL, e Postgres95,
cookies, funções de apoio definidas pelo usuário, e muito mais.
Em junho, o PHP/FI ganhou o status de versão 2.0. Um interessante fato
sobre isso, porém, é que existia apenas um única completa versão do PHP 2.0.
Quando finalmente se tornou um status beta em novembro de 1997, o mecanismo
de análise subjacente já estava inteiramente reescrito.

Apesar de ter tido um curto período de desenvolvimento, ele continuava
a desfrutar de uma crescente popularidade em um mundo web ainda jovem e em desenvolvimento.
Em 1997 e 1998, PHP/FI teve o apoio de milhares de usuários
ao redor do mundo.
Uma pesquisa da Netcraft em maio de 1998 indicou que cerca de 60.000 domínios
relataram ter cabeçalhos contendo "PHP",
indicando que o servidor de hospedagem de fato tinha o PHP instalado.
Este número pode ser equiparado com aproximadamente 1% de todos os domínios
da Internet da época. Apesar destes números impressionantes, o amadurecimento
do PHP/FI foi condenado a limitações; enquanto havia vários contribuintes menores,
ainda era desenvolvido principalmente por uma única pessoa.

**Exemplo #1 Exemplo de código PHP/FI**

```
<!--include /text/header.html-->

<!--getenv HTTP_USER_AGENT-->
<!--ifsubstr $exec_result Mozilla-->
  Hey, you are using Netscape!<p>
<!--endif-->

<!--sql database select * from table where user='$username'-->
<!--ifless $numentries 1-->
  Sorry, that record does not exist<p>
<!--endif exit-->
  Welcome <!--$user-->!<p>
  You have <!--$index:0--> credits left in your account.<p>

<!--include /text/footer.html-->
```

### PHP 3

PHP 3.0 foi a primeira versão que se assemelhava com o PHP como existe
hoje. PHP/FI encontrava-se ainda ineficiente e não tinha os recursos que precisavam
para prover uma aplicação de comércio eletrônico que estavam desenvolvendo para um
projeto da Universidade. Andi Gutmans e
Zeev Suraski de Tel Aviv, Israel, começaram
outra completa reescrita do interpretador em 1997.
Abordando Rasmus online, eles discutiram vários aspectos para a
implementação e o desenvolvimento do PHP. Em um esforço para melhorar o mecanismo
e iniciar a construção sobre a base de usuários existentes
do PHP/FI, Andi, Rasmus, e Zeev decidiram colaborar no desenvolvimento
de uma linguagem de programação nova e independente.
Essa nova linguagem foi lançada com um novo nome, que removeu
a impressão do uso pessoal limitado que o nome PHP/FI 2.0 tinha mantido.
Foi renomeado simplesmente para 'PHP', com o significado se tornando
um acrônimo recursivo — PHP: Hypertext Preprocessor.

Um dos maiores pontos fortes do PHP 3.0 foram os fortes recursos de
extensibilidade. Além de fornecer a usuários finais uma interface robusta
para múltiplos banco de dados, protocolos e APIs, a facilidade
de estender a sua própria linguagem atraiu dezenas de desenvolvedores
que submeteram uma variedade de módulos. Indiscutivelmente, esta foi
a chave para o PHP 3.0 ter sido um tremendo sucesso. Outro recurso chave
introduzido no PHP 3.0 foi o suporte à programação orientada
a objeto e a uma mais poderosa e consistentes sintaxes de linguagem.

Em junho de 1998, com muitos novos desenvolvedores ao redor do mundo unindo
esforços, o PHP 3.0 foi anunciado pelo novo time de desenvolvimento
como o sucessor oficial para o PHP/FI 2.0. As melhorias no PHP/FI 2.0,
cessaram em novembro do ano anterior e ele foi oficialmente finalizado.
Depois de nove meses de testes abertos ao público, quando o anúncio do lançamento
oficial do PHP 3.0 chegou, prontamente foi instalado em
70.000 domínios em todo mundo,
e já não era mais limitado aos sistemas
operacionais compatíveis com o POSIX.
Uma parcela relativamente pequena de domínios informaram que o PHP foi instalado
em servidores executando Windows 95, 98 e NT e Macintosh. Em seu pico,
o PHP 3.0 foi instalado em aproximadamente 10%
dos servidores web da internet.

### PHP 4

No inverno de 1998, logo após o PHP 3.0 ter sido oficialmente
lançado, Andi Gutmans e Zeev Suraski começaram a trabalhar
em uma reescrita do núcleo do PHP. Os objetivos do projeto
eram melhorar o desempenho das aplicações complexas e melhorar
a modularização do código base do PHP. Tais aplicações só foram
possíveis pelos novos recursos e suporte a uma ampla
variedade de bancos de dados de terceiros e APIs do PHP 3.0, mas o PHP 3.0 não foi projetado para trabalhar com aplicações
complexas de forma eficiente.

O novo mecanismo, chamado 'Zend Engine' (composto pelos primeiros
nomes, Zeev e Andi), alcançou os objetivos do projeto com sucesso
e foi introduzido em meados de 1999. O PHP 4.0, baseado neste mecanismo
e com uma variedade de novos recursos adicionais, foi oficialmente
lançado em maio de 2000,
quase dois anos após seu antecessor. Além
da altíssima melhoria de desempenho nesta versão, o PHP 4.0 incluiu
outros recursos chaves, tais como suporte para maioria dos servidores
web, sessões HTTP, saídas com buffer, mais maneiras seguras de manipular
dados de entrada de usuários e diversas novas construções de linguagem.

### PHP 5

O PHP 5 foi lançado em julho de 2004 após um longo desenvolvimento e vários
pré-lançamentos. Foi impulsionado principalmente pelo seu núcleo, o
`Zend Engine 2.0`, com um novo modelo de objeto
e dezenas de outros novos recursos.

O time de desenvolvimento do PHP incluiu dezenas de desenvolvedores, também
dezenas de outros trabalhando em algo relacionado ao PHP e apoio a
projetos como PEAR, PECL, documentação, infra-estrutura de
rede subjacente de bem mais de uma centena de servidores web,
em seis dos sete continentes do mundo. Embora seja apenas uma estimativa baseada
em estatísticas de anos anteriores, é seguro presumir
que o PHP estaria instalado em dezenas, ou mesmo talvez
centenas, de milhões de domínios em todo o mundo.

### PHP 6

O plano para o PHP 6 era fornecer suporte total para Unicode tanto no
mecanismo quanto na linguagem. Este trabalho foi abandonado mais tarde, porém outros
recursos que estavam projetados para o PHP 6 foram incorporados
ao PHP 5.3 ([namespaces](language.namespaces.md))
e ao PHP 5.4 ([trait](language.oop5.traits.md) e
sintaxe "curta" de array).

### PHP 7

O PHP 7.0 foi lançado em 2015 e apresentou outra versão principal do
núcleo, `Zend Engine 3.0`, que incluiu
melhorias significativas de desempenho (até duas vezes mais rápido que o PHP
5.6) e de uso de memória, suporte consistente a 64 bits, melhorias em
exceções, um gerador de números aleatórios seguro, o
[operador de coalescência
nula (??)](language.operators.comparison.md#language.operators.comparison.coalesce), [classes
anônimas](language.oop5.anonymous.md), e outros recursos.

Versões posteriores da série do PHP 7 introduziram mais recursos de linguagem
tais como a [sintaxe de lista curta](function.list.md) (7.1),
parâmetro de objeto e declaração de tipo de retorno (7.2), um novo
[heredoc](language.types.string.md#language.types.string.syntax.heredoc) flexível
e a sintaxe [nowdoc](language.types.string.md#language.types.string.syntax.nowdoc)
(7.3), propriedades tipadas (7.4), e uma nova
[interface para funções externas](class.ffi.md) (7.4).

### PHP 8

Lançado em 2020, o PHP 8 foi outra grande atualização da linguagem.
Continha muitos novos recursos e otimizações incluindo
[argumentos nomeados](functions.arguments.md#functions.named-arguments),
[tipos de
união](language.types.declarations.md#language.types.declarations.composite.union), [atributos](language.attributes.md),
[promoção de
propriedade de construtor](language.oop5.decon.md#language.oop5.decon.constructor.promotion),
expressões [`match`](control-structures.match.md),
o [operador nulo seguro
(`?->`)](language.oop5.basic.md#language.oop5.basic.nullsafe), um novo compilador JIT otimizante
e melhorias no sistema de tipagem, na manipulação de erros e na consistência.

Versões posteriores da série do PHP 8 introduziram novos recursos de linguagem
incluindo [enumerações](language.enumerations.md) (8.1),
[fibers](language.fibers.md) (8.1),
[classes somente-leitura](language.oop5.basic.md#language.oop5.basic.class.readonly) (8.2),
Tipos de Forma Normal Disjuntiva (DNF) (8.2), e constantes de classe
tipadas (8.3).

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
