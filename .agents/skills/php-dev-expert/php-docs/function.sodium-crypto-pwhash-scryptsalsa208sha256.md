# Deriva uma chave de uma senha, usando scrypt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash-scryptsalsa208sha256.php

---

# sodium\_crypto\_pwhash\_scryptsalsa208sha256

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_pwhash\_scryptsalsa208sha256 — Deriva uma chave de uma senha, usando scrypt

### Descrição

function **sodium\_crypto\_pwhash\_scryptsalsa208sha256**(  
    [int](language.types.integer.md) `$length`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$salt`,  
    [int](language.types.integer.md) `$opslimit`,  
    [int](language.types.integer.md) `$memlimit`  
): [string](language.types.string.md)

Esta é a contrapartida scrypt para [sodium\_crypto\_pwhash()](function.sodium-crypto-pwhash.md).

Um motivo comum para usar essa função específica é derivar as sementes para chaves criptográficas a partir de uma senha e um salt,
e então usar essas sementes para gerar as chaves reais necessárias para algum propósito (por exemplo, [sodium\_crypto\_sign\_detached()](function.sodium-crypto-sign-detached.md)).

### Parâmetros

`length`
:   O comprimento do hash da senha a ser gerado, em bytes.

`password`
:   A senha para a qual será gerado um hash.

`salt`
:   Um salt para adicionar à senha antes do hash. O salt deve ser imprevisível, idealmente gerado a partir de uma boa fonte de números aleatórios, como [random\_bytes()](function.random-bytes.md), e ter um comprimento mínimo de **`SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES`** bytes.

`opslimit`
:   Representa uma quantidade máxima de cálculos a serem realizados. Aumentar esse número fará com que a função exija mais ciclos de CPU para calcular uma chave. Existem algumas constantes disponíveis para definir o limite de operações para valores apropriados, dependendo do uso pretendido, em ordem de intensidade: **`SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE`** e **`SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE`**.

`memlimit`
:   A quantidade máxima de RAM que a função utilizará, em bytes. Existem constantes para ajudar a escolher um valor apropriado, em ordem de tamanho: **`SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE`** e **`SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE`**. Normalmente, elas devem ser pareadas com os valores `opslimit` correspondentes.

### Valor Retornado

Uma string de bytes do comprimento desejado.

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
