# iconv

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.iconv.php

---

# iconv

# Introdução

Este módulo contém uma interface para o recurso de conversão do conjunto
de caracteres iconv. Com este módulo, você pode transformar uma string representada
por um conjunto de caracteres local em outra representada por outro conjunto de caracteres,
que pode ser o conjunto de caracteres Unicode. Os conjuntos de caracteres
suportados dependem da implementação iconv do seu sistema.
Observe que a função iconv em alguns sistemas pode não funcionar
conforme o esperado. Nesse caso, seria uma boa ideia instalar a biblioteca
[» GNU libiconv](https://www.gnu.org/software/libiconv/). Provavelmente acabará com
resultados mais consistentes.

Esta extensão vem com
várias funções utilitárias que ajudam você a escrever scripts
multilíngues. Vamos dar uma olhada nas seções a seguir para explorar os
novos recursos.

- [Instalação/Configuração](iconv.setup.md)
  - [Dependências](iconv.requirements.md)
  - [Instalação](iconv.installation.md)
  - [Configurações de Execução](iconv.configuration.md)
- [Constantes predefinidas](iconv.constants.md)
- [iconv Funções](ref.iconv.md)
  - [iconv](function.iconv.md) — Converte uma string de uma codificação de caracteres para outra
  - [iconv\_get\_encoding](function.iconv-get-encoding.md) — Recuperar variáveis de configuração internas da extensão iconv
  - [iconv\_mime\_decode](function.iconv-mime-decode.md) — Decodifica um campo de cabeçalho MIME
  - [iconv\_mime\_decode\_headers](function.iconv-mime-decode-headers.md) — Decodifica vários campos de cabeçalho MIME de uma só vez
  - [iconv\_mime\_encode](function.iconv-mime-encode.md) — Compõe um campo de cabeçalho MIME
  - [iconv\_set\_encoding](function.iconv-set-encoding.md) — Define a configuração atual para conversão de codificação de caracteres
  - [iconv\_strlen](function.iconv-strlen.md) — Retorna a contagem de caracteres da string
  - [iconv\_strpos](function.iconv-strpos.md) — Localiza a posição da primeira ocorrência de um caractere em uma string
  - [iconv\_strrpos](function.iconv-strrpos.md) — Localiza a última ocorrência de um caractere em uma string
  - [iconv\_substr](function.iconv-substr.md) — Corta parte de uma string
  - [ob\_iconv\_handler](function.ob-iconv-handler.md) — Converte codificação de caracteres como manipulador de buffer de saída

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
