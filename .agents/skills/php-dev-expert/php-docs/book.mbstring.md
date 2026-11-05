# String Multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mbstring.php

---

# String Multibyte

# Introdução

Embora existam muitas linguagens nas quais cada caractere necessário pode
ser representado por um mapeamento de um para um para um valor de 8 bits, há também
várias linguagens que exigem tantos caracteres para a comunicação escrita
que não podem ser contidos dentro da faixa que um simples byte
pode codificar (um byte é composto por oito bits. Cada bit pode conter apenas dois
valores distintos, um ou zero. Devido a isso, um byte só pode representar
256 valores únicos (dois elevado à potência de oito)). Esquemas de codificação
de caracteres multibyte foram desenvolvidos para expressar mais de 256 caracteres
no sistema de codificação de bytes regular.

Ao manipular (cortar, dividir, emendar, etc.) strings codificadas em uma
codificação multibyte, você precisa usar funções especiais, pois dois ou mais
bytes consecutivos podem representar um único caractere em tais esquemas de codificação.
Caso contrário, se você aplicar uma função de string que não é sensível a multibyte
à string, ela provavelmente falhará em detectar o início ou o final
do caractere multibyte e acabará com uma string corrompida e inútil que
provavelmente perde seu significado original.

`mbstring` fornece funções de string específicas para multibyte
que ajudam a lidar com codificações multibyte em PHP. Além disso,
`mbstring` lida com a conversão de codificação de caracteres entre
os pares de codificação possíveis. `mbstring` é projetada para
lidar com codificações baseadas em Unicode, como UTF-8 e UCS-2, e muitas
codificações de byte único por conveniência (listadas em [Codificações de Caracteres Suportadas](mbstring.supported-encodings.md)).

- [Instalação/Configuração](mbstring.setup.md)
  - [Instalação](mbstring.installation.md)
  - [Configurações de Execução](mbstring.configuration.md)
