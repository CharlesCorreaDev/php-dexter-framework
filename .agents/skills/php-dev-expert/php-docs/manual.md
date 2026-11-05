# 

> **Fonte / Source:** https://www.php.net/manual/pt_BR/manual.php

---

# Manual do PHP

# Sobre este manual

PHP, que significa *PHP: Hypertext
Preprocessor* (pré-processador de hipertexto), é uma linguagem de script
de uso geral de código aberto amplamente utilizada, especialmente adequada para
desenvolvimento web e pode ser incorporada em HTML. Sua sintaxe baseia-se em
C, Java e Perl, e é fácil de aprender. O objetivo principal da
linguagem é permitir aos desenvolvedores escreverem páginas que serão geradas
de forma dinâmica e rápida, mas pode-se fazer muito mais do que isso com o PHP.

Esse manual consiste primeiramente de uma [referência de funções](funcref.md), mas ele também contém uma
[referência da linguagem](langref.md), explicações
sobre os [recursos](features.md) mais importantes do PHP,
e outras informações
[suplementares](appendices.md).

Este manual inclui informações que cobrem as duas versões principais mais
recentes do PHP (versões 7 e 8). Informações sobre extensões
que não estão mais incluídas nessas versões do PHP e alterações em
funções em versões anteriores não estão incluídas. Arquivos de versões
mais antigas do manual que documentam versões anteriores do PHP estão
disponíveis na seção "Mais documentação" na
[» página "Documentação" do site do
PHP](https://www.php.net/docs.php).

Este manual pode ser obtido em vários formatos em [» https://www.php.net/download-docs.php](https://www.php.net/download-docs.php).
Mais informações sobre como este manual é desenvolvido podem ser encontradas
no apêndice ['Sobre o manual'](about.md). Se você está
interessado na [história do PHP](history.md),
consulte o apêndice correspondente.

# Autores e Contribuidores

Há um grande número de contribuidores que
atualmente ajudam no nosso trabalho ou que forneceram uma grande ajuda ao projeto
no passado. Existem também muitas pessoas não citadas que ajudam com as
notas de usuários nas páginas do manual, que são incluídas continuamente nas referências,
por cujo trabalho somos muito gratos. Todas as listas a seguir estão
em ordem alfabética.

# Autores e Editores

Os seguintes contribuidores são
reconhecidos pelo impacto que causaram e/ou continuam a causar ao adicionar
conteúdo ao manual:
Mehdi Achour,
Bill Abt,
Jouni Ahto,
Alexander Aulbach,
Stig Bakken,
George Peter Banyard,
Christoph M. Becker,
Daniel Beckham,
Friedhelm Betz,
Nilgün Belma Bugüner,
Jesus M. Castagnetto,
Ron Chmara,
Sean Coates,
John Coggeshall,
Simone Cortesi,
Peter Cowburn,
Antony Dovgal,
Daniel Egeberg,
Markus Fischer,
Wez Furlong,
Sara Golemon,
Rui Hirokawa,
Brad House,
Pierre-Alain Joye,
Etienne Kneuss,
Moriyoshi Koizumi,
Rasmus Lerdorf,
Andrew Lindeman,
Nuno Lopes,
Hannes Magnusson,
Stanislav Malyshev,
Justin Martin,
Rafael Martinez,
Rick McGuire,
Moacir de Oliveira Miranda Júnior,
Kalle Sommer Nielsen,
Yasuo Ohgaki,
Philip Olson,
Richard Quadling,
Derick Rethans,
Rob Richards,
Georg Richter,
Sander Roobol,
Egon Schmid,
Thomas Schoefbeck,
Sascha Schumann,
Dan Scott,
Damien Seguy,
Masahiro Takagi,
Yoshinari Takaoka,
Yannick Torres,
Jakub Vrana,
Michael Wallner,
Lars Torben Wilson,
Jim Winstead,
Jeroen van Wolffelaar e
Andrei Zmievski.

Os seguintes contribuidores fizeram
um trabalho significativo editando o manual:
Stig Bakken,
Peter Cowburn,
Gabor Hojtsy,
Hartmut Holzgraefe,
Philip Olson e
Egon Schmid.

# Mantenedores de Notas de Usuários

Os mantenedores mais ativos atualmente são:
Daniel Brown,
Nuno Lopes,
Felipe Pena,
Thiago Pojda e
Maciek Sokolewicz.

Estas pessoas também se esforçaram muito
no gerenciamento de notas de usuários:
Mehdi Achour,
Daniel Beckham,
Friedhelm Betz,
Victor Boivie,
Jesus M. Castagnetto,
Nicolas Chaillan,
Ron Chmara,
Sean Coates,
James Cox,
Vincent Gevers,
Sara Golemon,
Zak Greant,
Szabolcs Heilig,
Oliver Hinckel,
Hartmut Holzgraefe,
Etienne Kneuss,
Rasmus Lerdorf,
Matthew Li,
Andrew Lindeman,
Aidan Lister,
Hannes Magnusson,
Maxim Maletsky,
Bobby Matthis,
James Moore,
Philip Olson,
Sebastian Picklum,
Derick Rethans,
Sander Roobol,
Damien Seguy,
Jason Sheets,
Tom Sommer,
Jani Taskinen,
Yasuo Ohgaki,
Jakub Vrana,
Lars Torben Wilson,
Jim Winstead,
Jared Wyles e
Jeroen van Wolffelaar.

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
