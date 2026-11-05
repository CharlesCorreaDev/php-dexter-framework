# Sobre as notas dos usuários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.notes.php

---

## Sobre as notas dos usuários

As notas dos usuários possuem um importante papel no desenvolvimento
deste manual. Ao permitir que os leitores do manual possam contribuir com exemplos,
ressalvas e outros esclarecimentos através de seus navegadores, somos capazes de
incorporar esse feedback dentro do texto principal do manual. E até que as notas
sejam incorporadas, elas podem ser vistas na sua forma
online e em alguns dos formatos offline.

> **Nota**:
>
> As notas dos usuários não são moderadas antes delas aparecerem online, então
> a qualidade da escrita ou dos exemplos de código, e mesmo a veracidade da
> contribuição, não podem ser garantidas. (Não que haja qualquer garantia
> da qualidade ou exatidão do próprio texto do manual.)

> **Nota**:
>
> Para fins de cobertura de licença as notas fornecidas por usuários são
> consideradas parte do manual do PHP, e por isso são cobertas pela
> mesma licença desta documentação (atualmente a licença
> Creative Commons Attribution). Para
> mais detalhes, veja a página de [Direitos Autorais
> do Manual](copyright.md).

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