- [Constantes predefinidas](mbstring.constants.md)
- [Sumários de Codificações Suportadas](mbstring.encodings.md)
- [Noções Básicas de Codificações Multibyte Japonesas](mbstring.ja-basic.md)
- [Entrada e Saída HTTP](mbstring.http.md)
- [Codificações de Caracteres Suportadas](mbstring.supported-encodings.md)
- [Recurso de Sobrecarga de Funções](mbstring.overload.md)
- [Requisitos de Codificação de Caracteres em PHP](mbstring.php4.req.md)
- [Strings Multibyte e Funções](ref.mbstring.md)
  - [mb\_check\_encoding](function.mb-check-encoding.md) — Verifica se as strings são válidas para a codificação especificada
  - [mb\_chr](function.mb-chr.md) — Retorna um caractere pelo valor do ponto de código Unicode
  - [mb\_convert\_case](function.mb-convert-case.md) — Realiza a conversão de caixa em uma string
  - [mb\_convert\_encoding](function.mb-convert-encoding.md) — Converte uma string de uma codificação de caracteres para outra
  - [mb\_convert\_kana](function.mb-convert-kana.md) — Converte "kana" de um tipo para outro ("zen-kaku", "han-kaku" e mais)
  - [mb\_convert\_variables](function.mb-convert-variables.md) — Converte o código de caracteres em variável(is)
  - [mb\_decode\_mimeheader](function.mb-decode-mimeheader.md) — Decodifica string no campo de cabeçalho MIME
  - [mb\_decode\_numericentity](function.mb-decode-numericentity.md) — Decodifica referência de string numérica HTML para caractere
  - [mb\_detect\_encoding](function.mb-detect-encoding.md) — Detectar a codificação de caracteres
  - [mb\_detect\_order](function.mb-detect-order.md) — Define ou obtém a ordem de detecção de codificação de caracteres
  - [mb\_encode\_mimeheader](function.mb-encode-mimeheader.md) — Codificar string para cabeçalho MIME
  - [mb\_encode\_numericentity](function.mb-encode-numericentity.md) — Codificar caractere para referência numérica HTML
  - [mb\_encoding\_aliases](function.mb-encoding-aliases.md) — Obtém aliases de um tipo de codificação conhecido
  - [mb\_ereg](function.mb-ereg.md) — Correspondência de expressão regular com suporte multibyte
  - [mb\_ereg\_match](function.mb-ereg-match.md) — Coincidência de expressão regular para string multibyte
  - [mb\_ereg\_replace](function.mb-ereg-replace.md) — Substituir expressão regular com suporte a multibyte
  - [mb\_ereg\_replace\_callback](function.mb-ereg-replace-callback.md) — Realiza uma busca e substituição de expressão regular com suporte a string multibyte usando um callback
  - [mb\_ereg\_search](function.mb-ereg-search.md) — Correspondência de expressão regular multibyte para uma string multibyte predefinida
  - [mb\_ereg\_search\_getpos](function.mb-ereg-search-getpos.md) — Retorna o ponto de início para a próxima correspondência de expressão regular
  - [mb\_ereg\_search\_getregs](function.mb-ereg-search-getregs.md) — Recupera o resultado da última correspondência de expressão regular multibyte
  - [mb\_ereg\_search\_init](function.mb-ereg-search-init.md) — Configura a string e a expressão regular para uma correspondência de expressão regular multibyte
  - [mb\_ereg\_search\_pos](function.mb-ereg-search-pos.md) — Retorna a posição e o comprimento de uma parte correspondida da expressão regular multibyte para uma string multibyte predefinida
  - [mb\_ereg\_search\_regs](function.mb-ereg-search-regs.md) — Retorna a parte correspondida de uma expressão regular multibyte
  - [mb\_ereg\_search\_setpos](function.mb-ereg-search-setpos.md) — Define o ponto de início para a próxima correspondência de expressão regular
  - [mb\_eregi](function.mb-eregi.md) — Correspondência de expressão regular sem diferenciar maiúsculas e minúsculas com suporte multibyte
  - [mb\_eregi\_replace](function.mb-eregi-replace.md) — Substituir expressão regular com suporte multibyte, ignorando maiúsculas e minúsculas
  - [mb\_get\_info](function.mb-get-info.md) — Obtém configurações internas do mbstring
  - [mb\_http\_input](function.mb-http-input.md) — Detecta a codificação de caracteres de entrada HTTP
  - [mb\_http\_output](function.mb-http-output.md) — Define/Obtém a codificação de caracteres de saída HTTP
  - [mb\_internal\_encoding](function.mb-internal-encoding.md) — Define/Obtém a codificação de caracteres interna
  - [mb\_language](function.mb-language.md) — Define/Obtém o idioma atual
  - [mb\_lcfirst](function.mb-lcfirst.md) — Converte parap minúscula o primeiro caractere de uma string
  - [mb\_list\_encodings](function.mb-list-encodings.md) — Retorna um array de todas as codificações suportadas
  - [mb\_ltrim](function.mb-ltrim.md) — Remove espaços em branco (ou outros caracteres) do início de uma string
  - [mb\_ord](function.mb-ord.md) — Obtém o ponto de código Unicode do caractere
  - [mb\_output\_handler](function.mb-output-handler.md) — Callback converte a codificação de caracteres no buffer de saída
  - [mb\_parse\_str](function.mb-parse-str.md) — Analisa dados GET/POST/COOKIE e define variável global
  - [mb\_preferred\_mime\_name](function.mb-preferred-mime-name.md) — Obter uma string MIME charset
  - [mb\_regex\_encoding](function.mb-regex-encoding.md) — Define/Obtém codificação de caracteres para regex multibyte
  - [mb\_regex\_set\_options](function.mb-regex-set-options.md) — Define/Obtém as opções padrão para funções mbregex
  - [mb\_rtrim](function.mb-rtrim.md) — Remove espaços em branco (ou outros caracteres) do final de uma string
  - [mb\_scrub](function.mb-scrub.md) — Substitui sequências de bytes malformadas pelo caractere substituto
  - [mb\_send\_mail](function.mb-send-mail.md) — Envia email codificado
  - [mb\_split](function.mb-split.md) — Divide uma string multibyte usando expressão regular
  - [mb\_str\_pad](function.mb-str-pad.md) — Preenche uma string multibyte para um comprimento específico com outra string multibyte
  - [mb\_str\_split](function.mb-str-split.md) — Dada uma string multibyte, retorna um array de seus caracteres
  - [mb\_strcut](function.mb-strcut.md) — Obtém parte da string
  - [mb\_strimwidth](function.mb-strimwidth.md) — Obtém string truncada com largura especificada
  - [mb\_stripos](function.mb-stripos.md) — Encontra a posição da primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas
  - [mb\_stristr](function.mb-stristr.md) — Encontra a primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas
  - [mb\_strlen](function.mb-strlen.md) — Obtém o comprimento da string
  - [mb\_strpos](function.mb-strpos.md) — Encontra a posição da primeira ocorrência de uma string em outra
  - [mb\_strrchr](function.mb-strrchr.md) — Encontra a última ocorrência de um caractere em uma string dentro de outra
  - [mb\_strrichr](function.mb-strrichr.md) — Encontra a última ocorrência de um caractere em uma string dentro de outra, sem diferenciar maiúsculas de minúsculas
  - [mb\_strripos](function.mb-strripos.md) — Encontra a posição da última ocorrência de uma string em outra, sem diferenciar maiúsculas de minúsculas
  - [mb\_strrpos](function.mb-strrpos.md) — Encontra a posição da última ocorrência de uma string em outra string
  - [mb\_strstr](function.mb-strstr.md) — Encontra a primeira ocorrência de uma string em outra
  - [mb\_strtolower](function.mb-strtolower.md) — Torna uma string minúscula
  - [mb\_strtoupper](function.mb-strtoupper.md) — Faz uma string ficar em maiúsculas
  - [mb\_strwidth](function.mb-strwidth.md) — Retorna a largura da string
  - [mb\_substitute\_character](function.mb-substitute-character.md) — Define/Obtém caractere de substituição
  - [mb\_substr](function.mb-substr.md) — Obtém parte da string
  - [mb\_substr\_count](function.mb-substr-count.md) — Conta o número de ocorrências de substring
  - [mb\_trim](function.mb-trim.md) — Remove espaços em branco (ou outros caracteres) do início e do final de uma string
  - [mb\_ucfirst](function.mb-ucfirst.md) — Converte para maiúscula o primeiro caractere de uma string

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
