# Informações Gerais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.general.php

---

# Informações Gerais

Essa seção trata das questões mais gerais sobre o PHP:
o que é e o que faz.

1. [O que é o PHP?](#faq.general.what)
2. [O que a sigla PHP significa?](#faq.general.acronym)
3. [Qual é a relação entre as versões?](#faq.general.relation-versions)
4. [Posso executar várias versões do PHP ao mesmo tempo?](#faq.general.running-concurent)
5. [Acho que encontrei um bug! A quem eu devo dizer?](#faq.general.bug)

**O que é o PHP?**
:   Do [prefácio do manual](index.md#preface):

    PHP é uma linguagem de script embutida no HTML. Muito da
    sua sintaxe é emprestada de C, Java e Perl com algumas características
    específicas do PHP adicionadas. O objetivo da linguagem é
    permitir que desenvolvedores web escrevam páginas geradas dinamicamente de forma rápida.

**O que a sigla PHP significa?**
:   PHP significa *PHP: Hypertext Preprocessor*.
    Isso confunde muitas pessoas porque a primeira palavra do acrônimo é
    o acrônimo. Esse tipo de acrônimo é chamado de acrônimo recursivo.
    Para mais informações, os curiosos podem visitar o
    [» Dicionário On-Line Gratuito de Computação](https://foldoc.org/)
    ou o
    [» item na Wikipedia sobre
    acrónimos recursivos](https://en.wikipedia.org/wiki/Recursive_acronym).

**Qual é a relação entre as versões?**
:   PHP/FI 2.0 é uma versão mais antiga e não mais suportada do PHP. PHP 3
    é o sucessor do PHP/FI 2.0 e é bem melhor. PHP 8 é a geração
    atual do PHP, que usa a Zend
    Engine 4, a qual, entre outras coisas, oferece muitas funcionalidades adicionais de
    [POO](language.oop5.md).

**Posso executar várias versões do PHP ao mesmo tempo?**
:   Sim. Veja o arquivo INSTALL que vem incluso
    na distribuição dos fontes do PHP.

**Acho que encontrei um bug! A quem eu devo dizer?**
:   Você deve ir ao Banco de Dados de Bugs do PHP e assegurar-se de que o bug
    não é conhecido. Se você não encontrá-lo no banco, use o
    formulário para relatar o bug. É importante usar
    o banco de bugs ao invés de apenas enviar um e-mail para uma das
    listas de discussão porque o bug terá um número de rastreamento atribuído
    a ele e será possível voltar depois e checar
    o status do bug. O banco de bugs pode ser encontrado em
    [» https://github.com/php/php-src/issues](https://github.com/php/php-src/issues).

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
