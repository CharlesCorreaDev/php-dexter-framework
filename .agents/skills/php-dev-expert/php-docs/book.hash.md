# Estrutura de resumo de mensagens Hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.hash.php

---

# Estrutura de resumo de mensagens Hash

# Introdução

Esta extensão fornece funções que podem ser usadas para processamento
direto ou incremental de mensagens de comprimento arbitrário usando uma variedade de
algortimos de hash, incluindo a geração de valores HMAC
e derivações chave, incluindo HKDF e
PBKDF2.

De forma geral, existem três categorias de algoritmos de hash. Uma lista completa de
algoritmos pode ser encontrada na documentação da função [hash\_algos()](function.hash-algos.md).

- Algoritmos de soma de verificação (como `"crc32b"` ou `"adler32"`):
  Estes são usados para calcular somas de verificação, úteis em situações em que
  erros de transmissão precisam ser detectados. São geralmente muito rápidos. Estes
  algoritmos frequentemente geram valores que facilmente "previsíveis" ou podem ser manipulados
  para criar colisões, portanto são totalmente inadequados para uso em criptografia.
- Algoritmos não criptográficos (como a família xxHash):
  Estes são frequentemente usados para calcular valores de hash para tabelas de hash, já que são
  projetados para gerar uma boa distribuição sobre strings de entrada arbitrárias.
  Também são geralmente rápidos, mas também inadequados para uso em criptografia.
- Algoritmos criptográficos (como a família SHA-2):
  Estes são projetados para gerar valores de hash que são representativos de suas
  entradas mas não são previsíveis e nem sujeitos a colisões. O desempenho geralmente
  é uma preocupação secundária, mas os equipamentos modernos frequentemente suportam um gerenciamento especial
  para estes algoritmos que o PHP tenta fazer uso quando disponível.

  O Centro de Recursos de Segurança Computacional do NIST tem uma
  [» explicação dos algoritmos
  atualmente aprovados pelos padrões de processamento de informação dos Estados
  Unidos](https://csrc.nist.gov/projects/hash-functions).

  **Cuidado**

  Já foi provado que alguns dos primeiros algoritmos criptográficos, tais como `"md4"`,
  `"md5"` e `"sha1"`,
  estão sujeiros a ataques de colisão e por isso é recomendado que não
  sejam mais usados para aplicações de criptografia.

Consulte também as [Perguntas Frequentes sobre Hash Seguro de Senhas](faq.passwords.md)
para informação sobre melhores práticas para o uso de funções de hash ao lidar
com senhas.

- [Instalação/Configuração](hash.setup.md)
  - [Instalação](hash.installation.md)
  - [Tipos de Recurso](hash.resources.md)
- [Constantes predefinidas](hash.constants.md)
- [HashContext](class.hashcontext.md) — The HashContext class
  - [HashContext::\_\_construct](hashcontext.construct.md) — Construtor privado para impedir instanciação direta
  - [HashContext::\_\_debugInfo](hashcontext.debuginfo.md) — Retorna informação de depuração sobre o contexto de hash
  - [HashContext::\_\_serialize](hashcontext.serialize.md) — Serializa o objeto HashContext
  - [HashContext::\_\_unserialize](hashcontext.unserialize.md) — Desserializa o parâmetro data em um objeto HashContext
- [Hash Funções](ref.hash.md)
  - [hash](function.hash.md) — Gera um valor hash (resumo da mensagem)
  - [hash\_algos](function.hash-algos.md) — Retorna uma lista de algoritmos de hash registrados
  - [hash\_copy](function.hash-copy.md) — Copia contexto de hash
  - [hash\_equals](function.hash-equals.md) — Comparação de strings segura para ataque de temporização
  - [hash\_file](function.hash-file.md) — Gera um valor hash usando o conteúdo de um arquivo fornecido
  - [hash\_final](function.hash-final.md) — Finaliza um hash incremental e retorna o resumo resultante
  - [hash\_hkdf](function.hash-hkdf.md) — Gera uma derivação de chave HKDF de uma entrada de chave fornecida
  - [hash\_hmac](function.hash-hmac.md) — Gera um valor de hash com chave usando o método HMAC
  - [hash\_hmac\_algos](function.hash-hmac-algos.md) — Retorna uma lista de algoritmos de hash registrados adequados para hash\_hmac
  - [hash\_hmac\_file](function.hash-hmac-file.md) — Gera um valor hash com chave usando o método HMAC e o conteúdo de um arquivo fornecido
  - [hash\_init](function.hash-init.md) — Inicializa um contexto de hash incremental
  - [hash\_pbkdf2](function.hash-pbkdf2.md) — Gera uma derivação de chave PBKDF2 de uma senha fornecida
  - [hash\_update](function.hash-update.md) — Injeta dados em um contexto de hash ativo
  - [hash\_update\_file](function.hash-update-file.md) — Injeta dados em um contexto de hash ativo a partir de um arquivo
  - [hash\_update\_stream](function.hash-update-stream.md) — Injeta dados em um contexto de hash ativo a partir de um fluxo

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
