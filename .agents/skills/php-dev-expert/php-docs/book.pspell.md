# Pspell

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pspell.php

---

# Pspell

# Introdução

**Aviso**

Esta extensão foi *DESCONTINUADA* e *DESAGREGADA* a partir do PHP 8.4.0.

Essas funções permitem verificar a ortografia de uma palavra e oferecer
sugestões.

- [Instalação/Configuração](pspell.setup.md)
  - [Dependências](pspell.requirements.md)
  - [Instalação](pspell.installation.md)
  - [Tipos de Recurso](pspell.resources.md)
- [Constantes predefinidas](pspell.constants.md)
- [Funções de Pspell](ref.pspell.md)
  - [pspell\_add\_to\_personal](function.pspell-add-to-personal.md) — Adiciona a palavra a uma lista de palavras pessoal
  - [pspell\_add\_to\_session](function.pspell-add-to-session.md) — Adiciona a palavra à lista de palavras na sessão atual
  - [pspell\_check](function.pspell-check.md) — Verifica uma palavra
  - [pspell\_clear\_session](function.pspell-clear-session.md) — Limpa a sessão atual
  - [pspell\_config\_create](function.pspell-config-create.md) — Cria uma configuração usada para abrir um dicionário
  - [pspell\_config\_data\_dir](function.pspell-config-data-dir.md) — Localização dos arquivos de dados de idioma
  - [pspell\_config\_dict\_dir](function.pspell-config-dict-dir.md) — Localização da lista principal de palavras
  - [pspell\_config\_ignore](function.pspell-config-ignore.md) — Ignora palavras com menos de N caracteres
  - [pspell\_config\_mode](function.pspell-config-mode.md) — Altera o número do modo de sugestões retornadas
  - [pspell\_config\_personal](function.pspell-config-personal.md) — Define um arquivo que contém uma lista de palavras pessoais
  - [pspell\_config\_repl](function.pspell-config-repl.md) — Define um arquivo que contém pares de substituição
  - [pspell\_config\_runtogether](function.pspell-config-runtogether.md) — Considera palavras que se juntam como compostos válidos
  - [pspell\_config\_save\_repl](function.pspell-config-save-repl.md) — Determina se uma lista de pares de substituição deve ser salva
    junto com a lista de palavras
  - [pspell\_new](function.pspell-new.md) — Carrega um novo dicionário
  - [pspell\_new\_config](function.pspell-new-config.md) — Carrega um novo dicionário com configurações baseadas em uma configuração fornecida
  - [pspell\_new\_personal](function.pspell-new-personal.md) — Carrega um novo dicionário com lista de palavras pessoal
  - [pspell\_save\_wordlist](function.pspell-save-wordlist.md) — Salva a lista de palavras pessoal em um arquivo
  - [pspell\_store\_replacement](function.pspell-store-replacement.md) — Armazena um par de substituição para uma palavra
  - [pspell\_suggest](function.pspell-suggest.md) — Sugere grafias de uma palavra
- [PSpell\Dictionary](class.pspell-dictionary.md) — A classe PSpell\Dictionary
- [PSpell\Config](class.pspell-config.md) — A classe PSpell\Config

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
