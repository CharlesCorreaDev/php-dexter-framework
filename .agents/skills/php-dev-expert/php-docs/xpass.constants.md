# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xpass.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

A extensão Xpass fornece vários conjuntos de constantes.
Métodos de hash (**`CRYPT_PREFIX_*`**) para
o parâmetro 'prefix' de [crypt\_gensalt()](function.crypt-gensalt.md).
Códigos de erro (**`CRYPT_SALT_*`**) retornados por
[crypt\_checksalt()](function.crypt-checksalt.md).
Algoritmos de senha (**`PASSWORD_*`**) para
o parâmetro 'algo' de [password\_hash()](function.password-hash.md).

**Métodos de hash**

**`CRYPT_PREFIX_STD_DES`** ([string](language.types.string.md))
:   O método de hash original do Unix V7, baseado na cifra de bloco DES.
    Como o DES não é custoso em equipamentos modernos,
    já que existem apenas `4096` salts possíveis e 2\*\*56 frases-senha distintas,
    que ele trunca para 8 caracteres,
    é possível descobrir qualquer frase-senha com hash usando este método.
    Ele só deve ser usado ao oferecer suporte a sistemas operacionais antigos que não suportam
    nenhum outro algoritmo de geração de hash, devido à fragilidade dos hashes DES.

**`CRYPT_PREFIX_EXT_DES`** ([string](language.types.string.md))
:   Uma extensão do DES tradicional, que elimina o limite de comprimento,
    aumenta o tamanho do salt e torna o custo de tempo ajustável.
    Ele se originou com o BSDI BSD/OS e também está disponível pelo menos no NetBSD,
    OpenBSD e FreeBSD devido ao uso da biblioteca FreeSec de David Burren.
    É muito melhor que o DES tradicional e o bigcrypt,
    mas ainda não deve ser usado para novos hashes.

**`CRYPT_PREFIX_MD5`** ([string](language.types.string.md))
:   Um hash baseado no algoritmo MD5, originalmente desenvolvido por Poul-Henning Kamp para o FreeBSD.
    Suportado na maioria dos Unixes livres e versões mais recentes do Solaris.
    Não tão fraco quanto os hashes baseados em DES abaixo,
    mas o MD5 é tão leve em equipamentos modernos que não deve ser usado para novos hashes.
    O custo de processamento não é ajustável.

**`CRYPT_PREFIX_BLOWFISH`** ([string](language.types.string.md))
:   Um hash baseado na cifra de bloco Blowfish, modificado para ter um agendamento de chaves mais custoso.
    Originalmente desenvolvido por Niels Provos e David Mazieres para o OpenBSD e também suportado em versões recentes
    do FreeBSD e NetBSD, no Solaris 10 e mais recentes, e em diversas distribuições GNU/\*/Linux.

**`CRYPT_PREFIX_SHA256`** ([string](language.types.string.md))
:   Um hash baseado em SHA-2 com saída de 256 bits, originalmente desenvolvido por Ulrich Drepper para a libc GNU.
    Suportado no Linux, mas incomum em outros lugares.
    Aceitável para novos hashes.
    O parâmetro de custo de processamento padrão é `5000`,
    o que é muito baixo para equipamentos modernos.

**`CRYPT_PREFIX_SHA512`** ([string](language.types.string.md))
:   Um hash baseado em SHA-2 com saída de 512 bits, originalmente desenvolvido por Ulrich Drepper para a libc GNU.
    Suportado no Linux, mas incomum em outros lugares.
    Aceitável para novos hashes.
    O parâmetro de custo de processamento padrão é `5000`,
    o que é muito baixo para equipamentos modernos.

**`CRYPT_PREFIX_SCRYPT`** ([string](language.types.string.md))
:   Scrypt é uma função de derivação de chaves baseada em senhas criada por Colin Percival,
    originalmente para o serviço de backup online Tarsnap.
    O algoritmo foi projetado especificamente para tornar custosa a execução
    de ataques de hardware personalizados em larga escala, exigindo grandes quantidades de memória.
    Em 2016, o algoritmo scrypt foi publicado pela IETF como RFC 7914.

