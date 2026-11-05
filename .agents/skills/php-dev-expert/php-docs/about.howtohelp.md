# Como ajudar a melhorar a documentação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.howtohelp.php

---

## Como ajudar a melhorar a documentação

Há várias maneiras de ajudar a melhorar a documentação.

Se um erro for encontrado neste manual, em qualquer linguagem, por favor informe-os
usando o rastreador de problemas do respectivo repositório da linguagem em [» https://github.com/php/](https://github.com/php/).
Por exemplo, erros no manual em português do Brasil devem ser reportados em
[» https://github.com/php/doc-pt\_br/issues](https://github.com/php/doc-pt_br/issues).
Todos os problemas relacionados
com a documentação, inclusive sobre os formatos de manuais, devem ser enviados como
relatórios de problemas.

> **Nota**:
>
> Por favor, não abuse dos rastreadores de problemas enviando pedidos de ajuda.
> Neste caso, use uma das muitas
> [» opções de suporte](https://www.php.net/support.php).

Ao contribuir com notas, os usuários podem fornecer exemplos adicionais, ressalvas e
esclarecimentos para outros leitores. Mas por favor, não informe problemas usando o
sistema de anotações. Para mais detalhes, veja a seção intitulada ['Sobre as notas de usuários'](about.notes.md).

Também é possível enviar requisições de correções para o
[» repositório espelho Github da documentação](https://github.com/php/doc-en).

O manual PHP é traduzido em várias línguas. Saber inglês e uma língua
estrangeira permite uma outra maneira de ajudar a melhorar o manual PHP
trabalhando com um time de tradução. Para mais informações sobre como iniciar uma nova
tradução, ou ajudar no projeto de tradução atual, por favor leia
[» https://doc.php.net/guide/](https://doc.php.net/guide/).

O Projeto de Documentação do PHP também possui um canal IRC onde muitos
autores do manual se reúnem. Passe no canal `#php.doc` em
`irc.efnet.org` e discuta maneiras de melhorar
a documentação do PHP.

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
