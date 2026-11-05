# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.requirements.php

---

## Dependências

Esta extensão requer a extensão PHP [libxml](book.libxml.md).
Isso significa que ao compilar o PHP é preciso passar a flag de configuração **--with-libxml**,
ou antes do PHP 7.4, **--enable-libxml**,
embora isso seja feito implicitamente pois a libxml
está habilitada por padrão.

Esta extensão utiliza uma camada de compatibilidade expat por
padrão. Também pode usar expat, que pode
ser encontrado em [» https://libexpat.github.io/](https://libexpat.github.io/). O
Makefile que vem com o expat não constrói uma biblioteca por
padrão, você pode usar esta regra de make para isso:

```
libexpat.a: $(OBJS)
    ar -rc $@ $(OBJS)
    ranlib $@
```

Um pacote RPM de código-fonte do expat pode ser encontrado em [» https://sourceforge.net/projects/expat/](https://sourceforge.net/projects/expat/).

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
