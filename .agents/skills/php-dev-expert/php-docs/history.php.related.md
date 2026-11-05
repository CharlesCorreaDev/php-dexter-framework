# História de projetos relacionados ao PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/history.php.related.php

---

## História de projetos relacionados ao PHP

### PEAR

[» PEAR](https://pear.php.net/), que significa `PHP Extension and
Application Repository` (originalmente, PHP Extension and Add-on
Repository) é a base de classes PHP e pode crescer no futuro para ser uma
das formas chave para distribuir extensões PHP
entre os desenvolvedores.

PEAR nasceu em discussões de encontros realizados por desenvolvedores PHP
(PDM) realizado em janeiro de 2000 em Tel Aviv.
Foi criado por Stig S. Bakken,
e é dedicado à sua primeira filha, Malin Bakken.

Desde o início de 2000, PEAR cresceu para ser um projeto
grande e significativo com um grande número de desenvolvedores
trabalhando para implementar funcionalidades comuns e
reutilizáveis para benefício
da comunidade PHP. PEAR hoje inclui uma ampla variedade de
classes para acesso a banco de dados, cache de conteúdo,
cálculos matemáticos, comércio eletrônico e muito mais.

Mais informações sobre PEAR podem ser encontradas
[» no manual](https://pear.php.net/manual/).

### Iniciativa de Garantia da Qualidade do PHP

O [» PHP Quality Assurance
Initiative](https://qa.php.net/) foi criado no verão de 2000 (no hemisfério norte), em resposta a
críticas de que versões do PHP não estavam sendo suficientemente bem testados
para o ambiente de produção.
O time agora consistia em um grupo de desenvolvedores
com um bom entendimento do código base do PHP.
Esses desenvolvedores gastaram muito de seu tempo localizando e
corrigindo os problemas do PHP. Além disso, houve muitos outros membros
do time que testavam e davam retorno de suas correções usando
uma ampla variedade de plataformas.

### PHP-GTK

[» PHP-GTK](https://gtk.php.net/) é a solução PHP para escrever
aplicações GUI no lado do cliente. Andrei Zmievski nos recorda o processo de
planejamento e criação:

> Programação GUI foi sempre do meu interesse, e eu achei
> o Gtk+ um utilitário muito fácil, exceto que programar com ele em C é
> pouco tedioso.
> Depois de testemunhar aplicações PyGtk e GTK-Perl, eu decidi ver se o PHP
> poderia fazer uma interface com Gtk+, mesmo que pequena.
> Iniciei em agosto de 2000, quando comecei a ter um pouco mais de tempo livre, e
> iniciei os experimentos. Minha principal diretriz foi a implementação PyGtk pois possuía
> recursos bastante completos e uma boa interface de orientação a objetos.
> James Henstridge, o autor de PyGtk, forneceu muitos conselhos úteis durante os estágios
> iniciais.
>
> Escrever as interfaces para todas as funções Gtk+ ficou fora de questão,
> então eu aproveitei a ideia de gerar código, similar
> a como o PyGtk tinha sido feito. O gerador de código é um programa PHP que lê
> um conjunto de arquivos .defs contendo as classes Gtk+,
> constantes, e informações de métodos e gera o código C que faz a interface com o PHP.
> O que não pode ser gerado automaticamente pode ser escrito manualmente no arquivo
> .overrides.
>
> Trabalhar em um gerador de código e sua infra-estrutura levou algum tempo,
> pois eu tinha pouco tempo para trabalhar no PHP-GTK durante o outono de 2000.
> Depois que mostrei o PHP-GTK para Frank Kromann, ele ficou interessado
> e começou ajudando-me com o gerador de código e em implementações
> de Win32. Quando nós escrevemos o primeiro programa "Hello World" e executamos,
> ficamos muito emocionados.
> Levou dois ou mais meses para começar o projeto
> em uma condição apresentável e a versão inicial foi lançada em 1º de março de 2001.
> A história rapidamente chegou ao SlashDot.
>
> Sentindo que PHP-GTK podia ser extensível, montei em separado uma lista de e-mails,
> um repositório CVS para isto e também um website gtk.php.net com a ajuda
> de Colin Viebrock.
> Também foi preciso montar a documentação e
> James Moore veio a ajudar com isto.
>
> Desde seu lançamento, o PHP-GTK foi ganhando popularidade. Nós tivemos
> nosso próprio time de documentação, o manual continua melhorando,
> pessoas começaram a escrever extensões para o PHP-GTK, e mais
> aplicações foram feitas com ele.

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
