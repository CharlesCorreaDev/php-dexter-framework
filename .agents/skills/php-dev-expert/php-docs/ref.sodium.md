# Funções da Sodium

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.sodium.php

---

# Funções da Sodium

## Índice

- [sodium\_add](function.sodium-add.md) — Soma números grandes
- [sodium\_base642bin](function.sodium-base642bin.md) — Decodifica uma string codificada em base64 para binário bruto.
- [sodium\_bin2base64](function.sodium-bin2base64.md) — Codifica uma string binária bruta com base64.
- [sodium\_bin2hex](function.sodium-bin2hex.md) — Codifica para hexadecimal
- [sodium\_compare](function.sodium-compare.md) — Compara números grandes
- [sodium\_crypto\_aead\_aegis128l\_decrypt](function.sodium-crypto-aead-aegis128l-decrypt.md) — Verifica e descriptografa uma mensagem com AEGIS-128L
- [sodium\_crypto\_aead\_aegis128l\_encrypt](function.sodium-crypto-aead-aegis128l-encrypt.md) — Criptografa e autentica uma mensagem com AEGIS-128L
- [sodium\_crypto\_aead\_aegis128l\_keygen](function.sodium-crypto-aead-aegis128l-keygen.md) — Gera uma chave AEGIS-128L aleatória
- [sodium\_crypto\_aead\_aegis256\_decrypt](function.sodium-crypto-aead-aegis256-decrypt.md) — Verifica e descriptografa uma mensagem com AEGIS-256
- [sodium\_crypto\_aead\_aegis256\_encrypt](function.sodium-crypto-aead-aegis256-encrypt.md) — Criptografa e autentica uma mensagem com AEGIS-256
- [sodium\_crypto\_aead\_aegis256\_keygen](function.sodium-crypto-aead-aegis256-keygen.md) — Gera uma chave AEGIS-256 aleatória
- [sodium\_crypto\_aead\_aes256gcm\_decrypt](function.sodium-crypto-aead-aes256gcm-decrypt.md) — Verifica e descriptografa uma mensagem com AES-256-GCM
- [sodium\_crypto\_aead\_aes256gcm\_encrypt](function.sodium-crypto-aead-aes256gcm-encrypt.md) — Criptografa e autentica com AES-256-GCM
- [sodium\_crypto\_aead\_aes256gcm\_is\_available](function.sodium-crypto-aead-aes256gcm-is-available.md) — Verifica se o equipamento suporta AES256-GCM
- [sodium\_crypto\_aead\_aes256gcm\_keygen](function.sodium-crypto-aead-aes256gcm-keygen.md) — Gera uma chave AES-256-GCM aleatória
- [sodium\_crypto\_aead\_chacha20poly1305\_decrypt](function.sodium-crypto-aead-chacha20poly1305-decrypt.md) — Verifica e descriptografa com ChaCha20-Poly1305
- [sodium\_crypto\_aead\_chacha20poly1305\_encrypt](function.sodium-crypto-aead-chacha20poly1305-encrypt.md) — Criptografa e autentica com ChaCha20-Poly1305
- [sodium\_crypto\_aead\_chacha20poly1305\_ietf\_decrypt](function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt.md) — Verifica se o texto cifrado inclui uma tag válida
- [sodium\_crypto\_aead\_chacha20poly1305\_ietf\_encrypt](function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt.md) — Criptografa uma mensagem
- [sodium\_crypto\_aead\_chacha20poly1305\_ietf\_keygen](function.sodium-crypto-aead-chacha20poly1305-ietf-keygen.md) — Gera uma chave ChaCha20-Poly1305 (IETF) aleatória
- [sodium\_crypto\_aead\_chacha20poly1305\_keygen](function.sodium-crypto-aead-chacha20poly1305-keygen.md) — Gera uma chave ChaCha20-Poly1305 aleatória
- [sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_decrypt](function.sodium-crypto-aead-xchacha20poly1305-ietf-decrypt.md) — (Preferido) Verifica e descriptografa com XChaCha20-Poly1305
- [sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt](function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.md) — (Preferido) Criptografa e autentica com XChaCha20-Poly1305
- [sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_keygen](function.sodium-crypto-aead-xchacha20poly1305-ietf-keygen.md) — Gera uma chave XChaCha20-Poly1305 aleatória
- [sodium\_crypto\_auth](function.sodium-crypto-auth.md) — Calcula uma tag para a mensagem
- [sodium\_crypto\_auth\_keygen](function.sodium-crypto-auth-keygen.md) — Gera uma chave aleatória para sodium\_crypto\_auth
- [sodium\_crypto\_auth\_verify](function.sodium-crypto-auth-verify.md) — Verifica se a tag é válida para a mensagem
- [sodium\_crypto\_box](function.sodium-crypto-box.md) — Criptografia de chave pública autenticada
- [sodium\_crypto\_box\_keypair](function.sodium-crypto-box-keypair.md) — Gera aleatoriamente uma chave secreta e uma chave pública correspondente
- [sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey](function.sodium-crypto-box-keypair-from-secretkey-and-publickey.md) — Cria uma sequência de pares de chaves unificada a partir de uma chave secreta e uma chave pública
- [sodium\_crypto\_box\_open](function.sodium-crypto-box-open.md) — Descriptografia de chave pública autenticada
- [sodium\_crypto\_box\_publickey](function.sodium-crypto-box-publickey.md) — Extrai a chave pública de um par de chaves crypto\_box
- [sodium\_crypto\_box\_publickey\_from\_secretkey](function.sodium-crypto-box-publickey-from-secretkey.md) — Calcula a chave pública a partir de uma chave secreta
- [sodium\_crypto\_box\_seal](function.sodium-crypto-box-seal.md) — Criptografia de chave pública anônima
- [sodium\_crypto\_box\_seal\_open](function.sodium-crypto-box-seal-open.md) — Descriptografia de chave pública anônima
- [sodium\_crypto\_box\_secretkey](function.sodium-crypto-box-secretkey.md) — Extrai a chave secreta de um par de chaves crypto\_box
- [sodium\_crypto\_box\_seed\_keypair](function.sodium-crypto-box-seed-keypair.md) — Deriva deterministicamente o par de chaves de uma única chave
- [sodium\_crypto\_core\_ristretto255\_add](function.sodium-crypto-core-ristretto255-add.md) — Adiciona um elemento
- [sodium\_crypto\_core\_ristretto255\_from\_hash](function.sodium-crypto-core-ristretto255-from-hash.md) — Mapeia um vetor
- [sodium\_crypto\_core\_ristretto255\_is\_valid\_point](function.sodium-crypto-core-ristretto255-is-valid-point.md) — Determina se um ponto está na curva ristretto255
- [sodium\_crypto\_core\_ristretto255\_random](function.sodium-crypto-core-ristretto255-random.md) — Gera uma chave aleatória
- [sodium\_crypto\_core\_ristretto255\_scalar\_add](function.sodium-crypto-core-ristretto255-scalar-add.md) — Adiciona um valor escalar
- [sodium\_crypto\_core\_ristretto255\_scalar\_complement](function.sodium-crypto-core-ristretto255-scalar-complement.md) — O propósito de sodium\_crypto\_core\_ristretto255\_scalar\_complement
- [sodium\_crypto\_core\_ristretto255\_scalar\_invert](function.sodium-crypto-core-ristretto255-scalar-invert.md) — Inverte um valor escalar
- [sodium\_crypto\_core\_ristretto255\_scalar\_mul](function.sodium-crypto-core-ristretto255-scalar-mul.md) — Multiplica um valor escalar
- [sodium\_crypto\_core\_ristretto255\_scalar\_negate](function.sodium-crypto-core-ristretto255-scalar-negate.md) — Negativa um valor escalar
- [sodium\_crypto\_core\_ristretto255\_scalar\_random](function.sodium-crypto-core-ristretto255-scalar-random.md) — Gera uma chave aleatória
- [sodium\_crypto\_core\_ristretto255\_scalar\_reduce](function.sodium-crypto-core-ristretto255-scalar-reduce.md) — Reduz um valor escalar
- [sodium\_crypto\_core\_ristretto255\_scalar\_sub](function.sodium-crypto-core-ristretto255-scalar-sub.md) — Subtrai um valor escalar
- [sodium\_crypto\_core\_ristretto255\_sub](function.sodium-crypto-core-ristretto255-sub.md) — Subtrai um elemento
- [sodium\_crypto\_generichash](function.sodium-crypto-generichash.md) — Obtém um hash da mensagem
- [sodium\_crypto\_generichash\_final](function.sodium-crypto-generichash-final.md) — Completa o hash
- [sodium\_crypto\_generichash\_init](function.sodium-crypto-generichash-init.md) — Inicializa um hash para fluxo
- [sodium\_crypto\_generichash\_keygen](function.sodium-crypto-generichash-keygen.md) — Gera uma chave generichash aleatória
- [sodium\_crypto\_generichash\_update](function.sodium-crypto-generichash-update.md) — Adiciona mensagem a um hash
- [sodium\_crypto\_kdf\_derive\_from\_key](function.sodium-crypto-kdf-derive-from-key.md) — Deriva uma subchave
- [sodium\_crypto\_kdf\_keygen](function.sodium-crypto-kdf-keygen.md) — Gera uma chave raiz aleatória para a interface KDF
- [sodium\_crypto\_kx\_client\_session\_keys](function.sodium-crypto-kx-client-session-keys.md) — Calcula as chaves de sessão do lado do cliente
- [sodium\_crypto\_kx\_keypair](function.sodium-crypto-kx-keypair.md) — Cria um novo par de chaves sodium
- [sodium\_crypto\_kx\_publickey](function.sodium-crypto-kx-publickey.md) — Extrai a chave pública de um par de chaves crypto\_kx
- [sodium\_crypto\_kx\_secretkey](function.sodium-crypto-kx-secretkey.md) — Extrai a chave secreta de um par de chaves crypto\_kx
- [sodium\_crypto\_kx\_seed\_keypair](function.sodium-crypto-kx-seed-keypair.md) — Descrição
- [sodium\_crypto\_kx\_server\_session\_keys](function.sodium-crypto-kx-server-session-keys.md) — Calcula as chaves de sessão do lado do servidor
- [sodium\_crypto\_pwhash](function.sodium-crypto-pwhash.md) — Deriva uma chave de uma senha, usando Argon2
- [sodium\_crypto\_pwhash\_scryptsalsa208sha256](function.sodium-crypto-pwhash-scryptsalsa208sha256.md) — Deriva uma chave de uma senha, usando scrypt
- [sodium\_crypto\_pwhash\_scryptsalsa208sha256\_str](function.sodium-crypto-pwhash-scryptsalsa208sha256-str.md) — Obtém um hash codificado em ASCII
- [sodium\_crypto\_pwhash\_scryptsalsa208sha256\_str\_verify](function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.md) — Verifica se a senha é uma string de verificação de senha válida
- [sodium\_crypto\_pwhash\_str](function.sodium-crypto-pwhash-str.md) — Obtém um hash codificado em ASCII
- [sodium\_crypto\_pwhash\_str\_needs\_rehash](function.sodium-crypto-pwhash-str-needs-rehash.md) — Determina se uma senha deve ou não ter o hash refeito
- [sodium\_crypto\_pwhash\_str\_verify](function.sodium-crypto-pwhash-str-verify.md) — Verifica se uma senha corresponde a um hash
- [sodium\_crypto\_scalarmult](function.sodium-crypto-scalarmult.md) — Calcula um segredo compartilhado, dada a chave secreta de um usuário e a chave pública de outro usuário.
- [sodium\_crypto\_scalarmult\_base](function.sodium-crypto-scalarmult-base.md) — Sinônimo de sodium\_crypto\_box\_publickey\_from\_secretkey
- [sodium\_crypto\_scalarmult\_ristretto255](function.sodium-crypto-scalarmult-ristretto255.md) — Calcula um segredo compartilhado
- [sodium\_crypto\_scalarmult\_ristretto255\_base](function.sodium-crypto-scalarmult-ristretto255-base.md) — Calcula a chave pública a partir de uma chave secreta
- [sodium\_crypto\_secretbox](function.sodium-crypto-secretbox.md) — Criptografia de chave compartilhada autenticada
- [sodium\_crypto\_secretbox\_keygen](function.sodium-crypto-secretbox-keygen.md) — Gera chave aleatória para sodium\_crypto\_secretbox
- [sodium\_crypto\_secretbox\_open](function.sodium-crypto-secretbox-open.md) — Descriptografia de chave compartilhada autenticada
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull](function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.md) — Inicializa um contexto secretstream para descriptografia
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_push](function.sodium-crypto-secretstream-xchacha20poly1305-init-push.md) — Inicializa um contexto secretstream para criptografia
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_keygen](function.sodium-crypto-secretstream-xchacha20poly1305-keygen.md) — Gera uma chave secretstream aleatória.
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_pull](function.sodium-crypto-secretstream-xchacha20poly1305-pull.md) — Descriptografa um pedaço de dados de um fluxo criptografado
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_push](function.sodium-crypto-secretstream-xchacha20poly1305-push.md) — Criptografa um bloco de dados para que ele possa ser descriptografado com segurança em uma API de fluxo
- [sodium\_crypto\_secretstream\_xchacha20poly1305\_rekey](function.sodium-crypto-secretstream-xchacha20poly1305-rekey.md) — Rotaciona explicitamente a chave no estado secretstream
- [sodium\_crypto\_shorthash](function.sodium-crypto-shorthash.md) — Calcula um hash curto de uma mensagem e chave
- [sodium\_crypto\_shorthash\_keygen](function.sodium-crypto-shorthash-keygen.md) — Obtém bytes aleatórios para uma chave
- [sodium\_crypto\_sign](function.sodium-crypto-sign.md) — Assina uma mensagem
- [sodium\_crypto\_sign\_detached](function.sodium-crypto-sign-detached.md) — Assina a mensagem
- [sodium\_crypto\_sign\_ed25519\_pk\_to\_curve25519](function.sodium-crypto-sign-ed25519-pk-to-curve25519.md) — Converte uma chave pública Ed25519 em uma chave pública Curve25519
- [sodium\_crypto\_sign\_ed25519\_sk\_to\_curve25519](function.sodium-crypto-sign-ed25519-sk-to-curve25519.md) — Converte uma chave secreta Ed25519 em uma chave secreta Curve25519
- [sodium\_crypto\_sign\_keypair](function.sodium-crypto-sign-keypair.md) — Gera aleatoriamente uma chave secreta e uma chave pública correspondente
- [sodium\_crypto\_sign\_keypair\_from\_secretkey\_and\_publickey](function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.md) — Une uma chave secreta e uma chave pública
- [sodium\_crypto\_sign\_open](function.sodium-crypto-sign-open.md) — Verifica se a mensagem assinada tem uma assinatura válida
- [sodium\_crypto\_sign\_publickey](function.sodium-crypto-sign-publickey.md) — Extrai a chave pública Ed25519 de um par de chaves
- [sodium\_crypto\_sign\_publickey\_from\_secretkey](function.sodium-crypto-sign-publickey-from-secretkey.md) — Extrai a chave pública Ed25519 da chave secreta
- [sodium\_crypto\_sign\_secretkey](function.sodium-crypto-sign-secretkey.md) — Extrai a chave secreta Ed25519 de um par de chaves
- [sodium\_crypto\_sign\_seed\_keypair](function.sodium-crypto-sign-seed-keypair.md) — Deriva deterministicamente o par de chaves de uma única chave
- [sodium\_crypto\_sign\_verify\_detached](function.sodium-crypto-sign-verify-detached.md) — Verifica a assinatura da mensagem
- [sodium\_crypto\_stream](function.sodium-crypto-stream.md) — Gera uma sequência determinística de bytes a partir de uma semente
- [sodium\_crypto\_stream\_keygen](function.sodium-crypto-stream-keygen.md) — Gera uma chave sodium\_crypto\_stream aleatória.
- [sodium\_crypto\_stream\_xchacha20](function.sodium-crypto-stream-xchacha20.md) — Expande a chave e o nonce em um fluxo de chaves de bytes pseudoaleatórios
- [sodium\_crypto\_stream\_xchacha20\_keygen](function.sodium-crypto-stream-xchacha20-keygen.md) — Retorna uma chave segura aleatória
- [sodium\_crypto\_stream\_xchacha20\_xor](function.sodium-crypto-stream-xchacha20-xor.md) — Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)
- [sodium\_crypto\_stream\_xchacha20\_xor\_ic](function.sodium-crypto-stream-xchacha20-xor-ic.md) — Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)
- [sodium\_crypto\_stream\_xor](function.sodium-crypto-stream-xor.md) — Criptografa uma mensagem sem autenticação
- [sodium\_hex2bin](function.sodium-hex2bin.md) — Decodifica uma string binária codificada em hexadecimal
- [sodium\_increment](function.sodium-increment.md) — Incrementa um número grande
- [sodium\_memcmp](function.sodium-memcmp.md) — Testa para igualdade em tempo constante
- [sodium\_memzero](function.sodium-memzero.md) — Sobrescreve uma string com caracteres NUL
- [sodium\_pad](function.sodium-pad.md) — Adiciona dados de preenchimento
- [sodium\_unpad](function.sodium-unpad.md) — Remove dados de preenchimento

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
