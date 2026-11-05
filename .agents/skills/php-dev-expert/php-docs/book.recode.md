# Recodificação GNU

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.recode.php

---

# Recodificação GNU

# Introdução

**Aviso**

Esta extensão está *sem manutenção*.

Este módulo contém uma interface para a biblioteca GNU Recode. A biblioteca GNU
Recode converte arquivos entre vários conjuntos de caracteres codificados e
codificações de superfície. Quando isso não pode ser alcançado com exatidão, pode eliminar
os caracteres ofensivos ou recorrer a aproximações. A biblioteca
reconhece ou produz cerca de 150 conjuntos de caracteres diferentes e é capaz de
converter arquivos entre praticamente qualquer par. A maioria dos conjuntos de caracteres
[» RFC 1345](https://datatracker.ietf.org/doc/html/rfc1345) são
suportados.

> **Nota**:
>
> Esta extensão foi desagregada e movida para [» PECL](https://pecl.php.net/package/recode)
> a partir do PHP 7.4.0.
> Considere usar as extensões [Multibyte String](book.mbstring.md) ou
> [iconv](book.iconv.md) no lugar.

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

- [Instalação/Configuração](recode.setup.md)
  - [Dependências](recode.requirements.md)
  - [Instalação](recode.installation.md)
- [Funções de Recode](ref.recode.md)
  - [recode](function.recode.md) — Sinônimo de recode\_string
  - [recode\_file](function.recode-file.md) — Recodifica de arquivo para arquivo de acordo com a solicitação de recodificação
  - [recode\_string](function.recode-string.md) — Recodifica uma string de acordo com uma solicitação de recodificação

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
