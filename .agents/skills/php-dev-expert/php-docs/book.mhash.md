# Mhash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mhash.php

---

# Mhash

# Introdução

Essas funções são planejadas para trabalhar com [» mhash](https://mhash.sourceforge.net/). Mhash pode ser usada para criar somas de verificação,
resumos de mensagens, códigos de autenticação de mensagens e mais.

Esta é uma interface para a biblioteca mhash. Mhash suporta uma grande
variedade de algoritmos de hash como MD5, SHA1, GOST e muitos
outros. Para uma lista completa das hashs suportadas, verifique a
[página de constantes](mhash.constants.md). A regra geral é que o algoritmo
de hash pode ser acessado a partir do PHP com **`MHASH_hashname`**. Por exemplo, para
acessar o algoritmo TIGER, utiliza-se a constante **`MHASH_TIGER`**.

> **Nota**:
>
> Esta extensão foi descontinuada em relação à [Hash](book.hash.md).

> **Nota**:
>
> A partir do PHP 7.0.0 a extensão Mhash está totalmente integrada à extensão [Hash](book.hash.md). Portanto, não é mais
> possível detectar o suporte a Mhash com a função [extension\_loaded()](function.extension-loaded.md);
> use em seu lugar a função [function\_exists()](function.function-exists.md). Adicionalmente, Mhash não é
> mais suportada por [get\_loaded\_extensions()](function.get-loaded-extensions.md) e recursos
> relacionados.

- [Instalação/Configuração](mhash.setup.md)
  - [Dependências](mhash.requirements.md)
  - [Instalação](mhash.installation.md)
- [Constantes predefinidas](mhash.constants.md)
- [Examples](mhash.examples.md)
- [Funções da Mhash](ref.mhash.md)
  - [mhash](function.mhash.md) — Computa a hash
  - [mhash\_count](function.mhash-count.md) — Obtém o ID de hash mais alto disponível
  - [mhash\_get\_block\_size](function.mhash-get-block-size.md) — Obtém o tamanho de bloco da hash especificada
  - [mhash\_get\_hash\_name](function.mhash-get-hash-name.md) — Obtém o nome da hash especificada
  - [mhash\_keygen\_s2k](function.mhash-keygen-s2k.md) — Gera uma chave

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