**`CRYPT_PREFIX_GOST_YESCRYPT`** ([string](language.types.string.md))
:   Gost-yescrypt utiliza a saída de yescrypt como uma mensagem de entrada para o HMAC com a
    função de hash GOST R 34.11-2012 (Streebog) com um resumo de 256 bits.
    Assim, as propriedades criptográficas de yescrypt são substituídas pelas da função de hash GOST.
    Este método de hash é útil em aplicações que necessitam de hash de senha moderna,
    mas que dependem de algoritmos GOST.
    A função de hash GOST R 34.11-2012 (Streebog) foi publicada pela IETF como RFC 6986.
    Aceitável para novos hashes, quando necessário.

**`CRYPT_PREFIX_YESCRYPT`** ([string](language.types.string.md))
:   Yescrypt é um esquema de hash de senha escalável desenvolvido pela Solar Designer,
    baseado no scrypt de Colin Percival.
    Embora a força do yescrypt contra ataques de adivinhação de senha venha do projeto do seu algoritmo,
    sua segurança criptográfica é garantida pelo uso de SHA-256 na camada externa.
    A função de hash SHA-256 foi publicada pelo NIST na FIPS PUB 180-2
    (e suas revisões subsequentes, como a FIPS PUB 180-4) e pela IETF como RFC 4634
    (e posteriormente RFC 6234).
    Recomendado para novos hashes.

**`CRYPT_PREFIX_SM3CRYPT`** ([string](language.types.string.md))
:   Um hash baseado na função de hash ShangMi 3 com saída de 256 bits,
    que usa o mesmo design que sha256crypt e/ou sha512crypt.
    Compatível com EulerOS, Kylin, openEuler e openKylin, mas não comum
    em outros sistemas. Aceitável para novos hashes quando necessário. O parâmetro
    de custo de processamento padrão é 5000, o que é muito baixo para hardware moderno.

    Disponível a partir da versão 1.2.0 com libcxcrypt >= 4.5.0.

**`CRYPT_PREFIX_SM3_YESCRYPT`** ([string](language.types.string.md))
:   O Sm3-yescrypt usa a saída do yescrypt como mensagem de entrada para o HMAC
    com a função hash ShangMi 3 com um resumo de 256 bits. Assim, as propriedades
    criptográficas do yescrypt são substituídas pelas da função hash ShangMi 3.
    Este método de hash é útil em aplicações que precisam de hash de senha
    moderno, mas que dependem de algoritmos aprovados pelo Escritório de
    Administração Estatal de Criptografia Comercial da China (OSCCA). A função
    hash ShangMi 3 foi publicada na Parte 3: "Funções hash dedicadas"
    da ISO/IEC 10118-3:2018. Aceitável para novos hashes quando necessário.

    Disponível a partir da versão 1.2.0 com libcxcrypt >= 4.5.0.

**Códigos de erro**

**`CRYPT_SALT_OK`** ([int](language.types.integer.md))
:   Nenhum erro.

**`CRYPT_SALT_INVALID`** ([int](language.types.integer.md))
:   Método de hash desconhecido ou parâmetros inválidos.

**`CRYPT_SALT_METHOD_DISABLED`** ([int](language.types.integer.md))
:   O método de hash não pode mais ser usado.

**`CRYPT_SALT_METHOD_LEGACY`** ([int](language.types.integer.md))
:   O método de hash não é mais considerado forte o suficiente.

**`CRYPT_SALT_TOO_CHEAP`** ([int](language.types.integer.md))
:   Os parâmetros de custo são considerados muito baixos.

**Algoritmos de senha**

**`PASSWORD_SHA512`** ([string](language.types.string.md))
:   **`PASSWORD_SHA512`** é usado para criar novos hashes de senha
    usando o algoritmo **`CRYPT_PREFIX_SHA512`**.

**`PASSWORD_YESCRYPT`** ([string](language.types.string.md))
:   **`PASSWORD_YESCRYPT`** é usado para criar novos hashes
    de senha usando o algoritmo **`CRYPT_PREFIX_YESCRYPT`**.

**`PASSWORD_SM3CRYPT`** ([string](language.types.string.md))
:   **`PASSWORD_SM3CRYPT`** é usado para criar novos hashes
    de senha usando o algoritmo **`CRYPT_PREFIX_SM3CRYPT`**.

    Disponível a partir da versão 1.2.0 com libcxcrypt >= 4.5.0.

**`PASSWORD_SM3_YESCRYPT`** ([string](language.types.string.md))
:   **`PASSWORD_SM3_YESCRYPT`** é usado para criar novos hashes
    de senha usando o algoritmo **`CRYPT_PREFIX_SM3_YESCRYPT`**.

    Disponível a partir da versão 1.2.0 com libcxcrypt >= 4.5.0.

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
